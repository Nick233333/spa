<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        return Post::paginate(7);
    }

    public function show(Post $post)
    {
        return $post;
    }
}
