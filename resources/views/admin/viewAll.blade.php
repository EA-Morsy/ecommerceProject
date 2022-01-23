@extends('layouts.master')

@section('content')

<h3 class="my-5" style="text-align:center; margin-top:30px;">ALL PRODUCTS</h3>
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/api/home">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">ALL PRODUCTS</li>
        </ol>
    </nav>
<!-- <p style="text-align: center;">All our soaps are handcrafted and alcohol free</p> -->
<div class="row content" style="width: 80%; margin: 0 auto;">

    @foreach($products as $p)

    <div class="card item-card">
        <img src="{{asset($p['pic'])}}" class="card-img-top" alt="pic">
        <div class="card-body">
            <h6 class="card-title" style="text-transform: capitalize;">{{$p['name']}}</h6>
            <p class="card-text">${{$p['price']}} </p>
            <input type="number" class="form-control" width="100%" min="1" style="text-align: center;" value="1"><br>
            <a href="/api/view/{{$p['id']}}" style="width: 100%; margin:0 auto" class="btn btn-success view">VIEW</a>

            <!-- <form method="delete" class="view"action="/api/deleteProduct/{{$p['id']}}">
                
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" style="width: 100%; margin:0 auto" class="btn btn-danger ">delete</button>
            </form> -->
            <a href="/api/deleteProduct/{{$p['id']}}" style="width: 100%; margin:0 auto" class="btn btn-danger view">DELETE</a>
            <a href="/api/updateProduct/{{$p['id']}}" style="width: 100%; margin:0 auto" class="btn btn-dark">Edit</a>
        </div>
    </div>
    @endforeach

    @endsection