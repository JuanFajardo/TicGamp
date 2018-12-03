<table class="table">
  <thead>
    <tr>
      <td> Fecha </td>
      <td> Nombre </td>
      <td> Unidad </td>
      <td> Bien </td>
      <td> Trabajo </td>
      <td> Foto </td>
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
      </tr>
    @endforeach
  </tbody>
</table>
