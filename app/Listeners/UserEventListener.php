<?php

namespace App\Listeners;

use App\Events\User\UserCreated;
use App\Events\User\UserDeleted;
use App\Events\User\UserDestroyed;
use App\Events\User\UserLoggedIn;
use App\Events\User\UserLoggedOut;
use App\Events\User\UserRegistered;
use App\Events\User\UserRestored;
use App\Events\User\UserStatusChanged;
use App\Events\User\UserUpdated;
use App\Models\LoginHistory;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Jenssegers\Agent\Agent;

class UserEventListener
{
    /**
     * Handle the event.
     */
    public function handle(UserRegistered | UserCreated | UserUpdated | UserStatusChanged | UserDestroyed | UserRestored | UserDeleted | UserLoggedIn | UserLoggedOut $event): void
    {
        // Check the event type and process accordingly
        if ($event instanceof UserRegistered) {
            // Handle UserRegistered event
            $this->userRegistered($event);
        } elseif ($event instanceof UserCreated) {
            // Handle UserCreated event
            $this->userCreated($event);
        } elseif ($event instanceof UserUpdated) {
            // Handle UserUpdated event
            $this->userUpdated($event);
        } elseif ($event instanceof UserStatusChanged) {
            // Handle UserStatusChanged event
            $this->userStatusChanged($event);
        } elseif ($event instanceof UserDestroyed) {
            // Handle UserDestroyed event
            $this->userDestroyed($event);
        } elseif ($event instanceof UserRestored) {
            // Handle UserRestored event
            $this->userRestored($event);
        } elseif ($event instanceof UserDeleted) {
            // Handle UserDeleted event
            $this->userDeleted($event);
        } elseif ($event instanceof UserLoggedIn) {
            // Handle UserLoggedIn event
            $this->userLoggedIn($event);
        } elseif ($event instanceof UserLoggedOut) {
            // Handle UserLoggedOut event
            $this->userLoggedOut($event);
        }
    }

    protected function userRegistered($event)
    {
        //
    }

    protected function userCreated($event)
    {
        //
    }

    protected function userUpdated($event)
    {
        //
    }

    protected function userStatusChanged($event)
    {
        //
    }

    protected function userDestroyed($event)
    {
        //
    }

    protected function userRestored($event)
    {
        //
    }

    protected function userDeleted($event)
    {
        //
    }

    protected function userLoggedIn($event) : void
    {
        $agent      = new Agent();
        $platform   = $agent->platform();
        $browser    = $agent->browser();
        $version    = $agent->version($browser);
        $version    = strtok($version, '.');
        $userID     = $event->user->id;

        // Create new Login History
        $userLoginHistory = new LoginHistory();
        $userLoginHistory->user_id = $userID;
        $userLoginHistory->last_login_os = $platform;
        $userLoginHistory->last_login_agent = $browser.' v/'.$version;
        $userLoginHistory->last_login_at = now();
        $userLoginHistory->last_login_ip = request()->getClientIp();
        $userLoginHistory->save();
    }

    protected function userLoggedOut()
    {
        $userID = auth()->user()->id;
        $userLoginHistory = LoginHistory::where('user_id', $userID)
            ->where('logged_out', 0)
            ->where('logout_at', null)
            ->orderBy('id', 'desc')
            ->first();

        if ($userLoginHistory) {
            $userLoginHistory->logged_out = 1;
            $userLoginHistory->logout_at = now();
            $userLoginHistory->save();
        }
    }
}
