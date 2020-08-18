<?php

namespace App\Observers;

use Illuminate\Support\Facades\Cache;
use Wink\WinkPost;

class WinkPostObserver
{
    public function updated(WinkPost $winkPost)
    {
        $this->clearCache($winkPost);
    }

    public function deleted(WinkPost $winkPost)
    {
        $this->clearCache($winkPost);
    }

    public function restored(WinkPost $winkPost)
    {
        $this->clearCache($winkPost);
    }

    public function forceDeleted(WinkPost $winkPost)
    {
        $this->clearCache($winkPost);
    }

    protected function clearCache(WinkPost $winkPost)
    {
        Cache::forget("posts.articles.{$winkPost->tags->first()->slug}");
        Cache::forget("posts.articles.{$winkPost->tags->first()->slug}.{$winkPost->slug}");
        // Cache::forget("posts.documentation.{$winkPost->slug}");
    }
}
