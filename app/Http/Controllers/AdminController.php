<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post as Post;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin/index');
    }

    public function posts()
    {
        $posts = Post::orderBy('created_at', 'DESC')->get();
        return view('admin/posts', ["posts" => $posts]);
    }

    public function new_post()
    {
        return view('admin/new-post');
    }
}
