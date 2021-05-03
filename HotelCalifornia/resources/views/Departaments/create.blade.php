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
        <form method="POST" action="{{ route('departaments.store') }}">
          @csrf <!--token-->
          <h3 class="p-3 mb-2 col-md-6 bg-primary text-white">Nuevo Departamento</h3>
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
        </div>
      </div>
    </div>
</div> 
    
    <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>

</form>
</div>
</div>

</html>