<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title', '后台管理') - {{ config('app.name') }}</title>

  <link rel="stylesheet" href="{{ mix('css/app.css') }}">

  <script src="{{ mix('js/alpine.js') }}"></script>
</head>
<body class="bg-gray-100 subpixel-antialiased leading-normal font-sans text-gray-700">
  <div id="app" class="flex flex-col min-h-screen">
    <div class="flex-1">

      @section('header')
        @include('partials.admin.header')
      @show

      <div class="-mt-56">
        <div class="md:max-w-6xl md:mx-auto px-4 pb-10">
          @yield('breadcrumb')

          @include('partials.alert')

          @yield('content')

        </div>
      </div>


    </div>

    @section('footer')
      @include('partials.admin.footer')
    @show

  </div>
</body>
</html>
