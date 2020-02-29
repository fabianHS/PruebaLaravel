@extends('layouts.master')

@section('content')
<div class="row" style="margin-top:40px">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center">
            Modificar Cliente
         </div>
         <div class="card-body" style="padding:30px">

            {{-- TODO: Abrir el formulario e indicar el método POST --}}
            <form class="" action="#" method="post">

              {{method_field('PUT')}}
              <!--<input type="hidden" name="_method" value="PUT">-->

            {{-- TODO: Protección contra CSRF --}}
            {{ csrf_field() }}
            <div class="form-group">
               <label for="title">Nombre</label>
               <input type="text" name="title" id="title" class="form-control">
            </div>

            <div class="form-group">
              <label for="imagen">Imagen</label>
              <input type="file" name="imagen" id="imagen" value="" class="form-control">
               {{-- TODO: Completa el input para la imagen --}}
            </div>

            <div class="form-group">
              <label for="imagen">Fecha de nacimiento</label>
              <input type="date" name="fecha" id="fecha" value="" class="form-control">
               {{-- TODO: Completa el input para el fecha de nacimiento --}}
            </div>

            <div class="form-group">
              <label for="imagen">Email</label>
              <input type="email" name="email" id="email" value="" class="form-control">
               {{-- TODO: Completa el input para el correo --}}
            </div>
            <div class="form-group text-center">
               <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                   Modificar cliente
               </button>
            </div>
            {{-- TODO: Cerrar formulario --}}
          </form>
         </div>
      </div>
   </div>
</div>
@stop
