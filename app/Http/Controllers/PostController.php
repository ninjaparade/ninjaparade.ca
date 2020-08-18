<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;

class PostController extends BasePostController
{
    protected $tag = 'blog';

    public function index()
    {
        return View::make('posts', [
            'title' => "Posts",
            'posts' => $this->getPosts(),
        ]);
    }

    public function show($slug)
    {
        return View::make('post', [
            'post'=> $this->getPost($slug),
        ]);
    }
}
