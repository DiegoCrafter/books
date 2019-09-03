<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Tasatop CMS') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link href="{{ asset('css/material-kit.min1036.css?v=2.1.1') }}" rel="stylesheet">
    <link href="{{ asset('demo/demo.css') }}" rel="stylesheet">
    <link href="{{ asset('demo/vertical-nav.css') }}" rel="stylesheet">
</head>
<nav class="navbar    fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav" style="background-color: blue">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="https://demos.creative-tim.com/material-kit-pro/index.html">
          <img src="http://emprendeup.pe/wp-content/uploads/2018/03/tasatop.png" width="120px"></img></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      @guest
      @else
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                        <a href="{{ route('blog') }}" class="nav-link">
                          Inicio
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ route('posts.index') }}" class="nav-link">
                          Publicaciones
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ route('tags.index') }}" class="nav-link">
                          Etiquetas
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ route('categories.index') }}" class="nav-link">
                          Categorias
                        </a>
                      </li>
                      <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Cerrar Sesión
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
        </ul>
      </div>
      @endguest
    </div>
  </nav>
<body class="">
    <div id="app" style="padding-bottom: 3rem; padding-top: 10rem">

        @yield('content')
        
    </div>
    <footer class="footer footer-black footer-big">
            <div class="container">
              <div class="content">
                <div class="row">
                  <div class="col-md-5">
                  </div>
                  <div class="col-md-4">
                    <img src="https://www.tasatop.com/static/resources/images/tasatop-logo-footer.png">
                  </div>
                  <div class="col-md-3">
                  </div>
                </div>
              </div>
              <hr>
              <ul class="float-left">
                <li>
                  <a href="#pablo">
                    Blog
                  </a>
                </li>
              </ul>
              <div class="copyright float-right">
                Copyright &#xA9;
                <script>
                  document.write(new Date().getFullYear())
                </script> Tasatop.com All Rights Reserved.
              </div>
            </div>
          </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('js/core/popper.min.js') }}"></script>
    <script src="{{ asset('js/core/bootstrap-material-design.min.js') }}"></script>
    <script src="{{ asset('js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('js/plugins/moment.min.js') }}"></script>
    <script src="{{ asset('js/plugins/bootstrap-datetimepicker.js') }}"></script>
    <script src="{{ asset('js/plugins/nouislider.min.js') }}"></script>
    <script src="{{ asset('demo/modernizr.js') }}"></script>
    <script src="{{ asset('demo/vertical-nav.js') }}"></script>
    <script src="{{ asset('demo/demo.js') }}"></script>
    <script src="{{ asset('js/material-kit.min1036.js') }}"></script>
    @yield('scripts')
</body>
</html>
