@extends('layouts.app')

@section('content')


<h1 class="my-5"style="text-align:center; margin-top:30px;">C A N D L E S</h1>
<div style="width: 80%; margin:0 auto;">
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/home">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Shop Candles</li>
  </ol>
</nav>
</div>
<!-- <p style="text-align: center;">All our soaps are handcrafted and alcohol free</p> -->
<div class="row my-5 content" style="width: 80%; margin: 0 auto;">

<hr>


@foreach($candles as $candle)


<div class="card item-card" >
  <img src="{{asset($candle['pic'])}}" class="card-img-top" alt="pic">
  <div class="card-body">
    <h6 class="card-title" style="text-transform: capitalize;">{{$candle['name']}}</h6>
    <p class="card-text">${{$candle['price']}} </p>
    <input type="number" class="form-control"width="100%" min="1" style="text-align: center;" value="1" ><br>
    <a href="/api/viewCandle/{{$candle['id']}}" style="width: 100%; margin:0 auto" class="btn btn-success view">VIEW</a>
    <a href="#" style="width: 100%; margin:0 auto" class="btn btn-dark">ADD TO CARD</a>
  </div>
</div>


@endforeach

</div>
@endsection