<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css"></link>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
</head>
<style type="text/css">
  body {
    background-image: url("{{ asset('assets/img/harvard.jpg') }}");
  }
  body > .grid {
    height: 100%;
  }
  .image {
    margin-top: -100px;
  }
  .column {
    max-width: 450px;
  }
</style>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document)
  .ready(function() {
    $('.ui.form')
      .form({
        fields: {
          email: {
            identifier  : 'email',
            rules: [
              {
                type   : 'empty',
                prompt : 'Please enter your e-mail'
              },
              {
                type   : 'email',
                prompt : 'Please enter a valid e-mail'
              }
            ]
          },
          password: {
            identifier  : 'password',
            rules: [
              {
                type   : 'empty',
                prompt : 'Please enter your password'
              },
              {
                type   : 'length[6]',
                prompt : 'Your password must be at least 6 characters'
              }
            ]
          }
        }
      })
    ;
  })
;
</script>
</head>
<body>

<div class="ui middle aligned center aligned grid">
<div class="column">
  <h2 class="ui teal image header">
    <img src="{{URL::asset('/img/logoweb_sf.png')}}" class="image">
    <div class="content" style="color:#156DAE">
      Iniciar Sesión
    </div>
  </h2>
  <form class="ui large form" method="POST" action="{{ route('login') }}" > 
    {{ csrf_field() }}
    <div class="ui stacked segment">
      <div class="field">
        <div class="ui left icon input">
          <i class="user icon"></i>
          <input id="email" type="email" class="form-control" placeholder="Correo Electronico" name="email" value="{{ old('email') }}" required autofocus>
        </div>
      </div>
      <div class="field">
        <div class="ui left icon input">
          <i class="lock icon"></i>
          <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>
        </div>
      </div>
      <input type="submit" class="ui fluid large teal submit button" value="Ingresar" style="background-color: #E01F2C"></input>
    </div>
    <div class="ui error message"></div>
  </form>

  <div class="ui message">
    Nuevo? <a href="{{ route('register') }}">Registrarse</a>
  </div>
</div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js">
</script>
</body>