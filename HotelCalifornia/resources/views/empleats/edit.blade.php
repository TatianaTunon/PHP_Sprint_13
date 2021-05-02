@extends('layouts.layout')
@section('title', 'Empleados del HotelCalifornia')
@section('content')
<div class="col-sm-8 offset-sm-4">
<form method="POST" action="{{ route('empleats.update', $empleat->id) }}">
@csrf <!--token-->
@method('PUT') 
<h3 class="p-3 mb-2 col-md-6 bg-warning text-white">Modificar Reserva</h3>


<!--NOMBRE-->
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Nombre</label>
      <input name=name type="text" class="form-control" id="name" placeholder="Nombre" value="{{ old('name', $empleat->name) }}">
    @error('name')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div></br>

<!--APELLIDOS-->
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="last_name">Apellidos</label>
      <input name="last_name" type="text" class="form-control" id="last_name" placeholder="Apellidos" value="{{ old('last_name', $empleat->last_name) }}">
    @error('last_name')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div></br>

<!--DNI-->
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="DNI">DNI</label>
      <input name=DNI type="text" class="form-control" id="DNI" placeholder="DNI" value="{{ old('DNI', $empleat->DNI) }}">
    @error('DNI')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div></br>

<!--TELÉFONO-->
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="phone">Teléfono</label>
      <input name=phone type="text" class="form-control" id="phone" placeholder="Teléfono" value="{{ old('phone', $empleat->phone) }}">
    @error('phone')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div></br>

  <!--DEPARTAMENTO-->
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="departament_id">Departamento</label>
      <input name=departament_id type="text" class="form-control" id="departament_id" placeholder="departament_id" value="{{ old('departament_id', $empleat->departament_id) }}">
    @error('departament_id')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div></br>

  <button type="submit" class="btn btn-warning">Editar</button>
</form>
</div>

@endsection