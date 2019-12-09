@extends('layouts.app') @section('content')
<div class="ui vertical stripe segment" style="padding: 5%;">
    <div class="ui text container">
      <h3 class="ui header">Registrarse</h3>
      <form class="ui form" method="POST" action="{{ route('register') }}">
          {{ csrf_field() }}
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}" ></div>
          <div class="field">
            <label>Datos Personales</label>
            <div class="two fields">
              <div class="field">
                  <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"
                  placeholder="Nombres"
                  required
                  autofocus />
                  @if ($errors->has('name'))
                  <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                  </span>
                  @endif
              </div>
              <div class="field">
                  <input id="email" type="email" class="form-control" name="email"
                  value="{{ old('email') }}"
                  placeholder="Correo Electronico"
                  required
                />
              </div>
            </div>
            @if ($errors->has('password'))
            <span class="help-block">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
          </div>
          <div class="field">
            <label>Contraseña</label>
            <div class="two fields">
                <div class="field">
                    <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>
                  </div>
                  <div class="field">
                    <input id="password-confirm" placeholder="Confirmar Contraseña" type="password" class="form-control" name="password_confirmation" required />
                  </div>
            </div>
          </div>
          <div class="two fields">
            <div class="field">
                <button class="ui primary button submit">Registrarse</button>
            </div>
        </form>
    </div>
  </div>
</div>
@endsection
