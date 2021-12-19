@extends('layouts/layout')

@section('content')
    <div class="std-container">
        <div class="title">
            Create a listing
        </div>
        <form action="/listings" method="POST" class="form">
            @csrf
            <label for="name">Supplier: </label>
            <input type="text" name="name" autocomplete="off">
            <label for="title">Product: </label>
            <input type="text" name="title" autocomplete="off">
            <label for="price">Price: </label>
            <input type="number" step="0.01" name="price" autocomplete="off">
            <label for="description">Description: </label>
            <textarea name="description" id="description" cols="30" rows="6"></textarea>
            <input type="submit" class="btn" id="submit" value="Create listing">
        </form>
        <br>
        <a href="/listings" class="std-a a-hover">Back to listings page</a>
    </div>
@endsection