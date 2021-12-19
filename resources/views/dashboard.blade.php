<link rel="stylesheet" href="/css/main.css">
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-jet-welcome /> --}}
                <div class="std-container">
                    <div class="title">
                        Create a listing
                    </div>
                    <form action="/listings" method="POST" class="form big-form">
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
            </div>
        </div>
    </div>
</x-app-layout>
