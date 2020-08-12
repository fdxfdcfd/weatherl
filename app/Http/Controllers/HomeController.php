<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //fetch 5 posts from database which are active and latest
        $posts = Posts::where('active',1)->orderBy('created_at','desc')->paginate(10);
        //page heading
        //return home.blade.php template from resources/views folder
        return view('home')->withPosts($posts);
    }
}
