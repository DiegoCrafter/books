@extends('layouts.app') @section('content')
<div class="ui vertical stripe segment" style="padding: 5%;">
    <div class="ui container">
      <div class="main ui container">
        <div class="ui active tab" data-tab="definition">
          <h2 class="ui dividing header">
            Articulos
            <a href="{{ route('posts.create') }}" class="ui right btn btn-sm btn-primary">
                Crear
            </a>
          </h2>
        </div>
        <br>
        <div class="ui container">
            <table class="ui very padded table">
                <thead>
                  <tr>
                    <th>Titulo</th>
                    <th>Estado</th>
                    <th>Resumen</th>
                    <th colspan="3">&nbsp;Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($posts as $post)
                  <tr>
                    <td>{{ $post->name }}</td>
                    <td>{{ $post->status }}</td>
                    <td>{{ $post->excerpt }}</td>
                    <td width="5px">
                        <a href="{{ route('posts.show', $post->id) }}" class="mini ui button">Ver</a>
                    </td>
                    <td width="5px">
                        <a href="{{ route('posts.edit', $post->id) }}" class="mini ui button blue">Editar</a>
                    </td>
                    <td width="1px" style="padding-top: 2.5%">
                        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
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
