@extends('layouts.app')

@section('content')
<div class="main main-raised" style="padding: 2rem;">
  <div class="contact-content">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>Editar entrada</h3>
                </div>
                <br>
                <div class="panel-body">
                    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'files' => true]) !!}
                        
                        @include('admin.posts.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
