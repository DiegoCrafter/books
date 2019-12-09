@extends('layouts.app') @section('content')
<div class="ui vertical stripe segment" style="padding: 5%;">
  <div class="ui container">
    <div class="main ui container">
      <h2 class="ui dividing header">Crear Publicación</h2>
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