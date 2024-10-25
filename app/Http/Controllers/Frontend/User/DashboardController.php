<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function dashboard() : View
    {
        $data['articleCategories'] = Category::where('active', 1)->orderBy('id', 'ASC')->limit(10)->get();
        return view('frontend.user.dashboard', $data);
    }
}
