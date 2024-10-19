<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use TruncateTable;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Model::unguard();

        $this->truncateMultiple(['activity_logs', 'failed_jobs',]);

        $this->call(AuthSeeder::class);
        $this->call(ContentSeeder::class);

        Model::reguard();
    }
}
