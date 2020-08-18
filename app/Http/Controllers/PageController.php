<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Wink\WinkPage;

class PageController extends Controller
{
    public function index($slug)
    {
        $page = Cache::remember("pages.{$slug}", Config::get('wink.cache_for'), function () use ($slug) {
            return WinkPage::whereSlug($slug)
          ->firstOrFail();
        });

        return view('page', compact('page'));
    }
}
