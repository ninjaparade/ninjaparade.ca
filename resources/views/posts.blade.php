@extends('layout')

@section('content')
<section class="overflow-hidden text-gray-700 body-font">

     <div class="container px-5 py-24 pt-10 mx-auto">
          <div class="mb-8 border-b border-gray-200">
               <div class="flex-1 min-w-0">
                    <h2
                         class="my-4 text-2xl font-extrabold leading-9 tracking-tight text-gray-900 sm:text-4xl sm:leading-10 md:text-4xl md:leading-14">
                         {{ $title }}
                    </h2>
               </div>
          </div>

          <div class="flex flex-wrap mt-4 -m-12">
               @foreach($posts as $post)
               <div class="flex flex-col items-start p-12 md:w-1/2">
                    <div class="flex flex-row w-full">
                         @foreach($post->tags as $tag)
                         <a class="px-3 py-1 mr-2 text-sm font-medium tracking-widest text-gray-600 bg-gray-200 rounded hover:text-gray-600"
                              href="{{ route('tag.show', ['tag' => $tag->slug]) }}">{{ $tag->name }}
                         </a>
                         @endforeach
                    </div>
                    <a href="{{ route('post.show', $post->slug) }}">
                         <h2
                              class="my-4 text-xl font-extrabold leading-9 tracking-tight text-gray-900 sm:text-4xl sm:leading-10 md:text-4xl md:leading-14">
                              {{ $post->title }}
                         </h2>
                    </a>
                    <p class="mb-8 prose"> {{ $post->excerpt }}</p>
                    <div
                         class="flex flex-wrap items-center w-full pb-4 mt-auto mb-4 text-sm font-medium text-gray-600 border-b-2 border-gray-200">
                         <time datetime="{{ $post->publish_date->format('Y-m-d') }}">
                              Posted {{ $post->publish_date->format('M d, Y') }}
                         </time>
                         <span
                              class="inline-flex items-center py-1 pr-3 ml-auto mr-3 text-sm leading-none text-gray-600">
                              <a href="{{ route('post.show', $post->slug) }}"
                                   class="inline-flex items-center hover:text-gray-600">Keep reading
                                   <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5l7 7-7 7"></path>
                                   </svg>
                              </a>
                         </span>
                    </div>
               </div>
               @endforeach
          </div>
     </div>
</section>
@endsection