@extends('layouts.layout')
@section('title', 'Empleados del HotelCalifornia')
@section('content')
<div class="col-sm-8 offset-sm-4">
<form method="POST" action="{{ route('departaments.store') }}">
@csrf <!--token-->
<h3 class="p-3 mb-2 col-md-6 bg-primary text-white">Nueva Departamento</h3>

<!--NOMBRE-->
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Nombre</label>
      <input name=name type="text" class="form-control" id="name" placeholder="Nombre" value="{{ old('name') }}">
    @error('name')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div></br>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>

@endsection