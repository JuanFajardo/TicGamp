<?php
header("Content-Type: application/vnd.msword");
header("Expires:0 ");
header("Cache-Control: must-revalidate, post-check=0, pre-chech=0");
header("content-disposition: attachment;filename=".\Auth::user()->username."_".date('Y_m_d_H_i_s').".doc");
?>
<html>
<head>
<title>Reporte de Mantenimiento</title>
</head>
<body>
  <img src="{{asset('img/escudogmp.jpg')}}" width="50" height="50" alt="logo" class="logo-default"/>
   <center><b>REPORTE DE MANTENIMIENTO</b></center>
   <p align="right">{{$dato->id}}</p><br>
   <p align="right"><b>Potosi,{{date('d-m-Y')}}</b></p>
  <br>
  <table border="0" width="100%">
    <tr>
      <td width="20%"><b>Responsable</b></td><td  width="2%">:</td> <td  width="78%">{{strtoupper($dato->responsable_equipo)}}</td>
    </tr>
  </table>

<table border="0"  width="100%">
  <tr>
   <td  width="15%"><b>Codigo</b>   </td><td  width="2%">:</td><td  width="15%">{{$dato->id_equipo }}</td>
   <td  width="15%"><b>Categoria</b></td><td  width="2%">:</td><td  width="15%">  </td>
   <td  width="15%"><b>Modelo</b>   </td><td  width="2%">:</td><td  width="19%">  </td>
  </tr>
  <tr>
   <td  width="15%"><b>Equipo</b>  </td><td  width="2%">:</td><td  width="16%">  </td>
   <td  width="14%"><b>Marca</b>   </td><td  width="2%">:</td><td  width="14%">   </td>
   <td  width="17%"><b>Num Serie</b></td><td  width="2%">:</td><td  width="17%"> </td>
  </tr>
</table>

<hr>
<center>MANTENIMIENTO REALIZADO</center>
<left>DESCRIPCION</lef>

  <br>


    <b>Detalle: </b>{{$dato->problema}}<br>

 <br><br><br>

<br><br><br>
<br><br><br>
<center>
  <table border="0" width="100%">
    <tr>
      <td width="49%"><center>{{strtoupper($dato->responsable_equipo)}} </center></td><td  width="2%"></td><td  width="49%"><center>{{strtoupper($persona->nombres)}} {{strtoupper($persona->paterno)}} {{strtoupper($persona->materno)}}  </center></td>
    </tr>
    <tr>
      <td width="49%"><center>Responsable Equipo</center></td><td  width="2%"></td><td  width="49%"><center>Responsable Mantenimiento</center></td>
    </tr>
  </table>
  <table border="0"  width="100%">
    <tr>
      <td width="7%"><b>Nota.</b></td>
      <td  width="83%"><small>recepcionado los bienes ,constituyen RESPONZABLES ABSOLUTOS, de su custodia y
         preservacion.Cualquier da&ntilde;o, desperfecto o extravio, insatalaci&oacute;n de sofware que no este relacionado
         con las funciones que realiza el funcionario sera pasible a sanciones establecidas en el reglamento interno
         del municipio y lo que establece la ley 1178 (Art 81)</small></td>
    </tr>

  </table>
 </center>
</body>
</html>
