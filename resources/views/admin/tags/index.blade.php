@extends('layouts.app') @section('content')
<div class="main main-raised">
  <div class="container">
    <div class="card card-plain">
      <div class="card-body">
        <div class="panel-heading">
          <h3>Etiquetas</h3>
          <a
            href="{{ route('tags.create') }}"
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
                <th colspan="3">Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach($tags as $tag)
              <tr>
                <td>{{ $tag->name }}</td>
                <td width="10px"><a href="{{ route('tags.show', $tag->id) }}" class="btn btn-sm btn-default">Ver</a></td>
                <td width="10px"><a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-sm btn-default">Editar</a></td>
                <td class="td-actions">
                  {!! Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) !!}
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
