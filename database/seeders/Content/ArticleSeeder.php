<?php

namespace Database\Seeders\Content;

use App\Models\Article;
use Database\Seeders\Traits\DisableForeignKeys;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->disableForeignKeys();

        if (app()->environment(['production'])) {
            $this->truncate('articles');
            // 100 Articles
            Article::create(['author_id' => 1, 'status' => 'Published', 'title' => 'How to Avoid Distraction and Stay Focused During Video Calls?', 'content' => 'How to Avoid Distraction and Stay Focused During Video Calls?']);
            Article::create(['author_id' => 1, 'status' => 'Published', 'title' => 'Why Craigslist Tampa Is One of The Most Interesting Places On the Web?', 'content' => 'Why Craigslist Tampa Is One of The Most Interesting Places On the Web?']);
            Article::create(['author_id' => 1, 'status' => 'Published', 'title' => '6 Easy Steps To Create Your Own Cute Merch For Instagram', 'content' => '6 Easy Steps To Create Your Own Cute Merch For Instagram']);
            Article::create(['author_id' => 1, 'status' => 'Published', 'title' => '10 Life-Changing Hacks Every Working Mom Should Know', 'content' => '10 Life-Changing Hacks Every Working Mom Should Know']);
            Article::create(['author_id' => 1, 'status' => 'Published', 'title' => '5 Great Startup Tips for Female Founders', 'content' => '5 Great Startup Tips for Female Founders']);
            Article::create(['author_id' => 1, 'status' => 'Published', 'title' => 'The Best Homemade Masks for Face (keep the Pimples Away)', 'content' => 'The Best Homemade Masks for Face (keep the Pimples Away)']);
            Article::create(['author_id' => 1, 'status' => 'Published', 'title' => '17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut', 'content' => '17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut']);
            Article::create(['author_id' => 1, 'status' => 'Published', 'title' => '13 Amazing Poems from Shel Silverstein with Valuable Life Lessons', 'content' => '13 Amazing Poems from Shel Silverstein with Valuable Life Lessons']);
            Article::create(['author_id' => 1, 'status' => 'Published', 'title' => '9 Half-up/half-down Hairstyles for Long and Medium Hair', 'content' => '9 Half-up/half-down Hairstyles for Long and Medium Hair']);
            Article::create(['author_id' => 1, 'status' => 'Published', 'title' => 'Life Insurance And Pregnancy: A Working Mom’s Guide', 'content' => 'Life Insurance And Pregnancy: A Working Mom’s Guide']);

            Article::create(['author_id' => 2, 'status' => 'Published', 'title' => 'How to Create Activity Logs in Laravel 11', 'content' => 'How to Create Activity Logs in Laravel 11']);
            Article::create(['author_id' => 2, 'status' => 'Published', 'title' => 'Mastering the Service-Repository Pattern in Laravel', 'content' => 'Mastering the Service-Repository Pattern in Laravel']);
            Article::create(['author_id' => 2, 'status' => 'Published', 'title' => 'Nothing New Under the Sun: Anti-Vaccine Sentiment Is as Old as Vaccination', 'content' => 'Nothing New Under the Sun: Anti-Vaccine Sentiment Is as Old as Vaccination']);
            Article::create(['author_id' => 2, 'status' => 'Published', 'title' => '6 PHP Knowledge You Didn’t Know You Needed', 'content' => '6 PHP Knowledge You Didn’t Know You Needed']);
            Article::create(['author_id' => 2, 'status' => 'Published', 'title' => 'You’re Not a Laravel Developer If You Don’t Know These 10 Things', 'content' => 'You’re Not a Laravel Developer If You Don’t Know These 10 Things']);
            Article::create(['author_id' => 2, 'status' => 'Published', 'title' => 'Top 10 PHP v8.3 Exciting Features You Didn’t Know You Needed', 'content' => 'Top 10 PHP v8.3 Exciting Features You Didn’t Know You Needed']);
            Article::create(['author_id' => 2, 'status' => 'Published', 'title' => 'How to Build Your First Laravel 11 Project: A Complete Guide', 'content' => 'How to Build Your First Laravel 11 Project: A Complete Guide']);
            Article::create(['author_id' => 2, 'status' => 'Published', 'title' => 'My 2024 MacBook Setup for Software Development', 'content' => 'My 2024 MacBook Setup for Software Development']);
            Article::create(['author_id' => 2, 'status' => 'Published', 'title' => 'This new JavaScript operator is an absolute game changer', 'content' => 'This new JavaScript operator is an absolute game changer']);
            Article::create(['author_id' => 2, 'status' => 'Published', 'title' => '9 Rules to Optimize PHP for High Traffic Websites', 'content' => '9 Rules to Optimize PHP for High Traffic Websites']);

            Article::create(['author_id' => 3, 'status' => 'Published', 'title' => 'Why Humility Is the Key to Well-Being', 'content' => 'Why Humility Is the Key to Well-Being']);
            Article::create(['author_id' => 3, 'status' => 'Published', 'title' => 'The Real Differences Between Introverts and Extroverts', 'content' => 'The Real Differences Between Introverts and Extroverts']);
            Article::create(['author_id' => 3, 'status' => 'Published', 'title' => 'Big Tech Has Given Itself an AI Deadline', 'content' => 'Big Tech Has Given Itself an AI Deadline']);
            Article::create(['author_id' => 3, 'status' => 'Published', 'title' => 'The Age of AI Child Abuse Is Here', 'content' => 'The Age of AI Child Abuse Is Here']);
            Article::create(['author_id' => 3, 'status' => 'Published', 'title' => 'The Domestic Thriller That Shatters Chilean Myths', 'content' => 'The Domestic Thriller That Shatters Chilean Myths']);
            Article::create(['author_id' => 3, 'status' => 'Published', 'title' => 'The Weak Science Behind Psychedelics', 'content' => 'The Weak Science Behind Psychedelics']);
            Article::create(['author_id' => 3, 'status' => 'Published', 'title' => 'The AI Boom Has an Expiration Date', 'content' => 'The AI Boom Has an Expiration Date']);
            Article::create(['author_id' => 3, 'status' => 'Published', 'title' => 'The Branch of Philosophy All Parents Should Know', 'content' => 'The Branch of Philosophy All Parents Should Know']);
            Article::create(['author_id' => 3, 'status' => 'Published', 'title' => 'The Danger Is Greater Than in 2020. Be Prepared.', 'content' => 'The Danger Is Greater Than in 2020. Be Prepared.']);
            Article::create(['author_id' => 3, 'status' => 'Published', 'title' => 'The Science Behind Climate Change and Its Global Impact', 'content' => 'The Science Behind Climate Change and Its Global Impact']);

            Article::create(['author_id' => 4, 'status' => 'Published', 'title' => 'The Fascinating World of Quantum Physics: A Beginner’s Guide', 'content' => 'The Fascinating World of Quantum Physics: A Beginner’s Guide']);
            Article::create(['author_id' => 4, 'status' => 'Published', 'title' => 'Exploring the Mysteries of Dark Matter and Dark Energy', 'content' => 'Exploring the Mysteries of Dark Matter and Dark Energy']);
            Article::create(['author_id' => 4, 'status' => 'Published', 'title' => 'Top 10 Scientific Discoveries That Changed the World', 'content' => 'Top 10 Scientific Discoveries That Changed the World']);
            Article::create(['author_id' => 4, 'status' => 'Published', 'title' => 'The Future of Artificial Intelligence in Scientific Research', 'content' => 'The Future of Artificial Intelligence in Scientific Research']);
            Article::create(['author_id' => 4, 'status' => 'Published', 'title' => 'How Space Exploration Advances Scientific Knowledge on Earth', 'content' => 'How Space Exploration Advances Scientific Knowledge on Earth']);
            Article::create(['author_id' => 4, 'status' => 'Published', 'title' => 'The Role of Nanotechnology in Modern Medicine', 'content' => 'The Role of Nanotechnology in Modern Medicine']);
            Article::create(['author_id' => 4, 'status' => 'Published', 'title' => 'The Science of Sleep: Why We Need Rest to Thrive', 'content' => 'The Science of Sleep: Why We Need Rest to Thrive']);
            Article::create(['author_id' => 4, 'status' => 'Published', 'title' => 'Understanding Evolution: The Journey from Single Cells to Complex Life', 'content' => 'Understanding Evolution: The Journey from Single Cells to Complex Life']);
            Article::create(['author_id' => 4, 'status' => 'Published', 'title' => 'Can Renewable Energy Solve the World’s Energy Crisis?', 'content' => 'Can Renewable Energy Solve the World’s Energy Crisis?']);
            Article::create(['author_id' => 4, 'status' => 'Published', 'title' => 'The Human Brain: A Scientific Exploration of Consciousness', 'content' => 'The Human Brain: A Scientific Exploration of Consciousness']);

            Article::create(['author_id' => 5, 'status' => 'Published', 'title' => 'How Vaccines Work: The Science Behind Immunization', 'content' => 'How Vaccines Work: The Science Behind Immunization']);
            Article::create(['author_id' => 5, 'status' => 'Published', 'title' => 'The Physics of Black Holes: What Lies Beyond the Event Horizon?', 'content' => 'The Physics of Black Holes: What Lies Beyond the Event Horizon?']);
            Article::create(['author_id' => 5, 'status' => 'Published', 'title' => 'The Intersection of Science and Ethics in Genetic Modification', 'content' => 'The Intersection of Science and Ethics in Genetic Modification']);
            Article::create(['author_id' => 5, 'status' => 'Published', 'title' => 'The Ultimate Guide to Successful Project Management for Beginners', 'content' => 'The Ultimate Guide to Successful Project Management for Beginners']);
            Article::create(['author_id' => 5, 'status' => 'Published', 'title' => 'Top 10 Project Management Tools to Boost Team Productivity', 'content' => 'Top 10 Project Management Tools to Boost Team Productivity']);
            Article::create(['author_id' => 5, 'status' => 'Published', 'title' => 'How to Manage Scope Creep in Complex Projects', 'content' => 'How to Manage Scope Creep in Complex Projects']);
            Article::create(['author_id' => 5, 'status' => 'Published', 'title' => 'The Importance of Agile Methodology in Modern Project Management', 'content' => 'The Importance of Agile Methodology in Modern Project Management']);
            Article::create(['author_id' => 5, 'status' => 'Published', 'title' => 'Project Planning 101: Creating Timelines that Work', 'content' => 'Project Planning 101: Creating Timelines that Work']);
            Article::create(['author_id' => 5, 'status' => 'Published', 'title' => 'How to Lead Remote Teams Effectively in Project Management', 'content' => 'How to Lead Remote Teams Effectively in Project Management']);
            Article::create(['author_id' => 5, 'status' => 'Published', 'title' => 'The Role of Risk Management in Project Success', 'content' => 'The Role of Risk Management in Project Success']);

            Article::create(['author_id' => 6, 'status' => 'Published', 'title' => 'Waterfall vs. Agile: Choosing the Right Methodology for Your Project', 'content' => 'Waterfall vs. Agile: Choosing the Right Methodology for Your Project']);
            Article::create(['author_id' => 6, 'status' => 'Published', 'title' => 'Effective Communication Strategies for Project Managers', 'content' => 'Effective Communication Strategies for Project Managers']);
            Article::create(['author_id' => 6, 'status' => 'Published', 'title' => 'How to Handle Project Deadlines Without Burnout', 'content' => 'How to Handle Project Deadlines Without Burnout']);
            Article::create(['author_id' => 6, 'status' => 'Published', 'title' => 'Top Skills Every Successful Project Manager Should Have', 'content' => 'Top Skills Every Successful Project Manager Should Have']);
            Article::create(['author_id' => 6, 'status' => 'Published', 'title' => 'The Impact of AI on Future Project Management Practices', 'content' => 'The Impact of AI on Future Project Management Practices']);
            Article::create(['author_id' => 6, 'status' => 'Published', 'title' => 'Budget Management: Keeping Your Projects on Track Financially', 'content' => 'Budget Management: Keeping Your Projects on Track Financially']);
            Article::create(['author_id' => 6, 'status' => 'Published', 'title' => 'How to Use Kanban Boards for Smarter Project Management', 'content' => 'How to Use Kanban Boards for Smarter Project Management']);
            Article::create(['author_id' => 6, 'status' => 'Published', 'title' => 'Key Performance Indicators (KPIs) Every Project Manager Should Track', 'content' => 'Key Performance Indicators (KPIs) Every Project Manager Should Track']);
            Article::create(['author_id' => 6, 'status' => 'Published', 'title' => 'Getting Started with Laravel: A Beginner’s Guide to Web Development', 'content' => 'Getting Started with Laravel: A Beginner’s Guide to Web Development']);
            Article::create(['author_id' => 6, 'status' => 'Published', 'title' => 'Top 10 Features of Laravel Every Developer Should Know', 'content' => 'Top 10 Features of Laravel Every Developer Should Know']);

            Article::create(['author_id' => 7, 'status' => 'Published', 'title' => 'How to Build a Blog Application Using Laravel', 'content' => 'How to Build a Blog Application Using Laravel']);
            Article::create(['author_id' => 7, 'status' => 'Published', 'title' => 'Laravel vs Other PHP Frameworks: Which One Should You Choose?', 'content' => 'Laravel vs Other PHP Frameworks: Which One Should You Choose?']);
            Article::create(['author_id' => 7, 'status' => 'Published', 'title' => 'Mastering Eloquent ORM: Database Management with Laravel', 'content' => 'Mastering Eloquent ORM: Database Management with Laravel']);
            Article::create(['author_id' => 7, 'status' => 'Published', 'title' => 'How to Use Laravel Blade Templates for Dynamic Web Pages', 'content' => 'How to Use Laravel Blade Templates for Dynamic Web Pages']);
            Article::create(['author_id' => 7, 'status' => 'Published', 'title' => 'Securing Your Laravel Application: Best Practices and Tips', 'content' => 'Securing Your Laravel Application: Best Practices and Tips']);
            Article::create(['author_id' => 7, 'status' => 'Published', 'title' => 'How to Integrate APIs into Your Laravel Project', 'content' => 'How to Integrate APIs into Your Laravel Project']);
            Article::create(['author_id' => 7, 'status' => 'Published', 'title' => 'Building RESTful APIs with Laravel: A Step-by-Step Guide', 'content' => 'Building RESTful APIs with Laravel: A Step-by-Step Guide']);
            Article::create(['author_id' => 7, 'status' => 'Published', 'title' => 'The Role of Middleware in Laravel Applications', 'content' => 'The Role of Middleware in Laravel Applications']);
            Article::create(['author_id' => 7, 'status' => 'Published', 'title' => 'How to Deploy a Laravel Project on Cloud Platforms', 'content' => 'How to Deploy a Laravel Project on Cloud Platforms']);
            Article::create(['author_id' => 7, 'status' => 'Published', 'title' => 'Laravel Authentication: Implementing Login and Registration Systems', 'content' => 'Laravel Authentication: Implementing Login and Registration Systems']);

            Article::create(['author_id' => 8, 'status' => 'Published', 'title' => 'Improving Performance of Laravel Applications: Optimization Tips', 'content' => 'Improving Performance of Laravel Applications: Optimization Tips']);
            Article::create(['author_id' => 8, 'status' => 'Published', 'title' => 'How to Use Laravel Queues for Background Tasks', 'content' => 'How to Use Laravel Queues for Background Tasks']);
            Article::create(['author_id' => 8, 'status' => 'Published', 'title' => 'Creating Dynamic Forms and Validations in Laravel', 'content' => 'Creating Dynamic Forms and Validations in Laravel']);
            Article::create(['author_id' => 8, 'status' => 'Published', 'title' => 'Getting Started with PHP and MySQL: A Beginner’s Guide', 'content' => 'Getting Started with PHP and MySQL: A Beginner’s Guide']);
            Article::create(['author_id' => 8, 'status' => 'Published', 'title' => 'How to Create a Simple CRUD Application with PHP and MySQL', 'content' => 'How to Create a Simple CRUD Application with PHP and MySQL']);
            Article::create(['author_id' => 8, 'status' => 'Published', 'title' => 'PHP and MySQL: Building Your First Dynamic Website', 'content' => 'PHP and MySQL: Building Your First Dynamic Website']);
            Article::create(['author_id' => 8, 'status' => 'Published', 'title' => 'Top 10 Best Practices for PHP and MySQL Development', 'content' => 'Top 10 Best Practices for PHP and MySQL Development']);
            Article::create(['author_id' => 8, 'status' => 'Published', 'title' => 'How to Connect PHP with MySQL: Step-by-Step Guide', 'content' => 'How to Connect PHP with MySQL: Step-by-Step Guide']);
            Article::create(['author_id' => 8, 'status' => 'Published', 'title' => 'Form Handling in PHP with MySQL Database Integration', 'content' => 'Form Handling in PHP with MySQL Database Integration']);
            Article::create(['author_id' => 8, 'status' => 'Published', 'title' => 'User Authentication System Using PHP and MySQL', 'content' => 'User Authentication System Using PHP and MySQL']);

            Article::create(['author_id' => 9, 'status' => 'Published', 'title' => 'How to Use MySQLi and PDO in PHP for Secure Queries', 'content' => 'How to Use MySQLi and PDO in PHP for Secure Queries']);
            Article::create(['author_id' => 9, 'status' => 'Published', 'title' => 'Database Optimization Tips for PHP and MySQL Projects', 'content' => 'Database Optimization Tips for PHP and MySQL Projects']);
            Article::create(['author_id' => 9, 'status' => 'Published', 'title' => 'Building a Blog Application with PHP and MySQL', 'content' => 'Building a Blog Application with PHP and MySQL']);
            Article::create(['author_id' => 9, 'status' => 'Published', 'title' => 'How to Prevent SQL Injection in PHP Applications', 'content' => 'How to Prevent SQL Injection in PHP Applications']);
            Article::create(['author_id' => 9, 'status' => 'Published', 'title' => 'Pagination in PHP and MySQL: A Simple Example', 'content' => 'Pagination in PHP and MySQL: A Simple Example']);
            Article::create(['author_id' => 9, 'status' => 'Published', 'title' => 'PHP and MySQL for E-commerce: Building a Shopping Cart System', 'content' => 'PHP and MySQL for E-commerce: Building a Shopping Cart System']);
            Article::create(['author_id' => 9, 'status' => 'Published', 'title' => 'Creating Dynamic Charts Using PHP and MySQL Data', 'content' => 'Creating Dynamic Charts Using PHP and MySQL Data']);
            Article::create(['author_id' => 9, 'status' => 'Published', 'title' => 'How to Backup and Restore MySQL Databases in PHP Projects', 'content' => 'How to Backup and Restore MySQL Databases in PHP Projects']);
            Article::create(['author_id' => 9, 'status' => 'Published', 'title' => 'The Future of Digital Healthcare: Trends and Innovations', 'content' => 'The Future of Digital Healthcare: Trends and Innovations']);
            Article::create(['author_id' => 9, 'status' => 'Published', 'title' => 'How Telemedicine is Transforming Patient Care Worldwide', 'content' => 'How Telemedicine is Transforming Patient Care Worldwide']);

            Article::create(['author_id' => 10, 'status' => 'Published', 'title' => 'The Role of AI and Machine Learning in Digital Healthcare', 'content' => 'The Role of AI and Machine Learning in Digital Healthcare']);
            Article::create(['author_id' => 10, 'status' => 'Published', 'title' => 'Top 10 Digital Healthcare Tools for Remote Patient Monitoring', 'content' => 'Top 10 Digital Healthcare Tools for Remote Patient Monitoring']);
            Article::create(['author_id' => 10, 'status' => 'Published', 'title' => 'How Wearable Technology is Revolutionizing Health Tracking', 'content' => 'How Wearable Technology is Revolutionizing Health Tracking']);
            Article::create(['author_id' => 10, 'status' => 'Published', 'title' => 'Electronic Health Records (EHR): Benefits and Challenges in the Digital Era', 'content' => 'Electronic Health Records (EHR): Benefits and Challenges in the Digital Era']);
            Article::create(['author_id' => 10, 'status' => 'Published', 'title' => 'Data Security and Privacy in Digital Healthcare Systems', 'content' => 'Data Security and Privacy in Digital Healthcare Systems']);
            Article::create(['author_id' => 10, 'status' => 'Published', 'title' => 'The Impact of Mobile Apps on Healthcare Delivery', 'content' => 'The Impact of Mobile Apps on Healthcare Delivery']);
            Article::create(['author_id' => 10, 'status' => 'Published', 'title' => 'Digital Healthcare for Mental Health: Apps and Platforms Making a Difference', 'content' => 'Digital Healthcare for Mental Health: Apps and Platforms Making a Difference']);
            Article::create(['author_id' => 10, 'status' => 'Published', 'title' => 'How IoT Devices Improve Chronic Disease Management', 'content' => 'How IoT Devices Improve Chronic Disease Management']);
            Article::create(['author_id' => 10, 'status' => 'Published', 'title' => 'The Rise of Virtual Hospitals: Healthcare Beyond Physical Walls', 'content' => 'The Rise of Virtual Hospitals: Healthcare Beyond Physical Walls']);
            Article::create(['author_id' => 10, 'status' => 'Published', 'title' => 'How Digital Healthcare is Enhancing Patient Engagement and Experience', 'content' => 'How Digital Healthcare is Enhancing Patient Engagement and Experience']);
        }

        if (app()->environment(['staging', 'testing', 'development', 'local'])) {
            $this->truncate('articles');
            // 100 Articles
            Article::create(['author_id' => 1, 'status' => 'Published', 'title' => 'How to Avoid Distraction and Stay Focused During Video Calls?', 'content' => 'How to Avoid Distraction and Stay Focused During Video Calls?']);
            Article::create(['author_id' => 1, 'status' => 'Published', 'title' => 'Why Craigslist Tampa Is One of The Most Interesting Places On the Web?', 'content' => 'Why Craigslist Tampa Is One of The Most Interesting Places On the Web?']);
            Article::create(['author_id' => 1, 'status' => 'Published', 'title' => '6 Easy Steps To Create Your Own Cute Merch For Instagram', 'content' => '6 Easy Steps To Create Your Own Cute Merch For Instagram']);
            Article::create(['author_id' => 1, 'status' => 'Published', 'title' => '10 Life-Changing Hacks Every Working Mom Should Know', 'content' => '10 Life-Changing Hacks Every Working Mom Should Know']);
            Article::create(['author_id' => 1, 'status' => 'Published', 'title' => '5 Great Startup Tips for Female Founders', 'content' => '5 Great Startup Tips for Female Founders']);
            Article::create(['author_id' => 1, 'status' => 'Published', 'title' => 'The Best Homemade Masks for Face (keep the Pimples Away)', 'content' => 'The Best Homemade Masks for Face (keep the Pimples Away)']);
            Article::create(['author_id' => 1, 'status' => 'Published', 'title' => '17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut', 'content' => '17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut']);
            Article::create(['author_id' => 1, 'status' => 'Published', 'title' => '13 Amazing Poems from Shel Silverstein with Valuable Life Lessons', 'content' => '13 Amazing Poems from Shel Silverstein with Valuable Life Lessons']);
            Article::create(['author_id' => 1, 'status' => 'Published', 'title' => '9 Half-up/half-down Hairstyles for Long and Medium Hair', 'content' => '9 Half-up/half-down Hairstyles for Long and Medium Hair']);
            Article::create(['author_id' => 1, 'status' => 'Published', 'title' => 'Life Insurance And Pregnancy: A Working Mom’s Guide', 'content' => 'Life Insurance And Pregnancy: A Working Mom’s Guide']);

            Article::create(['author_id' => 2, 'status' => 'Published', 'title' => 'How to Create Activity Logs in Laravel 11', 'content' => 'How to Create Activity Logs in Laravel 11']);
            Article::create(['author_id' => 2, 'status' => 'Published', 'title' => 'Mastering the Service-Repository Pattern in Laravel', 'content' => 'Mastering the Service-Repository Pattern in Laravel']);
            Article::create(['author_id' => 2, 'status' => 'Published', 'title' => 'Nothing New Under the Sun: Anti-Vaccine Sentiment Is as Old as Vaccination', 'content' => 'Nothing New Under the Sun: Anti-Vaccine Sentiment Is as Old as Vaccination']);
            Article::create(['author_id' => 2, 'status' => 'Published', 'title' => '6 PHP Knowledge You Didn’t Know You Needed', 'content' => '6 PHP Knowledge You Didn’t Know You Needed']);
            Article::create(['author_id' => 2, 'status' => 'Published', 'title' => 'You’re Not a Laravel Developer If You Don’t Know These 10 Things', 'content' => 'You’re Not a Laravel Developer If You Don’t Know These 10 Things']);
            Article::create(['author_id' => 2, 'status' => 'Published', 'title' => 'Top 10 PHP v8.3 Exciting Features You Didn’t Know You Needed', 'content' => 'Top 10 PHP v8.3 Exciting Features You Didn’t Know You Needed']);
            Article::create(['author_id' => 2, 'status' => 'Published', 'title' => 'How to Build Your First Laravel 11 Project: A Complete Guide', 'content' => 'How to Build Your First Laravel 11 Project: A Complete Guide']);
            Article::create(['author_id' => 2, 'status' => 'Published', 'title' => 'My 2024 MacBook Setup for Software Development', 'content' => 'My 2024 MacBook Setup for Software Development']);
            Article::create(['author_id' => 2, 'status' => 'Published', 'title' => 'This new JavaScript operator is an absolute game changer', 'content' => 'This new JavaScript operator is an absolute game changer']);
            Article::create(['author_id' => 2, 'status' => 'Published', 'title' => '9 Rules to Optimize PHP for High Traffic Websites', 'content' => '9 Rules to Optimize PHP for High Traffic Websites']);

            Article::create(['author_id' => 3, 'status' => 'Published', 'title' => 'Why Humility Is the Key to Well-Being', 'content' => 'Why Humility Is the Key to Well-Being']);
            Article::create(['author_id' => 3, 'status' => 'Published', 'title' => 'The Real Differences Between Introverts and Extroverts', 'content' => 'The Real Differences Between Introverts and Extroverts']);
            Article::create(['author_id' => 3, 'status' => 'Published', 'title' => 'Big Tech Has Given Itself an AI Deadline', 'content' => 'Big Tech Has Given Itself an AI Deadline']);
            Article::create(['author_id' => 3, 'status' => 'Published', 'title' => 'The Age of AI Child Abuse Is Here', 'content' => 'The Age of AI Child Abuse Is Here']);
            Article::create(['author_id' => 3, 'status' => 'Published', 'title' => 'The Domestic Thriller That Shatters Chilean Myths', 'content' => 'The Domestic Thriller That Shatters Chilean Myths']);
            Article::create(['author_id' => 3, 'status' => 'Published', 'title' => 'The Weak Science Behind Psychedelics', 'content' => 'The Weak Science Behind Psychedelics']);
            Article::create(['author_id' => 3, 'status' => 'Published', 'title' => 'The AI Boom Has an Expiration Date', 'content' => 'The AI Boom Has an Expiration Date']);
            Article::create(['author_id' => 3, 'status' => 'Published', 'title' => 'The Branch of Philosophy All Parents Should Know', 'content' => 'The Branch of Philosophy All Parents Should Know']);
            Article::create(['author_id' => 3, 'status' => 'Published', 'title' => 'The Danger Is Greater Than in 2020. Be Prepared.', 'content' => 'The Danger Is Greater Than in 2020. Be Prepared.']);
            Article::create(['author_id' => 3, 'status' => 'Published', 'title' => 'The Science Behind Climate Change and Its Global Impact', 'content' => 'The Science Behind Climate Change and Its Global Impact']);

            Article::create(['author_id' => 4, 'status' => 'Published', 'title' => 'The Fascinating World of Quantum Physics: A Beginner’s Guide', 'content' => 'The Fascinating World of Quantum Physics: A Beginner’s Guide']);
            Article::create(['author_id' => 4, 'status' => 'Published', 'title' => 'Exploring the Mysteries of Dark Matter and Dark Energy', 'content' => 'Exploring the Mysteries of Dark Matter and Dark Energy']);
            Article::create(['author_id' => 4, 'status' => 'Published', 'title' => 'Top 10 Scientific Discoveries That Changed the World', 'content' => 'Top 10 Scientific Discoveries That Changed the World']);
            Article::create(['author_id' => 4, 'status' => 'Published', 'title' => 'The Future of Artificial Intelligence in Scientific Research', 'content' => 'The Future of Artificial Intelligence in Scientific Research']);
            Article::create(['author_id' => 4, 'status' => 'Published', 'title' => 'How Space Exploration Advances Scientific Knowledge on Earth', 'content' => 'How Space Exploration Advances Scientific Knowledge on Earth']);
            Article::create(['author_id' => 4, 'status' => 'Published', 'title' => 'The Role of Nanotechnology in Modern Medicine', 'content' => 'The Role of Nanotechnology in Modern Medicine']);
            Article::create(['author_id' => 4, 'status' => 'Published', 'title' => 'The Science of Sleep: Why We Need Rest to Thrive', 'content' => 'The Science of Sleep: Why We Need Rest to Thrive']);
            Article::create(['author_id' => 4, 'status' => 'Published', 'title' => 'Understanding Evolution: The Journey from Single Cells to Complex Life', 'content' => 'Understanding Evolution: The Journey from Single Cells to Complex Life']);
            Article::create(['author_id' => 4, 'status' => 'Published', 'title' => 'Can Renewable Energy Solve the World’s Energy Crisis?', 'content' => 'Can Renewable Energy Solve the World’s Energy Crisis?']);
            Article::create(['author_id' => 4, 'status' => 'Published', 'title' => 'The Human Brain: A Scientific Exploration of Consciousness', 'content' => 'The Human Brain: A Scientific Exploration of Consciousness']);

            Article::create(['author_id' => 5, 'status' => 'Published', 'title' => 'How Vaccines Work: The Science Behind Immunization', 'content' => 'How Vaccines Work: The Science Behind Immunization']);
            Article::create(['author_id' => 5, 'status' => 'Published', 'title' => 'The Physics of Black Holes: What Lies Beyond the Event Horizon?', 'content' => 'The Physics of Black Holes: What Lies Beyond the Event Horizon?']);
            Article::create(['author_id' => 5, 'status' => 'Published', 'title' => 'The Intersection of Science and Ethics in Genetic Modification', 'content' => 'The Intersection of Science and Ethics in Genetic Modification']);
            Article::create(['author_id' => 5, 'status' => 'Published', 'title' => 'The Ultimate Guide to Successful Project Management for Beginners', 'content' => 'The Ultimate Guide to Successful Project Management for Beginners']);
            Article::create(['author_id' => 5, 'status' => 'Published', 'title' => 'Top 10 Project Management Tools to Boost Team Productivity', 'content' => 'Top 10 Project Management Tools to Boost Team Productivity']);
            Article::create(['author_id' => 5, 'status' => 'Published', 'title' => 'How to Manage Scope Creep in Complex Projects', 'content' => 'How to Manage Scope Creep in Complex Projects']);
            Article::create(['author_id' => 5, 'status' => 'Published', 'title' => 'The Importance of Agile Methodology in Modern Project Management', 'content' => 'The Importance of Agile Methodology in Modern Project Management']);
            Article::create(['author_id' => 5, 'status' => 'Published', 'title' => 'Project Planning 101: Creating Timelines that Work', 'content' => 'Project Planning 101: Creating Timelines that Work']);
            Article::create(['author_id' => 5, 'status' => 'Published', 'title' => 'How to Lead Remote Teams Effectively in Project Management', 'content' => 'How to Lead Remote Teams Effectively in Project Management']);
            Article::create(['author_id' => 5, 'status' => 'Published', 'title' => 'The Role of Risk Management in Project Success', 'content' => 'The Role of Risk Management in Project Success']);

            Article::create(['author_id' => 6, 'status' => 'Published', 'title' => 'Waterfall vs. Agile: Choosing the Right Methodology for Your Project', 'content' => 'Waterfall vs. Agile: Choosing the Right Methodology for Your Project']);
            Article::create(['author_id' => 6, 'status' => 'Published', 'title' => 'Effective Communication Strategies for Project Managers', 'content' => 'Effective Communication Strategies for Project Managers']);
            Article::create(['author_id' => 6, 'status' => 'Published', 'title' => 'How to Handle Project Deadlines Without Burnout', 'content' => 'How to Handle Project Deadlines Without Burnout']);
            Article::create(['author_id' => 6, 'status' => 'Published', 'title' => 'Top Skills Every Successful Project Manager Should Have', 'content' => 'Top Skills Every Successful Project Manager Should Have']);
            Article::create(['author_id' => 6, 'status' => 'Published', 'title' => 'The Impact of AI on Future Project Management Practices', 'content' => 'The Impact of AI on Future Project Management Practices']);
            Article::create(['author_id' => 6, 'status' => 'Published', 'title' => 'Budget Management: Keeping Your Projects on Track Financially', 'content' => 'Budget Management: Keeping Your Projects on Track Financially']);
            Article::create(['author_id' => 6, 'status' => 'Published', 'title' => 'How to Use Kanban Boards for Smarter Project Management', 'content' => 'How to Use Kanban Boards for Smarter Project Management']);
            Article::create(['author_id' => 6, 'status' => 'Published', 'title' => 'Key Performance Indicators (KPIs) Every Project Manager Should Track', 'content' => 'Key Performance Indicators (KPIs) Every Project Manager Should Track']);
            Article::create(['author_id' => 6, 'status' => 'Published', 'title' => 'Getting Started with Laravel: A Beginner’s Guide to Web Development', 'content' => 'Getting Started with Laravel: A Beginner’s Guide to Web Development']);
            Article::create(['author_id' => 6, 'status' => 'Published', 'title' => 'Top 10 Features of Laravel Every Developer Should Know', 'content' => 'Top 10 Features of Laravel Every Developer Should Know']);

            Article::create(['author_id' => 7, 'status' => 'Published', 'title' => 'How to Build a Blog Application Using Laravel', 'content' => 'How to Build a Blog Application Using Laravel']);
            Article::create(['author_id' => 7, 'status' => 'Published', 'title' => 'Laravel vs Other PHP Frameworks: Which One Should You Choose?', 'content' => 'Laravel vs Other PHP Frameworks: Which One Should You Choose?']);
            Article::create(['author_id' => 7, 'status' => 'Published', 'title' => 'Mastering Eloquent ORM: Database Management with Laravel', 'content' => 'Mastering Eloquent ORM: Database Management with Laravel']);
            Article::create(['author_id' => 7, 'status' => 'Published', 'title' => 'How to Use Laravel Blade Templates for Dynamic Web Pages', 'content' => 'How to Use Laravel Blade Templates for Dynamic Web Pages']);
            Article::create(['author_id' => 7, 'status' => 'Published', 'title' => 'Securing Your Laravel Application: Best Practices and Tips', 'content' => 'Securing Your Laravel Application: Best Practices and Tips']);
            Article::create(['author_id' => 7, 'status' => 'Published', 'title' => 'How to Integrate APIs into Your Laravel Project', 'content' => 'How to Integrate APIs into Your Laravel Project']);
            Article::create(['author_id' => 7, 'status' => 'Published', 'title' => 'Building RESTful APIs with Laravel: A Step-by-Step Guide', 'content' => 'Building RESTful APIs with Laravel: A Step-by-Step Guide']);
            Article::create(['author_id' => 7, 'status' => 'Published', 'title' => 'The Role of Middleware in Laravel Applications', 'content' => 'The Role of Middleware in Laravel Applications']);
            Article::create(['author_id' => 7, 'status' => 'Published', 'title' => 'How to Deploy a Laravel Project on Cloud Platforms', 'content' => 'How to Deploy a Laravel Project on Cloud Platforms']);
            Article::create(['author_id' => 7, 'status' => 'Published', 'title' => 'Laravel Authentication: Implementing Login and Registration Systems', 'content' => 'Laravel Authentication: Implementing Login and Registration Systems']);

            Article::create(['author_id' => 8, 'status' => 'Published', 'title' => 'Improving Performance of Laravel Applications: Optimization Tips', 'content' => 'Improving Performance of Laravel Applications: Optimization Tips']);
            Article::create(['author_id' => 8, 'status' => 'Published', 'title' => 'How to Use Laravel Queues for Background Tasks', 'content' => 'How to Use Laravel Queues for Background Tasks']);
            Article::create(['author_id' => 8, 'status' => 'Published', 'title' => 'Creating Dynamic Forms and Validations in Laravel', 'content' => 'Creating Dynamic Forms and Validations in Laravel']);
            Article::create(['author_id' => 8, 'status' => 'Published', 'title' => 'Getting Started with PHP and MySQL: A Beginner’s Guide', 'content' => 'Getting Started with PHP and MySQL: A Beginner’s Guide']);
            Article::create(['author_id' => 8, 'status' => 'Published', 'title' => 'How to Create a Simple CRUD Application with PHP and MySQL', 'content' => 'How to Create a Simple CRUD Application with PHP and MySQL']);
            Article::create(['author_id' => 8, 'status' => 'Published', 'title' => 'PHP and MySQL: Building Your First Dynamic Website', 'content' => 'PHP and MySQL: Building Your First Dynamic Website']);
            Article::create(['author_id' => 8, 'status' => 'Published', 'title' => 'Top 10 Best Practices for PHP and MySQL Development', 'content' => 'Top 10 Best Practices for PHP and MySQL Development']);
            Article::create(['author_id' => 8, 'status' => 'Published', 'title' => 'How to Connect PHP with MySQL: Step-by-Step Guide', 'content' => 'How to Connect PHP with MySQL: Step-by-Step Guide']);
            Article::create(['author_id' => 8, 'status' => 'Published', 'title' => 'Form Handling in PHP with MySQL Database Integration', 'content' => 'Form Handling in PHP with MySQL Database Integration']);
            Article::create(['author_id' => 8, 'status' => 'Published', 'title' => 'User Authentication System Using PHP and MySQL', 'content' => 'User Authentication System Using PHP and MySQL']);

            Article::create(['author_id' => 9, 'status' => 'Published', 'title' => 'How to Use MySQLi and PDO in PHP for Secure Queries', 'content' => 'How to Use MySQLi and PDO in PHP for Secure Queries']);
            Article::create(['author_id' => 9, 'status' => 'Published', 'title' => 'Database Optimization Tips for PHP and MySQL Projects', 'content' => 'Database Optimization Tips for PHP and MySQL Projects']);
            Article::create(['author_id' => 9, 'status' => 'Published', 'title' => 'Building a Blog Application with PHP and MySQL', 'content' => 'Building a Blog Application with PHP and MySQL']);
            Article::create(['author_id' => 9, 'status' => 'Published', 'title' => 'How to Prevent SQL Injection in PHP Applications', 'content' => 'How to Prevent SQL Injection in PHP Applications']);
            Article::create(['author_id' => 9, 'status' => 'Published', 'title' => 'Pagination in PHP and MySQL: A Simple Example', 'content' => 'Pagination in PHP and MySQL: A Simple Example']);
            Article::create(['author_id' => 9, 'status' => 'Published', 'title' => 'PHP and MySQL for E-commerce: Building a Shopping Cart System', 'content' => 'PHP and MySQL for E-commerce: Building a Shopping Cart System']);
            Article::create(['author_id' => 9, 'status' => 'Published', 'title' => 'Creating Dynamic Charts Using PHP and MySQL Data', 'content' => 'Creating Dynamic Charts Using PHP and MySQL Data']);
            Article::create(['author_id' => 9, 'status' => 'Published', 'title' => 'How to Backup and Restore MySQL Databases in PHP Projects', 'content' => 'How to Backup and Restore MySQL Databases in PHP Projects']);
            Article::create(['author_id' => 9, 'status' => 'Published', 'title' => 'The Future of Digital Healthcare: Trends and Innovations', 'content' => 'The Future of Digital Healthcare: Trends and Innovations']);
            Article::create(['author_id' => 9, 'status' => 'Published', 'title' => 'How Telemedicine is Transforming Patient Care Worldwide', 'content' => 'How Telemedicine is Transforming Patient Care Worldwide']);

            Article::create(['author_id' => 10, 'status' => 'Published', 'title' => 'The Role of AI and Machine Learning in Digital Healthcare', 'content' => 'The Role of AI and Machine Learning in Digital Healthcare']);
            Article::create(['author_id' => 10, 'status' => 'Published', 'title' => 'Top 10 Digital Healthcare Tools for Remote Patient Monitoring', 'content' => 'Top 10 Digital Healthcare Tools for Remote Patient Monitoring']);
            Article::create(['author_id' => 10, 'status' => 'Published', 'title' => 'How Wearable Technology is Revolutionizing Health Tracking', 'content' => 'How Wearable Technology is Revolutionizing Health Tracking']);
            Article::create(['author_id' => 10, 'status' => 'Published', 'title' => 'Electronic Health Records (EHR): Benefits and Challenges in the Digital Era', 'content' => 'Electronic Health Records (EHR): Benefits and Challenges in the Digital Era']);
            Article::create(['author_id' => 10, 'status' => 'Published', 'title' => 'Data Security and Privacy in Digital Healthcare Systems', 'content' => 'Data Security and Privacy in Digital Healthcare Systems']);
            Article::create(['author_id' => 10, 'status' => 'Published', 'title' => 'The Impact of Mobile Apps on Healthcare Delivery', 'content' => 'The Impact of Mobile Apps on Healthcare Delivery']);
            Article::create(['author_id' => 10, 'status' => 'Published', 'title' => 'Digital Healthcare for Mental Health: Apps and Platforms Making a Difference', 'content' => 'Digital Healthcare for Mental Health: Apps and Platforms Making a Difference']);
            Article::create(['author_id' => 10, 'status' => 'Published', 'title' => 'How IoT Devices Improve Chronic Disease Management', 'content' => 'How IoT Devices Improve Chronic Disease Management']);
            Article::create(['author_id' => 10, 'status' => 'Published', 'title' => 'The Rise of Virtual Hospitals: Healthcare Beyond Physical Walls', 'content' => 'The Rise of Virtual Hospitals: Healthcare Beyond Physical Walls']);
            Article::create(['author_id' => 10, 'status' => 'Published', 'title' => 'How Digital Healthcare is Enhancing Patient Engagement and Experience', 'content' => 'How Digital Healthcare is Enhancing Patient Engagement and Experience']);
        }

        if (app()->environment(['production'])) {
            $this->truncate('article_categories');
            DB::table('article_categories')->insert([
                ['category_id' => 5,    'article_id' => 1],
                ['category_id' => 4,    'article_id' =>	2],
                ['category_id' => 5,    'article_id' =>	3],
                ['category_id' => 12,   'article_id' => 4],
                ['category_id' => 7,    'article_id' =>	5],
                ['category_id' => 7,    'article_id' =>	6],
                ['category_id' => 10,   'article_id' => 7],
                ['category_id' => 9,    'article_id' =>	8],
                ['category_id' => 18,   'article_id' => 9],
                ['category_id' => 19,   'article_id' => 10],
                ['category_id' => 20,   'article_id' => 11],
                ['category_id' => 1,    'article_id' =>	12],
                ['category_id' => 9,    'article_id' =>	13],
                ['category_id' => 10,   'article_id' => 14],
                ['category_id' => 2,    'article_id' =>	15],
                ['category_id' => 3,    'article_id' =>	16],
                ['category_id' => 3,    'article_id' =>	17],
                ['category_id' => 1,    'article_id' =>	18],
                ['category_id' => 3,    'article_id' =>	19],
                ['category_id' => 9,    'article_id' =>	20],
                ['category_id' => 15,   'article_id' => 21],
                ['category_id' => 19,   'article_id' => 22],
                ['category_id' => 5,    'article_id' =>	23],
                ['category_id' => 12,   'article_id' => 24],
                ['category_id' => 15,   'article_id' => 25],
                ['category_id' => 6,    'article_id' =>	26],
                ['category_id' => 7,    'article_id' =>	27],
                ['category_id' => 11,   'article_id' => 28],
                ['category_id' => 8,    'article_id' =>	29],
                ['category_id' => 14,   'article_id' => 30],
                ['category_id' => 19,   'article_id' => 31],
                ['category_id' => 16,   'article_id' => 32],
                ['category_id' => 1,    'article_id' =>	33],
                ['category_id' => 13,   'article_id' => 34],
                ['category_id' => 2,    'article_id' =>	35],
                ['category_id' => 12,   'article_id' => 36],
                ['category_id' => 2,    'article_id' =>	37],
                ['category_id' => 10,   'article_id' => 38],
                ['category_id' => 7,    'article_id' =>	39],
                ['category_id' => 13,   'article_id' => 40],
                ['category_id' => 17,   'article_id' => 41],
                ['category_id' => 13,   'article_id' => 42],
                ['category_id' => 3,    'article_id' =>	43],
                ['category_id' => 3,    'article_id' =>	44],
                ['category_id' => 3,    'article_id' =>	45],
                ['category_id' => 9,    'article_id' =>	46],
                ['category_id' => 1,    'article_id' =>	47],
                ['category_id' => 16,   'article_id' => 48],
                ['category_id' => 1,    'article_id' =>	49],
                ['category_id' => 2,    'article_id' =>	50],
                ['category_id' => 9,    'article_id' =>	51],
                ['category_id' => 6,    'article_id' =>	52],
                ['category_id' => 14,   'article_id' => 53],
                ['category_id' => 13,   'article_id' => 54],
                ['category_id' => 11,   'article_id' => 55],
                ['category_id' => 3,    'article_id' =>	56],
                ['category_id' => 10,   'article_id' => 57],
                ['category_id' => 6,    'article_id' =>	58],
                ['category_id' => 20,   'article_id' => 59],
                ['category_id' => 5,    'article_id' =>	60],
                ['category_id' => 18,   'article_id' => 61],
                ['category_id' => 16,   'article_id' => 62],
                ['category_id' => 10,   'article_id' => 63],
                ['category_id' => 13,   'article_id' => 64],
                ['category_id' => 3,    'article_id' =>	65],
                ['category_id' => 12,   'article_id' => 66],
                ['category_id' => 11,   'article_id' => 67],
                ['category_id' => 17,   'article_id' => 68],
                ['category_id' => 7,    'article_id' =>	69],
                ['category_id' => 20,   'article_id' => 70],
                ['category_id' => 3,    'article_id' =>	71],
                ['category_id' => 9,    'article_id' =>	72],
                ['category_id' => 6,    'article_id' =>	73],
                ['category_id' => 17,   'article_id' => 74],
                ['category_id' => 17,   'article_id' => 75],
                ['category_id' => 12,   'article_id' => 76],
                ['category_id' => 20,   'article_id' => 77],
                ['category_id' => 18,   'article_id' => 78],
                ['category_id' => 17,   'article_id' => 79],
                ['category_id' => 13,   'article_id' => 80],
                ['category_id' => 11,   'article_id' => 81],
                ['category_id' => 13,   'article_id' => 82],
                ['category_id' => 16,   'article_id' => 83],
                ['category_id' => 9,    'article_id' =>	84],
                ['category_id' => 11,   'article_id' => 85],
                ['category_id' => 9,    'article_id' =>	86],
                ['category_id' => 19,   'article_id' => 87],
                ['category_id' => 3,    'article_id' =>	88],
                ['category_id' => 15,   'article_id' => 89],
                ['category_id' => 7,    'article_id' =>	90],
                ['category_id' => 15,   'article_id' => 91],
                ['category_id' => 1,    'article_id' =>	92],
                ['category_id' => 20,   'article_id' => 93],
                ['category_id' => 16,   'article_id' => 94],
                ['category_id' => 13,   'article_id' => 95],
                ['category_id' => 9,    'article_id' =>	96],
                ['category_id' => 1,    'article_id' =>	97],
                ['category_id' => 14,   'article_id' => 98],
                ['category_id' => 6,    'article_id' =>	99],
                ['category_id' => 5,    'article_id' =>	100]
            ]);
        }

        if (app()->environment(['staging', 'testing', 'development', 'local'])) {
            $this->truncate('article_categories');
            DB::table('article_categories')->insert([
                ['category_id' => 5,    'article_id' => 1],
                ['category_id' => 4,    'article_id' =>	2],
                ['category_id' => 5,    'article_id' =>	3],
                ['category_id' => 12,   'article_id' => 4],
                ['category_id' => 7,    'article_id' =>	5],
                ['category_id' => 7,    'article_id' =>	6],
                ['category_id' => 10,   'article_id' => 7],
                ['category_id' => 9,    'article_id' =>	8],
                ['category_id' => 18,   'article_id' => 9],
                ['category_id' => 19,   'article_id' => 10],
                ['category_id' => 20,   'article_id' => 11],
                ['category_id' => 1,    'article_id' =>	12],
                ['category_id' => 9,    'article_id' =>	13],
                ['category_id' => 10,   'article_id' => 14],
                ['category_id' => 2,    'article_id' =>	15],
                ['category_id' => 3,    'article_id' =>	16],
                ['category_id' => 3,    'article_id' =>	17],
                ['category_id' => 1,    'article_id' =>	18],
                ['category_id' => 3,    'article_id' =>	19],
                ['category_id' => 9,    'article_id' =>	20],
                ['category_id' => 15,   'article_id' => 21],
                ['category_id' => 19,   'article_id' => 22],
                ['category_id' => 5,    'article_id' =>	23],
                ['category_id' => 12,   'article_id' => 24],
                ['category_id' => 15,   'article_id' => 25],
                ['category_id' => 6,    'article_id' =>	26],
                ['category_id' => 7,    'article_id' =>	27],
                ['category_id' => 11,   'article_id' => 28],
                ['category_id' => 8,    'article_id' =>	29],
                ['category_id' => 14,   'article_id' => 30],
                ['category_id' => 19,   'article_id' => 31],
                ['category_id' => 16,   'article_id' => 32],
                ['category_id' => 1,    'article_id' =>	33],
                ['category_id' => 13,   'article_id' => 34],
                ['category_id' => 2,    'article_id' =>	35],
                ['category_id' => 12,   'article_id' => 36],
                ['category_id' => 2,    'article_id' =>	37],
                ['category_id' => 10,   'article_id' => 38],
                ['category_id' => 7,    'article_id' =>	39],
                ['category_id' => 13,   'article_id' => 40],
                ['category_id' => 17,   'article_id' => 41],
                ['category_id' => 13,   'article_id' => 42],
                ['category_id' => 3,    'article_id' =>	43],
                ['category_id' => 3,    'article_id' =>	44],
                ['category_id' => 3,    'article_id' =>	45],
                ['category_id' => 9,    'article_id' =>	46],
                ['category_id' => 1,    'article_id' =>	47],
                ['category_id' => 16,   'article_id' => 48],
                ['category_id' => 1,    'article_id' =>	49],
                ['category_id' => 2,    'article_id' =>	50],
                ['category_id' => 9,    'article_id' =>	51],
                ['category_id' => 6,    'article_id' =>	52],
                ['category_id' => 14,   'article_id' => 53],
                ['category_id' => 13,   'article_id' => 54],
                ['category_id' => 11,   'article_id' => 55],
                ['category_id' => 3,    'article_id' =>	56],
                ['category_id' => 10,   'article_id' => 57],
                ['category_id' => 6,    'article_id' =>	58],
                ['category_id' => 20,   'article_id' => 59],
                ['category_id' => 5,    'article_id' =>	60],
                ['category_id' => 18,   'article_id' => 61],
                ['category_id' => 16,   'article_id' => 62],
                ['category_id' => 10,   'article_id' => 63],
                ['category_id' => 13,   'article_id' => 64],
                ['category_id' => 3,    'article_id' =>	65],
                ['category_id' => 12,   'article_id' => 66],
                ['category_id' => 11,   'article_id' => 67],
                ['category_id' => 17,   'article_id' => 68],
                ['category_id' => 7,    'article_id' =>	69],
                ['category_id' => 20,   'article_id' => 70],
                ['category_id' => 3,    'article_id' =>	71],
                ['category_id' => 9,    'article_id' =>	72],
                ['category_id' => 6,    'article_id' =>	73],
                ['category_id' => 17,   'article_id' => 74],
                ['category_id' => 17,   'article_id' => 75],
                ['category_id' => 12,   'article_id' => 76],
                ['category_id' => 20,   'article_id' => 77],
                ['category_id' => 18,   'article_id' => 78],
                ['category_id' => 17,   'article_id' => 79],
                ['category_id' => 13,   'article_id' => 80],
                ['category_id' => 11,   'article_id' => 81],
                ['category_id' => 13,   'article_id' => 82],
                ['category_id' => 16,   'article_id' => 83],
                ['category_id' => 9,    'article_id' =>	84],
                ['category_id' => 11,   'article_id' => 85],
                ['category_id' => 9,    'article_id' =>	86],
                ['category_id' => 19,   'article_id' => 87],
                ['category_id' => 3,    'article_id' =>	88],
                ['category_id' => 15,   'article_id' => 89],
                ['category_id' => 7,    'article_id' =>	90],
                ['category_id' => 15,   'article_id' => 91],
                ['category_id' => 1,    'article_id' =>	92],
                ['category_id' => 20,   'article_id' => 93],
                ['category_id' => 16,   'article_id' => 94],
                ['category_id' => 13,   'article_id' => 95],
                ['category_id' => 9,    'article_id' =>	96],
                ['category_id' => 1,    'article_id' =>	97],
                ['category_id' => 14,   'article_id' => 98],
                ['category_id' => 6,    'article_id' =>	99],
                ['category_id' => 5,    'article_id' =>	100]
            ]);
        }

        if (app()->environment(['production'])) {
            $this->truncate('article_tags');
            DB::table('article_tags')->insert([
                ['article_id' => 1,     'tag_id' => 17],
                ['article_id' => 1,     'tag_id' => 4],
                ['article_id' => 1,     'tag_id' => 3],
                ['article_id' => 2,     'tag_id' => 16],
                ['article_id' => 2,     'tag_id' => 6],
                ['article_id' => 2,     'tag_id' => 11],
                ['article_id' => 3,     'tag_id' => 21],
                ['article_id' => 3,     'tag_id' => 21],
                ['article_id' => 3,     'tag_id' => 16],
                ['article_id' => 4,     'tag_id' => 4],
                ['article_id' => 4,     'tag_id' => 18],
                ['article_id' => 4,     'tag_id' => 4],
                ['article_id' => 5,     'tag_id' => 24],
                ['article_id' => 5,     'tag_id' => 11],
                ['article_id' => 5,     'tag_id' => 14],
                ['article_id' => 6,     'tag_id' => 21],
                ['article_id' => 6,     'tag_id' => 20],
                ['article_id' => 6,     'tag_id' => 16],
                ['article_id' => 7,     'tag_id' => 13],
                ['article_id' => 7,     'tag_id' => 15],
                ['article_id' => 7,     'tag_id' => 17],
                ['article_id' => 8,     'tag_id' => 2],
                ['article_id' => 8,     'tag_id' => 13],
                ['article_id' => 8,     'tag_id' => 6],
                ['article_id' => 9,     'tag_id' => 15],
                ['article_id' => 9,     'tag_id' => 6],
                ['article_id' => 9,     'tag_id' => 16],
                ['article_id' => 10,    'tag_id' => 18],
                ['article_id' => 10,    'tag_id' => 22],
                ['article_id' => 10,    'tag_id' => 6],
                ['article_id' => 11,    'tag_id' => 22],
                ['article_id' => 11,    'tag_id' => 17],
                ['article_id' => 11,    'tag_id' => 19],
                ['article_id' => 12,    'tag_id' => 9],
                ['article_id' => 12,    'tag_id' => 21],
                ['article_id' => 12,    'tag_id' => 15],
                ['article_id' => 13,    'tag_id' => 20],
                ['article_id' => 13,    'tag_id' => 3],
                ['article_id' => 13,    'tag_id' => 16],
                ['article_id' => 14,    'tag_id' => 12],
                ['article_id' => 14,    'tag_id' => 9],
                ['article_id' => 14,    'tag_id' => 2],
                ['article_id' => 15,    'tag_id' => 2],
                ['article_id' => 15,    'tag_id' => 1],
                ['article_id' => 15,    'tag_id' => 15],
                ['article_id' => 16,    'tag_id' => 7],
                ['article_id' => 16,    'tag_id' => 24],
                ['article_id' => 16,    'tag_id' => 13],
                ['article_id' => 17,    'tag_id' => 12],
                ['article_id' => 17,    'tag_id' => 12],
                ['article_id' => 17,    'tag_id' => 13],
                ['article_id' => 18,    'tag_id' => 15],
                ['article_id' => 18,    'tag_id' => 16],
                ['article_id' => 18,    'tag_id' => 3],
                ['article_id' => 19,    'tag_id' => 5],
                ['article_id' => 19,    'tag_id' => 11],
                ['article_id' => 19,    'tag_id' => 15],
                ['article_id' => 20,    'tag_id' => 11],
                ['article_id' => 20,    'tag_id' => 21],
                ['article_id' => 20,    'tag_id' => 18],
                ['article_id' => 21,    'tag_id' => 22],
                ['article_id' => 21,    'tag_id' => 3],
                ['article_id' => 21,    'tag_id' => 14],
                ['article_id' => 22,    'tag_id' => 5],
                ['article_id' => 22,    'tag_id' => 10],
                ['article_id' => 22,    'tag_id' => 8],
                ['article_id' => 23,    'tag_id' => 7],
                ['article_id' => 23,    'tag_id' => 22],
                ['article_id' => 23,    'tag_id' => 17],
                ['article_id' => 24,    'tag_id' => 17],
                ['article_id' => 24,    'tag_id' => 20],
                ['article_id' => 24,    'tag_id' => 13],
                ['article_id' => 25,    'tag_id' => 19],
                ['article_id' => 25,    'tag_id' => 17],
                ['article_id' => 25,    'tag_id' => 17],
                ['article_id' => 26,    'tag_id' => 23],
                ['article_id' => 26,    'tag_id' => 4],
                ['article_id' => 26,    'tag_id' => 3],
                ['article_id' => 27,    'tag_id' => 16],
                ['article_id' => 27,    'tag_id' => 20],
                ['article_id' => 27,    'tag_id' => 15],
                ['article_id' => 28,    'tag_id' => 17],
                ['article_id' => 28,    'tag_id' => 11],
                ['article_id' => 28,    'tag_id' => 9],
                ['article_id' => 29,    'tag_id' => 16],
                ['article_id' => 29,    'tag_id' => 10],
                ['article_id' => 29,    'tag_id' => 6],
                ['article_id' => 30,    'tag_id' => 3],
                ['article_id' => 30,    'tag_id' => 19],
                ['article_id' => 30,    'tag_id' => 17],
                ['article_id' => 31,    'tag_id' => 14],
                ['article_id' => 31,    'tag_id' => 24],
                ['article_id' => 31,    'tag_id' => 5],
                ['article_id' => 32,    'tag_id' => 20],
                ['article_id' => 32,    'tag_id' => 2],
                ['article_id' => 32,    'tag_id' => 12],
                ['article_id' => 33,    'tag_id' => 9],
                ['article_id' => 33,    'tag_id' => 10],
                ['article_id' => 33,    'tag_id' => 9],
                ['article_id' => 34,    'tag_id' => 13],
                ['article_id' => 34,    'tag_id' => 24],
                ['article_id' => 34,    'tag_id' => 21],
                ['article_id' => 35,    'tag_id' => 10],
                ['article_id' => 35,    'tag_id' => 4],
                ['article_id' => 35,    'tag_id' => 7],
                ['article_id' => 36,    'tag_id' => 2],
                ['article_id' => 36,    'tag_id' => 10],
                ['article_id' => 36,    'tag_id' => 15],
                ['article_id' => 37,    'tag_id' => 17],
                ['article_id' => 37,    'tag_id' => 17],
                ['article_id' => 37,    'tag_id' => 4],
                ['article_id' => 38,    'tag_id' => 16],
                ['article_id' => 38,    'tag_id' => 11],
                ['article_id' => 38,    'tag_id' => 12],
                ['article_id' => 39,    'tag_id' => 22],
                ['article_id' => 39,    'tag_id' => 16],
                ['article_id' => 39,    'tag_id' => 10],
                ['article_id' => 40,    'tag_id' => 8],
                ['article_id' => 40,    'tag_id' => 4],
                ['article_id' => 40,    'tag_id' => 9],
                ['article_id' => 41,    'tag_id' => 1],
                ['article_id' => 41,    'tag_id' => 16],
                ['article_id' => 41,    'tag_id' => 8],
                ['article_id' => 42,    'tag_id' => 10],
                ['article_id' => 42,    'tag_id' => 10],
                ['article_id' => 42,    'tag_id' => 19],
                ['article_id' => 43,    'tag_id' => 14],
                ['article_id' => 43,    'tag_id' => 16],
                ['article_id' => 43,    'tag_id' => 3],
                ['article_id' => 44,    'tag_id' => 7],
                ['article_id' => 44,    'tag_id' => 14],
                ['article_id' => 44,    'tag_id' => 12],
                ['article_id' => 45,    'tag_id' => 14],
                ['article_id' => 45,    'tag_id' => 8],
                ['article_id' => 45,    'tag_id' => 3],
                ['article_id' => 46,    'tag_id' => 9],
                ['article_id' => 46,    'tag_id' => 21],
                ['article_id' => 46,    'tag_id' => 20],
                ['article_id' => 47,    'tag_id' => 16],
                ['article_id' => 47,    'tag_id' => 11],
                ['article_id' => 47,    'tag_id' => 16],
                ['article_id' => 48,    'tag_id' => 4],
                ['article_id' => 48,    'tag_id' => 13],
                ['article_id' => 48,    'tag_id' => 13],
                ['article_id' => 49,    'tag_id' => 5],
                ['article_id' => 49,    'tag_id' => 10],
                ['article_id' => 49,    'tag_id' => 15],
                ['article_id' => 50,    'tag_id' => 23],
                ['article_id' => 50,    'tag_id' => 9],
                ['article_id' => 50,    'tag_id' => 21],
                ['article_id' => 51,    'tag_id' => 23],
                ['article_id' => 51,    'tag_id' => 23],
                ['article_id' => 51,    'tag_id' => 13],
                ['article_id' => 52,    'tag_id' => 7],
                ['article_id' => 52,    'tag_id' => 21],
                ['article_id' => 52,    'tag_id' => 4],
                ['article_id' => 53,    'tag_id' => 17],
                ['article_id' => 53,    'tag_id' => 16],
                ['article_id' => 53,    'tag_id' => 4],
                ['article_id' => 54,    'tag_id' => 19],
                ['article_id' => 54,    'tag_id' => 16],
                ['article_id' => 54,    'tag_id' => 21],
                ['article_id' => 55,    'tag_id' => 1],
                ['article_id' => 55,    'tag_id' => 18],
                ['article_id' => 55,    'tag_id' => 5],
                ['article_id' => 56,    'tag_id' => 4],
                ['article_id' => 56,    'tag_id' => 20],
                ['article_id' => 56,    'tag_id' => 2],
                ['article_id' => 57,    'tag_id' => 5],
                ['article_id' => 57,    'tag_id' => 24],
                ['article_id' => 57,    'tag_id' => 17],
                ['article_id' => 58,    'tag_id' => 8],
                ['article_id' => 58,    'tag_id' => 20],
                ['article_id' => 58,    'tag_id' => 16],
                ['article_id' => 59,    'tag_id' => 1],
                ['article_id' => 59,    'tag_id' => 8],
                ['article_id' => 59,    'tag_id' => 19],
                ['article_id' => 60,    'tag_id' => 16],
                ['article_id' => 60,    'tag_id' => 13],
                ['article_id' => 60,    'tag_id' => 22],
                ['article_id' => 61,    'tag_id' => 11],
                ['article_id' => 61,    'tag_id' => 18],
                ['article_id' => 61,    'tag_id' => 15],
                ['article_id' => 62,    'tag_id' => 7],
                ['article_id' => 62,    'tag_id' => 2],
                ['article_id' => 62,    'tag_id' => 6],
                ['article_id' => 63,    'tag_id' => 18],
                ['article_id' => 63,    'tag_id' => 12],
                ['article_id' => 63,    'tag_id' => 9],
                ['article_id' => 64,    'tag_id' => 8],
                ['article_id' => 64,    'tag_id' => 13],
                ['article_id' => 64,    'tag_id' => 14],
                ['article_id' => 65,    'tag_id' => 23],
                ['article_id' => 65,    'tag_id' => 24],
                ['article_id' => 65,    'tag_id' => 19],
                ['article_id' => 66,    'tag_id' => 24],
                ['article_id' => 66,    'tag_id' => 19],
                ['article_id' => 66,    'tag_id' => 18],
                ['article_id' => 67,    'tag_id' => 12],
                ['article_id' => 67,    'tag_id' => 10],
                ['article_id' => 67,    'tag_id' => 11],
                ['article_id' => 68,    'tag_id' => 5],
                ['article_id' => 68,    'tag_id' => 15],
                ['article_id' => 68,    'tag_id' => 3],
                ['article_id' => 69,    'tag_id' => 23],
                ['article_id' => 69,    'tag_id' => 6],
                ['article_id' => 69,    'tag_id' => 9],
                ['article_id' => 70,    'tag_id' => 5],
                ['article_id' => 70,    'tag_id' => 16],
                ['article_id' => 70,    'tag_id' => 14],
                ['article_id' => 71,    'tag_id' => 8],
                ['article_id' => 71,    'tag_id' => 9],
                ['article_id' => 71,    'tag_id' => 3],
                ['article_id' => 72,    'tag_id' => 14],
                ['article_id' => 72,    'tag_id' => 23],
                ['article_id' => 72,    'tag_id' => 2],
                ['article_id' => 73,    'tag_id' => 14],
                ['article_id' => 73,    'tag_id' => 21],
                ['article_id' => 73,    'tag_id' => 13],
                ['article_id' => 74,    'tag_id' => 21],
                ['article_id' => 74,    'tag_id' => 10],
                ['article_id' => 74,    'tag_id' => 17],
                ['article_id' => 75,    'tag_id' => 17],
                ['article_id' => 75,    'tag_id' => 22],
                ['article_id' => 75,    'tag_id' => 9],
                ['article_id' => 76,    'tag_id' => 7],
                ['article_id' => 76,    'tag_id' => 16],
                ['article_id' => 76,    'tag_id' => 15],
                ['article_id' => 77,    'tag_id' => 3],
                ['article_id' => 77,    'tag_id' => 5],
                ['article_id' => 77,    'tag_id' => 14],
                ['article_id' => 78,    'tag_id' => 12],
                ['article_id' => 78,    'tag_id' => 14],
                ['article_id' => 78,    'tag_id' => 23],
                ['article_id' => 79,    'tag_id' => 2],
                ['article_id' => 79,    'tag_id' => 13],
                ['article_id' => 79,    'tag_id' => 21],
                ['article_id' => 80,    'tag_id' => 24],
                ['article_id' => 80,    'tag_id' => 21],
                ['article_id' => 80,    'tag_id' => 16],
                ['article_id' => 81,    'tag_id' => 7],
                ['article_id' => 81,    'tag_id' => 16],
                ['article_id' => 81,    'tag_id' => 1],
                ['article_id' => 82,    'tag_id' => 2],
                ['article_id' => 82,    'tag_id' => 15],
                ['article_id' => 82,    'tag_id' => 18],
                ['article_id' => 83,    'tag_id' => 16],
                ['article_id' => 83,    'tag_id' => 24],
                ['article_id' => 83,    'tag_id' => 23],
                ['article_id' => 84,    'tag_id' => 4],
                ['article_id' => 84,    'tag_id' => 19],
                ['article_id' => 84,    'tag_id' => 22],
                ['article_id' => 85,    'tag_id' => 9],
                ['article_id' => 85,    'tag_id' => 5],
                ['article_id' => 85,    'tag_id' => 1],
                ['article_id' => 86,    'tag_id' => 17],
                ['article_id' => 86,    'tag_id' => 6],
                ['article_id' => 86,    'tag_id' => 23],
                ['article_id' => 87,    'tag_id' => 9],
                ['article_id' => 87,    'tag_id' => 15],
                ['article_id' => 87,    'tag_id' => 14],
                ['article_id' => 88,    'tag_id' => 7],
                ['article_id' => 88,    'tag_id' => 15],
                ['article_id' => 88,    'tag_id' => 17],
                ['article_id' => 89,    'tag_id' => 12],
                ['article_id' => 89,    'tag_id' => 19],
                ['article_id' => 89,    'tag_id' => 24],
                ['article_id' => 90,    'tag_id' => 10],
                ['article_id' => 90,    'tag_id' => 6],
                ['article_id' => 90,    'tag_id' => 7],
                ['article_id' => 91,    'tag_id' => 19],
                ['article_id' => 91,    'tag_id' => 17],
                ['article_id' => 91,    'tag_id' => 9],
                ['article_id' => 92,    'tag_id' => 11],
                ['article_id' => 92,    'tag_id' => 11],
                ['article_id' => 92,    'tag_id' => 1],
                ['article_id' => 93,    'tag_id' => 17],
                ['article_id' => 93,    'tag_id' => 23],
                ['article_id' => 93,    'tag_id' => 22],
                ['article_id' => 94,    'tag_id' => 2],
                ['article_id' => 94,    'tag_id' => 13],
                ['article_id' => 94,    'tag_id' => 3],
                ['article_id' => 95,    'tag_id' => 9],
                ['article_id' => 95,    'tag_id' => 3],
                ['article_id' => 95,    'tag_id' => 10],
                ['article_id' => 96,    'tag_id' => 11],
                ['article_id' => 96,    'tag_id' => 21],
                ['article_id' => 96,    'tag_id' => 13],
                ['article_id' => 97,    'tag_id' => 5],
                ['article_id' => 97,    'tag_id' => 16],
                ['article_id' => 97,    'tag_id' => 14],
                ['article_id' => 98,    'tag_id' => 19],
                ['article_id' => 98,    'tag_id' => 15],
                ['article_id' => 98,    'tag_id' => 5],
                ['article_id' => 99,    'tag_id' => 3],
                ['article_id' => 99,    'tag_id' => 22],
                ['article_id' => 99,    'tag_id' => 9],
                ['article_id' => 100,   'tag_id' => 5],
                ['article_id' => 100,   'tag_id' => 20],
                ['article_id' => 100,   'tag_id' => 7],
            ]);
        }

        if (app()->environment(['staging', 'testing', 'development', 'local'])) {
            $this->truncate('article_tags');
            DB::table('article_tags')->insert([
                ['article_id' => 1,     'tag_id' => 17],
                ['article_id' => 1,     'tag_id' => 4],
                ['article_id' => 1,     'tag_id' => 3],
                ['article_id' => 2,     'tag_id' => 16],
                ['article_id' => 2,     'tag_id' => 6],
                ['article_id' => 2,     'tag_id' => 11],
                ['article_id' => 3,     'tag_id' => 21],
                ['article_id' => 3,     'tag_id' => 21],
                ['article_id' => 3,     'tag_id' => 16],
                ['article_id' => 4,     'tag_id' => 4],
                ['article_id' => 4,     'tag_id' => 18],
                ['article_id' => 4,     'tag_id' => 4],
                ['article_id' => 5,     'tag_id' => 24],
                ['article_id' => 5,     'tag_id' => 11],
                ['article_id' => 5,     'tag_id' => 14],
                ['article_id' => 6,     'tag_id' => 21],
                ['article_id' => 6,     'tag_id' => 20],
                ['article_id' => 6,     'tag_id' => 16],
                ['article_id' => 7,     'tag_id' => 13],
                ['article_id' => 7,     'tag_id' => 15],
                ['article_id' => 7,     'tag_id' => 17],
                ['article_id' => 8,     'tag_id' => 2],
                ['article_id' => 8,     'tag_id' => 13],
                ['article_id' => 8,     'tag_id' => 6],
                ['article_id' => 9,     'tag_id' => 15],
                ['article_id' => 9,     'tag_id' => 6],
                ['article_id' => 9,     'tag_id' => 16],
                ['article_id' => 10,    'tag_id' => 18],
                ['article_id' => 10,    'tag_id' => 22],
                ['article_id' => 10,    'tag_id' => 6],
                ['article_id' => 11,    'tag_id' => 22],
                ['article_id' => 11,    'tag_id' => 17],
                ['article_id' => 11,    'tag_id' => 19],
                ['article_id' => 12,    'tag_id' => 9],
                ['article_id' => 12,    'tag_id' => 21],
                ['article_id' => 12,    'tag_id' => 15],
                ['article_id' => 13,    'tag_id' => 20],
                ['article_id' => 13,    'tag_id' => 3],
                ['article_id' => 13,    'tag_id' => 16],
                ['article_id' => 14,    'tag_id' => 12],
                ['article_id' => 14,    'tag_id' => 9],
                ['article_id' => 14,    'tag_id' => 2],
                ['article_id' => 15,    'tag_id' => 2],
                ['article_id' => 15,    'tag_id' => 1],
                ['article_id' => 15,    'tag_id' => 15],
                ['article_id' => 16,    'tag_id' => 7],
                ['article_id' => 16,    'tag_id' => 24],
                ['article_id' => 16,    'tag_id' => 13],
                ['article_id' => 17,    'tag_id' => 12],
                ['article_id' => 17,    'tag_id' => 12],
                ['article_id' => 17,    'tag_id' => 13],
                ['article_id' => 18,    'tag_id' => 15],
                ['article_id' => 18,    'tag_id' => 16],
                ['article_id' => 18,    'tag_id' => 3],
                ['article_id' => 19,    'tag_id' => 5],
                ['article_id' => 19,    'tag_id' => 11],
                ['article_id' => 19,    'tag_id' => 15],
                ['article_id' => 20,    'tag_id' => 11],
                ['article_id' => 20,    'tag_id' => 21],
                ['article_id' => 20,    'tag_id' => 18],
                ['article_id' => 21,    'tag_id' => 22],
                ['article_id' => 21,    'tag_id' => 3],
                ['article_id' => 21,    'tag_id' => 14],
                ['article_id' => 22,    'tag_id' => 5],
                ['article_id' => 22,    'tag_id' => 10],
                ['article_id' => 22,    'tag_id' => 8],
                ['article_id' => 23,    'tag_id' => 7],
                ['article_id' => 23,    'tag_id' => 22],
                ['article_id' => 23,    'tag_id' => 17],
                ['article_id' => 24,    'tag_id' => 17],
                ['article_id' => 24,    'tag_id' => 20],
                ['article_id' => 24,    'tag_id' => 13],
                ['article_id' => 25,    'tag_id' => 19],
                ['article_id' => 25,    'tag_id' => 17],
                ['article_id' => 25,    'tag_id' => 17],
                ['article_id' => 26,    'tag_id' => 23],
                ['article_id' => 26,    'tag_id' => 4],
                ['article_id' => 26,    'tag_id' => 3],
                ['article_id' => 27,    'tag_id' => 16],
                ['article_id' => 27,    'tag_id' => 20],
                ['article_id' => 27,    'tag_id' => 15],
                ['article_id' => 28,    'tag_id' => 17],
                ['article_id' => 28,    'tag_id' => 11],
                ['article_id' => 28,    'tag_id' => 9],
                ['article_id' => 29,    'tag_id' => 16],
                ['article_id' => 29,    'tag_id' => 10],
                ['article_id' => 29,    'tag_id' => 6],
                ['article_id' => 30,    'tag_id' => 3],
                ['article_id' => 30,    'tag_id' => 19],
                ['article_id' => 30,    'tag_id' => 17],
                ['article_id' => 31,    'tag_id' => 14],
                ['article_id' => 31,    'tag_id' => 24],
                ['article_id' => 31,    'tag_id' => 5],
                ['article_id' => 32,    'tag_id' => 20],
                ['article_id' => 32,    'tag_id' => 2],
                ['article_id' => 32,    'tag_id' => 12],
                ['article_id' => 33,    'tag_id' => 9],
                ['article_id' => 33,    'tag_id' => 10],
                ['article_id' => 33,    'tag_id' => 9],
                ['article_id' => 34,    'tag_id' => 13],
                ['article_id' => 34,    'tag_id' => 24],
                ['article_id' => 34,    'tag_id' => 21],
                ['article_id' => 35,    'tag_id' => 10],
                ['article_id' => 35,    'tag_id' => 4],
                ['article_id' => 35,    'tag_id' => 7],
                ['article_id' => 36,    'tag_id' => 2],
                ['article_id' => 36,    'tag_id' => 10],
                ['article_id' => 36,    'tag_id' => 15],
                ['article_id' => 37,    'tag_id' => 17],
                ['article_id' => 37,    'tag_id' => 17],
                ['article_id' => 37,    'tag_id' => 4],
                ['article_id' => 38,    'tag_id' => 16],
                ['article_id' => 38,    'tag_id' => 11],
                ['article_id' => 38,    'tag_id' => 12],
                ['article_id' => 39,    'tag_id' => 22],
                ['article_id' => 39,    'tag_id' => 16],
                ['article_id' => 39,    'tag_id' => 10],
                ['article_id' => 40,    'tag_id' => 8],
                ['article_id' => 40,    'tag_id' => 4],
                ['article_id' => 40,    'tag_id' => 9],
                ['article_id' => 41,    'tag_id' => 1],
                ['article_id' => 41,    'tag_id' => 16],
                ['article_id' => 41,    'tag_id' => 8],
                ['article_id' => 42,    'tag_id' => 10],
                ['article_id' => 42,    'tag_id' => 10],
                ['article_id' => 42,    'tag_id' => 19],
                ['article_id' => 43,    'tag_id' => 14],
                ['article_id' => 43,    'tag_id' => 16],
                ['article_id' => 43,    'tag_id' => 3],
                ['article_id' => 44,    'tag_id' => 7],
                ['article_id' => 44,    'tag_id' => 14],
                ['article_id' => 44,    'tag_id' => 12],
                ['article_id' => 45,    'tag_id' => 14],
                ['article_id' => 45,    'tag_id' => 8],
                ['article_id' => 45,    'tag_id' => 3],
                ['article_id' => 46,    'tag_id' => 9],
                ['article_id' => 46,    'tag_id' => 21],
                ['article_id' => 46,    'tag_id' => 20],
                ['article_id' => 47,    'tag_id' => 16],
                ['article_id' => 47,    'tag_id' => 11],
                ['article_id' => 47,    'tag_id' => 16],
                ['article_id' => 48,    'tag_id' => 4],
                ['article_id' => 48,    'tag_id' => 13],
                ['article_id' => 48,    'tag_id' => 13],
                ['article_id' => 49,    'tag_id' => 5],
                ['article_id' => 49,    'tag_id' => 10],
                ['article_id' => 49,    'tag_id' => 15],
                ['article_id' => 50,    'tag_id' => 23],
                ['article_id' => 50,    'tag_id' => 9],
                ['article_id' => 50,    'tag_id' => 21],
                ['article_id' => 51,    'tag_id' => 23],
                ['article_id' => 51,    'tag_id' => 23],
                ['article_id' => 51,    'tag_id' => 13],
                ['article_id' => 52,    'tag_id' => 7],
                ['article_id' => 52,    'tag_id' => 21],
                ['article_id' => 52,    'tag_id' => 4],
                ['article_id' => 53,    'tag_id' => 17],
                ['article_id' => 53,    'tag_id' => 16],
                ['article_id' => 53,    'tag_id' => 4],
                ['article_id' => 54,    'tag_id' => 19],
                ['article_id' => 54,    'tag_id' => 16],
                ['article_id' => 54,    'tag_id' => 21],
                ['article_id' => 55,    'tag_id' => 1],
                ['article_id' => 55,    'tag_id' => 18],
                ['article_id' => 55,    'tag_id' => 5],
                ['article_id' => 56,    'tag_id' => 4],
                ['article_id' => 56,    'tag_id' => 20],
                ['article_id' => 56,    'tag_id' => 2],
                ['article_id' => 57,    'tag_id' => 5],
                ['article_id' => 57,    'tag_id' => 24],
                ['article_id' => 57,    'tag_id' => 17],
                ['article_id' => 58,    'tag_id' => 8],
                ['article_id' => 58,    'tag_id' => 20],
                ['article_id' => 58,    'tag_id' => 16],
                ['article_id' => 59,    'tag_id' => 1],
                ['article_id' => 59,    'tag_id' => 8],
                ['article_id' => 59,    'tag_id' => 19],
                ['article_id' => 60,    'tag_id' => 16],
                ['article_id' => 60,    'tag_id' => 13],
                ['article_id' => 60,    'tag_id' => 22],
                ['article_id' => 61,    'tag_id' => 11],
                ['article_id' => 61,    'tag_id' => 18],
                ['article_id' => 61,    'tag_id' => 15],
                ['article_id' => 62,    'tag_id' => 7],
                ['article_id' => 62,    'tag_id' => 2],
                ['article_id' => 62,    'tag_id' => 6],
                ['article_id' => 63,    'tag_id' => 18],
                ['article_id' => 63,    'tag_id' => 12],
                ['article_id' => 63,    'tag_id' => 9],
                ['article_id' => 64,    'tag_id' => 8],
                ['article_id' => 64,    'tag_id' => 13],
                ['article_id' => 64,    'tag_id' => 14],
                ['article_id' => 65,    'tag_id' => 23],
                ['article_id' => 65,    'tag_id' => 24],
                ['article_id' => 65,    'tag_id' => 19],
                ['article_id' => 66,    'tag_id' => 24],
                ['article_id' => 66,    'tag_id' => 19],
                ['article_id' => 66,    'tag_id' => 18],
                ['article_id' => 67,    'tag_id' => 12],
                ['article_id' => 67,    'tag_id' => 10],
                ['article_id' => 67,    'tag_id' => 11],
                ['article_id' => 68,    'tag_id' => 5],
                ['article_id' => 68,    'tag_id' => 15],
                ['article_id' => 68,    'tag_id' => 3],
                ['article_id' => 69,    'tag_id' => 23],
                ['article_id' => 69,    'tag_id' => 6],
                ['article_id' => 69,    'tag_id' => 9],
                ['article_id' => 70,    'tag_id' => 5],
                ['article_id' => 70,    'tag_id' => 16],
                ['article_id' => 70,    'tag_id' => 14],
                ['article_id' => 71,    'tag_id' => 8],
                ['article_id' => 71,    'tag_id' => 9],
                ['article_id' => 71,    'tag_id' => 3],
                ['article_id' => 72,    'tag_id' => 14],
                ['article_id' => 72,    'tag_id' => 23],
                ['article_id' => 72,    'tag_id' => 2],
                ['article_id' => 73,    'tag_id' => 14],
                ['article_id' => 73,    'tag_id' => 21],
                ['article_id' => 73,    'tag_id' => 13],
                ['article_id' => 74,    'tag_id' => 21],
                ['article_id' => 74,    'tag_id' => 10],
                ['article_id' => 74,    'tag_id' => 17],
                ['article_id' => 75,    'tag_id' => 17],
                ['article_id' => 75,    'tag_id' => 22],
                ['article_id' => 75,    'tag_id' => 9],
                ['article_id' => 76,    'tag_id' => 7],
                ['article_id' => 76,    'tag_id' => 16],
                ['article_id' => 76,    'tag_id' => 15],
                ['article_id' => 77,    'tag_id' => 3],
                ['article_id' => 77,    'tag_id' => 5],
                ['article_id' => 77,    'tag_id' => 14],
                ['article_id' => 78,    'tag_id' => 12],
                ['article_id' => 78,    'tag_id' => 14],
                ['article_id' => 78,    'tag_id' => 23],
                ['article_id' => 79,    'tag_id' => 2],
                ['article_id' => 79,    'tag_id' => 13],
                ['article_id' => 79,    'tag_id' => 21],
                ['article_id' => 80,    'tag_id' => 24],
                ['article_id' => 80,    'tag_id' => 21],
                ['article_id' => 80,    'tag_id' => 16],
                ['article_id' => 81,    'tag_id' => 7],
                ['article_id' => 81,    'tag_id' => 16],
                ['article_id' => 81,    'tag_id' => 1],
                ['article_id' => 82,    'tag_id' => 2],
                ['article_id' => 82,    'tag_id' => 15],
                ['article_id' => 82,    'tag_id' => 18],
                ['article_id' => 83,    'tag_id' => 16],
                ['article_id' => 83,    'tag_id' => 24],
                ['article_id' => 83,    'tag_id' => 23],
                ['article_id' => 84,    'tag_id' => 4],
                ['article_id' => 84,    'tag_id' => 19],
                ['article_id' => 84,    'tag_id' => 22],
                ['article_id' => 85,    'tag_id' => 9],
                ['article_id' => 85,    'tag_id' => 5],
                ['article_id' => 85,    'tag_id' => 1],
                ['article_id' => 86,    'tag_id' => 17],
                ['article_id' => 86,    'tag_id' => 6],
                ['article_id' => 86,    'tag_id' => 23],
                ['article_id' => 87,    'tag_id' => 9],
                ['article_id' => 87,    'tag_id' => 15],
                ['article_id' => 87,    'tag_id' => 14],
                ['article_id' => 88,    'tag_id' => 7],
                ['article_id' => 88,    'tag_id' => 15],
                ['article_id' => 88,    'tag_id' => 17],
                ['article_id' => 89,    'tag_id' => 12],
                ['article_id' => 89,    'tag_id' => 19],
                ['article_id' => 89,    'tag_id' => 24],
                ['article_id' => 90,    'tag_id' => 10],
                ['article_id' => 90,    'tag_id' => 6],
                ['article_id' => 90,    'tag_id' => 7],
                ['article_id' => 91,    'tag_id' => 19],
                ['article_id' => 91,    'tag_id' => 17],
                ['article_id' => 91,    'tag_id' => 9],
                ['article_id' => 92,    'tag_id' => 11],
                ['article_id' => 92,    'tag_id' => 11],
                ['article_id' => 92,    'tag_id' => 1],
                ['article_id' => 93,    'tag_id' => 17],
                ['article_id' => 93,    'tag_id' => 23],
                ['article_id' => 93,    'tag_id' => 22],
                ['article_id' => 94,    'tag_id' => 2],
                ['article_id' => 94,    'tag_id' => 13],
                ['article_id' => 94,    'tag_id' => 3],
                ['article_id' => 95,    'tag_id' => 9],
                ['article_id' => 95,    'tag_id' => 3],
                ['article_id' => 95,    'tag_id' => 10],
                ['article_id' => 96,    'tag_id' => 11],
                ['article_id' => 96,    'tag_id' => 21],
                ['article_id' => 96,    'tag_id' => 13],
                ['article_id' => 97,    'tag_id' => 5],
                ['article_id' => 97,    'tag_id' => 16],
                ['article_id' => 97,    'tag_id' => 14],
                ['article_id' => 98,    'tag_id' => 19],
                ['article_id' => 98,    'tag_id' => 15],
                ['article_id' => 98,    'tag_id' => 5],
                ['article_id' => 99,    'tag_id' => 3],
                ['article_id' => 99,    'tag_id' => 22],
                ['article_id' => 99,    'tag_id' => 9],
                ['article_id' => 100,   'tag_id' => 5],
                ['article_id' => 100,   'tag_id' => 20],
                ['article_id' => 100,   'tag_id' => 7],
            ]);
        }

        $this->enableForeignKeys();
    }
}
