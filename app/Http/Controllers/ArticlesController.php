<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ArticlesController extends Controller
{
    public function index() : View
    {
//        dd("STOP");
        $data['articles'] = Article::all();
        return view('frontend.article.index', $data);
    }

    public function show(Article $article) : View
    {
        return view('frontend.article.show');
    }
}
