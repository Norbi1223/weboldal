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
  
<div class="container">
  <div class="row mb-2  mt-2" style="height: 40%">
    <div class="col"><button type="button" class="btn btn-dark text-white w-100 h-100  bg-gradient" id="gyors" name="gyors" onclick="gyorsit();"><span style="font-family:'Londrina Shadow';font-size:50px ">GYORSÍT</span></button></div>
    <div class="col"><button type="button" class="btn btn-dark text-white w-100 h-100  bg-gradient" id="fel" name="fel" onclick="fel();"><span style="font-family:'Londrina Shadow';font-size:50px ">FEL</span></button></div>
    <div class="col"><button type="button" class="btn btn-dark text-white w-100 h-100 bg-gradient" id="lassit" name="lassit" onclick="lassit();"><span style="font-family:'Londrina Shadow';font-size:50px ">LASSÍT</span></button></div>
  </div>
  <div class="row" style="height: 40%">
    <div class="col"><button type="button" class="btn btn-dark text-white w-100 h-100  bg-gradient" id="bal" name="bal" onclick="bal();"><span style="font-family:'Londrina Shadow';font-size:50px ">BAL</span></button></div>
    <div class="col"><button type="button" class="btn btn-dark text-white w-100 h-100  bg-gradient" id="le" name="le" onclick="le();"><span style="font-family:'Londrina Shadow';font-size:50px ">LE</span></button></div>
    <div class="col"><button type="button" class="btn btn-dark text-white w-100 h-100  bg-gradient" id="jobb" name="jobb" onclick="jobb();"><span style="font-family:'Londrina Shadow';font-size:50px ">JOBB</span></button></div>
  </div>
</div>



<script>
  function gyorsit(){
    $.ajax({
      url:"./motorBekapcsolas",
      beforeSend:function(){
        console.log("motorbekapcsolas folyamatban...");
      },
      success:function(data){
        console.log(data);
      }
    });
  }
  function lassit(){
    $.ajax({
      url:"./motorLekapcsolas",
      beforeSend:function(){
        console.log("motorlekapcsolas folyamatban...");
      },
      success:function(data){
        console.log(data);
      }
    });
  }
  function bal(){
    $.ajax({
      url:"./bal",
      beforeSend:function(){
        console.log("bal folyamatban...");
      },
      success:function(data){
        console.log(data);
      }
    });
  }
  function jobb(){
    $.ajax({
      url:"./jobb",
      beforeSend:function(){
        console.log("jobb folyamatban...");
      },
      success:function(data){
        console.log(data);
      }
    });
  }
  function le(){
    $.ajax({
      url:"./le",
      beforeSend:function(){
        console.log("le folyamatban...");
      },
      success:function(data){
        console.log(data);
      }
    });
  }
  function fel(){
    $.ajax({
      url:"./fel",
      beforeSend:function(){
        console.log("fel folyamatban...");
      },
      success:function(data){
        console.log(data);
      }
    });
  }
</script>



@endsection



