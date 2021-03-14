<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <title>Serapys</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>
    {{-- Menu --}}
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('user.index')}}">
                <img src="{{asset('logo.png')}}" alt="Serapys">
                Serapys
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav ml-lg-0">
              <li class="nav-item px-lg-4">
                <a class="nav-link text-dark" aria-current="page" href="
                {{session('user_type') == 'user' ? route('memories.index') : route('admin.memories.index')}}
                ">Memories</a>
              </li>
              <li class="nav-item px-lg-4">
                <a class="nav-link text-dark" href="#">Monuments</a>
              </li>
              
              <li class="nav-item px-lg-4">
                <a class="nav-link text-dark" href="#" tabindex="-1" aria-disabled="true">Funeral Insurance</a>
              </li>

              <li class="nav-item px-lg-4">
                <a class="nav-link text-dark" href="#" tabindex="-1" aria-disabled="true">Death notices</a>
              </li>
              <li class="nav-item px-lg-4">
                <a class="nav-link text-dark" href="{{route('user_type.index')}}" tabindex="-1" aria-disabled="true">Logoff</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    {{-- Fim menu --}}
    {{-- Conteudo ficará na main --}}
    <main class="container">
        @yield('content')
    </main>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>