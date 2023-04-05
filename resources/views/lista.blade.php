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
                <th scope="col">Levegőminőség</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{$atlagpara}} %</td>
                <td>{{$atlaghomer}} °C</td>
                <td>{{$atlagminoseg}} mg/m<sup>3</sup></td>
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
                <th scope="col">Levegőminőség</th>
                <th scope="col">Dátum</th>
                <th scope="col" class="text-center">Törlés</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($adat as $item)
              <tr>
                <th scope="row">{{$item->ID}}</th>
                <td>{{$item->para}}%</td>
                <td>{{$item->homer}}°C</td>
                <td>{{$item->magas}} mm</td>
                <td>{{$item->minoseg}} mg/m<sup>3</sup></td>
                <td>{{$item->datum}}</td>
                <td class="text-center"><button class="btn btn-danger w-100" id="gomb_{{ $item->ID }}" onclick="Torles({{ $item->ID }});">törlés</button></td>
              </tr>
              @endforeach
            </tbody>
          <table>
        </div>
    </div>
</div>
<script>
  function Torles(tid){
      //$("#sor_"+tid).remove();
      $.ajax({
          url:"./adatok-torles",
          type:"POST",
          headers:{
              "X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")
          },
          data:{"tid":tid},
          cache:false,
          async:false,
          beforeSend:function(){
              $("#gomb_"+tid).attr("disabled",true);
          },
          success:function(){
              $("#sor_"+tid).remove();
          }
      });
  }
</script>
@endsection



