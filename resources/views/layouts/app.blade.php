<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title', '首页') - {{ config('app.name') }}</title>

  <link rel="stylesheet" href="{{ mix('css/app.css') }}">

  <script src="{{ mix('js/alpine.js') }}"></script>
</head>
<body class="bg-gray-100 subpixel-antialiased leading-normal font-sans text-gray-700">
  <div id="app" class="flex flex-col min-h-screen">
    <div class="flex-1 animate fadeIn">

      @section('header')
        @include('partials.header')
      @show

      <div class="md:max-w-6xl md:mx-auto px-4 py-10">

        @yield('content')

      </div>

    </div>

    @section('footer')
      @include('partials.footer')
    @show

  </div>
</body>
</html>
