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
<body class="bg-gray-100 antialiased leading-normal font-sans text-gray-600">
  <div id="app" class="flex flex-col min-h-screen">
    <div class="flex-1 animate fadeIn">

      @include('partials.header')

      @yield('content')

    </div>

    @include('partials.footer')

  </div>
</body>
</html>
