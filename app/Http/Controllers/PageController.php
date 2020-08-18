<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Wink\WinkPage;

class PageController extends Controller
{
    public function show($slug)
    {
        return WinkPage::whereSlug($slug)
          ->firstOrFail();

        return view('page', compact('page'));
    }
}
