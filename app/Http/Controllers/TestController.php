<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Tag;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        $comments = [
            ['article_id' => 1, 'user_id' => 21, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 1, 'user_id' => 22, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work!'],
            ['article_id' => 1, 'user_id' => 23, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 1, 'user_id' => 24, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 1, 'user_id' => 25, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 2, 'user_id' => 26, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 2, 'user_id' => 27, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 2, 'user_id' => 28, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 2, 'user_id' => 29, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 2, 'user_id' => 30, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 3, 'user_id' => 31, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 3, 'user_id' => 32, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 3, 'user_id' => 33, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 3, 'user_id' => 34, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 3, 'user_id' => 35, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 4, 'user_id' => 36, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 4, 'user_id' => 37, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 4, 'user_id' => 38, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 4, 'user_id' => 39, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 4, 'user_id' => 40, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 5, 'user_id' => 41, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 5, 'user_id' => 42, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 5, 'user_id' => 43, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 5, 'user_id' => 44, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 5, 'user_id' => 45, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 6, 'user_id' => 46, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 6, 'user_id' => 47, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 6, 'user_id' => 48, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 6, 'user_id' => 49, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 6, 'user_id' => 50, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 7, 'user_id' => 51, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 7, 'user_id' => 52, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 7, 'user_id' => 53, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 7, 'user_id' => 54, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 7, 'user_id' => 55, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 8, 'user_id' => 56, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 8, 'user_id' => 57, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 8, 'user_id' => 58, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 8, 'user_id' => 59, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 8, 'user_id' => 60, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 9, 'user_id' => 21, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 9, 'user_id' => 22, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 9, 'user_id' => 23, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 9, 'user_id' => 24, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 9, 'user_id' => 25, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 10, 'user_id' => 26, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 10, 'user_id' => 27, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 10, 'user_id' => 28, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 10, 'user_id' => 29, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 10, 'user_id' => 30, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 11, 'user_id' => 31, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 11, 'user_id' => 32, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 11, 'user_id' => 33, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 11, 'user_id' => 34, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 11, 'user_id' => 35, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 12, 'user_id' => 36, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 12, 'user_id' => 37, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 12, 'user_id' => 38, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 12, 'user_id' => 39, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 12, 'user_id' => 40, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 13, 'user_id' => 41, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 13, 'user_id' => 42, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 13, 'user_id' => 43, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 13, 'user_id' => 44, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 13, 'user_id' => 45, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 14, 'user_id' => 46, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 14, 'user_id' => 47, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 14, 'user_id' => 48, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 14, 'user_id' => 49, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 14, 'user_id' => 50, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 15, 'user_id' => 51, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 15, 'user_id' => 52, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 15, 'user_id' => 53, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 15, 'user_id' => 54, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 15, 'user_id' => 55, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 16, 'user_id' => 56, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 16, 'user_id' => 57, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 16, 'user_id' => 58, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 16, 'user_id' => 59, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 16, 'user_id' => 60, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 17, 'user_id' => 21, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 17, 'user_id' => 22, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 17, 'user_id' => 23, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 17, 'user_id' => 24, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 17, 'user_id' => 25, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 18, 'user_id' => 26, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 18, 'user_id' => 27, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 18, 'user_id' => 28, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 18, 'user_id' => 29, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 18, 'user_id' => 30, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 19, 'user_id' => 31, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 19, 'user_id' => 32, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 19, 'user_id' => 33, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 19, 'user_id' => 34, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 19, 'user_id' => 35, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 20, 'user_id' => 36, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 20, 'user_id' => 37, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 20, 'user_id' => 38, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 20, 'user_id' => 39, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 20, 'user_id' => 40, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 21, 'user_id' => 41, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 21, 'user_id' => 42, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 21, 'user_id' => 43, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 21, 'user_id' => 44, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 21, 'user_id' => 45, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 22, 'user_id' => 46, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 22, 'user_id' => 47, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 22, 'user_id' => 48, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 22, 'user_id' => 49, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 22, 'user_id' => 50, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 23, 'user_id' => 51, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 23, 'user_id' => 52, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 23, 'user_id' => 53, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 23, 'user_id' => 54, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 23, 'user_id' => 55, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 24, 'user_id' => 56, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 24, 'user_id' => 57, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 24, 'user_id' => 58, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 24, 'user_id' => 59, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 24, 'user_id' => 60, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 25, 'user_id' => 21, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 25, 'user_id' => 22, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 25, 'user_id' => 23, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 25, 'user_id' => 24, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 25, 'user_id' => 25, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 26, 'user_id' => 26, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 26, 'user_id' => 27, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 26, 'user_id' => 28, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 26, 'user_id' => 29, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 26, 'user_id' => 30, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 27, 'user_id' => 31, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 27, 'user_id' => 32, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 27, 'user_id' => 33, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 27, 'user_id' => 34, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 27, 'user_id' => 35, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 28, 'user_id' => 36, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 28, 'user_id' => 37, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 28, 'user_id' => 38, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 28, 'user_id' => 39, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 28, 'user_id' => 40, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 29, 'user_id' => 41, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 29, 'user_id' => 42, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 29, 'user_id' => 43, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 29, 'user_id' => 44, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 29, 'user_id' => 45, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 30, 'user_id' => 46, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 30, 'user_id' => 47, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 30, 'user_id' => 48, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 30, 'user_id' => 49, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 30, 'user_id' => 50, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 31, 'user_id' => 51, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 31, 'user_id' => 52, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 31, 'user_id' => 53, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 31, 'user_id' => 54, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 31, 'user_id' => 55, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 32, 'user_id' => 56, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 32, 'user_id' => 57, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 32, 'user_id' => 58, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 32, 'user_id' => 59, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 32, 'user_id' => 60, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 33, 'user_id' => 21, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 33, 'user_id' => 22, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 33, 'user_id' => 23, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 33, 'user_id' => 24, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 33, 'user_id' => 25, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 34, 'user_id' => 26, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 34, 'user_id' => 27, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 34, 'user_id' => 28, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 34, 'user_id' => 29, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 34, 'user_id' => 30, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 35, 'user_id' => 31, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 35, 'user_id' => 32, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 35, 'user_id' => 33, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 35, 'user_id' => 34, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 35, 'user_id' => 35, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 36, 'user_id' => 36, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 36, 'user_id' => 37, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 36, 'user_id' => 38, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 36, 'user_id' => 39, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 36, 'user_id' => 40, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 37, 'user_id' => 41, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 37, 'user_id' => 42, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 37, 'user_id' => 43, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 37, 'user_id' => 44, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 37, 'user_id' => 45, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 38, 'user_id' => 46, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 38, 'user_id' => 47, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 38, 'user_id' => 48, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 38, 'user_id' => 49, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 38, 'user_id' => 50, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 39, 'user_id' => 51, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 39, 'user_id' => 52, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 39, 'user_id' => 53, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 39, 'user_id' => 54, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 39, 'user_id' => 55, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 40, 'user_id' => 56, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 40, 'user_id' => 57, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 40, 'user_id' => 58, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 40, 'user_id' => 59, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 40, 'user_id' => 60, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 41, 'user_id' => 21, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 41, 'user_id' => 22, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 41, 'user_id' => 23, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 41, 'user_id' => 24, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 41, 'user_id' => 25, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 42, 'user_id' => 26, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 42, 'user_id' => 27, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 42, 'user_id' => 28, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 42, 'user_id' => 29, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 42, 'user_id' => 30, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 43, 'user_id' => 31, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 43, 'user_id' => 32, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 43, 'user_id' => 33, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 43, 'user_id' => 34, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 43, 'user_id' => 35, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 44, 'user_id' => 36, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 44, 'user_id' => 37, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 44, 'user_id' => 38, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 44, 'user_id' => 39, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 44, 'user_id' => 40, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 45, 'user_id' => 41, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 45, 'user_id' => 42, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 45, 'user_id' => 43, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 45, 'user_id' => 44, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 45, 'user_id' => 45, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 46, 'user_id' => 46, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 46, 'user_id' => 47, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 46, 'user_id' => 48, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 46, 'user_id' => 49, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 46, 'user_id' => 50, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 47, 'user_id' => 51, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 47, 'user_id' => 52, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 47, 'user_id' => 53, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 47, 'user_id' => 54, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 47, 'user_id' => 55, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 48, 'user_id' => 56, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 48, 'user_id' => 57, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 48, 'user_id' => 58, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 48, 'user_id' => 59, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 48, 'user_id' => 60, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 49, 'user_id' => 21, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 49, 'user_id' => 22, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 49, 'user_id' => 23, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 49, 'user_id' => 24, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 49, 'user_id' => 25, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 50, 'user_id' => 26, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 50, 'user_id' => 27, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 50, 'user_id' => 28, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 50, 'user_id' => 29, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 50, 'user_id' => 30, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 51, 'user_id' => 31, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 51, 'user_id' => 32, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 51, 'user_id' => 33, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 51, 'user_id' => 34, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 51, 'user_id' => 35, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 52, 'user_id' => 36, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 52, 'user_id' => 37, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 52, 'user_id' => 38, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 52, 'user_id' => 39, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 52, 'user_id' => 40, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 53, 'user_id' => 41, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 53, 'user_id' => 42, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 53, 'user_id' => 43, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 53, 'user_id' => 44, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 53, 'user_id' => 45, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 54, 'user_id' => 46, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 54, 'user_id' => 47, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 54, 'user_id' => 48, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 54, 'user_id' => 49, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 54, 'user_id' => 50, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 55, 'user_id' => 51, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 55, 'user_id' => 52, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 55, 'user_id' => 53, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 55, 'user_id' => 54, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 55, 'user_id' => 55, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 56, 'user_id' => 56, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 56, 'user_id' => 57, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 56, 'user_id' => 58, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 56, 'user_id' => 59, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 56, 'user_id' => 60, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 57, 'user_id' => 21, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 57, 'user_id' => 22, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 57, 'user_id' => 23, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 57, 'user_id' => 24, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 57, 'user_id' => 25, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 58, 'user_id' => 26, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 58, 'user_id' => 27, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 58, 'user_id' => 28, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 58, 'user_id' => 29, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 58, 'user_id' => 30, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 59, 'user_id' => 31, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 59, 'user_id' => 32, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 59, 'user_id' => 33, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 59, 'user_id' => 34, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 59, 'user_id' => 35, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 60, 'user_id' => 36, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 60, 'user_id' => 37, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 60, 'user_id' => 38, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 60, 'user_id' => 39, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 60, 'user_id' => 40, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 61, 'user_id' => 41, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 61, 'user_id' => 42, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 61, 'user_id' => 43, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 61, 'user_id' => 44, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 61, 'user_id' => 45, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 62, 'user_id' => 46, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 62, 'user_id' => 47, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 62, 'user_id' => 48, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 62, 'user_id' => 49, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 62, 'user_id' => 50, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 63, 'user_id' => 51, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 63, 'user_id' => 52, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 63, 'user_id' => 53, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 63, 'user_id' => 54, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 63, 'user_id' => 55, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 64, 'user_id' => 56, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 64, 'user_id' => 57, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 64, 'user_id' => 58, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 64, 'user_id' => 59, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 64, 'user_id' => 60, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 65, 'user_id' => 21, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 65, 'user_id' => 22, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 65, 'user_id' => 23, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 65, 'user_id' => 24, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 65, 'user_id' => 25, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 66, 'user_id' => 26, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 66, 'user_id' => 27, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 66, 'user_id' => 28, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 66, 'user_id' => 29, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 66, 'user_id' => 30, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 67, 'user_id' => 31, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 67, 'user_id' => 32, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 67, 'user_id' => 33, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 67, 'user_id' => 34, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 67, 'user_id' => 35, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 68, 'user_id' => 36, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 68, 'user_id' => 37, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 68, 'user_id' => 38, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 68, 'user_id' => 39, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 68, 'user_id' => 40, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 69, 'user_id' => 41, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 69, 'user_id' => 42, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 69, 'user_id' => 43, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 69, 'user_id' => 44, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 69, 'user_id' => 45, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 70, 'user_id' => 46, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 70, 'user_id' => 47, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 70, 'user_id' => 48, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 70, 'user_id' => 49, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 70, 'user_id' => 50, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 71, 'user_id' => 51, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 71, 'user_id' => 52, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 71, 'user_id' => 53, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 71, 'user_id' => 54, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 71, 'user_id' => 55, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 72, 'user_id' => 56, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 72, 'user_id' => 57, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 72, 'user_id' => 58, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 72, 'user_id' => 59, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 72, 'user_id' => 60, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 73, 'user_id' => 21, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 73, 'user_id' => 22, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 73, 'user_id' => 23, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 73, 'user_id' => 24, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 73, 'user_id' => 25, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 74, 'user_id' => 26, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 74, 'user_id' => 27, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 74, 'user_id' => 28, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 74, 'user_id' => 29, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 74, 'user_id' => 30, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 75, 'user_id' => 31, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 75, 'user_id' => 32, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 75, 'user_id' => 33, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 75, 'user_id' => 34, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 75, 'user_id' => 35, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 76, 'user_id' => 36, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 76, 'user_id' => 37, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 76, 'user_id' => 38, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 76, 'user_id' => 39, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 76, 'user_id' => 40, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 77, 'user_id' => 41, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 77, 'user_id' => 42, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 77, 'user_id' => 43, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 77, 'user_id' => 44, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 77, 'user_id' => 45, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 78, 'user_id' => 46, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 78, 'user_id' => 47, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 78, 'user_id' => 48, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 78, 'user_id' => 49, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 78, 'user_id' => 50, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 79, 'user_id' => 51, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 79, 'user_id' => 52, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 79, 'user_id' => 53, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 79, 'user_id' => 54, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 79, 'user_id' => 55, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],

            ['article_id' => 80, 'user_id' => 56, 'status' => 'Approved', 'comment' => 'Thanks for the valuable insights! This post really breaks things down in an easy-to-understand way.'],
            ['article_id' => 80, 'user_id' => 57, 'status' => 'Approved', 'comment' => 'Interesting post! It covers relevant points, and I enjoyed the practical approach. Keep up the good work.'],
            ['article_id' => 80, 'user_id' => 58, 'status' => 'Approved', 'comment' => 'Great read! Thanks for sharing this useful information. I learned a lot and will definitely apply these tips.'],
            ['article_id' => 80, 'user_id' => 59, 'status' => 'Approved', 'comment' => 'Amazing article! The information is well-researched and actionable. I’ll definitely revisit this post for future reference.'],
            ['article_id' => 80, 'user_id' => 60, 'status' => 'Approved', 'comment' => 'This post was insightful! I appreciate the clear explanations and practical tips. Looking forward to more content like this.'],
        ];

//        dd(count($comments));
//        Comment::insert($comments);

        return view('frontend.temp');
    }
}