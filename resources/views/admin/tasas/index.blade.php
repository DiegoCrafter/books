@extends('layouts.app')
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
@section('content')
<div class="ui vertical stripe segment" style="padding: 5%;">
  <div class="ui container">
    <div class="main ui container">
      <div class="ui active tab" data-tab="definition">
        <h2 class="ui dividing header">
          Tasas Historicas
        </h2>
      </div>
      <div class="ui container">
        <br><br>
        <div class="ui container">
          <div class="column">
            <div class="ui segment">
              <div class="ui menu top">
                <a class="active item" data-tab="edit">Soles</a>
                <a class="item" data-tab="summary">Dolares</a>
              </div>
              <div class="ui tab" data-tab="edit">
                <div class="ui form">
                  <button href="javascript:void(0)" class="btn btn-info ml-3" id="abrir_modal">Crear Nuevo</button>
                  <br><br>
                  <table class="ui celled table" style="width:100%" id="tasas_table">
                    <thead>
                      <tr>
                        <th>Moneda</th>
                        <th>180</th>
                        <th>360</th>
                        <th>720</th>
                        <th>1080+</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                  </table>
                </div>
              </div>
              <div class="ui tab" data-tab="summary">
              <button href="javascript:void(0)" class="btn btn-info ml-3" id="abrir_modal_dolar">Crear Nuevo</button>
                  <br><br>
                  <table class="ui celled table" style="width:100%" id="tasas_table_dolar">
                    <thead>
                      <tr>
                        <th>Moneda</th>
                        <th>180</th>
                        <th>360</th>
                        <th>720</th>
                        <th>1080+</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="ui modal" id="solesmodal">
    <i class="close icon"></i>
    <div class="header">
      Crear tasa promedio soles
    </div>
    <div class="content">
      <form class="ui form" action="{{ route('tasas.store') }}" method='post' id="tasa_form">
        {{ csrf_field() }}
        <div class="field">
          <label>Moneda.</label>
          <input type="text" name="moneda" value="SOLES" readonly>
        </div>
        <div class="field">
          <label>Rango S/.</label>
          <input type="text" name="rango" placeholder="Ingrese el rango" required>
        </div>
        <div class="field">
          <label>180 DIAS</label>
          <input type="text" name="first" placeholder="Last Name">
        </div>
        <div class="field">
          <label>360 DIAS</label>
          <input type="text" name="second" placeholder="Last Name">
        </div>
        <div class="field">
          <label>720 DIAS</label>
          <input type="text" name="third" placeholder="Last Name">
        </div>
        <div class="field">
          <label>1080 + </label>
          <input type="text" name="four" placeholder="Last Name">
        </div>
        <div class="actions">
          <div class="ui button">Cancelar</div>
          <input class="ui button" type="submit" value="Guardar"></input>
        </div>
      </form>
    </div>
  </div>

  <div class="ui modal dolar" id="dolaresmodal">
    <i class="close icon"></i>
    <div class="header">
      Crear tasa promedio Dolares
    </div>
    <div class="content">
      <form class="ui form" action="{{ route('tasas.store') }}" method='post' id="tasa_form">
        {{ csrf_field() }}
        <div class="field">
          <label>Moneda.</label>
          <input type="text" name="moneda" value="DOLARES" readonly>
        </div>
        <div class="field">
          <label>Rango S/.</label>
          <input type="text" name="rango" placeholder="Ingrese el rango" required>
        </div>
        <div class="field">
          <label>180 DIAS</label>
          <input type="text" name="first" placeholder="Last Name">
        </div>
        <div class="field">
          <label>360 DIAS</label>
          <input type="text" name="second" placeholder="Last Name">
        </div>
        <div class="field">
          <label>720 DIAS</label>
          <input type="text" name="third" placeholder="Last Name">
        </div>
        <div class="field">
          <label>1080 + </label>
          <input type="text" name="four" placeholder="Last Name">
        </div>
        <div class="actions">
          <div class="ui button">Cancelar</div>
          <input class="ui button" type="submit" value="Guardar"></input>
        </div>
      </form>
    </div>
  </div>

</div>
<script>
  $(document).ready(function() {
    $('#abrir_modal').click(function() {
      $('#solesmodal').modal('show');
    });
    $('.top.menu .item').tab();
    $('#abrir_modal_dolar').click(function() {
      $('#dolaresmodal').modal('show');
    });
  });
</script>
<script>
  $(document).ready(function() {
    $('#tasas_table').DataTable({
      processing: true,
      serverside: true,
      ajax: {
        url: "{{ route('tasas.index') }}",
      },
      columns: [{
          data: 'rango',
          name: 'rango'
        },
        {
          data: 'first',
          name: 'first'
        },
        {
          data: 'second',
          name: 'second'
        },
        {
          data: 'third',
          name: 'third'
        },
        {
          data: 'four',
          name: 'four'
        },
        {
          data: 'action',
          name: 'action',
          orderable: false
        }
      ]
    });

    $('#tasas_table_dolar').DataTable({
      processing: true,
      serverside: true,
      ajax: {
        url: "{{ route('tax') }}",
      },
      columns: [{
          data: 'rango',
          name: 'rango'
        },
        {
          data: 'first',
          name: 'first'
        },
        {
          data: 'second',
          name: 'second'
        },
        {
          data: 'third',
          name: 'third'
        },
        {
          data: 'four',
          name: 'four'
        },
        {
          data: 'action',
          name: 'action',
          orderable: false
        }
      ]
    })
  })
</script>
@endsection