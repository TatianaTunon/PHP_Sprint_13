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
        <div class="col-sm-8 offset-sm-4">
        <form method="POST" action="{{ route('empleats.store') }}">
          @csrf <!--token-->
          <h3 class="p-3 mb-2 col-md-6 bg-primary text-white">Nuevo Empleado</h3>
        </div>
   
        <div class="card-body card-block">
          <!--NOMBRE-->
            <div class="form-group">
            <label for="name">Nombre</label>
                <input name=name type="text" class="form-control" id="name" placeholder="Nombre" value="{{ old('name') }}">
              @error('name')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          <!--APELLIDOS-->
            <div class="form-group">
            <label for="last_name">Apellidos</label>
                <input name=last_name type="text" class="form-control" id="last_name" placeholder="Apellidos" value="{{ old('last_name') }}">
              @error('last_name')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          <!--DNI-->
          <div class="form-group">
            <label for="DNI">DNI</label>
                <input name=DNI type="text" class="form-control" id="DNI" placeholder="DNI" value="{{ old('DNI') }}">
              @error('DNI')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
          <!--TELÉFONO-->
             <div class="form-group">
             <label for="phone">Teléfono</label>
                  <input name=phone type="text" class="form-control" id="phone" placeholder="Teléfono" value="{{ old('phone') }}">
                @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
          <!--DEPARTAMENTO-->
                <div class="form-group">
                <label for="departament_id">Departamento</label>
                      <select class="form-select" name=departament_id id="departament_id" >
                        @foreach($departaments as $departament)
                            <option value="{{ $departament ['id'] }}">
                                {{ $departament ['name'] }}
                            </option>
                        @endforeach
                    </select>
                    @error('departament_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
      
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>

</form>

</div>
</div>

</html>
