@extends('layouts.app') @section('content')
<div class="ui vertical stripe segment" style="padding: 5%;">
  <div class="ui container">
    <div class="main ui container">
      <div class="card-body">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="ui dividing header">Ver entrada</h3>
                </div>
                <br>
                <div class="panel-body">
                  <p><strong>Nombre</strong> {{ $post->name }}</p>
                  <p><strong>Slug</strong> {{ $post->slug }}</p>
                  <p><strong>Descripción</strong> {{ $post->body }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
