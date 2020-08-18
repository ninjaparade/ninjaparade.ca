<?php

namespace App\Observers;

use Illuminate\Support\Facades\Cache;
use Wink\WinkPage;

class WinkPageObserver
{
    public function updated(WinkPage $winkPage)
    {
        Cache::forget("pages.{$winkPage->slug}");
    }

    public function deleted(WinkPage $winkPage)
    {
        Cache::forget("pages.{$winkPage->slug}");
    }

    public function restored(WinkPage $winkPage)
    {
        Cache::forget("pages.{$winkPage->slug}");
    }

    public function forceDeleted(WinkPage $winkPage)
    {
        Cache::forget("pages.{$winkPage->slug}");
    }
}
