@extends('layouts.app') @section('content')
<div class="main main-raised" style="padding: 2rem;">
  <div class="contact-content">
    <div class="container">
      <h2 class="text-center">Crear Publicación</h2>
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto">
          <div class="panel panel-default">
            <div class="panel-body">
              {!! Form::open(['route' => 'posts.store', 'files' => true]) !!}
              @include('admin.posts.partials.form') {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
