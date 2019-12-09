@extends('layouts.app')

@section('content')
<div class="ui vertical stripe segment" style="padding: 5%;">
    <div class="ui container">
      <div class="main ui container">
        <div class="ui active tab" data-tab="definition">
          <h2 class="ui dividing header">
            Editar Etiqueta
          </h2>
        </div>
        <br>
        <div class="panel-body">
                {!! Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'PUT']) !!}
                    
                    @include('admin.tags.partials.form')

                {!! Form::close() !!}
        </div>
     </div>
    </div>
</div>
@endsection
