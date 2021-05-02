
@extends('layouts.layout')

@section('title', 'HotelCalifornia')

@section ('content')
<!DOCTYPE html>
<html>
<div class="row">
    <div class="col-md-5 m-4">
    @if(Auth::user()->id <= 2 )
        <a href="{{ route('departaments.create') }}" class="btn btn-lg btn-primary">Nuevo departamento</a>
    @endif
    </div>
</div>
<table class="table table-responsive table-striped text-center">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
        <th scope="col"></th>
    </tr>
  </thead>
  
  <tbody>
    @foreach($departaments as $departament)
    @can ('view-any', $departament)
    <tr>
      <th scope="row">{{ $departament->id }}</th>
      <td>{{ $departament->name}}</td>
      <td>
      <div class="btn-group">
      @can('update', $departament) 
        <a href="{{route('departaments.edit', $departament->id)}}" class="btn btn-warning ">Editar</a>
        @endcan
      @can('delete', $departament) 
        <form method="POST" action="{{route('departaments.destroy', $departament->id)}}">
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