<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BasePostController;
use Illuminate\Support\Facades\View;

class TagController extends BasePostController
{
    public function show($tag)
    {
        return View::make('posts', [
            'title' => "Posts tagged {$tag}",
            'posts' => $this->getPostByTag($tag),
        ]);
    }
}
