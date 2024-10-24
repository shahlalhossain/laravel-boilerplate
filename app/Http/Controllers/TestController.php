<?php

namespace App\Http\Controllers;

use App\Events\User\UserLoggedOut;
use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Jenssegers\Agent\Agent;

class TestController extends Controller
{
    public function test(Request $request)
    {
        //
    }
}
