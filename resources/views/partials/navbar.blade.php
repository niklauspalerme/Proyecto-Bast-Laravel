<!--Parte 1 Header-Navbar -->
@extends('partials.header')

<header>
  <!--Navbar-->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar"  style="background-color: indigo;">

    <div class="container">

      <a class="navbar-brand" href="{{ url('/') }}">
        <span style="font-weight: bold"> {{ config('app.name', 'Laravel') }}</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto smooth-scroll">
      <li class="nav-item">
          <a class="nav-link" href="/activities">Actividades</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="/foods">Gastronomia</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="/hotels">Hoteles</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="/places">Lugares</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="/questions">FAQ
          <i class="far fa-question-circle"></i>
          </a>
      </li>

  </ul>

<!-- Links Parte dere -->
<ul class="navbar-nav nav-flex-icons">

    
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">

        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest

                <li class="nav-item">

                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      <img style="border: 2px solid #3f51b5" src="{{asset('storage/avatars/'.Auth::user()->avatar)}}" class="rounded-circle z-depth-0 avatar" alt="avatar">
                      {{ Auth::user()->name }} <span class="caret"></span>
                    </a>


                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/profiles">
                                <span style="color:#3f51b5"><i class="far fa-address-card"></i> </span>  {{ __('Perfil y Cuenta') }}
                        </a>
                        <a class="dropdown-item" href="/profiles/myAgenda/{{Auth::user()->id}}">
                                <span style="color:#3f51b5"><i class="fas fa-map-marked-alt"></i> </span>  {{ __('Mis Sitios') }}
                        </a>


                        @if (Auth::user()->priority ==1)
                        <a class="dropdown-item" href="/formulario">
                                <span style="color:#3f51b5"><i class="far fa-plus-square"></i> </span>  {{ __('Agregar información') }}
                        </a>
                        @endif

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                               <span style="color:indigo"><i class="fas fa-external-link-alt"></i> </span> {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>


                </li>
            @endguest
        </ul>
    </div>
</div>
                 <!-- Container -->

    </nav> <!-- Fin de Navbar-->
  </header>
