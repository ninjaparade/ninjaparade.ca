<?php

namespace App;

use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;
use Wink\WinkPost;

class WinkPostFeed extends WinkPost implements Feedable
{
    public static function getFeedItems()
    {
        return self::query()
          ->live()
          ->whereHas('tags', function ($query) {
              $query->where('slug', 'blog');
          })->get();
    }

    public function toFeedItem()
    {
        return FeedItem::create([
          'id' => $this->id,
          'title' => $this->title,
          'summary' => $this->excerpt,
          'updated' => $this->updated_at,
          'link' => route('post.show', $this->slug),
          'author' => $this->author->name,
      ]);
    }
}
