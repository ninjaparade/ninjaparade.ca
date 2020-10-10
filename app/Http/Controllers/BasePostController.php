<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Wink\WinkAuthor;
use Wink\WinkPost;
use Wink\WinkTag;

class BasePostController extends Controller
{
    protected $tag;

    public function getPosts()
    {
        return WinkPost::query()
        ->whereHas('tags', function ($query) {
            $query->where('slug', $this->tag);
        })
        ->where(function ($query) {
            $query
                ->where('published', true)
                ->where('publish_date', '<', now());
        })->addSelect([
            'author_name' => WinkAuthor::select('name')
                ->whereColumn('wink_posts.author_id', 'wink_authors.id')
                ->limit(1),
        ])
        ->addSelect([
            'author_avatar' => WinkAuthor::select('avatar')
                ->whereColumn('wink_posts.author_id', 'wink_authors.id')
                ->limit(1),
        ])
        ->addSelect([
            'author_bio' => WinkAuthor::select('bio')
                ->whereColumn('wink_posts.author_id', 'wink_authors.id')
                ->limit(1),
        ])
        ->with(['tags'])
        ->orderBy('publish_date')
        ->get();

        return view('articles', compact('articles'));
    }

    public function getPost($slug)
    {
        return WinkPost::query()
            ->whereSlug($slug)->whereHas('tags', function ($query) {
                $query->where('slug', $this->tag);
            })
            ->addSelect([
                'author_name' => WinkAuthor::select('name')
                    ->whereColumn('wink_posts.author_id', 'wink_authors.id')
                    ->limit(1),
            ])
            ->addSelect([
                'author_avatar' => WinkAuthor::select('avatar')
                    ->whereColumn('wink_posts.author_id', 'wink_authors.id')
                    ->limit(1),
            ])
            ->addSelect([
                'author_bio' => WinkAuthor::select('bio')
                    ->whereColumn('wink_posts.author_id', 'wink_authors.id')
                    ->limit(1),
            ])
            ->with(['tags'])
            ->firstOrFail();
    }

    public function getPostByTag($tag)
    {
        return WinkPost::tag($tag)
            ->addSelect([
                'author_name' => WinkAuthor::select('name')
                    ->whereColumn('wink_posts.author_id', 'wink_authors.id')
                    ->limit(1),
            ])
            ->addSelect([
                'author_avatar' => WinkAuthor::select('avatar')
                    ->whereColumn('wink_posts.author_id', 'wink_authors.id')
                    ->limit(1),
            ])
            ->addSelect([
                'author_bio' => WinkAuthor::select('bio')
                    ->whereColumn('wink_posts.author_id', 'wink_authors.id')
                    ->limit(1),
            ])
            ->with(['tags'])
            ->latest()
            ->get();
    }
}
