<?php

namespace Database\Seeders\Content;

use App\Models\Category;
use Database\Seeders\Traits\DisableForeignKeys;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleCategorySeeder extends Seeder
{use DisableForeignKeys, TruncateTable;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->disableForeignKeys();

        $this->truncate('tags');

        if (app()->environment(['production'])) {
            $categories = [
                ['name' => 'Technology & Gadgets',              'description' => 'Technology & Gadgets'],
                ['name' => 'Business & Finance',                'description' => 'Business & Finance'],
                ['name' => 'Health & Wellness',                 'description' => 'Health & Wellness'],
                ['name' => 'Lifestyle & Living',                'description' => 'Lifestyle & Living'],
                ['name' => 'Food & Recipes',                    'description' => 'Food & Recipes'],
                ['name' => 'Travel & Tourism',                  'description' => 'Travel & Tourism'],
                ['name' => 'Education & Learning',              'description' => 'Education & Learning'],
                ['name' => 'Digital Marketing & SEO',           'description' => 'Digital Marketing & SEO'],
                ['name' => 'Self-Development & Productivity',   'description' => 'Self-Development & Productivity'],
                ['name' => 'Science & Innovation',              'description' => 'Science & Innovation'],
                ['name' => 'Books & Literature',                'description' => 'Books & Literature'],
                ['name' => 'Art & Design',                      'description' => 'Art & Design'],
                ['name' => 'Motivation & Inspiration',          'description' => 'Motivation & Inspiration'],
                ['name' => 'History & Culture',                 'description' => 'History & Culture'],
                ['name' => 'Career & Job Advice',               'description' => 'Career & Job Advice'],
                ['name' => 'Language Learning',                 'description' => 'Language Learning'],
                ['name' => 'Startups & Entrepreneurship',       'description' => 'Startups & Entrepreneurship'],
                ['name' => 'Technology Trends & AI',            'description' => 'Technology Trends & AI'],
                ['name' => 'Apps & Software',                   'description' => 'Apps & Software'],
            ];
            Category::create($categories);
        }

        if (app()->environment(['staging', 'testing', 'development', 'local'])) {
            $categories = [
                ['name' => 'Technology & Gadgets',              'description' => 'Technology & Gadgets'],
                ['name' => 'Business & Finance',                'description' => 'Business & Finance'],
                ['name' => 'Health & Wellness',                 'description' => 'Health & Wellness'],
                ['name' => 'Lifestyle & Living',                'description' => 'Lifestyle & Living'],
                ['name' => 'Food & Recipes',                    'description' => 'Food & Recipes'],
                ['name' => 'Travel & Tourism',                  'description' => 'Travel & Tourism'],
                ['name' => 'Education & Learning',              'description' => 'Education & Learning'],
                ['name' => 'Digital Marketing & SEO',           'description' => 'Digital Marketing & SEO'],
                ['name' => 'Self-Development & Productivity',   'description' => 'Self-Development & Productivity'],
                ['name' => 'Science & Innovation',              'description' => 'Science & Innovation'],
                ['name' => 'Books & Literature',                'description' => 'Books & Literature'],
                ['name' => 'Art & Design',                      'description' => 'Art & Design'],
                ['name' => 'Motivation & Inspiration',          'description' => 'Motivation & Inspiration'],
                ['name' => 'History & Culture',                 'description' => 'History & Culture'],
                ['name' => 'Career & Job Advice',               'description' => 'Career & Job Advice'],
                ['name' => 'Language Learning',                 'description' => 'Language Learning'],
                ['name' => 'Startups & Entrepreneurship',       'description' => 'Startups & Entrepreneurship'],
                ['name' => 'Technology Trends & AI',            'description' => 'Technology Trends & AI'],
                ['name' => 'Apps & Software',                   'description' => 'Apps & Software'],
            ];
            Category::create($categories);
        }

        $this->enableForeignKeys();
    }
}
