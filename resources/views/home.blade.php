@extends('layouts.app')

@section('content')



<div id="carouselExampleDark" class="carousel carousel-dark slide " data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="{{url('/imgs/candle2.jpg')}}"height="444px" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="disc">RELAXING CANDLES</h5>
        <!-- <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> -->
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="{{url('/imgs/soap2.jfif')}}"height="444px" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="disc">NATURAL SOAP</h5>
        <!-- <p >Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{url('/imgs/bathbomb.jpg')}}"height="444px" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h5 class="disc"> REFRESHING BATHBOMB</h5>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>



<!-- second Part -->


<hr>

<br>
<br>
<h1 style="text-align:center; font-weight:bolder; font-size:xx-large;">OUR FAVORAITES </h1>

<div class="card mb-3 my-card " style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-5">
      <img src="{{url('/imgs/soap4.jpg')}}" width="400px" height="267px" alt="...">
    </div>
    <div class="col-md-7">
      <div class="card-body my-body">
        <h3 class="card-title">Probiotic cleansing bars</h3>
        <p class="card-text">HANDCRAFTED ORGANIC SOAPS & CANDLES </p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        <a type="button" class="btn btn-outline-dark" href="/soaps">SHOP SOAPS</a>
      </div>
    </div>
  </div>
</div>
<hr>



<div class="card mb-3 my-card " style="max-width: 540px;">
  <div class="row g-0">
  <div class="col-md-7">
      <div class="card-body my-body">
        <h3 class="card-title">Nature's essence Scented Candles</h3>
        <p class="card-text">HANDCRAFTED ORGANIC SOAPS & CANDLES </p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        <a type="button" class="btn btn-outline-dark" href="/candles">SHOP CANDLES</a>
      </div>
    </div>
    <div class="col-md-5">
      <img src="{{url('/imgs/candle2.jpg')}}" style="margin-left: 60px;" width="400px" height="267px" alt="...">
    </div>
   
  </div>
</div>
<hr>

<div class="card mb-3 my-card " style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-5">
      <img src="{{url('/imgs/bathbomb2.jpg')}}" width="400px" height="267px" alt="...">
    </div>
    <div class="col-md-7">
      <div class="card-body my-body">
        <h3 class="card-title">JUST like nature 
    intended</h3>
        <p class="card-text">HANDCRAFTED ORGANIC SOAPS & CANDLES </p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        <a type="button" class="btn btn-outline-dark" href="#">SHOP BATHBOMBS</a>
      </div>
    </div>
  </div>
</div>
@endsection