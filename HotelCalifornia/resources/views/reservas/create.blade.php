@extends('layouts.partials.head')
@extends('layouts.partials.footer')
@include('layouts.partials.sidebar')

<!DOCTYPE html>
<html>
<div class="container">
</div></br></br>
<div class="col-lg-6 offset-sm-3">
    <div class="card">
      <div class="card-header">
        <div class="col-sm-8 offset-sm-4">
          <form method="POST" action="{{ route('reservas.store') }}">
          @csrf <!--token-->
          <h3 class="p-3 mb-2 col-md-6 bg-primary text-white text-center">Nueva Reserva</h3>
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
                <input name="last_name" type="text" class="form-control" id="last_name" placeholder="Apellidos" value="{{ old('last_name') }}">
              @error('last_name')
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
          <!--FECHA DE ENTRADA-->
            <div class="row form-group">
                <div class="col-8">
                    <div class="form-group">
                    <label for="date_entrada">Fecha de entrada</label>
                    <input name=date_entrada type="text" class="form-control" id="date_entrada" placeholder="Fecha de entrada" value="{{ old('date_entrada') }}">
                  @error('date_entrada')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                    </div>
                </div>
          <!--FECHA DE SALIDA-->
            <div class="col-8">
                <div class="form-group">
                <label for="date_salida">Fecha de salida</label>
                  <input name=date_salida type="text" class="form-control" id="date_salida" placeholder="date_salida" value="{{ old('date_salida') }}">
                @error('date_salida')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
            </div>
          <!--NÚMERO DE HABITACIÓN-->
            <div class="col-8">
                <div class="form-group">
                <label for="number_room">Número de habitación</label>
                  <input name=number_room type="number" class="form-control" id="number_room" placeholder="Number_room" value="{{ old('number_room') }}">
                @error('number_room')
                  <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
            </div>
          <!--EMPLEADO QUE HA HECHO LA RESERVA-->
             <div class="col-8">
                <div class="form-group">
                <label for="empleat_id">Empleado</label>
                      <select class="form-select" name=empleat_id id="empleat_id" >
                        @foreach($empleats as $empleat)
                            <option value="{{ $empleat ['id'] }}">
                                {{ $empleat ['name'] }}
                            </option>
                        @endforeach
                    </select>
                    @error('empleat_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>

</form>

</div>

</html>