@extends('layouts.layout')

<!-- Navbar BD -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd; padding-left: 20;">
  <a class="navbar-brand" href="#">Hotel California</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route ('reservas.index')}}">Reservas</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route ('empleats.index')}}">Empleats</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route ('departaments.index')}}">Departaments</a>
      </li>
    </ul>
  </div>
  

<!-- Navbar Usuario: Login y Registre -->
 <nav class="navbar pull-lg-right">
    <ul class="navbar-nav ml-auto " style="background-color: #e3f2fd; padding-right: 20;">
            @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
    <ul class="navbar-nav ml-auto" style="background-color: #e3f2fd; padding-left: 20;">
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
            @endif
            @endauth
            @endif
            
    </ul>
 </nav>
</nav>
<img src="images/HotelCalifornia.jpg" class="img-fluid .rounded mx-auto d-block" alt="Responsive image">

        

