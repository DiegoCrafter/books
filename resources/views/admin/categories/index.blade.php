@extends('layouts.app') @section('content')
<div class="ui vertical stripe segment" style="padding: 5%;">
    <div class="ui container">
      <div class="main ui container">
        <div class="ui active tab" data-tab="definition">
          <h2 class="ui dividing header">
            Categorias
            <a href="{{ route('categories.create') }}" class="ui right btn btn-sm btn-primary">
                Crear
            </a>
          </h2>
        </div>
        <br>
        <br>
        <div class="ui container">
            <table class="ui very padded table">
                <thead>
                  <tr>
                    <th>N°</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th colspan="3">&nbsp;Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($categories as $category)
                  <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->body }}</td>
                    <td width="3px">
                        <a href="{{ route('categories.edit', $category->id) }}" class="mini ui button blue">Editar</a>
                    </td>
                    <td width="1px" style="padding-top: 2.8%">
                        {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) !!}
                            <button class="mini ui button red">
                                Eliminar
                            </button>                           
                        {!! Form::close() !!}
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
      </div>
    </div>
    </div>
@endsection
