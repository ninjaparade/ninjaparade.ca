<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
     <meta http-equiv="x-ua-compatible" content="ie=edge" />

     <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/favicons/apple-touch-icon-57x57.png" />
     <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/favicons/apple-touch-icon-114x114.png" />
     <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/favicons/apple-touch-icon-72x72.png" />
     <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/favicons/apple-touch-icon-144x144.png" />
     <link rel="apple-touch-icon-precomposed" sizes="60x60" href="/favicons/apple-touch-icon-60x60.png" />
     <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/favicons/apple-touch-icon-120x120.png" />
     <link rel="apple-touch-icon-precomposed" sizes="76x76" href="/favicons/apple-touch-icon-76x76.png" />
     <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/favicons/apple-touch-icon-152x152.png" />
     <link rel="icon" type="image/png" href="/favicons/favicon-196x196.png" sizes="196x196" />
     <link rel="icon" type="image/png" href="/favicons/favicon-96x96.png" sizes="96x96" />
     <link rel="icon" type="image/png" href="/favicons/favicon-32x32.png" sizes="32x32" />
     <link rel="icon" type="image/png" href="/favicons/favicon-16x16.png" sizes="16x16" />
     <link rel="icon" type="image/png" href="/favicons/favicon-128.png" sizes="128x128" />


     <!-- Fonts -->
     <link rel="stylesheet" href="{{ mix('css/main.css') }}" />

     @if (config('app.env') === 'production')
     <!-- Production only items -->
     @endif

     <link rel="stylesheet" href="//rsms.me/inter/inter.css" />


     <meta property="fb:app_id" content="" />
     <meta property="og:site_name" content="" />

     @yield('social', View::make('shared.social'))

     <meta name="twitter:site" content="@ninjaparade" />
     <meta name="twitter:creator" content="@ninjaparade" />

     @if (App::environment('production'))
     <script async src="https://www.googletagmanager.com/gtag/js?id=UA-12760287-1"></script>
     <script>
          window.dataLayer = window.dataLayer || [];
          function gtag() {
               dataLayer.push(arguments);
          }
          gtag("js", new Date());

          gtag("config", "UA-12760287-1");
     </script>
     @endif

</head>

<body class="@yield('body-class') font-sans text-base">

     @include('shared.nav')
     @yield('content')

     @stack('scripts')
</body>

</html>