@extends('gamp')

@section('title') Prestamo @endsection

@section('ventana') Prestamo @endsection

@section('descripcion') de los bienes de la unidad  @endsection
@section('titulo')
<a href="{{asset('index.php/Prestamo')}}" class="btn btn-primary"> <i class="fa fa-qrcode"></i> Volver </a>
<a  style="color:#fff;" href="#modalAgregar" data-toggle="modal" class="nuevo btn btn-info" data-target=""> <li class="fa fa-plus"></li> Nuevo </a>
 @endsection

@section('menuPrestamo')
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
            <label for="responsable_" > <b><i>Responsable</i></b> </label>
            {!! Form::text('responsable', null, ['class'=>'form-control', 'placeholder'=>'Responsable', 'id'=>'apertura_', 'required']) !!}
          </div>
          <div class="col-md-6">
            <label for="unidad_" > <b><i>Unidad</i></b> </label>
            {!! Form::text('unidad', null, ['class'=>'form-control', 'placeholder'=>'Unidad', 'id'=>'actividad_', 'required']) !!}
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <label for="fecha_prestamo_" > <b><i>Fecha Prestamo</i></b> </label>
            {!! Form::date('fecha_prestamo', null, ['class'=>'form-control', 'placeholder'=>'Apertura', 'id'=>'fecha_prestamo_', 'required']) !!}
          </div>
          <div class="col-md-6">
            <label for="fecha_devolucion_" > <b><i>Fecha Devolucion</i></b> </label>
            {!! Form::date('fecha_devolucion', null, ['class'=>'form-control', 'placeholder'=>'Actividad', 'id'=>'fecha_devolucion_', 'readonly']) !!}
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <label for="codigo_bien_" > <b><i>Codigo Bien</i></b> </label>
            {!! Form::text('codigo_bien', null, ['class'=>'form-control', 'placeholder'=>'Codigo Bien', 'id'=>'codigo_bien_', 'required']) !!}
          </div>
          <div class="col-md-6">
            <label for="detalle_" > <b><i>Detalle</i></b> </label>
            {!! Form::textarea('detalle', null, ['class'=>'form-control', 'rows'=>'2', 'placeholder'=>'Detalle', 'id'=>'detalle_', 'required']) !!}
          </div>
        </div>

        <hr>
        {!! Form::hidden('id_user', '1') !!}
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

<table id="tablaGamp" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th>Id</th>
      <th>Responsable</th>
      <th>Fecha Prestamo</th>
      <th>Fecha Debolucion</th>
      <th>Codigo Bien</th>
      <th>Presto</th>
      <th>Recogio</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($datos as $dato)
      <tr data-id="{{ $dato->id }}">
        <td>{{ $dato->id }}</td>
        <td>{{ $dato->responsable }}</td>
        <td>{{ date('d-m-Y H:i:s', strtotime($dato->fecha_prestamo)) }}</td>
        <td>@if($dato->fecha_devolucion == "")
              <label class="label label-danger"> NO SE ENTREGO AUN</label>
            @else
              {{ date('d-m-Y H:i:s', strtotime($dato->fecha_devolucion)) }}
            @endif
        </td>
        <td>{{ $dato->codigo_bien }}</td>
        <td> <label class="label label-info">{{ $dato->user_presto }}</label> </td>
        <td> <label class="label label-success">{{ $dato->user_recogio }}</label> </td>
        <td>
          @if($dato->fecha_devolucion == "")
          <a href="#modalModifiar"  data-toggle="modal" data-target="" class="actualizar" style="color: #B8823B;"> <li class="fa fa-edit"></li> Editar</a> &nbsp;&nbsp;&nbsp;
          @endif
          <a href="{{asset('index.php/Reporte/acta/'.$dato->id)}}"  style="color: #2991D8;"> <li class="fa fa-file"></li> Acta</a>
          <!--<a href="#"  data-toggle="modal" data-target="" style="color: #ff0000;" class="eliminar"> <li class="fa fa-trash"></li>Eliminar</a>-->
        </td>
      </tr>
    @endforeach
  </tbody>
</table>

{!! Form::open(['route'=>['Prestamo.destroy', ':DATO_ID'], 'method'=>'DELETE', 'id'=>'form-delete']) !!}
{!! Form::close() !!}
@endsection

@section('js')
<script type="text/javascript">
  $(document).ready(function(){
    $('#tablaGamp').DataTable({
      "order": [[ 7, 'asc']],
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
    link  = '{{ asset("/index.php/Prestamo/")}}/'+id;
    $.getJSON(link, function(data, textStatus) {
      if(data.length > 0){
        $.each(data, function(index, el) {

          $('#responsable').val(el.responsable);
          $('#unidad').val(el.unidad);
          $('#fecha_prestamo').val(el.fecha_prestamo);
          $('#fecha_devolucion').val(el.fecha_devolucion);
          $('#codigo_bien').val(el.codigo_bien);
          $('#detalle').val(el.detalle);
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
    if(confirm('Esta seguro de eliminar el Proyecto')){
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
