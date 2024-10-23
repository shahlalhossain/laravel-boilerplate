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

        if (app()->environment(['production'])) {
            $this->truncate('categories');
            Category::create(['name' => 'Technology & Gadgets',              'description' => 'Technology & Gadgets']);
            Category::create(['name' => 'Business & Finance',                'description' => 'Business & Finance']);
            Category::create(['name' => 'Health & Wellness',                 'description' => 'Health & Wellness']);
            Category::create(['name' => 'Lifestyle & Living',                'description' => 'Lifestyle & Living']);
            Category::create(['name' => 'Food & Recipes',                    'description' => 'Food & Recipes']);
            Category::create(['name' => 'Travel & Tourism',                  'description' => 'Travel & Tourism']);
            Category::create(['name' => 'Education & Learning',              'description' => 'Education & Learning']);
            Category::create(['name' => 'Digital Marketing & SEO',           'description' => 'Digital Marketing & SEO']);
            Category::create(['name' => 'Self-Development',                  'description' => 'Self-Development']);
            Category::create(['name' => 'Productivity',                      'description' => 'Productivity']);
            Category::create(['name' => 'Science & Innovation',              'description' => 'Science & Innovation']);
            Category::create(['name' => 'Books & Literature',                'description' => 'Books & Literature']);
            Category::create(['name' => 'Art & Design',                      'description' => 'Art & Design']);
            Category::create(['name' => 'Motivation & Inspiration',          'description' => 'Motivation & Inspiration']);
            Category::create(['name' => 'History & Culture',                 'description' => 'History & Culture']);
            Category::create(['name' => 'Career & Job Advice',               'description' => 'Career & Job Advice']);
            Category::create(['name' => 'Language Learning',                 'description' => 'Language Learning']);
            Category::create(['name' => 'Entrepreneurship',                  'description' => 'Entrepreneurship']);
            Category::create(['name' => 'Technology Trends & AI',            'description' => 'Technology Trends & AI']);
            Category::create(['name' => 'Apps & Software',                   'description' => 'Apps & Software']);
        }

        if (app()->environment(['staging', 'testing', 'development', 'local'])) {
            $this->truncate('categories');
            Category::create(['name' => 'Technology & Gadgets',              'description' => 'Technology & Gadgets']);
            Category::create(['name' => 'Business & Finance',                'description' => 'Business & Finance']);
            Category::create(['name' => 'Health & Wellness',                 'description' => 'Health & Wellness']);
            Category::create(['name' => 'Lifestyle & Living',                'description' => 'Lifestyle & Living']);
            Category::create(['name' => 'Food & Recipes',                    'description' => 'Food & Recipes']);
            Category::create(['name' => 'Travel & Tourism',                  'description' => 'Travel & Tourism']);
            Category::create(['name' => 'Education & Learning',              'description' => 'Education & Learning']);
            Category::create(['name' => 'Digital Marketing & SEO',           'description' => 'Digital Marketing & SEO']);
            Category::create(['name' => 'Self-Development',                  'description' => 'Self-Development']);
            Category::create(['name' => 'Productivity',                      'description' => 'Productivity']);
            Category::create(['name' => 'Science & Innovation',              'description' => 'Science & Innovation']);
            Category::create(['name' => 'Books & Literature',                'description' => 'Books & Literature']);
            Category::create(['name' => 'Art & Design',                      'description' => 'Art & Design']);
            Category::create(['name' => 'Motivation & Inspiration',          'description' => 'Motivation & Inspiration']);
            Category::create(['name' => 'History & Culture',                 'description' => 'History & Culture']);
            Category::create(['name' => 'Career & Job Advice',               'description' => 'Career & Job Advice']);
            Category::create(['name' => 'Language Learning',                 'description' => 'Language Learning']);
            Category::create(['name' => 'Entrepreneurship',                  'description' => 'Entrepreneurship']);
            Category::create(['name' => 'Technology Trends & AI',            'description' => 'Technology Trends & AI']);
            Category::create(['name' => 'Apps & Software',                   'description' => 'Apps & Software']);
        }

        $this->enableForeignKeys();
    }
}
