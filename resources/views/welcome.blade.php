@extends('layouts/master')


@section('title','Főoldal')
@section('content')
<nav class="navbar navbar-expand bg-dark bg-gradient navbar-dark">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="./">Főoldal</a>
        </li>
       <li class="nav-item">
          <a class="nav-link " href="./adatok">Adatok</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./iranyitas">Irányítás</a>
        </li>
        </ul>
    </div>
</nav>
  

<div class="container">
    <div class="row">
        <div class="col">
          <div class="w-10% float">
            <h1 class="text-center m-3"><mark class="rounded-3 bg-transparent text-white">M.A.T.S. Drone</mark></h1>
          </div>
        </div>
    </div>
</div>

<div class="container mx-auto">
  <div class="row mb-2">
    <div class="col-6">
      <div class="container bg-dark bg-gradient text-light rounded mr-2">
        <div class="row">
          <div class="col p-2">

          <h3>Honnan jött az ötlet?</h3>
           <span>A mai világban egyre jobban fejlődik a meződgazdaság és az időjárás előrejelzés. Az emberiséget napról-napra újabb természeti katasztrófák fenyegetik és súlytják a globális felmelegedés miatt. A mezőgazdaságban egyre több helyen használnak üvegházakat, hogy mindenféle növényt tudjanak termeszteni és ne keljen külföldről importálni őket, de ahoz, hogy ezekben az üvegházakban megteremtsék a megfelelő körülményeket, sok igen drága megoldás létezik már. Mi ezekre a problémákra találtunk egy kölcséghatékony megoldást, amit mind mezőgazdaságban, mind időjárás előrejelzésben tudnánk használni.</span> 
          </div>
        </div>
    </div>
    </div>
    <div class="col-6">
      <div class="container bg-dark bg-gradient text-light rounded ml-2">
        <div class="row">
          <div class="col p-2">

            <h3>Hogyan működik?</h3>
            A drón egy arduino vezérelt gép ami irányítás gyanánt egy telefont vagy bármi készüléket, ami el tudja érni az internetet. A gépen 4 servo motor van amiből 2 a fel- és leszálláshoz szükséges, 2 pedig a balra és a jobbra kanyarodáshoz kell. A hajtást egy elektromos motor segítségével fogjuk végezni egy motorvezérlő modulon keresztül. A weboldalon van egy irányításfül, amit két féle képpen lehet használni. Vagy a képernyőn látható gombok segítségével vagy a "WASD" gombok használatával. A weboldal továbbküldi az adatokat az arduinonak és az írányítja a drón komponenseit. <br> <br>
          </div>
        </div>
    </div>
    </div>
  </div>

  <div class="row mt-2">
    <div class="col-6">
      <div class="container bg-dark bg-gradient text-light rounded mr-2">
        <div class="row">
          <div class="col p-2">

            <h3>Felhasználási módok</h3>
            <h6 class="m-1">&#127803; <span class="fst-italic">Mezőgazdaság</span></h6>
            Ipari mezőgazdaságban, illetve kisebb növénnyel foglalkozó cégeknél, melyek üvegház segítségével növényeket termelnek, így az adatok segítségével és azok felhasználásával a termés minőségét is növelhetjük adott esetekben.<br> <br>
            <h6 class="m-1">&#9925; <span class="fst-italic">Időjárás</span></h6>
            Egy adott terület időjárásának illetve a levegőminőségének a figyelésére is alkalmas lehet a megfelelő kezekben. Ezen funkciók segítségével akár az időjárást is előre lehet jelezni és a globális felmelegedés jeleit is lehet nézni. Amivel akár segíthetünka lokális környezetnek és embereknek a környéken.<br>
            <br>



          </div>
        </div>
    </div>
    </div>
    <div class="col-6">
      <div class="container bg-dark bg-gradient text-light rounded ml-2">
        <div class="row">
          <div class="col p-2">

            <h3>FAQ/GYIK</h3>
            &#10068; Mekkora a hatótávolsága? <br>
            &#10069; kb.:50m! <br>
            &#10068; Mennyi az akkumlátor idő? <br>
            &#10069; 5 óra <br>
            &#10068; Mekkora a repülőgép? <br>
            &#10069; Szárny szélessége: 80cm, Testhossza: 58cm <br>
            &#10068; Milyen adatokat küld az oldalra? <br>
            &#10069; A drón modularítása miatt szinte bármit lehet mérni! <br>
            &#10068; Hogyan lehet irányítani? <br>
            &#10069; Telefonon keresztül! Tudj meg többet <a href="http://localhost/szakdolgozat/public/iranyitas"> itt</a>!<br><br>
          </div>
        </div>
    </div>
    </div>
  </div>
</div>



@endsection


