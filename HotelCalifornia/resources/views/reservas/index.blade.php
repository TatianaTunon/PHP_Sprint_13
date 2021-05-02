@extends('layouts.layout')

@section('title', 'HotelCalifornia')

<!--@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
@endsection -->

@section ('content')
<!DOCTYPE html>
<html>
 <div class="row">
    <div class="col-md-5 m-4">
        <a href="{{ route('reservas.create') }}" class="btn btn-lg btn-primary">Nueva reserva</a>
    </div>
</div>

<table class="table table-responsive table-striped text-center">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Teléfono</th>
      <th scope="col">Fecha_entrada</th>
      <th scope="col">Fecha_salida</th>
      <th scope="col">Habitación</th>
      <th scope="col">Empleat</th>
      <th scope="col"></th>
    </tr>
  </thead>

  <tbody>
    @foreach($reservas as $reserva)
    @can ('view-any', $reserva)
    <tr>
      <th scope="row">{{ $reserva->id }}</th>
      <td>{{ $reserva->name}}</td>
      <td>{{ $reserva->last_name}}</td>
      <td>{{ $reserva->phone}}</td>
      <td>{{ $reserva->date_entrada}}</td>
      <td>{{ $reserva->date_salida}}</td>
      <td>{{ $reserva->number_room}}</td>
      <td>{{ $reserva->empleat->name}}</td>
     
      <td>
      <div class="btn-group">
      @can('delete', $reserva) 
        <a href="{{route('reservas.edit', $reserva->id)}}" class="btn btn-warning ">Editar</a>
    
        <form method="POST" action="{{route('reservas.destroy', $reserva->id)}}">
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

<!--Volver a la página inicial -->
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-2 m-4">
    <a href="{{ url('/') }}" class="btn btn-lg btn-secondary">Volver a home</a>
    </div>
</div>
</div>








</html>

@endsection