@extends('layouts.layout')
@section('title', 'Reservas del HotelCalifornia')
@section('content')
<div class="col-sm-8 offset-sm-4">
<form method="POST" action="{{ route('reservas.store') }}">
@csrf <!--token-->
<h3 class="p-3 mb-2 col-md-6 bg-primary text-white">Nueva Reserva</h3>

<!--NOMBRE-->
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Nombre</label>
      <input name=name type="text" class="form-control" id="name" placeholder="Nombre" value="{{ old('name') }}">
    @error('name')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div></br>

<!--APELLIDOS-->
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="last_name">Apellidos</label>
      <input name="last_name" type="text" class="form-control" id="last_name" placeholder="Apellidos" value="{{ old('last_name') }}">
    @error('last_name')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div></br>

<!--TELÉFONO-->
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="phone">Teléfono</label>
      <input name=phone type="text" class="form-control" id="phone" placeholder="Teléfono" value="{{ old('phone') }}">
    @error('phone')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div></br>

<!--FECHA DE ENTRADA-->
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="date_entrada">Fecha de entrada</label>
      <input name=date_entrada type="text" class="form-control" id="date_entrada" placeholder="Fecha de entrada" value="{{ old('date_entrada') }}">
    @error('date_entrada')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div></br>

<!--FECHA DE SALIDA-->
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="date_salida">Fecha de salida</label>
      <input name=date_salida type="text" class="form-control" id="date_salida" placeholder="date_salida" value="{{ old('date_salida') }}">
    @error('date_salida')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div></br>

  <!--NÚMERO DE HABITACIÓN-->
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="number_room">Número de habitación</label>
      <input name=number_room type="number" class="form-control" id="number_room" placeholder="Number_room" value="{{ old('number_room') }}">
    @error('number_room')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div></br>

  <!--EMPLEADO QUE HA HECHO LA RESERVA-->
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="empleat_id">Empleado</label>
      <input name=empleat_id type="text" class="form-control" id="empleat_id" placeholder="Empleat" value="{{ old('empleat_id') }}">
    @error('empleat_id')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div></br>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>

@endsection