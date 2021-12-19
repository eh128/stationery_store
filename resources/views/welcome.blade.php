@extends('layouts.layout')

@section('content')
<div>
    <div class="std-container home-container height">
        <div class="title">All Things Art</div>
        <img src="/img/logo.png" alt="all things art logo" width="400" id="home-logo">
        <a href="/listings" class="std-a home-a a-hover">See our products -></a>
    </div>
    <div class="std-container">
        <div class="title about">ABOUT</div>
        <p class="p-box">
            All Things Art is an online stationery store that lists all types of tools needed to create amazing paintings and crafts. From pens, pencils, and crayons to origami paper, you will find the tools you need to create anything you want!
            <div> 
                <a href="/listings" class="p-box-a a-hover">Check out what's listed!</a>
            </div>
        </p>
    </div>
</div>
@endsection


