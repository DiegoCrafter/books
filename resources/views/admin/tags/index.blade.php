@extends('layouts.app') @section('content')
<div class="ui vertical stripe segment" style="padding: 5%;">
    <div class="ui container">
      <div class="main ui container">
        <div class="ui active tab" data-tab="definition">
          <h2 class="ui dividing header">
            Etiquetas
            <a href="{{ route('tags.create') }}" class="ui right btn btn-sm btn-primary">
                Crear
            </a>
          </h2>
        </div>
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
                  @foreach($tags as $tag)
                  <tr>
                    <td>{{ $tag->id }}</td>
                    <td>{{ $tag->name }}</td>
                    <td>{{ $tag->slug }}</td>
                    <td width="5px">
                        <a href="{{ route('tags.edit', $tag->id) }}" class="mini ui button blue">Editar</a>
                    </td>
                    <td width="1px" style="padding-top: 2.5%">
                        {!! Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) !!}
                            <button class="mini ui button red">
                                Eliminar
                            </button>                           
                        {!! Form::close() !!}
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              {{ $tags->render() }}
        </div>
      </div>
    </div>
    </div>
@endsection
