@extends('layouts.plantilla')

@section()

@section('contenido')

<h1 class="display-1 text-center text-danger mt-4">FORMULARIO</h1>


<div class="container mt-5 col-md-6">

<div class="card text-center">
  <div class="card-header">
    Introduce aquí tus memorias
  </div>
  <div class="card-body">

  <form method="POST" action="/guardarRecuerdo">
  @csrf

  <div class="mb-3">
    <label class="form-label">Titulo: </label>
    <input type="text" class="form-control" name="txtTitulo">
  </div>

  <div class="mb-3">
    <label class="form-label">Recuerdo</label>
    <input type="text" class="form-control" name="txtRecuerdo">
  </div>

  

  </div>
  <div class="card-footer text-body-secondary">
    <div class="d-grip gap-2"></div>
    <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
  </div>
</div>

</div>

@endsection