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

        $this->truncate('tags');

        if (app()->environment(['production'])) {
            $tags = [
                ['name' => 'How-To',        'description' => 'How-To'],
                ['name' => 'Tips',          'description' => 'Tips'],
                ['name' => 'Tricks',        'description' => 'Tricks'],
                ['name' => 'Tutorial',      'description' => 'Tutorial'],
                ['name' => 'Motivation',    'description' => 'Motivation'],
                ['name' => 'Opinion',       'description' => 'Opinion'],
                ['name' => 'Interview',     'description' => 'Interview'],
                ['name' => 'Success',       'description' => 'Success'],
                ['name' => 'Advice',        'description' => 'Advice'],
                ['name' => 'Budget',        'description' => 'Budget'],
                ['name' => 'Fitness',       'description' => 'Fitness'],
                ['name' => 'Health',        'description' => 'Health'],
                ['name' => 'Lifestyle',     'description' => 'Lifestyle'],
                ['name' => 'Parenting',     'description' => 'Parenting'],
                ['name' => 'Travel',        'description' => 'Travel'],
                ['name' => 'Recipes',       'description' => 'Recipes'],
                ['name' => 'Family',        'description' => 'Family'],
                ['name' => 'Books',         'description' => 'Books'],
                ['name' => 'Science',       'description' => 'Science'],
                ['name' => 'Technology',    'description' => 'Technology'],
                ['name' => 'Finance',       'description' => 'Finance'],
                ['name' => 'Marketing',     'description' => 'Marketing'],
                ['name' => 'Career',        'description' => 'Career'],
                ['name' => 'Design',        'description' => 'Design'],
                ['name' => 'Learning',      'description' => 'Learning'],
            ];
            Tag::create($tags);
        }

        if (app()->environment(['staging', 'testing', 'development', 'local'])) {
            $tags = [
                ['name' => 'How-To',        'description' => 'How-To'],
                ['name' => 'Tips',          'description' => 'Tips'],
                ['name' => 'Tricks',        'description' => 'Tricks'],
                ['name' => 'Tutorial',      'description' => 'Tutorial'],
                ['name' => 'Motivation',    'description' => 'Motivation'],
                ['name' => 'Opinion',       'description' => 'Opinion'],
                ['name' => 'Interview',     'description' => 'Interview'],
                ['name' => 'Success',       'description' => 'Success'],
                ['name' => 'Advice',        'description' => 'Advice'],
                ['name' => 'Budget',        'description' => 'Budget'],
                ['name' => 'Fitness',       'description' => 'Fitness'],
                ['name' => 'Health',        'description' => 'Health'],
                ['name' => 'Lifestyle',     'description' => 'Lifestyle'],
                ['name' => 'Parenting',     'description' => 'Parenting'],
                ['name' => 'Travel',        'description' => 'Travel'],
                ['name' => 'Recipes',       'description' => 'Recipes'],
                ['name' => 'Family',        'description' => 'Family'],
                ['name' => 'Books',         'description' => 'Books'],
                ['name' => 'Science',       'description' => 'Science'],
                ['name' => 'Technology',    'description' => 'Technology'],
                ['name' => 'Finance',       'description' => 'Finance'],
                ['name' => 'Marketing',     'description' => 'Marketing'],
                ['name' => 'Career',        'description' => 'Career'],
                ['name' => 'Design',        'description' => 'Design'],
                ['name' => 'Learning',      'description' => 'Learning'],
            ];
            Tag::create($tags);
        }

        $this->enableForeignKeys();
    }
}
