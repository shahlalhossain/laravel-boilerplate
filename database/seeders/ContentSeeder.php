<?php

namespace Database\Seeders;

use Database\Seeders\Content\ArticleCategorySeeder;
use Database\Seeders\Content\ArticleCommentsSeeder;
use Database\Seeders\Content\ArticleSeeder;
use Database\Seeders\Content\ArticleTagSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\Traits\DisableForeignKeys;

class ContentSeeder extends Seeder
{
    use DisableForeignKeys;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->disableForeignKeys();

        $this->call(ArticleTagSeeder::class);
        $this->call(ArticleCategorySeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(ArticleCommentsSeeder::class);

        $this->enableForeignKeys();
    }
}
