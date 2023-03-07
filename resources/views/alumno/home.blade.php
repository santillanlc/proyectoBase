<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página para Alumnos</title>
</head>
<body>
    <h1>Home para alumnos</h1>
    <div class="info">
        <a href="#" class="d-block">{{ Auth::user()->name; }}</a>
    {{-- <span>{{(Auth::user()->roles[0]->name)}}</span> --}}
    <a class="d-block" href="{{ route('logout') }}"
    onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
     {{ __('Cerrar sesión') }}
    </a>

 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
     @csrf
 </form>
  </div>
</body>
</html>
