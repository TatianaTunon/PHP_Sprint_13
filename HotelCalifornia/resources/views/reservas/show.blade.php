@extends('layouts.layout')
@section('content')

<!DOCTYPE html>

<div class="container">
    <div class="col-md-3 m-4">

        <h1>id: <?php echo ($reservas->id); ?></h1>
        <p>Nombre: <?php echo ($reservas->name); ?></p>
        <p>Apellido: <?php echo ($reservas->last_name); ?></p>
        <p>Teléfono: <?php echo ($reservas->phone); ?></p>
        <p>Fecha entrada: <?php echo ($reservas->date_entrada); ?></p>
        <p>Fecha salida: <?php echo ($reservas->date_salida); ?></p>
        <p>Habitación: <?php echo ($reservas->number_room); ?></p>

    <div class="row justify-content-center">    
        <a href="{{ route('reservas.index') }}" class="btn btn-lg btn-secondary">Volver al index</a>
    </div>
    </div>
</div>
</html>

