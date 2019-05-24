<?php
header("Content-Type: application/vnd.msword");
header("Expires:0 ");
header("Cache-Control: must-revalidate, post-check=0, pre-chech=0");
header("content-disposition: attachment;filename=".\Auth::user()->username."_".date('Y_m_d_H_i_s').".doc");

function mes($mes){
  $letra = "";
  switch ($mes) {
    case '01': $letra = "Enero";      break;
    case '02': $letra = "Febrero";    break;
    case '03': $letra = "Marzo";      break;
    case '04': $letra = "Abril";      break;
    case '05': $letra = "Mayo";       break;
    case '06': $letra = "Junio";      break;
    case '07': $letra = "Julio";      break;
    case '08': $letra = "Agosto";     break;
    case '09': $letra = "Septiembre"; break;
    case '10': $letra = "Octubre";    break;
    case '11': $letra = "Noviembre";  break;
    case '12': $letra = "Diciembre";  break;
  }
  return $letra;
}
?>

<html>
<head>
<title>Informe de la Unidad de Sistemas</title>
</head>
<body>
   <img src="{{asset('img/escudogmp.jpg')}}" width="50" height="50" alt="logo" class="logo-default"/>
   <center><b><u> INFORME DE ACTIVIDADES SEMANAL</u></b></center>
   <center><b><u> INFORME DEL {{date('d', strtotime($inifio))}} - {{date('d', strtotime($fin))}} DE {{ strtoupper(mes(date('m', strtotime($inifio)))) }} 2018</u></b></center>

  <br>

<table border="0"  width="100%">
  <tr>
    <td width="20%"><b>AL</b></td> <td  width="5%"> : </td>   <td  width="75%">Ing. Marlene Chumacero</td></tr>
  <tr>
   <td width="20%"><b> </b></td> <td  width="5%">  </td>   <td  width="75%"> <b>JEFA DE UNIDAD DE MÉTODOS Y SISTEMAS</b> </td></tr>
  <tr>
   <td width="20%"><b>DE </b></td> <td  width="5%"> : </td>   <td  width="75%">{{strtoupper($persona->nombres)}} {{strtoupper($persona->paterno)}} {{strtoupper($persona->materno)}} </td> </tr>
  <tr>
   <td width="20%"><b>CARGO</b></td> <td  width="5%"> : </td>   <td  width="75%">{{$persona->cargo}} </td></tr>
  <tr>
   <td width="20%"><b>FECHA:</b></td> <td  width="5%"> : </td>   <td  width="75%">{{ date('d') }} de {{ mes(date('m')) }} del {{ date('Y') }}</td></tr>
</table>

<hr>
<p align="justify">Es grato dirigirme a usted, a fin de informarle sobre las actividades realizadas en el  periodo comprendido del 01 hasta la fecha presente del mes de Abril de 2016, dando cumplimiento con los deberes asignados, son los que a continuaci&oacute;n se detallan:</p>

  <br>
  @foreach($datos as $dato)

    <b>Fecha: </b> {{ explode(' ', $dato->created_at)[0]}}<br>
    <b>Detalle: </b> {{ strtoupper($dato->problema) }}<br>
    <b>Solucion:</b> {{ ucfirst($dato->trabajo_realizado) }}<br>

  <table border="0"  width="100%">
     <tr>
         <td><b>Unidad: </b>  {{ucfirst($dato->unidad)}}</td>
         <td><b>Funcionario : </b>{{strtoupper($dato->responsable_equipo)}}</td>
         <td><b>Equipo : </b> {{ucfirst($dato->id_equipo)}}</td>

     </tr>
 </table>

 <br><br><br>
@endforeach
<br><br><br>
<br><br><br>
<center>
{{strtoupper($persona->nombres)}} {{strtoupper($persona->paterno)}} {{strtoupper($persona->materno)}} <br>
C.I. {{$persona->documento}} <br></center>
</body>
</html>
