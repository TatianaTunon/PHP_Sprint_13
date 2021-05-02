@extends('layouts.layout')
@section('title', 'Empleados del HotelCalifornia')

@section('content')

<div class="col-sm-8 offset-sm-4">
<form method="POST" action="{{ route('departaments.update', $departament->id) }}">
@csrf <!--token-->
@method('PUT') 
<h3 class="p-3 mb-2 col-md-6 bg-warning text-white">Editar Departamento</h3>

<!--NOMBRE-->
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Nombre</label>
      <input name=name type="text" class="form-control" id="name" placeholder="Nombre" value="{{ old('name', $departament->name) }}">
    @error('name')
     <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div></br>

  <button type="submit" class="btn btn-warning">Editar</button>
</form>
</div>
@endsection