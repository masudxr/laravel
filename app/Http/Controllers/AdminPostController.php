<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class AdminPostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::paginate(50),
            'categories' => Category::all()


        ]);
    }
}
