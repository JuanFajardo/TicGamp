<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <center>
      <h3>ACTA DE ENTREGA<br>____________________________</h3>
    </center>
    <br><br>
    <?php
    function mesLiteral($mes){
      $literal = "";
      switch($mes){
        case '1': $literal = "Enero"; break;
        case '2': $literal = "Febrero"; break;
        case '2': $literal = "Marzo"; break;
        case '4': $literal = "Abril"; break;
        case '5': $literal = "Mayo"; break;
        case '6': $literal = "Junio"; break;
        case '7': $literal = "Julio"; break;
        case '8': $literal = "Agosto"; break;
        case '9': $literal = "Septiembre"; break;
        case '10': $literal = "Octubre"; break;
        case '11': $literal = "Noviembre"; break;
        case '12': $literal = "Diciembre"; break;
      }
      return $literal;
    }
    ?>
    <p style="padding-right:50px; padding-left:100px;">
    A los {{ date('d', strtotime($dato->fecha_prestamo)) }} días del mes de {{ mesLiteral(date('m', strtotime($dato->fecha_prestamo))) }}
    de {{ date('Y', strtotime($dato->fecha_prestamo)) }},
    se hace el préstamo al/la <b>{{ strtoupper($dato->responsable) }}</b> de la unidad <b>{{ $dato->unidad }}</b>, el bien XXX con el código de Bienes {{$dato->codigo_bien}},
    con los siguientes detalles:
    <br><br>
    {{$dato->detalle}}
    <br>



    <br><br><br><br><br><br>
    <table width="100%">
      <tr>
        <td width="30"> <center><b>ENTREGUÉ CONFORME</b></center> </td>
        <td></td>
        <td width="30"> <center><b>RECIBÍ CONFORME</b></center> </td>
      </tr>
      <tr>
        <td width="30"><center>Ing. Marlene Chumacero R.</center></td>
        <td width="30"></td>
        <td width="30"> <center>{{ $dato->responsable }}</center> </td>
      </tr>
      <tr>
        <td width="30"> <center><b>JEFE UNIDAD DE SISTEMAS</b></center> </td>
        <td width="30"></td>
        <td width="30"> <center><b>{{ strtoupper($dato->unidad) }}</b></center>  </td>
      </tr>
    </table>
    <br><br>
    <i style="font-size:10px;">Imprimido: {{ date('Y-m-d H:i:s') }}</i>
    </p>


  </body>
</html>
