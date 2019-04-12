@extends('gamp')

@section('cuerpo')

<form class="" action="{{asset('index.php/Reporte')}}" method="post">
{{ csrf_field() }}
<div class="row">

  <div class="col-md-3">
    <label > <b>Fecha Inicial</b>  </label>
    <input type="date" name="fecha_inicio" id="fecha_inicio" value="" required class="form-control">
  </div>
  <div class="col-md-3">
    <label > <b>Fecha Final</b>  </label>
    <input type="date" name="fecha_fin" id="fecha_fin" value="" required class="form-control">
  </div>
  <div class="col-md-3">
    <br>
    <input type="submit"  id="botonM" name="boton" value="Reporte Mensual" class="btn btn-primary">
    <input type="submit"  id="botonS" name="boton" value="Reporte Semanal" class="btn btn-success">
  </div>
</div>
</form>

<br><br>
<div class="row">
  <div class="col-md-12">
    <table class="table" id="tabla">
      <thead>
        <tr>
          <td> Fecha </td>
          <td> Nombre </td>
          <td> Unidad </td>
          <td> Bien </td>
          <td> Trabajo </td>
          <td> Foto </td>
          <td> Acciones </td>
        </tr>
      </thead>
      <tbody>
        @foreach($datos as $dato)
          <tr>
            <td>{{$dato->fecha}}</td>
            <td>{{$dato->funcionario}}</td>
            <td>{{$dato->unidad}}</td>
            <td>{{$dato->codBienes}}</td>
            <td>{{$dato->trabajo}}</td>
            <td>
              <img src="data:image/png;base64,{{$dato->firma}}" alt="">
            </td>
            <td>sdsd</td>
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
        /*
        $('.nuevo').click(function(event){
          event.preventDefault();
          $('#form-insert').closest('form').find("input[type=text], textarea").val("");
        });
        */

        $('#correo_').click(function(event){
            var clave = "";
            for(i=1; i<=10; i++){
              var numero = Math.floor(Math.random() * 10);
              if(numero % 2 == 0 ){
                var dato = Math.floor(Math.random() * (48 - 57 + 1) ) + 57;
                var ascii = String.fromCharCode(dato);
              }else{
                var dato = Math.floor(Math.random() * (65 - 90 + 1) ) + 90;
                var ascii = String.fromCharCode(dato);
              }
              clave = clave + ascii;
            }
            $('#clave_').val(clave);
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
