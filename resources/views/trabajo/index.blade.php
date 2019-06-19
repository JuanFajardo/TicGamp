@extends('gamp')

@section('title') Trabajo @endsection
@section('ventana') Trabajo @endsection

@section('descripcion') listado de trabajos @endsection

@section('titulo')
<a href="{{asset('index.php/Trabajo')}}" class="btn btn-primary"> <i class="fa fa-desktop"></i> Volver </a>
<a  style="color:#fff;" href="#modalAgregar" data-toggle="modal" class="nuevo btn btn-info" data-target=""> <li class="fa fa-plus"></li> Nuevo </a>
@endsection

@section('menuTrabajo')
 class="active-menu"
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
            {!! Form::text('funcionario', null, ['class'=>'form-control', 'placeholder'=>'Funcionario', 'id'=>'funcionario_', 'required']) !!}
          </div>
          <div class="col-md-6">
            <label for="unidad_" > <b><i>Unidad</i></b> </label>
            {!! Form::text('unidad', null, ['class'=>'form-control', 'placeholder'=>'Unidad', 'id'=>'actividad_', 'required']) !!}
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
            {!! Form::text('trabajo', null, ['class'=>'form-control', 'placeholder'=>'Trabajo', 'id'=>'trabajo_', 'required']) !!}
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
            <p id='estado_'> Sin estado </p>
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
                    {!! Form::open(['route'=>['Prestamo.update', ':DATO_ID'], 'method'=>'PATCH', 'id'=>'form-update' ])!!}
                    <div class="row">
                      <div class="col-md-6">
                        <label for="responsable_" > <b><i>Responsable</i></b> </label>
                        {!! Form::text('responsable', null, ['class'=>'form-control', 'placeholder'=>'Responsable', 'id'=>'responsable', 'readonly']) !!}
                      </div>
                      <div class="col-md-6">
                        <label for="unidad_" > <b><i>Unidad</i></b> </label>
                        {!! Form::text('unidad', null, ['class'=>'form-control', 'placeholder'=>'Unidad', 'id'=>'unidad', 'readonly']) !!}
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <label for="fecha_prestamo_" > <b><i>Fecha Prestamo</i></b> </label>
                        {!! Form::date('fecha_prestamo', null, ['class'=>'form-control', 'placeholder'=>'Apertura', 'id'=>'fecha_prestamo', 'readonly']) !!}
                      </div>
                      <div class="col-md-6">
                        <label for="fecha_devolucion_" > <b><i>Fecha Devolucion</i></b> </label>
                        {!! Form::date('fecha_devolucion', null, ['class'=>'form-control', 'placeholder'=>'Actividad', 'id'=>'fecha_devolucion', 'required']) !!}
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <label for="codigo_bien_" > <b><i>Codigo Bien</i></b> </label>
                        {!! Form::text('codigo_bien', null, ['class'=>'form-control', 'placeholder'=>'Codigo Bien', 'id'=>'codigo_bien', 'readonly']) !!}
                      </div>
                      <div class="col-md-6">
                        <label for="detalle_" > <b><i>Detalle</i></b> </label>
                        {!! Form::textarea('detalle', null, ['class'=>'form-control', 'rows'=>'2', 'placeholder'=>'Detalle', 'id'=>'detalle', 'readonly']) !!}
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
    <table class="table" id="tabla">
      <thead>
        <tr>
          <th> Usuario </th>
          <th> Fecha </th>
          <th> Unidad </th>
          <th> Nombre </th>
          <th> Bien </th>
          <th> Trabajo </th>
          <th> Estado </th>
          <th> Asignado </th>
          <th> Acciones </th>
        </tr>
      </thead>
      <tbody>
        @foreach($datos as $dato)
          <tr>
            <td>{{$dato->usuario}}</td>
            <td>{{$dato->fecha}}</td>
            <td>{{$dato->unidad}}</td>
            <td>{{$dato->funcionario}}</td>
            <td>{{$dato->codBienes}}</td>
            <td>{{$dato->trabajo}}</td>
            <td>
              @if( $dato->estado == "entregado")
                <?php $class="label label-info"; ?>
              @elseif( $dato->estado == "visto")
                <?php $class="label label-default"; ?>
              @elseif( $dato->estado == "normal")
                <?php $class="label label-primary"; ?>
              @elseif( $dato->estado == "complicado")
                <?php $class="label label-danger"; ?>
              @elseif( $dato->estado == "terminado")
                <?php $class="label label-success"; ?>
              @endif
              <label class="<?php echo $class; ?>"> {{ strtoupper( $dato->estado) }} </label>
            </td>
            <td>{{$dato->asignado}}</td>

            <td>
              <a href="#modalModifiar"  data-toggle="modal" data-target="" class="actualizar" style="color: #B8823B;"> <li class="fa fa-edit"></li> Editar</a> &nbsp;&nbsp;&nbsp;
              <a href="{{asset('index.php/Reporte/acta/'.$dato->id)}}"  style="color: #2991D8;"> <li class="fa fa-file"></li> Acta</a>
            </td>
          </tr>
        @endforeach
      </tbody>
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
                    "lengthMenu": "Mostrar _MENU_ datos por registros",
                    "zeroRecords": "No se encontro nada,  lo siento",
                    "info": "Mostrar paginas [_PAGE_] de [_PAGES_]",
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
            link  = '{{ asset("/index.php/Correo/")}}/'+id;

            $.getJSON(link, function(data, textStatus) {
                if(data.length > 0){
                    $.each(data, function(index, el) {

                      $('#correo').val(el.correo);
                      $('#clave').val(el.clave);
                      $('#nombre').val(el.nombre);
                      $('#cargo').val(el.cargo);
                      $('#unidad').val(el.unidad);
                      $('#entrega').val(el.entrega);
                      $('#fecha_activacion').val(el.fecha_activacion);
                      $('#fecha_desactivacion').val(el.fecha_desactivacion);
                      $('#activo').val(el.activo);
                      $('#observacion').val(el.observacion);

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
