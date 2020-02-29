@extends('layouts.master')

@section('content')

<div class="row">
  <div class="col-sm-4">
    <img src="{{$clientes['imagen']}}" style="height:200px"/>
  </div>
  <div class="col-sm-8">
      <h3>{{$clientes['nombre']}}</h3>
      <h5><strong>Correo-e</strong> {{$clientes['correo']}}</h5>
      <h5><strong>Fecha de nacimiento</strong> {{$clientes['fecha_nacimiento']}}</h5>
      <a href="../edit/{{$clientes['numero']}}" class="btn btn-warning"   role="button">Editar</a>
      <a href="../" class="btn btn-info"role="button" >Volver</a>
  </div>
</div>

@stop
