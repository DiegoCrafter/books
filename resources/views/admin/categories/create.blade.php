@extends('layouts.app')

@section('content')
<div class="ui vertical stripe segment" style="padding: 5%;">
  <div class="ui container">
    <div class="main ui container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h2 class="ui dividing header">
                    Crear categoría
                </h2>

                <div class="panel-body">
                    {!! Form::open(['route' => 'categories.store']) !!}
                        
                        @include('admin.categories.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection

