@extends('layouts.app')

@section('content')
<div class="ui vertical stripe segment" style="padding: 5%;">
    <div class="ui container">
      <div class="main ui container">
        <div class="ui active tab" data-tab="definition">
          <h2 class="ui dividing header">
            Editar Categoria
          </h2>
        </div>
        <br>
        <div>
                {!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'PUT']) !!}
                    
                    @include('admin.categories.partials.form')

                {!! Form::close() !!}
        </div>
      </div>
    </div>
</div>
@endsection
