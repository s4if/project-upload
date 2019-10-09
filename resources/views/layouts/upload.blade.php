<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-md">
      <a class="navbar-brand" href="#">Upload Tugas</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Upload</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Lihat</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('login') }}">Admin</span></a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row"> &nbsp;</div>
      @yield('content')
    </div>
  </body>
</html>