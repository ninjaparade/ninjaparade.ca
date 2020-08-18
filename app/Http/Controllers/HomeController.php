<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Wink\WinkPage;

class HomeController extends Controller
{
    public function index()
    {
        return view('page', ['page' => WinkPage::whereSlug('home')
          ->firstOrFail()]);
    }
}
