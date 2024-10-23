<?php

namespace Database\Seeders\Content;

use Database\Seeders\Traits\DisableForeignKeys;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class ArticleTagSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->disableForeignKeys();

        if (app()->environment(['production'])) {
            $this->truncate('tags');
            Tag::create(['name' => 'Tips',          'description' => 'Tips']);
            Tag::create(['name' => 'Tricks',        'description' => 'Tricks']);
            Tag::create(['name' => 'Tutorial',      'description' => 'Tutorial']);
            Tag::create(['name' => 'Motivation',    'description' => 'Motivation']);
            Tag::create(['name' => 'Opinion',       'description' => 'Opinion']);
            Tag::create(['name' => 'Interview',     'description' => 'Interview']);
            Tag::create(['name' => 'Success',       'description' => 'Success']);
            Tag::create(['name' => 'Advice',        'description' => 'Advice']);
            Tag::create(['name' => 'Budget',        'description' => 'Budget']);
            Tag::create(['name' => 'Fitness',       'description' => 'Fitness']);
            Tag::create(['name' => 'Health',        'description' => 'Health']);
            Tag::create(['name' => 'Lifestyle',     'description' => 'Lifestyle']);
            Tag::create(['name' => 'Parenting',     'description' => 'Parenting']);
            Tag::create(['name' => 'Travel',        'description' => 'Travel']);
            Tag::create(['name' => 'Recipes',       'description' => 'Recipes']);
            Tag::create(['name' => 'Family',        'description' => 'Family']);
            Tag::create(['name' => 'Books',         'description' => 'Books']);
            Tag::create(['name' => 'Science',       'description' => 'Science']);
            Tag::create(['name' => 'Technology',    'description' => 'Technology']);
            Tag::create(['name' => 'Finance',       'description' => 'Finance']);
            Tag::create(['name' => 'Marketing',     'description' => 'Marketing']);
            Tag::create(['name' => 'Career',        'description' => 'Career']);
            Tag::create(['name' => 'Design',        'description' => 'Design']);
            Tag::create(['name' => 'Learning',      'description' => 'Learning']);
        }

        if (app()->environment(['staging', 'testing', 'development', 'local'])) {
            $this->truncate('tags');
            Tag::create(['name' => 'Tips',          'description' => 'Tips']);
            Tag::create(['name' => 'Tricks',        'description' => 'Tricks']);
            Tag::create(['name' => 'Tutorial',      'description' => 'Tutorial']);
            Tag::create(['name' => 'Motivation',    'description' => 'Motivation']);
            Tag::create(['name' => 'Opinion',       'description' => 'Opinion']);
            Tag::create(['name' => 'Interview',     'description' => 'Interview']);
            Tag::create(['name' => 'Success',       'description' => 'Success']);
            Tag::create(['name' => 'Advice',        'description' => 'Advice']);
            Tag::create(['name' => 'Budget',        'description' => 'Budget']);
            Tag::create(['name' => 'Fitness',       'description' => 'Fitness']);
            Tag::create(['name' => 'Health',        'description' => 'Health']);
            Tag::create(['name' => 'Lifestyle',     'description' => 'Lifestyle']);
            Tag::create(['name' => 'Parenting',     'description' => 'Parenting']);
            Tag::create(['name' => 'Travel',        'description' => 'Travel']);
            Tag::create(['name' => 'Recipes',       'description' => 'Recipes']);
            Tag::create(['name' => 'Family',        'description' => 'Family']);
            Tag::create(['name' => 'Books',         'description' => 'Books']);
            Tag::create(['name' => 'Science',       'description' => 'Science']);
            Tag::create(['name' => 'Technology',    'description' => 'Technology']);
            Tag::create(['name' => 'Finance',       'description' => 'Finance']);
            Tag::create(['name' => 'Marketing',     'description' => 'Marketing']);
            Tag::create(['name' => 'Career',        'description' => 'Career']);
            Tag::create(['name' => 'Design',        'description' => 'Design']);
            Tag::create(['name' => 'Learning',      'description' => 'Learning']);
        }

        $this->enableForeignKeys();
    }
}
