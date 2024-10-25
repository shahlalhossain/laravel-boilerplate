<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

if (! function_exists('appName')) {
    /**
     * Helper to grab the application name.
     *
     * @return mixed
     */
    function appName()
    {
        return config('app.name', 'Laravel-Boilerplate');
    }
}

if (! function_exists('carbon')) {
    /**
     * Create a new Carbon instance from a time.
     *
     * @param $time
     * @return Carbon
     *
     * @throws Exception
     */
    function carbon($time)
    {
        return new Carbon($time);
    }
}

if (! function_exists('afterLoginRoute')) {
    /**
     * Return the route to the "home" page depending on authentication/authorization status.
     *
     * @return string
     */
    function afterLoginRoute()
    {
        if (auth()->check()) {
            if (auth()->user()->isAdmin()) { return 'admin.dashboard'; }
            if (auth()->user()->isAuthor()) { return 'author.dashboard'; }
            if (auth()->user()->isUser()) { return 'dashboard'; }
        }

        return 'home';
    }
}

if (! function_exists('generateUsername')) {
    /**
     * @return string
     */
    function generateUsername(): string
    {
        $prefix = date("ymd");
        return DB::select("SELECT CONCAT('$prefix', LPAD(IFNULL(MAX(SUBSTR(table2.username, -6, 6))+1, 1), 6, '0')) AS username FROM (SELECT * FROM users ) AS table2 WHERE table2.username LIKE '$prefix%'")[0]->username;
    }
}
