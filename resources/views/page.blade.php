@extends('layout')

@section('social')
<title>{{ $page->title }}</title>
<meta name="description" content="{{ $page->meta['meta_description'] }}">
<meta property="og:url" content="{{ route('post.show', $page->slug) }}" />
<meta property="og:title" content="{{ $page->meta['opengraph_title'] }}" />
<meta property="og:image" content="{{ asset($page->meta['opengraph_image']) }}" />
<meta property="og:image:secure_url" content="{{ asset($page->meta['opengraph_image']) }}" />
<meta property="og:image:width" content="{{ $page->meta['opengraph_image_width'] }}" />
<meta property="og:image:height" content="{{ $page->meta['opengraph_image_height'] }}" />
<meta property="og:description" content="{{ $page->meta['opengraph_description'] }}" />

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $page->meta['twitter_title'] }}">
<meta name="twitter:description" content="{{ $page->meta['twitter_description'] }}">
<meta name="twitter:image" content="{{ asset($page->meta['twitter_image']) }}">

@endsection

@section('content')
<main class="container flex flex-col px-5 pb-10 mx-auto">
     <article class="xl:divide-y xl:divide-gray-200">
          <div class="xl:divide-y-0 xl:grid xl:grid-cols-4 xl:col-gap-6 xl:pb-20" style="grid-template-rows: auto 1fr;">
               <div class="xl:pb-0 xl:col-span-3 xl:row-span-2">
                    <div class="pb-8 prose max-w-none">
                         {!! $page->content !!}
                    </div>
               </div>

          </div>
     </article>
</main>
@endsection


@push('scripts')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/styles/atom-one-dark.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.2/highlight.min.js" defer></script>
<script>
     window.onload = function () {
          document.querySelectorAll('pre').forEach((block) => {
               hljs.highlightBlock(block);
          });

     };
</script>
@endpush