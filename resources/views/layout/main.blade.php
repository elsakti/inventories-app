<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $judul }}</title>
    <link rel="stylesheet" href="{{ asset('css/forms.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/tables.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
  </head>
  <body>
    <header>
      @include('layout.navbar')
    </header>

    <main>
      @yield('content')
    </main>
  </body>
</html>
