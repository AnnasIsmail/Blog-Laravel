<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Annas Blog | {{ $title }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="main.css">
  </head>
  <body>
 @include('partials.navbar')

      <main>
        @yield('container')
      </main>
      
  </body>
</html>