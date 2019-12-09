<html>
<head>
  <!-- Standard Meta -->
      <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Tasatop CMS') }}</title>

    <!-- Styles -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"></link>

  <style type="text/css">

    .hidden.menu {
      display: none;
    }
    .masthead .logo.item img {
      margin-right: 1em;
    }
    .masthead .ui.menu .ui.button {
      margin-left: 0.5em;
    }
    .masthead h1.ui.header {
      margin-top: 3em;
      margin-bottom: 0em;
      font-size: 4em;
      font-weight: normal;
    }
    .masthead h2 {
      font-size: 1.7em;
      font-weight: normal;
    }

    .ui.vertical.stripe {
      padding: 8em 0em;
    }
    .ui.vertical.stripe h3 {
      font-size: 2em;
    }
    .ui.vertical.stripe .button + h3,
    .ui.vertical.stripe p + h3 {
      margin-top: 3em;
    }
    .ui.vertical.stripe .floated.image {
      clear: both;
    }
    .ui.vertical.stripe p {
      font-size: 1.33em;
    }
    .ui.vertical.stripe .horizontal.divider {
      margin: 3em 0em;
    }

    .quote.stripe.segment {
      padding: 0em;
    }
    .quote.stripe.segment .grid .column {
      padding-top: 5em;
      padding-bottom: 5em;
    }

    .footer.segment {
      padding: 5em 0em;
    }

    .secondary.pointing.menu .toc.item {
      display: none;
    }

    @media only screen and (max-width: 700px) {
      .ui.fixed.menu {
        display: none !important;
      }
      .secondary.pointing.menu .item,
      .secondary.pointing.menu .menu {
        display: none;
      }
      .secondary.pointing.menu .toc.item {
        display: block;
      }
      .masthead.segment {
        min-height: 50px;
      }
      .masthead h1.ui.header {
        font-size: 2em;
        margin-top: 1.5em;
      }
      .masthead h2 {
        margin-top: 0.5em;
        font-size: 1.5em;
      }
    }


  </style>

  <script>
  $(document)
    .ready(function() {

      // fix menu when passed
      $('.masthead')
        .visibility({
          once: false,
          onBottomPassed: function() {
            $('.fixed.menu').transition('fade in');
          },
          onBottomPassedReverse: function() {
            $('.fixed.menu').transition('fade out');
          }
        })
      ;

      // create sidebar and attach to menu open
      $('.ui.sidebar')
        .sidebar('attach events', '.toc.item')
      ;

    })
  ;
  </script>
</head>
<body>
    @guest
    @else
<!-- Following Menu -->
<div class="ui large top fixed hidden menu">
  <div class="ui container">
      <a class="active item">Inicio</a>
      <a class="item" href="{{ route('posts.index') }}">Posts</a>
      <a class="item" href="{{ route('categories.index') }}">Categorias</a>
      <a class="item" href="{{ route('tags.index') }}">Etiquetas</a>
  </div>
</div>
@endguest
@guest
@else
<!-- Sidebar Menu -->
<div class="ui vertical inverted sidebar menu">
    <a class="active item">Inicio</a>
    <a class="item" href="{{ route('posts.index') }}">Posts</a>
    <a class="item" href="{{ route('categories.index') }}">Categorias</a>
    <a class="item" href="{{ route('tags.index') }}">Etiquetas</a>
</div>
@endguest

<!-- Page Contents -->
<div class="pusher">
  <div class="ui inverted vertical masthead center aligned segment" style="background-color: #202538;">

    <div class="ui container">
      <div class="ui large secondary inverted pointing menu">
        <a class="toc item">
          <i class="sidebar icon"></i>
        </a>
        @guest
        <div class="left item">
            <img src="{{URL::asset('/img/tasatop-logo-footer.png')}}" class="image" style="width: 120px; height: 40px;">
        </div>
        <div class="right item">
          <a class="ui inverted button" href="{{ route('login') }}">Iniciar Sesión</a>
        </div>
        @else
        <a class="active item" href="{{ route('blog') }}">Inicio</a>
        <a class="item" href="{{ route('posts.index') }}">Posts</a>
        <a class="item" href="{{ route('categories.index') }}">Categorias</a>
        <a class="item" href="{{ route('tags.index') }}">Etiquetas</a>
        <div class="right item">
            <a class="ui inverted button" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
          </div>
        @endguest
      </div>
    </div>
  </div>

  @yield('content')
  <div style="height: 80px; width: 100%; padding: 8%;">

  </div>
  <br>
  <div class="ui inverted vertical footer segment" style="background-color: #202538; position: absolute; bottom: 0; width: 100%; height: 180px; padding-top: 50px;">
    <div class="ui container">
      <div class="ui stackable inverted divided equal height stackable grid">
        <div class="wide column">
          <h4 class="ui inverted header">© 2019 Tasatop. Todos los derechos reservados</h4>
          <div class="ui inverted link list">
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    @yield('scripts')
</body>

</html>