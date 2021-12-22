<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Upwork Clone</title>
    </head>
    <body>
      <div class="container mx-auto px-4">
        @include('partials.navbar')
      @yield('content')
      </div>


      <script defer src="https://unpkg.com/alpinejs@3.7.1/dist/cdn.min.js"></script>
      @livewireScripts
    </body>
</html>