<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::where('posted', 'yes')->paginate(2);
        return view('web.blog.index', compact('post'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return view('web.blog.show', compact('posts'));
    }

}
