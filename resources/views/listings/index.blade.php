@extends('layouts/layout')

@section('content')
    <div class="std-container title">
        Listings
    </div>
    <div class="std-container std-div">{{session('message')}}</div>
    <div class="large-container">
        <div class="listings-container">
            @foreach ($listings as $listing)
            <div class="listing">
                <a class="std-a a-hover" href="/listings/{{$listing->id}}">
                    <img src="/img/product_{{$listing->id}}.png" alt="image of {{$listing->title}}" width="250">
                    <div>{{$listing->title}}</div>   
                    <div>${{$listing->price}}</div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
@endsection
