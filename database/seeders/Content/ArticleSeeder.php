<?php

namespace Database\Seeders\Content;

use App\Models\Article;
use Database\Seeders\Traits\DisableForeignKeys;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->disableForeignKeys();

        $this->truncate('articles');

        if (app()->environment(['production'])) {
            // 100 Articles
            $articles = [
                ['author_id' => 1, 'status' => 'Published', 'title' => 'How to Avoid Distraction and Stay Focused During Video Calls?', 'content' => 'How to Avoid Distraction and Stay Focused During Video Calls?'],
                ['author_id' => 1, 'status' => 'Published', 'title' => 'Why Craigslist Tampa Is One of The Most Interesting Places On the Web?', 'content' => 'Why Craigslist Tampa Is One of The Most Interesting Places On the Web?'],
                ['author_id' => 1, 'status' => 'Published', 'title' => '6 Easy Steps To Create Your Own Cute Merch For Instagram', 'content' => '6 Easy Steps To Create Your Own Cute Merch For Instagram'],
                ['author_id' => 1, 'status' => 'Published', 'title' => '10 Life-Changing Hacks Every Working Mom Should Know', 'content' => '10 Life-Changing Hacks Every Working Mom Should Know'],
                ['author_id' => 1, 'status' => 'Published', 'title' => '5 Great Startup Tips for Female Founders', 'content' => '5 Great Startup Tips for Female Founders'],
                ['author_id' => 1, 'status' => 'Published', 'title' => 'The Best Homemade Masks for Face (keep the Pimples Away)', 'content' => 'The Best Homemade Masks for Face (keep the Pimples Away)'],
                ['author_id' => 1, 'status' => 'Published', 'title' => '17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut', 'content' => '17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut'],
                ['author_id' => 1, 'status' => 'Published', 'title' => '13 Amazing Poems from Shel Silverstein with Valuable Life Lessons', 'content' => ''],
                ['author_id' => 1, 'status' => 'Published', 'title' => '9 Half-up/half-down Hairstyles for Long and Medium Hair', 'content' => '9 Half-up/half-down Hairstyles for Long and Medium Hair'],
                ['author_id' => 1, 'status' => 'Published', 'title' => 'Life Insurance And Pregnancy: A Working Mom’s Guide', 'content' => 'Life Insurance And Pregnancy: A Working Mom’s Guide'],

                ['author_id' => 2, 'status' => 'Published', 'title' => 'How to Create Activity Logs in Laravel 11', 'content' => 'How to Create Activity Logs in Laravel 11'],
                ['author_id' => 2, 'status' => 'Published', 'title' => 'Mastering the Service-Repository Pattern in Laravel', 'content' => 'Mastering the Service-Repository Pattern in Laravel'],
                ['author_id' => 2, 'status' => 'Published', 'title' => 'Nothing New Under the Sun: Anti-Vaccine Sentiment Is as Old as Vaccination', 'content' => 'Nothing New Under the Sun: Anti-Vaccine Sentiment Is as Old as Vaccination'],
                ['author_id' => 2, 'status' => 'Published', 'title' => '6 PHP Knowledge You Didn’t Know You Needed', 'content' => '6 PHP Knowledge You Didn’t Know You Needed'],
                ['author_id' => 2, 'status' => 'Published', 'title' => 'You’re Not a Laravel Developer If You Don’t Know These 10 Things', 'content' => 'You’re Not a Laravel Developer If You Don’t Know These 10 Things'],
                ['author_id' => 2, 'status' => 'Published', 'title' => 'Top 10 PHP v8.3 Exciting Features You Didn’t Know You Needed', 'content' => 'Top 10 PHP v8.3 Exciting Features You Didn’t Know You Needed'],
                ['author_id' => 2, 'status' => 'Published', 'title' => 'How to Build Your First Laravel 11 Project: A Complete Guide', 'content' => 'How to Build Your First Laravel 11 Project: A Complete Guide'],
                ['author_id' => 2, 'status' => 'Published', 'title' => 'My 2024 MacBook Setup for Software Development', 'content' => 'My 2024 MacBook Setup for Software Development'],
                ['author_id' => 2, 'status' => 'Published', 'title' => 'This new JavaScript operator is an absolute game changer', 'content' => 'This new JavaScript operator is an absolute game changer'],
                ['author_id' => 2, 'status' => 'Published', 'title' => '9 Rules to Optimize PHP for High Traffic Websites', 'content' => '9 Rules to Optimize PHP for High Traffic Websites'],

                ['author_id' => 3, 'status' => 'Published', 'title' => 'Why Humility Is the Key to Well-Being', 'content' => 'Why Humility Is the Key to Well-Being'],
                ['author_id' => 3, 'status' => 'Published', 'title' => 'The Real Differences Between Introverts and Extroverts', 'content' => 'The Real Differences Between Introverts and Extroverts'],
                ['author_id' => 3, 'status' => 'Published', 'title' => 'Big Tech Has Given Itself an AI Deadline', 'content' => 'Big Tech Has Given Itself an AI Deadline'],
                ['author_id' => 3, 'status' => 'Published', 'title' => 'The Age of AI Child Abuse Is Here', 'content' => 'The Age of AI Child Abuse Is Here'],
                ['author_id' => 3, 'status' => 'Published', 'title' => 'The Domestic Thriller That Shatters Chilean Myths', 'content' => 'The Domestic Thriller That Shatters Chilean Myths'],
                ['author_id' => 3, 'status' => 'Published', 'title' => 'The Weak Science Behind Psychedelics', 'content' => 'The Weak Science Behind Psychedelics'],
                ['author_id' => 3, 'status' => 'Published', 'title' => 'The AI Boom Has an Expiration Date', 'content' => 'The AI Boom Has an Expiration Date'],
                ['author_id' => 3, 'status' => 'Published', 'title' => 'The Branch of Philosophy All Parents Should Know', 'content' => 'The Branch of Philosophy All Parents Should Know'],
                ['author_id' => 3, 'status' => 'Published', 'title' => 'The Danger Is Greater Than in 2020. Be Prepared.', 'content' => 'The Danger Is Greater Than in 2020. Be Prepared.'],
                ['author_id' => 3, 'status' => 'Published', 'title' => 'The Science Behind Climate Change and Its Global Impact', 'content' => 'The Science Behind Climate Change and Its Global Impact'],

                ['author_id' => 4, 'status' => 'Published', 'title' => 'The Fascinating World of Quantum Physics: A Beginner’s Guide', 'content' => 'The Fascinating World of Quantum Physics: A Beginner’s Guide'],
                ['author_id' => 4, 'status' => 'Published', 'title' => 'Exploring the Mysteries of Dark Matter and Dark Energy', 'content' => 'Exploring the Mysteries of Dark Matter and Dark Energy'],
                ['author_id' => 4, 'status' => 'Published', 'title' => 'Top 10 Scientific Discoveries That Changed the World', 'content' => 'Top 10 Scientific Discoveries That Changed the World'],
                ['author_id' => 4, 'status' => 'Published', 'title' => 'The Future of Artificial Intelligence in Scientific Research', 'content' => 'The Future of Artificial Intelligence in Scientific Research'],
                ['author_id' => 4, 'status' => 'Published', 'title' => 'How Space Exploration Advances Scientific Knowledge on Earth', 'content' => 'How Space Exploration Advances Scientific Knowledge on Earth'],
                ['author_id' => 4, 'status' => 'Published', 'title' => 'The Role of Nanotechnology in Modern Medicine', 'content' => 'The Role of Nanotechnology in Modern Medicine'],
                ['author_id' => 4, 'status' => 'Published', 'title' => 'The Science of Sleep: Why We Need Rest to Thrive', 'content' => 'The Science of Sleep: Why We Need Rest to Thrive'],
                ['author_id' => 4, 'status' => 'Published', 'title' => 'Understanding Evolution: The Journey from Single Cells to Complex Life', 'content' => 'Understanding Evolution: The Journey from Single Cells to Complex Life'],
                ['author_id' => 4, 'status' => 'Published', 'title' => 'Can Renewable Energy Solve the World’s Energy Crisis?', 'content' => 'Can Renewable Energy Solve the World’s Energy Crisis?'],
                ['author_id' => 4, 'status' => 'Published', 'title' => 'The Human Brain: A Scientific Exploration of Consciousness', 'content' => 'The Human Brain: A Scientific Exploration of Consciousness'],

                ['author_id' => 5, 'status' => 'Published', 'title' => 'How Vaccines Work: The Science Behind Immunization', 'content' => 'How Vaccines Work: The Science Behind Immunization'],
                ['author_id' => 5, 'status' => 'Published', 'title' => 'The Physics of Black Holes: What Lies Beyond the Event Horizon?', 'content' => 'The Physics of Black Holes: What Lies Beyond the Event Horizon?'],
                ['author_id' => 5, 'status' => 'Published', 'title' => 'The Intersection of Science and Ethics in Genetic Modification', 'content' => 'The Intersection of Science and Ethics in Genetic Modification'],
                ['author_id' => 5, 'status' => 'Published', 'title' => 'The Ultimate Guide to Successful Project Management for Beginners', 'content' => 'The Ultimate Guide to Successful Project Management for Beginners'],
                ['author_id' => 5, 'status' => 'Published', 'title' => 'Top 10 Project Management Tools to Boost Team Productivity', 'content' => 'Top 10 Project Management Tools to Boost Team Productivity'],
                ['author_id' => 5, 'status' => 'Published', 'title' => 'How to Manage Scope Creep in Complex Projects', 'content' => 'How to Manage Scope Creep in Complex Projects'],
                ['author_id' => 5, 'status' => 'Published', 'title' => 'The Importance of Agile Methodology in Modern Project Management', 'content' => 'The Importance of Agile Methodology in Modern Project Management'],
                ['author_id' => 5, 'status' => 'Published', 'title' => 'Project Planning 101: Creating Timelines that Work', 'content' => 'Project Planning 101: Creating Timelines that Work'],
                ['author_id' => 5, 'status' => 'Published', 'title' => 'How to Lead Remote Teams Effectively in Project Management', 'content' => 'How to Lead Remote Teams Effectively in Project Management'],
                ['author_id' => 5, 'status' => 'Published', 'title' => 'The Role of Risk Management in Project Success', 'content' => 'The Role of Risk Management in Project Success'],

                ['author_id' => 6, 'status' => 'Published', 'title' => 'Waterfall vs. Agile: Choosing the Right Methodology for Your Project', 'content' => 'Waterfall vs. Agile: Choosing the Right Methodology for Your Project'],
                ['author_id' => 6, 'status' => 'Published', 'title' => 'Effective Communication Strategies for Project Managers', 'content' => 'Effective Communication Strategies for Project Managers'],
                ['author_id' => 6, 'status' => 'Published', 'title' => 'How to Handle Project Deadlines Without Burnout', 'content' => 'How to Handle Project Deadlines Without Burnout'],
                ['author_id' => 6, 'status' => 'Published', 'title' => 'Top Skills Every Successful Project Manager Should Have', 'content' => 'Top Skills Every Successful Project Manager Should Have'],
                ['author_id' => 6, 'status' => 'Published', 'title' => 'The Impact of AI on Future Project Management Practices', 'content' => 'The Impact of AI on Future Project Management Practices'],
                ['author_id' => 6, 'status' => 'Published', 'title' => 'Budget Management: Keeping Your Projects on Track Financially', 'content' => 'Budget Management: Keeping Your Projects on Track Financially'],
                ['author_id' => 6, 'status' => 'Published', 'title' => 'How to Use Kanban Boards for Smarter Project Management', 'content' => 'How to Use Kanban Boards for Smarter Project Management'],
                ['author_id' => 6, 'status' => 'Published', 'title' => 'Key Performance Indicators (KPIs) Every Project Manager Should Track', 'content' => 'Key Performance Indicators (KPIs) Every Project Manager Should Track'],
                ['author_id' => 6, 'status' => 'Published', 'title' => 'Getting Started with Laravel: A Beginner’s Guide to Web Development', 'content' => 'Getting Started with Laravel: A Beginner’s Guide to Web Development'],
                ['author_id' => 6, 'status' => 'Published', 'title' => 'Top 10 Features of Laravel Every Developer Should Know', 'content' => 'Top 10 Features of Laravel Every Developer Should Know'],

                ['author_id' => 7, 'status' => 'Published', 'title' => 'How to Build a Blog Application Using Laravel', 'content' => 'How to Build a Blog Application Using Laravel'],
                ['author_id' => 7, 'status' => 'Published', 'title' => 'Laravel vs Other PHP Frameworks: Which One Should You Choose?', 'content' => 'Laravel vs Other PHP Frameworks: Which One Should You Choose?'],
                ['author_id' => 7, 'status' => 'Published', 'title' => 'Mastering Eloquent ORM: Database Management with Laravel', 'content' => 'Mastering Eloquent ORM: Database Management with Laravel'],
                ['author_id' => 7, 'status' => 'Published', 'title' => 'How to Use Laravel Blade Templates for Dynamic Web Pages', 'content' => 'How to Use Laravel Blade Templates for Dynamic Web Pages'],
                ['author_id' => 7, 'status' => 'Published', 'title' => 'Securing Your Laravel Application: Best Practices and Tips', 'content' => 'Securing Your Laravel Application: Best Practices and Tips'],
                ['author_id' => 7, 'status' => 'Published', 'title' => 'How to Integrate APIs into Your Laravel Project', 'content' => 'How to Integrate APIs into Your Laravel Project'],
                ['author_id' => 7, 'status' => 'Published', 'title' => 'Building RESTful APIs with Laravel: A Step-by-Step Guide', 'content' => 'Building RESTful APIs with Laravel: A Step-by-Step Guide'],
                ['author_id' => 7, 'status' => 'Published', 'title' => 'The Role of Middleware in Laravel Applications', 'content' => 'The Role of Middleware in Laravel Applications'],
                ['author_id' => 7, 'status' => 'Published', 'title' => 'How to Deploy a Laravel Project on Cloud Platforms', 'content' => 'How to Deploy a Laravel Project on Cloud Platforms'],
                ['author_id' => 7, 'status' => 'Published', 'title' => 'Laravel Authentication: Implementing Login and Registration Systems', 'content' => 'Laravel Authentication: Implementing Login and Registration Systems'],

                ['author_id' => 8, 'status' => 'Published', 'title' => 'Improving Performance of Laravel Applications: Optimization Tips', 'content' => 'Improving Performance of Laravel Applications: Optimization Tips'],
                ['author_id' => 8, 'status' => 'Published', 'title' => 'How to Use Laravel Queues for Background Tasks', 'content' => 'How to Use Laravel Queues for Background Tasks'],
                ['author_id' => 8, 'status' => 'Published', 'title' => 'Creating Dynamic Forms and Validations in Laravel', 'content' => 'Creating Dynamic Forms and Validations in Laravel'],
                ['author_id' => 8, 'status' => 'Published', 'title' => 'Getting Started with PHP and MySQL: A Beginner’s Guide', 'content' => 'Getting Started with PHP and MySQL: A Beginner’s Guide'],
                ['author_id' => 8, 'status' => 'Published', 'title' => 'How to Create a Simple CRUD Application with PHP and MySQL', 'content' => 'How to Create a Simple CRUD Application with PHP and MySQL'],
                ['author_id' => 8, 'status' => 'Published', 'title' => 'PHP and MySQL: Building Your First Dynamic Website', 'content' => 'PHP and MySQL: Building Your First Dynamic Website'],
                ['author_id' => 8, 'status' => 'Published', 'title' => 'Top 10 Best Practices for PHP and MySQL Development', 'content' => 'Top 10 Best Practices for PHP and MySQL Development'],
                ['author_id' => 8, 'status' => 'Published', 'title' => 'How to Connect PHP with MySQL: Step-by-Step Guide', 'content' => 'How to Connect PHP with MySQL: Step-by-Step Guide'],
                ['author_id' => 8, 'status' => 'Published', 'title' => 'Form Handling in PHP with MySQL Database Integration', 'content' => 'Form Handling in PHP with MySQL Database Integration'],
                ['author_id' => 8, 'status' => 'Published', 'title' => 'User Authentication System Using PHP and MySQL', 'content' => 'User Authentication System Using PHP and MySQL'],

                ['author_id' => 9, 'status' => 'Published', 'title' => 'How to Use MySQLi and PDO in PHP for Secure Queries', 'content' => 'How to Use MySQLi and PDO in PHP for Secure Queries'],
                ['author_id' => 9, 'status' => 'Published', 'title' => 'Database Optimization Tips for PHP and MySQL Projects', 'content' => 'Database Optimization Tips for PHP and MySQL Projects'],
                ['author_id' => 9, 'status' => 'Published', 'title' => 'Building a Blog Application with PHP and MySQL', 'content' => 'Building a Blog Application with PHP and MySQL'],
                ['author_id' => 9, 'status' => 'Published', 'title' => 'How to Prevent SQL Injection in PHP Applications', 'content' => 'How to Prevent SQL Injection in PHP Applications'],
                ['author_id' => 9, 'status' => 'Published', 'title' => 'Pagination in PHP and MySQL: A Simple Example', 'content' => 'Pagination in PHP and MySQL: A Simple Example'],
                ['author_id' => 9, 'status' => 'Published', 'title' => 'PHP and MySQL for E-commerce: Building a Shopping Cart System', 'content' => 'PHP and MySQL for E-commerce: Building a Shopping Cart System'],
                ['author_id' => 9, 'status' => 'Published', 'title' => 'Creating Dynamic Charts Using PHP and MySQL Data', 'content' => 'Creating Dynamic Charts Using PHP and MySQL Data'],
                ['author_id' => 9, 'status' => 'Published', 'title' => 'How to Backup and Restore MySQL Databases in PHP Projects', 'content' => 'How to Backup and Restore MySQL Databases in PHP Projects'],
                ['author_id' => 9, 'status' => 'Published', 'title' => 'The Future of Digital Healthcare: Trends and Innovations', 'content' => 'The Future of Digital Healthcare: Trends and Innovations'],
                ['author_id' => 9, 'status' => 'Published', 'title' => 'How Telemedicine is Transforming Patient Care Worldwide', 'content' => 'How Telemedicine is Transforming Patient Care Worldwide'],

                ['author_id' => 10, 'status' => 'Published', 'title' => 'The Role of AI and Machine Learning in Digital Healthcare', 'content' => 'The Role of AI and Machine Learning in Digital Healthcare'],
                ['author_id' => 10, 'status' => 'Published', 'title' => 'Top 10 Digital Healthcare Tools for Remote Patient Monitoring', 'content' => 'Top 10 Digital Healthcare Tools for Remote Patient Monitoring'],
                ['author_id' => 10, 'status' => 'Published', 'title' => 'How Wearable Technology is Revolutionizing Health Tracking', 'content' => 'How Wearable Technology is Revolutionizing Health Tracking'],
                ['author_id' => 10, 'status' => 'Published', 'title' => 'Electronic Health Records (EHR): Benefits and Challenges in the Digital Era', 'content' => 'Electronic Health Records (EHR): Benefits and Challenges in the Digital Era'],
                ['author_id' => 10, 'status' => 'Published', 'title' => 'Data Security and Privacy in Digital Healthcare Systems', 'content' => 'Data Security and Privacy in Digital Healthcare Systems'],
                ['author_id' => 10, 'status' => 'Published', 'title' => 'The Impact of Mobile Apps on Healthcare Delivery', 'content' => 'The Impact of Mobile Apps on Healthcare Delivery'],
                ['author_id' => 10, 'status' => 'Published', 'title' => 'Digital Healthcare for Mental Health: Apps and Platforms Making a Difference', 'content' => 'Digital Healthcare for Mental Health: Apps and Platforms Making a Difference'],
                ['author_id' => 10, 'status' => 'Published', 'title' => 'How IoT Devices Improve Chronic Disease Management', 'content' => 'How IoT Devices Improve Chronic Disease Management'],
                ['author_id' => 10, 'status' => 'Published', 'title' => 'The Rise of Virtual Hospitals: Healthcare Beyond Physical Walls', 'content' => 'The Rise of Virtual Hospitals: Healthcare Beyond Physical Walls'],
                ['author_id' => 10, 'status' => 'Published', 'title' => 'How Digital Healthcare is Enhancing Patient Engagement and Experience', 'content' => 'How Digital Healthcare is Enhancing Patient Engagement and Experience'],
            ];
            Article::create($articles);
        }

        if (app()->environment(['staging', 'testing', 'development', 'local'])) {
            // 100 Articles
            $articles = [
                ['author_id' => 1, 'status' => 'Published', 'title' => 'How to Avoid Distraction and Stay Focused During Video Calls?', 'content' => 'How to Avoid Distraction and Stay Focused During Video Calls?'],
                ['author_id' => 1, 'status' => 'Published', 'title' => 'Why Craigslist Tampa Is One of The Most Interesting Places On the Web?', 'content' => 'Why Craigslist Tampa Is One of The Most Interesting Places On the Web?'],
                ['author_id' => 1, 'status' => 'Published', 'title' => '6 Easy Steps To Create Your Own Cute Merch For Instagram', 'content' => '6 Easy Steps To Create Your Own Cute Merch For Instagram'],
                ['author_id' => 1, 'status' => 'Published', 'title' => '10 Life-Changing Hacks Every Working Mom Should Know', 'content' => '10 Life-Changing Hacks Every Working Mom Should Know'],
                ['author_id' => 1, 'status' => 'Published', 'title' => '5 Great Startup Tips for Female Founders', 'content' => '5 Great Startup Tips for Female Founders'],
                ['author_id' => 1, 'status' => 'Published', 'title' => 'The Best Homemade Masks for Face (keep the Pimples Away)', 'content' => 'The Best Homemade Masks for Face (keep the Pimples Away)'],
                ['author_id' => 1, 'status' => 'Published', 'title' => '17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut', 'content' => '17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut'],
                ['author_id' => 1, 'status' => 'Published', 'title' => '13 Amazing Poems from Shel Silverstein with Valuable Life Lessons', 'content' => ''],
                ['author_id' => 1, 'status' => 'Published', 'title' => '9 Half-up/half-down Hairstyles for Long and Medium Hair', 'content' => '9 Half-up/half-down Hairstyles for Long and Medium Hair'],
                ['author_id' => 1, 'status' => 'Published', 'title' => 'Life Insurance And Pregnancy: A Working Mom’s Guide', 'content' => 'Life Insurance And Pregnancy: A Working Mom’s Guide'],

                ['author_id' => 2, 'status' => 'Published', 'title' => 'How to Create Activity Logs in Laravel 11', 'content' => 'How to Create Activity Logs in Laravel 11'],
                ['author_id' => 2, 'status' => 'Published', 'title' => 'Mastering the Service-Repository Pattern in Laravel', 'content' => 'Mastering the Service-Repository Pattern in Laravel'],
                ['author_id' => 2, 'status' => 'Published', 'title' => 'Nothing New Under the Sun: Anti-Vaccine Sentiment Is as Old as Vaccination', 'content' => 'Nothing New Under the Sun: Anti-Vaccine Sentiment Is as Old as Vaccination'],
                ['author_id' => 2, 'status' => 'Published', 'title' => '6 PHP Knowledge You Didn’t Know You Needed', 'content' => '6 PHP Knowledge You Didn’t Know You Needed'],
                ['author_id' => 2, 'status' => 'Published', 'title' => 'You’re Not a Laravel Developer If You Don’t Know These 10 Things', 'content' => 'You’re Not a Laravel Developer If You Don’t Know These 10 Things'],
                ['author_id' => 2, 'status' => 'Published', 'title' => 'Top 10 PHP v8.3 Exciting Features You Didn’t Know You Needed', 'content' => 'Top 10 PHP v8.3 Exciting Features You Didn’t Know You Needed'],
                ['author_id' => 2, 'status' => 'Published', 'title' => 'How to Build Your First Laravel 11 Project: A Complete Guide', 'content' => 'How to Build Your First Laravel 11 Project: A Complete Guide'],
                ['author_id' => 2, 'status' => 'Published', 'title' => 'My 2024 MacBook Setup for Software Development', 'content' => 'My 2024 MacBook Setup for Software Development'],
                ['author_id' => 2, 'status' => 'Published', 'title' => 'This new JavaScript operator is an absolute game changer', 'content' => 'This new JavaScript operator is an absolute game changer'],
                ['author_id' => 2, 'status' => 'Published', 'title' => '9 Rules to Optimize PHP for High Traffic Websites', 'content' => '9 Rules to Optimize PHP for High Traffic Websites'],

                ['author_id' => 3, 'status' => 'Published', 'title' => 'Why Humility Is the Key to Well-Being', 'content' => 'Why Humility Is the Key to Well-Being'],
                ['author_id' => 3, 'status' => 'Published', 'title' => 'The Real Differences Between Introverts and Extroverts', 'content' => 'The Real Differences Between Introverts and Extroverts'],
                ['author_id' => 3, 'status' => 'Published', 'title' => 'Big Tech Has Given Itself an AI Deadline', 'content' => 'Big Tech Has Given Itself an AI Deadline'],
                ['author_id' => 3, 'status' => 'Published', 'title' => 'The Age of AI Child Abuse Is Here', 'content' => 'The Age of AI Child Abuse Is Here'],
                ['author_id' => 3, 'status' => 'Published', 'title' => 'The Domestic Thriller That Shatters Chilean Myths', 'content' => 'The Domestic Thriller That Shatters Chilean Myths'],
                ['author_id' => 3, 'status' => 'Published', 'title' => 'The Weak Science Behind Psychedelics', 'content' => 'The Weak Science Behind Psychedelics'],
                ['author_id' => 3, 'status' => 'Published', 'title' => 'The AI Boom Has an Expiration Date', 'content' => 'The AI Boom Has an Expiration Date'],
                ['author_id' => 3, 'status' => 'Published', 'title' => 'The Branch of Philosophy All Parents Should Know', 'content' => 'The Branch of Philosophy All Parents Should Know'],
                ['author_id' => 3, 'status' => 'Published', 'title' => 'The Danger Is Greater Than in 2020. Be Prepared.', 'content' => 'The Danger Is Greater Than in 2020. Be Prepared.'],
                ['author_id' => 3, 'status' => 'Published', 'title' => 'The Science Behind Climate Change and Its Global Impact', 'content' => 'The Science Behind Climate Change and Its Global Impact'],

                ['author_id' => 4, 'status' => 'Published', 'title' => 'The Fascinating World of Quantum Physics: A Beginner’s Guide', 'content' => 'The Fascinating World of Quantum Physics: A Beginner’s Guide'],
                ['author_id' => 4, 'status' => 'Published', 'title' => 'Exploring the Mysteries of Dark Matter and Dark Energy', 'content' => 'Exploring the Mysteries of Dark Matter and Dark Energy'],
                ['author_id' => 4, 'status' => 'Published', 'title' => 'Top 10 Scientific Discoveries That Changed the World', 'content' => 'Top 10 Scientific Discoveries That Changed the World'],
                ['author_id' => 4, 'status' => 'Published', 'title' => 'The Future of Artificial Intelligence in Scientific Research', 'content' => 'The Future of Artificial Intelligence in Scientific Research'],
                ['author_id' => 4, 'status' => 'Published', 'title' => 'How Space Exploration Advances Scientific Knowledge on Earth', 'content' => 'How Space Exploration Advances Scientific Knowledge on Earth'],
                ['author_id' => 4, 'status' => 'Published', 'title' => 'The Role of Nanotechnology in Modern Medicine', 'content' => 'The Role of Nanotechnology in Modern Medicine'],
                ['author_id' => 4, 'status' => 'Published', 'title' => 'The Science of Sleep: Why We Need Rest to Thrive', 'content' => 'The Science of Sleep: Why We Need Rest to Thrive'],
                ['author_id' => 4, 'status' => 'Published', 'title' => 'Understanding Evolution: The Journey from Single Cells to Complex Life', 'content' => 'Understanding Evolution: The Journey from Single Cells to Complex Life'],
                ['author_id' => 4, 'status' => 'Published', 'title' => 'Can Renewable Energy Solve the World’s Energy Crisis?', 'content' => 'Can Renewable Energy Solve the World’s Energy Crisis?'],
                ['author_id' => 4, 'status' => 'Published', 'title' => 'The Human Brain: A Scientific Exploration of Consciousness', 'content' => 'The Human Brain: A Scientific Exploration of Consciousness'],

                ['author_id' => 5, 'status' => 'Published', 'title' => 'How Vaccines Work: The Science Behind Immunization', 'content' => 'How Vaccines Work: The Science Behind Immunization'],
                ['author_id' => 5, 'status' => 'Published', 'title' => 'The Physics of Black Holes: What Lies Beyond the Event Horizon?', 'content' => 'The Physics of Black Holes: What Lies Beyond the Event Horizon?'],
                ['author_id' => 5, 'status' => 'Published', 'title' => 'The Intersection of Science and Ethics in Genetic Modification', 'content' => 'The Intersection of Science and Ethics in Genetic Modification'],
                ['author_id' => 5, 'status' => 'Published', 'title' => 'The Ultimate Guide to Successful Project Management for Beginners', 'content' => 'The Ultimate Guide to Successful Project Management for Beginners'],
                ['author_id' => 5, 'status' => 'Published', 'title' => 'Top 10 Project Management Tools to Boost Team Productivity', 'content' => 'Top 10 Project Management Tools to Boost Team Productivity'],
                ['author_id' => 5, 'status' => 'Published', 'title' => 'How to Manage Scope Creep in Complex Projects', 'content' => 'How to Manage Scope Creep in Complex Projects'],
                ['author_id' => 5, 'status' => 'Published', 'title' => 'The Importance of Agile Methodology in Modern Project Management', 'content' => 'The Importance of Agile Methodology in Modern Project Management'],
                ['author_id' => 5, 'status' => 'Published', 'title' => 'Project Planning 101: Creating Timelines that Work', 'content' => 'Project Planning 101: Creating Timelines that Work'],
                ['author_id' => 5, 'status' => 'Published', 'title' => 'How to Lead Remote Teams Effectively in Project Management', 'content' => 'How to Lead Remote Teams Effectively in Project Management'],
                ['author_id' => 5, 'status' => 'Published', 'title' => 'The Role of Risk Management in Project Success', 'content' => 'The Role of Risk Management in Project Success'],

                ['author_id' => 6, 'status' => 'Published', 'title' => 'Waterfall vs. Agile: Choosing the Right Methodology for Your Project', 'content' => 'Waterfall vs. Agile: Choosing the Right Methodology for Your Project'],
                ['author_id' => 6, 'status' => 'Published', 'title' => 'Effective Communication Strategies for Project Managers', 'content' => 'Effective Communication Strategies for Project Managers'],
                ['author_id' => 6, 'status' => 'Published', 'title' => 'How to Handle Project Deadlines Without Burnout', 'content' => 'How to Handle Project Deadlines Without Burnout'],
                ['author_id' => 6, 'status' => 'Published', 'title' => 'Top Skills Every Successful Project Manager Should Have', 'content' => 'Top Skills Every Successful Project Manager Should Have'],
                ['author_id' => 6, 'status' => 'Published', 'title' => 'The Impact of AI on Future Project Management Practices', 'content' => 'The Impact of AI on Future Project Management Practices'],
                ['author_id' => 6, 'status' => 'Published', 'title' => 'Budget Management: Keeping Your Projects on Track Financially', 'content' => 'Budget Management: Keeping Your Projects on Track Financially'],
                ['author_id' => 6, 'status' => 'Published', 'title' => 'How to Use Kanban Boards for Smarter Project Management', 'content' => 'How to Use Kanban Boards for Smarter Project Management'],
                ['author_id' => 6, 'status' => 'Published', 'title' => 'Key Performance Indicators (KPIs) Every Project Manager Should Track', 'content' => 'Key Performance Indicators (KPIs) Every Project Manager Should Track'],
                ['author_id' => 6, 'status' => 'Published', 'title' => 'Getting Started with Laravel: A Beginner’s Guide to Web Development', 'content' => 'Getting Started with Laravel: A Beginner’s Guide to Web Development'],
                ['author_id' => 6, 'status' => 'Published', 'title' => 'Top 10 Features of Laravel Every Developer Should Know', 'content' => 'Top 10 Features of Laravel Every Developer Should Know'],

                ['author_id' => 7, 'status' => 'Published', 'title' => 'How to Build a Blog Application Using Laravel', 'content' => 'How to Build a Blog Application Using Laravel'],
                ['author_id' => 7, 'status' => 'Published', 'title' => 'Laravel vs Other PHP Frameworks: Which One Should You Choose?', 'content' => 'Laravel vs Other PHP Frameworks: Which One Should You Choose?'],
                ['author_id' => 7, 'status' => 'Published', 'title' => 'Mastering Eloquent ORM: Database Management with Laravel', 'content' => 'Mastering Eloquent ORM: Database Management with Laravel'],
                ['author_id' => 7, 'status' => 'Published', 'title' => 'How to Use Laravel Blade Templates for Dynamic Web Pages', 'content' => 'How to Use Laravel Blade Templates for Dynamic Web Pages'],
                ['author_id' => 7, 'status' => 'Published', 'title' => 'Securing Your Laravel Application: Best Practices and Tips', 'content' => 'Securing Your Laravel Application: Best Practices and Tips'],
                ['author_id' => 7, 'status' => 'Published', 'title' => 'How to Integrate APIs into Your Laravel Project', 'content' => 'How to Integrate APIs into Your Laravel Project'],
                ['author_id' => 7, 'status' => 'Published', 'title' => 'Building RESTful APIs with Laravel: A Step-by-Step Guide', 'content' => 'Building RESTful APIs with Laravel: A Step-by-Step Guide'],
                ['author_id' => 7, 'status' => 'Published', 'title' => 'The Role of Middleware in Laravel Applications', 'content' => 'The Role of Middleware in Laravel Applications'],
                ['author_id' => 7, 'status' => 'Published', 'title' => 'How to Deploy a Laravel Project on Cloud Platforms', 'content' => 'How to Deploy a Laravel Project on Cloud Platforms'],
                ['author_id' => 7, 'status' => 'Published', 'title' => 'Laravel Authentication: Implementing Login and Registration Systems', 'content' => 'Laravel Authentication: Implementing Login and Registration Systems'],

                ['author_id' => 8, 'status' => 'Published', 'title' => 'Improving Performance of Laravel Applications: Optimization Tips', 'content' => 'Improving Performance of Laravel Applications: Optimization Tips'],
                ['author_id' => 8, 'status' => 'Published', 'title' => 'How to Use Laravel Queues for Background Tasks', 'content' => 'How to Use Laravel Queues for Background Tasks'],
                ['author_id' => 8, 'status' => 'Published', 'title' => 'Creating Dynamic Forms and Validations in Laravel', 'content' => 'Creating Dynamic Forms and Validations in Laravel'],
                ['author_id' => 8, 'status' => 'Published', 'title' => 'Getting Started with PHP and MySQL: A Beginner’s Guide', 'content' => 'Getting Started with PHP and MySQL: A Beginner’s Guide'],
                ['author_id' => 8, 'status' => 'Published', 'title' => 'How to Create a Simple CRUD Application with PHP and MySQL', 'content' => 'How to Create a Simple CRUD Application with PHP and MySQL'],
                ['author_id' => 8, 'status' => 'Published', 'title' => 'PHP and MySQL: Building Your First Dynamic Website', 'content' => 'PHP and MySQL: Building Your First Dynamic Website'],
                ['author_id' => 8, 'status' => 'Published', 'title' => 'Top 10 Best Practices for PHP and MySQL Development', 'content' => 'Top 10 Best Practices for PHP and MySQL Development'],
                ['author_id' => 8, 'status' => 'Published', 'title' => 'How to Connect PHP with MySQL: Step-by-Step Guide', 'content' => 'How to Connect PHP with MySQL: Step-by-Step Guide'],
                ['author_id' => 8, 'status' => 'Published', 'title' => 'Form Handling in PHP with MySQL Database Integration', 'content' => 'Form Handling in PHP with MySQL Database Integration'],
                ['author_id' => 8, 'status' => 'Published', 'title' => 'User Authentication System Using PHP and MySQL', 'content' => 'User Authentication System Using PHP and MySQL'],

                ['author_id' => 9, 'status' => 'Published', 'title' => 'How to Use MySQLi and PDO in PHP for Secure Queries', 'content' => 'How to Use MySQLi and PDO in PHP for Secure Queries'],
                ['author_id' => 9, 'status' => 'Published', 'title' => 'Database Optimization Tips for PHP and MySQL Projects', 'content' => 'Database Optimization Tips for PHP and MySQL Projects'],
                ['author_id' => 9, 'status' => 'Published', 'title' => 'Building a Blog Application with PHP and MySQL', 'content' => 'Building a Blog Application with PHP and MySQL'],
                ['author_id' => 9, 'status' => 'Published', 'title' => 'How to Prevent SQL Injection in PHP Applications', 'content' => 'How to Prevent SQL Injection in PHP Applications'],
                ['author_id' => 9, 'status' => 'Published', 'title' => 'Pagination in PHP and MySQL: A Simple Example', 'content' => 'Pagination in PHP and MySQL: A Simple Example'],
                ['author_id' => 9, 'status' => 'Published', 'title' => 'PHP and MySQL for E-commerce: Building a Shopping Cart System', 'content' => 'PHP and MySQL for E-commerce: Building a Shopping Cart System'],
                ['author_id' => 9, 'status' => 'Published', 'title' => 'Creating Dynamic Charts Using PHP and MySQL Data', 'content' => 'Creating Dynamic Charts Using PHP and MySQL Data'],
                ['author_id' => 9, 'status' => 'Published', 'title' => 'How to Backup and Restore MySQL Databases in PHP Projects', 'content' => 'How to Backup and Restore MySQL Databases in PHP Projects'],
                ['author_id' => 9, 'status' => 'Published', 'title' => 'The Future of Digital Healthcare: Trends and Innovations', 'content' => 'The Future of Digital Healthcare: Trends and Innovations'],
                ['author_id' => 9, 'status' => 'Published', 'title' => 'How Telemedicine is Transforming Patient Care Worldwide', 'content' => 'How Telemedicine is Transforming Patient Care Worldwide'],

                ['author_id' => 10, 'status' => 'Published', 'title' => 'The Role of AI and Machine Learning in Digital Healthcare', 'content' => 'The Role of AI and Machine Learning in Digital Healthcare'],
                ['author_id' => 10, 'status' => 'Published', 'title' => 'Top 10 Digital Healthcare Tools for Remote Patient Monitoring', 'content' => 'Top 10 Digital Healthcare Tools for Remote Patient Monitoring'],
                ['author_id' => 10, 'status' => 'Published', 'title' => 'How Wearable Technology is Revolutionizing Health Tracking', 'content' => 'How Wearable Technology is Revolutionizing Health Tracking'],
                ['author_id' => 10, 'status' => 'Published', 'title' => 'Electronic Health Records (EHR): Benefits and Challenges in the Digital Era', 'content' => 'Electronic Health Records (EHR): Benefits and Challenges in the Digital Era'],
                ['author_id' => 10, 'status' => 'Published', 'title' => 'Data Security and Privacy in Digital Healthcare Systems', 'content' => 'Data Security and Privacy in Digital Healthcare Systems'],
                ['author_id' => 10, 'status' => 'Published', 'title' => 'The Impact of Mobile Apps on Healthcare Delivery', 'content' => 'The Impact of Mobile Apps on Healthcare Delivery'],
                ['author_id' => 10, 'status' => 'Published', 'title' => 'Digital Healthcare for Mental Health: Apps and Platforms Making a Difference', 'content' => 'Digital Healthcare for Mental Health: Apps and Platforms Making a Difference'],
                ['author_id' => 10, 'status' => 'Published', 'title' => 'How IoT Devices Improve Chronic Disease Management', 'content' => 'How IoT Devices Improve Chronic Disease Management'],
                ['author_id' => 10, 'status' => 'Published', 'title' => 'The Rise of Virtual Hospitals: Healthcare Beyond Physical Walls', 'content' => 'The Rise of Virtual Hospitals: Healthcare Beyond Physical Walls'],
                ['author_id' => 10, 'status' => 'Published', 'title' => 'How Digital Healthcare is Enhancing Patient Engagement and Experience', 'content' => 'How Digital Healthcare is Enhancing Patient Engagement and Experience'],
            ];
            Article::create($articles);
        }

        $this->enableForeignKeys();
    }
}
