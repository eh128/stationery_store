<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    public function welcome() {
        return view('welcome');
    }
    public function index() {
        $listings = Listing::all();
        return view('listings.index', ['listings'=>$listings]);
    }
    public function create() {
        return view('listings.create');
    }
    public function store() {
        $listing = new Listing();
        $listing->name = request("name");
        $listing->title = request("title");
        $listing->price = request("price");
        $listing->description = request("description");
        $listing->save();
        return redirect('/listings');
    }
    public function show($id) {
        $listing = Listing::findorfail($id);
        return view('listings.show', ['listing' => $listing]);
    }
    public function buy($id) {
        $listing = Listing::findorfail($id);
        $something = 'hi';
        return redirect('/listings')->with('message', "Your order for, $listing->title, has been placed.");
    }
}
