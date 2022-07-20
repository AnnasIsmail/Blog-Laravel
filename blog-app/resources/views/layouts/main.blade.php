<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Annas Blog | {{ $title }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
  <link rel="stylesheet" href="main.css?v=<?php echo time(); ?>">
  <link rel="icon" href="logo.png" sizes="16x16">
</head>
  <body>
 @include('partials.navbar')

      <main class="container">
        @yield('container')
      </main>
      
  </body>
</html>