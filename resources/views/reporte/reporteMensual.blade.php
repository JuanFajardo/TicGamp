<?php
header("Content-Type: application/vnd.msword");
header("Expires:0 ");
header("Cache-Control: must-revalidate, post-check=0, pre-chech=0");
header("content-disposition: attachment;filename=".$datos[0]->usuario."_".date('Y_m_d_H_i_s').".doc");

function mes($mes){
  $letra = "";
  switch ($mes) {
    case '1': $letra = "enero"; break;
    case '2': $letra = "febrero"; break;
    case '3': $letra = "marzo"; break;
    case '4': $letra = "abril"; break;
    case '5': $letra = "mayo"; break;
    case '6': $letra = "junio"; break;
    case '7': $letra = "julio"; break;
    case '8': $letra = "agosto"; break;
    case '9': $letra = "septiembre"; break;
    case '10': $letra = "octubre"; break;
    case '11': $letra = "noviembre"; break;
    case '12': $letra = "diciembre"; break;
  }
  return $letra;
}
?>
<html>
  <head>
    <title>Informe de la Unidad de Sistemas</title>
  </head>
<body>
   <center><b><u>INFORME DE ACTIVIDADES MENSUAL</u></b></center>
   <center><b><u>INFORME MES DE {{ strtoupper(mes(date('m'))) }}</u></b></center>
  <br>

<table border="0"  width="100%">
  <tr>
    <td width="20%"><b>AL</b></td> <td  width="5%"> : </td>   <td  width="75%">Ing. Marlene Ruth Chumacero Reinaga </td>
  </tr>
   <tr>
   <td width="20%"><b> </b></td> <td  width="5%">  </td>   <td  width="75%"> <b>JEFE DE LA UNIDAD DE METODOS Y SISTEMAS</b> </td>
  </tr>
  <tr>
   <td width="20%"><b>DE </b></td> <td  width="5%"> : </td>   <td  width="75%">{{ $datos[0]->titulo }} {{ $datos[0]->nombre }} {{ $datos[0]->paterno }}  {{ $datos[0]->materno }}  </td>
  </tr>
   <tr>
   <td width="20%"><b></b></td> <td  width="5%"> : </td>   <td  width="75%"> <b>{{ $datos[0]->cargo }}</b>  </td>
   </tr>
   <tr>
   <td width="20%"><b>Fecha</b></td> <td  width="5%"> : </td>   <td  width="75%"> <b>Potosí, {{date('d')}} de {{ mes(date('m')) }}  del {{date('Y')}}</b>  </td>
   </tr>
</table>

<hr>
<p align="justify">
  Es grato dirigirme, a fin de informarle sobre las actividades realizadas en el periodo comprendido del 01 hasta la fecha del mes de {{ mes(date('m')) }}
  del {{ date('Y') }}, dando cumplimiento con los deberes asignados, son los que a continuación se detalla:
</p>

  <br>
  @foreach($datos as $dato)
  <table border="0"  width="100%">
    <tr>
      <td><b>Fecha: </b>  {{ $dato->fecha }}</td>
      <td><b>Unidad: </b>  {{ucfirst($dato->unidad)}}</td>
      <td><b>Responsable : </b>{{strtoupper($dato->funcionario)}}</td>
      <td><b>Codigo Bien : </b> {{ ucfirst($dato->codBienes)}}</td>
    </tr>
    <tr>
      <td colspan="4"><b>Solucion:</b><br> {{ ucfirst($dato->trabajo) }} </td>
    </tr>
 </table>

 <br><br><br>
@endforeach
<br><br><br>
<br><br><br>
<center>
{{ $datos[0]->titulo }} {{ $datos[0]->nombre }} {{ $datos[0]->paterno }}  {{ $datos[0]->materno }} <br>
C.I. {{ $datos[0]->ci }}  <br></center>
</body>
</html>
