@extends('layout/app')

@section('content')



<div class="row my-5 content" style="width: 80%; margin: 0 auto;">
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/home">Home</a></li>
    <li class="breadcrumb-item"><a href="/api/soaps">Shop Soaps</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{$soap->name}}</li>
  </ol>
</nav>
<hr>
</div>

<div class="card mb-3  my-5 caard" >
  <div class="row g-0 ">
    <div class="col-md-5 image">
      <img src="{{asset($soap->pic)}}" class="image"  width= "500px" height="450px" alt="...">
    </div>
    <div class="col-md-5 details ">
      <div class="card-body boody" style="float:right;  margin-right: -120px; width:100%">
        <h3 class="card-title" style="text-transform:capitalize;">{{$soap->name}}</h3>
        <p class="card-text"><small class="text-muted">${{$soap->price}}</small></p>
        <label for="quant">Quantity</label><br>
        <input type="number" id="quant" width="30% !important;" min="1" style="text-align: center;" value="1" ><br>
        <a type="button" class="btn btn-dark buy-now " href="/api/soaps">BUY NOW</a>
        <a type="button" class="btn btn-dark " href="/api/soaps">ADD TO CARD</a>
        <p class="card-text info">PRODUCT INFO </p>
        <p class="card-text info">{{$soap->desc}} </p>
       
       
      </div>
    </div>
  </div>
</div>



@endsection