<nav class="mb-4 bg-white shadow">
     <div class="container px-2 mx-auto lg:px-0">
          <div class="relative flex justify-between h-16">
               <a class="flex items-center justify-center" href="{{ url('/') }}">
                    <div class="flex items-center flex-shrink-0">
                         <img class="block w-auto h-8 pl-4 lg:hidden lg:pl-0" src="/img/logo-red-sm.svg"
                              alt="Ninjaparade logo">
                         <img class="hidden w-auto h-8 lg:block" src="/img/logo-red.svg" alt="Ninjaparade logo">
                    </div>
               </a>
               <div class="flex ml-6">
                    {{--
                    <a href="{{ url('work') }}"
                    class="inline-flex items-center px-1 pt-1 ml-8 text-sm font-medium leading-5 text-gray-900 transition duration-150 ease-in-out border-b-2 border-transparent hover:text-gray-700 hover:border-brand-red-75 focus:outline-none focus:text-gray-700 focus:border-brand-red-75">
                    Work
                    </a>
                    --}}
                    <a href="{{ url('blog') }}"
                         class="inline-flex items-center px-1 pt-1 ml-8 text-sm font-medium leading-5 text-gray-900 transition duration-150 ease-in-out border-b-2 border-transparent hover:text-gray-700 hover:border-brand-red-75 focus:outline-none focus:text-gray-700 focus:border-brand-red-75">
                         Blog
                    </a>
               </div>
          </div>
     </div>
</nav>