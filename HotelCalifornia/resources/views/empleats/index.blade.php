
@extends('layouts.partials.head')
@extends('layouts.partials.footer')
@include('layouts.partials.sidebar')





<!DOCTYPE html>
<html>
  
<div class="row">
  <div class="row justify-content-center">
    <div class="col-md-8 m-12">
    @if(Auth::user()->id == 1 )
    <a href="{{ route('empleats.create') }}" class="btn btn-lg btn-primary">Nuevo empleado</a>
    @endif
    </div>
  </div>
</div>

<!-- BOTÓN SEARCH -->
<div class="container">
<form>
  <div class="row justify-content-end">
    <div class="col-md-3 m-4">
      <input name="buscar" class="form-control mr-sm-2" type="search" placeholder="Buscar por departaments" aria-label="Search">
    </div>
    <div class="col-md-5 m-4">
      <button class="btn btn-success my-2 my-sm-0" type="submit">Buscar</button>
    </div>
  </div>
</form>
</div>

  

<div class="row">
  <div class="col-lg-10 offset-lg-1">
      <div class="table-responsive table--no-card m-b-40">
          <table class="table table-borderless table-striped table-earning">
            <thead>
              <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">DNI</th>
              <th scope="col">Teléfono</th>
              <th scope="col">Departamento</th>
              <th scope="col"></th>
              </tr>
            </thead>

  <tbody>
    @foreach($empleats as $empleat)
    @can ('view-any', $empleat)
    <tr>
      <th scope="row">{{ $empleat->id }}</th>
      <td>{{ $empleat->name}}</td>
      <td>{{ $empleat->last_name}}</td>
      <td>{{ $empleat->DNI}}</td>
      <td>{{ $empleat->phone}}</td>
      <td>{{ $empleat->departament->name}}</td>
     
      <td>
        
      <div class="btn-group">
      @can('update', $empleat) 
        <a href="{{route('empleats.edit', $empleat->id)}}" class="btn btn-warning ">Editar</a>
        @endcan
        @can('delete', $empleat) 
        <form method="POST" action="{{route('empleats.destroy', $empleat->id)}}">
          @csrf
          @method('DELETE')
          <button type="submit" href="#" class="btn btn-danger">Borrar</button>
          @endcan
        </form>
      </div>
      </td>
    </tr>
    @endcan
    @endforeach
  </tbody>
</table>
</div>
  </div>
  

<!--Volver a la página inicial -->
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-2 m-4">
    <a href="{{ url('/') }}" class="btn btn-lg btn-secondary">Volver a home</a>
    </div>
</div>
</div>
</html>

