@extends('layouts.partials.head')
@extends('layouts.partials.footer')
@include('layouts.partials.sidebar')
<!DOCTYPE html>
<html>
<div class="container">
</div></br></br>
<div class="row">

<div class="col-lg-8 offset-lg-2">
    <div class="card">
      <div class="card-header">
      <div class="col-lg-12 offset-lg-2">
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
<div class="col-lg-12 offset-lg-2">
  <button type="submit" class="btn btn-warning">Editar</button>
  </div>
</form>
</div>
</div>

