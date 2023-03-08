@extends('layouts/master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>


@section('title','Irányítás')
@section('content')
<nav class="navbar navbar-expand bg-dark bg-gradient navbar-dark">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="./">Főoldal</a>
        </li>
       <li class="nav-item">
          <a class="nav-link" href="./adatok">Adatok</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="./iranyitas">Irányítás</a>
        </li>
        </ul>
    </div>
</nav>
  
<form method="POST">
  @csrf
<div class="container">
  <div class="row mb-2  mt-2" style="height: 40%">
    <div class="col"><button type="button" class="btn btn-dark text-white w-100 h-100  bg-gradient"><span style="font-family:'Londrina Shadow';font-size:50px ">LED BE</span></button></div>
    <div class="col"><button type="button" class="btn btn-dark text-white w-100 h-100  bg-gradient"><span style="font-family:'Londrina Shadow';font-size:50px ">W</span></button></div>
    <div class="col"><button type="button" class="btn btn-dark text-white w-100 h-100 bg-gradient"><span style="font-family:'Londrina Shadow';font-size:50px ">LED KI</span></button></div>
  </div>
  <div class="row" style="height: 40%">
    <div class="col"><button type="button" class="btn btn-dark text-white w-100 h-100  bg-gradient"><span style="font-family:'Londrina Shadow';font-size:50px ">A</span></button></div>
    <div class="col"><button type="button" class="btn btn-dark text-white w-100 h-100  bg-gradient"><span style="font-family:'Londrina Shadow';font-size:50px ">S</span></button></div>
    <div class="col"><button type="button" class="btn btn-dark text-white w-100 h-100  bg-gradient"><span style="font-family:'Londrina Shadow';font-size:50px ">D</span></button></div>
  </div>
</div>

</form>



@endsection



