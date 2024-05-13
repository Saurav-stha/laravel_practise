<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // Get and show all listings
    public function index(){
        // dd(request('tag'));
        return view('listings.index', [
            'nameOfRes' => 'Result chai hya dekhaucha',
            'listings' => Listing::latest()->filter(request(['tag','search']))->get() // [] for sending array
        ]);
    }

    // show one listing
    public function show(Listing $listing){
        return view("listings.show",[
            'listing' => $listing
        ]);    
    }
}
