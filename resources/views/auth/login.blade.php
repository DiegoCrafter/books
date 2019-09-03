<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
<link href="{{ asset('css/material-kit.min1036.css?v=2.1.1') }}" rel="stylesheet">
<link href="{{ asset('demo/demo.css') }}" rel="stylesheet">
<link href="{{ asset('demo/vertical-nav.css') }}" rel="stylesheet">
<body class="login-page sidebar-collapse">
  <div class="page-header header-filter" filter-color="primary" :after style="background-image: url('/img/header-6.jpg'); background-size: cover; background-position: bottom center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
          <form class="form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="card card-login card-hidden">
              <div class="card-body">
                <div style="padding-left: 27%; padding-top: 8%;">
                  <img src="https://www.tasatop.com/static/resources/images/logoweb.png" style="width: 75%; height: 10%;">
                </div>
                <span class="bmd-form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">email</i>
                      </span>
                    </div>
                    <input id="email" type="email" class="form-control" placeholder="Correo Electronico" name="email" value="{{ old('email') }}" required autofocus>
                  </div>
                </span>
                <span class="bmd-form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">lock_outline</i>
                      </span>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>
                  </div>
                </span>
              </div>
              <div class="card-footer justify-content-center">
                <button type="submit" class="btn btn-rose btn-link btn-lg">
                    Iniciar Sesión
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
      <div class="container">
        <nav class="float-left">
          <ul>
            <li>
              <a>
                Blog
              </a>
            </li>
            <li>
                <a href="{{ route('register') }}">
                  Registrarse
                </a>
              </li>
          </ul>
        </nav>
        <div class="copyright float-right">
          &copy;
          <script>
            document.write(new Date().getFullYear())
          </script>, Tasatop.com <i class="material-icons">
        </div>
      </div>
    </footer>
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
</body>