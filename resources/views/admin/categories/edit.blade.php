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
          <h3>Editar Categoria</h3>
        </div>

                <div class="panel-body">
                    {!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'PUT']) !!}
                        
                        @include('admin.categories.partials.form')

                    {!! Form::close() !!}
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
