@extends('layouts.app')

@section('content')
<div class="ui vertical stripe segment" style="padding: 5%;">
  <div class="ui container">
    <div class="main ui container">
            <div class="panel panel-default">
                <h2 class="ui dividing header">
                    Crear etiqueta
                </h2>

                <div class="panel-body">
                    {!! Form::open(['route' => 'tags.store']) !!}
                        
                        @include('admin.tags.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
