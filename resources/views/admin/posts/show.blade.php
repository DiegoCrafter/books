@extends('layouts.app')

@section('content')
<div class="main main-raised">
  <div class="container">
    <div class="card card-plain">
      <div class="card-body">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                   <h3> Ver entrada</h3>
                </div>

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
