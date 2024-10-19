<?php

namespace Database\Seeders\Auth;

use App\Models\User;
use Database\Seeders\Traits\DisableForeignKeys;
use Illuminate\Database\Seeder;

/**
 * Class UserTableSeeder.
 */
class UserSeeder extends Seeder
{
    use DisableForeignKeys;

    /**
     * Run the database seed.
     */
    public function run() : void
    {
        $this->disableForeignKeys();

        // Add the master administrator, user id of 1
        if (app()->environment(['production'])) {
            User::create([
                'type'                  => User::TYPE_ADMIN,
                'name'                  => 'Super Admin',
                'username'              => '2401000001',
                'mobile'                => '+8801234567890',
                'is_mobile_verified'    => true,
                'mobile_verified_at'    => now(),
                'email'                 => 'admin@shtechbd.com',
                'is_email_verified'     => true,
                'email_verified_at'     => now(),
                'password'              => 'SHTech@321',
                'active'                => true,
                'registration_platform' => 'System',
                'gender'                => 'N/A',
                'religion'              => 'N/A',
                'blood_group'           => 'N/A',
                'date_of_birth'         => 'N/A',
                'occupation'            => 'N/A',
                'marital_status'        => 'N/A',
                'city_name'             => 'N/A',
                'address'               => 'N/A',
                'timezone'              => 'Asia/Dhaka',
                'image_path'            => null,
                'api_token'             => null,
                'created_by'            => 'System',
                'updated_by'            => 'System',
                'created_at'            => now(),
                'updated_at'            => now(),
                'deleted_by'            => null,
                'deleted_at'            => null
            ]);
            // 5 Admin Users
            // 10 Authors
            // 50 Users
        }

        if (app()->environment(['staging', 'testing', 'development', 'local'])) {
            User::create([
                'type'                  => User::TYPE_ADMIN,
                'name'                  => 'Super Admin',
                'username'              => '2401000001',
                'mobile'                => '+8801234567890',
                'is_mobile_verified'    => true,
                'mobile_verified_at'    => now(),
                'email'                 => 'admin@shtechbd.com',
                'is_email_verified'     => true,
                'email_verified_at'     => now(),
                'password'              => 'SHTech@321',
                'active'                => true,
                'registration_platform' => 'System',
                'gender'                => 'N/A',
                'religion'              => 'N/A',
                'blood_group'           => 'N/A',
                'date_of_birth'         => 'N/A',
                'occupation'            => 'N/A',
                'marital_status'        => 'N/A',
                'city_name'             => 'N/A',
                'address'               => 'N/A',
                'timezone'              => 'Asia/Dhaka',
                'image_path'            => null,
                'api_token'             => null,
                'created_by'            => 'System',
                'updated_by'            => 'System',
                'created_at'            => now(),
                'updated_at'            => now(),
                'deleted_by'            => null,
                'deleted_at'            => null
            ]);
            // 5 Admin Users
            // 10 Authors
            // 50 Users
        }

        $this->enableForeignKeys();
    }
}
