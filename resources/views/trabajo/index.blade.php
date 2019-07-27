@extends('gamp')

@section('title') Trabajos @endsection

@section('titulo')
  <h4> <i class="ti-desktop menu-icon"></i> Trabajos </h4>
 @endsection

@section('trabajo')
 active
@endsection

@section('descripcion') Administracion de los trabajos @endsection

@section('boton')
<a href="{{asset('index.php/Trabajo')}}" class="btn btn-success  btn-icon-text btn-rounded" accesskey="v"> <i class="ti-arrow-left menu-icon"></i> <u>V</u>olver </a>
<a   href="#modalAgregar"   data-toggle="modal" class="nuevo btn btn-primary btn-icon-text btn-rounded" data-target="" accesskey="n"> <i class="ti-plus btn-icon-prepend"></i> <u>N</u>uevo </a>
@endsection


@section('modal1')
<div id="modalAgregar" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content panel panel-primary">
      <div class="modal-header panel-heading">
        <b>Nuevo</b>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body panel-body">
        {!! Form::open(['accept-charset'=>'UTF-8', 'enctype'=>'multipart/form-data', 'method'=>'POST', 'files'=>true, 'autocomplete'=>'off', 'id'=>'form-insert'] ) !!}

        <div class="row">
          <div class="col-md-6">
            <label for="funcionario_" > <b><i>Funcionario</i></b> </label>
            {!! Form::text('funcionario', null, ['class'=>'form-control', 'placeholder'=>'Funcionario', 'id'=>'funcionario_', 'required', 'list'=>'list-funcionario']) !!}
            <datalist id="list-funcionario">
              <?php $funcionarios = \App\Funcionario::all(); ?>
              @foreach($funcionarios as $funcionario)
                <option value="{{$funcionario->funcionario}}">
              @endforeach
            </datalist>
          </div>
          <div class="col-md-6">
            <label for="unidad_" > <b><i>Unidad</i></b> </label>
            {!! Form::text('unidad', null, ['class'=>'form-control', 'placeholder'=>'Unidad', 'id'=>'actividad_', 'required', 'list'=>'list-unidad']) !!}
            <?php $unidades = \App\Unidad::all(); ?>
            <datalist id="list-unidad">
              @foreach($unidades as $unidad)
                <option value="{{$unidad->unidad}}">
              @endforeach
            </datalist>
          </div>
        </div>

        <br><br>

        <div class="row">
          <div class="col-md-4">
            <label for="fecha_" > <b><i>Fecha</i></b> </label>
            {!! Form::date('fecha', date('d/m/Y'), ['class'=>'form-control', 'placeholder'=>'Fecha', 'id'=>'fecha_', 'required']) !!}
          </div>
          <div class="col-md-4">
            <label for="codBienes_" > <b><i>Cod. Bien</i></b> </label>
            {!! Form::text('codBienes', null, ['class'=>'form-control', 'placeholder'=>'Cod. Bien', 'id'=>'codBienes_', 'required']) !!}
          </div>
          <div class="col-md-4">
            <label for="trabajo_" > <b><i>Trabajo</i></b> </label>
            {!! Form::text('trabajo', null, ['class'=>'form-control', 'placeholder'=>'Trabajo', 'id'=>'trabajo_', 'required', 'list'=>'list-trabajo']) !!}
            <datalist id="list-trabajo">
              <option value="Mantenimiento">
              <option value="Programacion">
              <option value="Redes">
              <option value="Electronica">
              <option value="Impresora">
            </datalist>
          </div>
        </div>

        <br><br>

        <div class="row">
          <div class="col-md-3">
            <label for="asignado_" > <b><i>Asigando</i></b> </label>
            {!! Form::select('asignado', \App\User::pluck('username', 'id'), null, ['class'=>'form-control', 'placeholder'=>' ', 'id'=>'asignado_']) !!}
          </div>
          <div class="col-md-3">
            <label for="estado_" > <b><i>Estado</i></b> </label>
            {!! Form::select('estado', ['entregado'=>'Entregado', 'visto'=>'Visto', 'normal'=>'Normal', 'complicado'=>'Complicado', 'terminado'=>'Terminado'], null, ['class'=>'form-control', 'id'=>'estado_']) !!}
          </div>
          <div class="col-md-6">
            <label for="observacion_" > <b><i>Observacion</i></b> </label>
            {!! Form::textarea('observacion', null, ['class'=>'form-control', 'rows'=>'2', 'placeholder'=>'Observacion', 'id'=>'observacion_', 'rows'=>'3', 'required']) !!}
          </div>
        </div>

        <hr>
        {!! Form::submit('A&ntilde;adir', ['class'=>'agregar btn btn-primary']) !!}
        {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>
@endsection

@section('modal2')
    <div id="modalModifiar" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content panel panel-warning ">
                <div class="modal-header panel-heading">
                    <b>Actualizar </b>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body panel-body">
                    {!! Form::open(['route'=>['Trabajo.update', ':DATO_ID'], 'method'=>'PATCH', 'id'=>'form-update' ])!!}
                    <div class="row">
                      <div class="col-md-6">
                        <label for="funcionario_" > <b><i>Funcionario</i></b> </label>
                        {!! Form::text('funcionario', null, ['class'=>'form-control', 'placeholder'=>'Funcionario', 'id'=>'funcionario', 'required', 'list'=>'list-funcionario']) !!}
                        <datalist id="list-funcionario">
                          <?php $funcionarios = \App\Funcionario::all(); ?>
                          @foreach($funcionarios as $funcionario)
                            <option value="{{$funcionario->funcionario}}">
                          @endforeach
                        </datalist>
                      </div>
                      <div class="col-md-6">
                        <label for="unidad_" > <b><i>Unidad</i></b> </label>
                        {!! Form::text('unidad', null, ['class'=>'form-control', 'placeholder'=>'Unidad', 'id'=>'actividad', 'required', 'list'=>'list-unidad']) !!}
                        <?php $unidades = \App\Unidad::all(); ?>
                        <datalist id="list-unidad">
                          @foreach($unidades as $unidad)
                            <option value="{{$unidad->unidad}}">
                          @endforeach
                        </datalist>
                      </div>
                    </div>

                    <br><br>

                    <div class="row">
                      <div class="col-md-4">
                        <label for="fecha_" > <b><i>Fecha</i></b> </label>
                        {!! Form::date('fecha', date('d/m/Y'), ['class'=>'form-control', 'placeholder'=>'Fecha', 'id'=>'fecha', 'required']) !!}
                      </div>
                      <div class="col-md-4">
                        <label for="codBienes_" > <b><i>Cod. Bien</i></b> </label>
                        {!! Form::text('codBienes', null, ['class'=>'form-control', 'placeholder'=>'Cod. Bien', 'id'=>'codBienes', 'required']) !!}
                      </div>
                      <div class="col-md-4">
                        <label for="trabajo_" > <b><i>Trabajo</i></b> </label>
                        {!! Form::text('trabajo', null, ['class'=>'form-control', 'placeholder'=>'Trabajo', 'id'=>'trabajo', 'required', 'list'=>'list-trabajo']) !!}
                        <datalist id="list-trabajo">
                          <option value="Mantenimiento">
                          <option value="Programacion">
                          <option value="Redes">
                          <option value="Electronica">
                          <option value="Impresora">
                        </datalist>
                      </div>
                    </div>

                    <br><br>

                    <div class="row">
                      <div class="col-md-3">
                        <label for="asignado_" > <b><i>Asigando</i></b> </label>
                        {!! Form::select('asignado', \App\User::pluck('username', 'id'), null, ['class'=>'form-control', 'placeholder'=>' ', 'id'=>'asignado']) !!}
                      </div>
                      <div class="col-md-3">
                        <label for="estado_" > <b><i>Estado</i></b> </label>
                        {!! Form::select('estado', ['entregado'=>'Entregado', 'visto'=>'Visto', 'normal'=>'Normal', 'complicado'=>'Complicado', 'terminado'=>'Terminado'], null, ['class'=>'form-control', 'placeholder'=>' ', 'id'=>'estado']) !!}
                      </div>
                      <div class="col-md-6">
                        <label for="observacion_" > <b><i>Observacion</i></b> </label>
                        {!! Form::textarea('observacion', null, ['class'=>'form-control', 'rows'=>'2', 'placeholder'=>'Observacion', 'id'=>'observacion', 'rows'=>'3', 'required']) !!}
                      </div>
                    </div>


                    <hr>
                    {!! Form::hidden('id_user', '1') !!}
                    {!! Form::submit('Actualizar ', ['class'=>'btn btn-warning']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('cuerpo')
<div class="row">
  <div class="col-md-12">
    <table class="table table-hover compact" id="tabla">
      <thead style="background-color:#343a40; color:#fff;">
        <tr>
          <th> USUARIO </th>
          <th> FECHA </th>
          <th> UNIDAD </th>
          <th> NOMBRE </th>
          <th> BIEN </th>
          <th> TRABAJO </th>
          <th> ESTADO </th>
          <th> ASIGNADO </th>
          <th> ACCIONES </th>
        </tr>
      </thead>
      <tbody>
        @foreach($datos as $dato)
          <tr data-id="{{$dato->id}}">
            <td>{{$dato->usuario}}</td>
            <td>{{$dato->fecha}}</td>
            <td>{{$dato->unidad}}</td>
            <td>{{$dato->funcionario}}</td>
            <td>{{$dato->codBienes}}</td>
            <td>{{$dato->trabajo}}</td>
            <td>
              @if( $dato->estado == "entregado")
                <?php $class="badge badge-info"; ?>
              @elseif( $dato->estado == "visto")
                <?php $class="badge badge-default"; ?>
              @elseif( $dato->estado == "normal")
                <?php $class="badge badge-primary"; ?>
              @elseif( $dato->estado == "complicado")
                <?php $class="badge badge-danger"; ?>
              @elseif( $dato->estado == "terminado")
                <?php $class="badge badge-success"; ?>
              @endif
              <span class="{{$class}}"> {{ strtoupper( $dato->estado) }} </span>
            </td>
            <td>{{$dato->asignadoA}}</td>
            <td>

              <a href="#modalModifiar" data-toggle="modal" data-target="" class="actualizar btn btn-warning btn-icon-text" > <i class="ti-pencil menu-icon"></i> </a>
              <a href="{{asset('index.php/Reporte/acta/'.$dato->id)}}"  class="btn btn-primary btn-icon-text"> <i class="ti-notepad menu-icon"></i> </a>
            </td>
          </tr>
        @endforeach
      </tbody>

      <tfoot class="thead-dark">
        <tr>
          <th> USUARIO </th>
          <th> FECHA </th>
          <th> UNIDAD </th>
          <th> NOMBRE </th>
          <th> BIEN </th>
          <th> TRABAJO </th>
          <th> ESTADO </th>
          <th> ASIGNADO </th>
          <th> ACCIONES </th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
@endsection


@section('js')
<script type="text/javascript">
  $(document).ready(function(){
    $('#tabla').DataTable({
                "order": [[ 0, 'desc']],
                "language": {
                    "bDeferRender": true,
                    "sEmtpyTable": "No ay registros",
                    "decimal": ",",
                    "thousands": ".",
                    "lengthMenu": "Mostrar _MENU_ ",
                    "zeroRecords": "No se encontro nada,  lo siento",
                    "info": " ",
                    "infoEmpty": "No ay entradas permitidas",
                    "search": "Buscar ",
                    "infoFiltered": "(Busqueda de _MAX_ registros en total)",
                    "oPaginate":{
                        "sLast":"Final",
                        "sFirst":"Principio",
                        "sNext":"Siguiente",
                        "sPrevious":"Anterior"
                    }
                }
            });
    });


        $('.actualizar').click(function(event){
            event.preventDefault();
            var fila = $(this).parents('tr');
            var id = fila.data('id');
            var form = $('#form-update')
            var url = form.attr('action').replace(':DATO_ID', id);
            form.get(0).setAttribute('action', url);
            link  = '{{ asset("/index.php/Trabajo/")}}/'+id;

            $.getJSON(link, function(data, textStatus) {
                if(data.length > 0){
                    $.each(data, function(index, el) {
                      $('#usuario').val(el.usuario);
                      $('#funcionario').val(el.funcionario);
                      $('#unidad').val(el.unidad);
                      $('#codBienes').val(el.codBienes);
                      $('#trabajo').val(el.trabajo);
                      $('#fecha').val(el.fecha);
                      $('#asignadoA').val(el.asignadoA);
                      $('#asignadoPor').val(el.asignadoPor);
                      $('#observacion').val(el.observacion);
                      $('#estado').val(el.estado);

                    });
                }
            });
        });

        $('.eliminar').click(function(event) {
            event.preventDefault();
            var fila = $(this).parents('tr');
            var id = fila.data('id');
            var form = $('#form-delete');
            var url = form.attr('action').replace(':DATO_ID',id);
            var data = form.serialize();

            if(confirm('Esta seguro de eliminar al Bien'))
            {
                $.post(url, data, function(result, textStatus, xhr) {
                    alert(result);
                    fila.fadeOut();
                }).fail(function(esp){
                    fila.show();
                });
            }
        });
    </script>
@endsection
