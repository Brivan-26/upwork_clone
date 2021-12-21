<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Upwork Clone</title>

    </head>
    <body>
      <div class="container mx-auto px-4">
      @yield('content')
      </div>
    </body>
</html>