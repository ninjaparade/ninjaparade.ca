@extends('layout')

@section('social')
<title>{{ $post->title }}</title>
<meta name="description" content="{{ $post->meta['meta_description'] }}">
<meta property="og:url" content="{{ route('post.show', $post->slug) }}" />
<meta property="og:title" content="{{ $post->meta['opengraph_title'] }}" />
<meta property="og:image" content="{{ asset($post->meta['opengraph_image']) }}" />
<meta property="og:image:secure_url" content="{{ asset($post->meta['opengraph_image']) }}" />
<meta property="og:image:width" content="{{ $post->meta['opengraph_image_width'] }}" />
<meta property="og:image:height" content="{{ $post->meta['opengraph_image_height'] }}" />
<meta property="og:description" content="{{ $post->meta['opengraph_description'] }}" />

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $post->meta['twitter_title'] }}">
<meta name="twitter:description" content="{{ $post->meta['twitter_description'] }}">
<meta name="twitter:image" content="{{ asset($post->meta['twitter_image']) }}">

@endsection

@section('content')
<main class="container flex flex-col px-5 py-10 mx-auto">
     <article class="xl:divide-y xl:divide-gray-200">
          <div class="xl:divide-y-0 xl:grid xl:grid-cols-4 xl:col-gap-6 xl:pb-20" style="grid-template-rows: auto 1fr;">
               <div class="xl:pb-0 xl:col-span-3 xl:row-span-2">
                    <div class="pt-8 lg:hidden"><a class="text-gray-600 hover:text-gray-600"
                              href="{{ route('posts.index') }}">←
                              Back</a></div>
                    <header class="pt-6 xl:pb-10">
                         <div class="space-y-2">
                              <dl class="space-y-10">
                                   <div>
                                        <dt class="sr-only">Published on</dt>
                                        <dd class="text-base font-medium leading-6 text-gray-600"><time
                                                  datetime="{{ $post->publish_date->format('Y-m-d') }}">
                                                  {{ $post->publish_date->format('M d, Y') }}
                                             </time></dd>
                                   </div>
                              </dl>
                              <div>

                                   <h1
                                        class="text-3xl font-extrabold leading-9 tracking-tight text-gray-900 sm:text-4xl sm:leading-10 md:text-5xl md:leading-14">
                                        {{ $post->title }}</h1>
                              </div>
                         </div>
                         <dl class="pt-4 mt-4 xl:pt-11">
                              <dt class="sr-only">Author</dt>
                              <dd>
                                   <ul
                                        class="flex justify-center space-x-8 xl:block sm:space-x-12 xl:space-x-0 xl:space-y-8">
                                        <li class="flex items-center space-x-2"><img src="{{ $post->author_avatar }}"
                                                  alt="" class="w-10 h-10 rounded-full">
                                             <dl class="text-sm font-medium leading-5 whitespace-no-wrap">
                                                  <dt class="sr-only">Name</dt>
                                                  <dd class="text-gray-700">{{ $post->author_name }}</dd>
                                                  <dt class="sr-only">Author bio</dt>
                                                  <dd class="text-gray-500">
                                                       {!! $post->author_bio !!}
                                                  </dd>
                                             </dl>
                                        </li>

                                   </ul>
                              </dd>
                         </dl>
                    </header>
                    <div class="pb-8 prose max-w-none">
                         {!! $post->content !!}
                    </div>
               </div>
               <footer class="text-sm font-medium leading-5 xl:col-start-1 xl:row-start-2">
                    <div class="pt-8"><a class="text-gray-600 hover:text-gray-600" href="{{ route('posts.index') }}">←
                              Back</a></div>
               </footer>
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