@extends('layouts.layout')
@section('content')
<div class="col-sm-8 offset-sm-4">
<form method="POST" action="{{ route('reservas.update', $reserva->id) }}">
@csrf <!--token-->
@method('PUT') 
<h3 class="p-3 mb-2 col-md-6 bg-warning text-white">Modificar Reserva</h3>

<!--NOMBRE-->
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputname">Nombre</label>
      <input name=name type="text" class="form-control" id="name" placeholder="Nombre" value="{{ old('name', $reserva->name) }}">
      @error('name')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div></br>

<!--APELLIDOS-->
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputlast_name">Apellidos</label>
      <input name="last_name" type="text" class="form-control" id="last_name" placeholder="Apellidos" value="{{ old('last_name', $reserva->last_name) }}">
    @error('last_name')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div></br>

<!--TELÉFONO-->
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputphone">Teléfono</label>
      <input name=phone type="text" class="form-control" id="inputphone" placeholder="Teléfono" value="{{ old('phone', $reserva->phone) }}">
    @error('phone')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div></br>

<!--FECHA ENTRADA-->
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputdate_entrada">Fecha de entrada</label>
      <input name=date_entrada type="text" class="form-control" id="inputdate_entrada" placeholder="date_entrada" value="{{ old('date_entrada', $reserva->date_entrada) }}">
    @error('date_entrada')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div></br>

<!--FECHA SALIDA-->
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputdate_salida">Fecha de salida</label>
      <input name=date_salida type="text" class="form-control" id="inputdate_salida" placeholder="date_salida" value="{{ old('date_salida', $reserva->date_salida) }}">
    @error('date_salida')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div></br>

<!--NÚMERO HABITACIÓN-->
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputnumber_room">number_room</label>
      <input name=number_room type="number" class="form-control" id="inputnumber_room" placeholder="number_room" value="{{ old('number_room', $reserva->number_room) }}">
    @error('number_room')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div></br>

    <!--EMPLEADO QUE HA HECHO LA RESERVA-->
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="empleat_id">Empleado</label>
      <input name=empleat_id type="text" class="form-control" id="empleat_id" placeholder="Empleat" value="{{ old('empleat_id', $reserva->empleat_id) }}">
    @error('empleat_id')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div></br>

  <button type="submit" class="btn btn-warning">Editar</button>
</form>
</div>

@endsection