<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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

    // show listing form
    public function create(){
        return view('listings.create');
    }

    // add/store new listing
    public function store(Request $request){
        $newGig = $request->validate([
            'title' => 'required',
            'company' => ['required',Rule::unique('listings','company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required','email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        Listing::create($newGig);

        return redirect('/')->with('message','New Job Listing Added!!');

    }
}
