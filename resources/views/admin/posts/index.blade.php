@extends('layouts.app') @section('content')
<div class="main main-raised">
  <div class="container">
    <div class="card card-plain">
      <div class="card-body">
        <div class="panel-heading">
          <h3>Lista de Entradas</h3>
          <a
            href="{{ route('posts.create') }}"
            class="pull-right btn btn-sm btn-primary"
          >
            Crear
          </a>
        </div>

        <br />
        <div class="table-responsive">
          <table class="table table-shopping">
            <thead>
              <tr>
                <th>Nombre</th>
                <th class="th-description">Descripcion</th>
                <th colspan="3">Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach($posts as $post)
              <tr>
                <td>{{ $post->name }}</td>
                <td>{{ $post->excerpt }}</td>
                <td width="10px">
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-default">Ver</a>
                    </td>
                    <td width="10px">
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-default">Editar</a>
                    </td>
                <td class="td-actions">
                  {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
                  <button
                    type="button"
                    rel="tooltip"
                    data-placement="left"
                    title="Remove item"
                    class="btn btn-link"
                  >
                    <i class="material-icons">close</i>
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
</div>
@endsection
