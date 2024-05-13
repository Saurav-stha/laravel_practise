<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // Get and show all listings
    public function index(){
        return view('listings.index', [
            'nameOfRes' => 'Result chai hya dekhaucha',
            'listings' => Listing::all()
        ]);
    }

    // show one listing
    public function show(Listing $listing){
        return view("listings.show",[
            'listing' => $listing
        ]);    
    }
}
