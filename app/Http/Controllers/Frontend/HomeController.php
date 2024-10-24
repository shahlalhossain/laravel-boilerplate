<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function home() : View
    {

        $data['articleCategories'] = Category::where('active', 1)->orderBy('id', 'ASC')->limit(10)->get();
//        dd($data['articleCategories']);
        $data['featuredArticles'] = Article::where('status', 'Published')->where('is_featured', 1)->get();
//        dd($featuredArticles->count());
        return view('frontend.home', $data);
    }
}
