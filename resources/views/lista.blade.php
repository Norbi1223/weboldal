@extends('layouts/master')


@section('title','Adatok')
@section('content')
<nav class="navbar navbar-expand bg-dark bg-gradient navbar-dark">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link " href="./">Főoldal</a>
        </li>
       <li class="nav-item">
          <a class="nav-link active" href="./adatok">Adatok</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./iranyitas">Irányítás</a>
        </li>
        </ul>
        <span class="navbar-text">
          <a class="nav-link" href="./adatok"> &#8635; Frissítés</a>
        </span>
    </div>
</nav>
  
<div class="container">
    <div class="row">
        <div class="col">
          <h1 class="text-center m-3"><mark class="rounded-3 bg-transparent text-white">Adatok átlaga</mark></h1>
          <table class="table table-dark table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">Páratartalom</th>
                <th scope="col">Hőmérséklet</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{$atlagpara}}%</td>
                <td>{{$atlaghomer}}°C</td>
              </tr>
            </tbody>
          <table>
          <h1 class="text-center m-3"><mark class="rounded-3 bg-transparent text-white">Összes mért adat</mark></h1>
          <table class="table table-dark table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Páratartalom</th>
                <th scope="col">Hőmérséklet</th>
                <th scope="col">Magasság</th>
                <th scope="col">Dátum</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($adat as $item)
              <tr>
                <th scope="row">{{$item->ID}}</th>
                <td>{{$item->para}}%</td>
                <td>{{$item->homer}}°C</td>
                <td>{{$item->magas}} mm</td>
                <td>{{$item->datum}}</td>
              </tr>
              @endforeach
            </tbody>
          <table>
        </div>
    </div>
</div>
@endsection



