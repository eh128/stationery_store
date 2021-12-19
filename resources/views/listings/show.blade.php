@extends('layouts/layout')

@section('content')
    <div class="std-container">
        <img src="/img/product_{{$listing->id}}.png" alt="imgage of {{$listing->title}}" width="400">
        <br>
        <div class="title">{{$listing->title}}</div>
        <br>
        <div class="small-container">
            <div class="std-div">Price: ${{$listing->price}}</div>
            <div class="std-div">Supplier: {{$listing->name}}</div>
            <div class="std-div">Product description: {{$listing->description}}</div>
        </div>
        <form action="/listings/{{$listing->id}}" method="POST">
            @csrf
            <button class="btn">Buy Now</button> 
        </form>
    </div>

@endsection