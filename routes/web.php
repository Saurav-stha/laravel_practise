<?php
// Route::get('/hello', function(){
//     return response("<h2>yolo</h2>",200)
//         -> header('Content-Type','text/plain')
//         -> header('boom','box');

// });

// Route::get('/dashboard/{id}',function($id){
//     return response('Post '.$id);       
// })->where('id','[0-9]+');

// Route::get('/search',function(Request $req){
//     return $req->nam . ' ' .$req->surn;
// });

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\GoogleAuthController;

//Common Resource Routes:
//index Show all listings
//show - Show single listing
//create Show form to create new listing
//store - Store new listing
//edit - Show form to edit listing
//update Update listing
//destroy - Delete listing 
//// These are just convention ////

// Show all listings
Route::get('/', [ListingController::class, 'index']);

//find a specific item i.e show one listing
Route::get('/listings/{listing}', [ListingController::class, 'show'] );
// above fuction is same as ...
// Route::get('/listings/{id}', function($id){
//     $listing = Listing::find($id);
//     if($listing){
//         return view("listing",[
//             'listing' => $listing
//         ]);
//     }else{
//         abort('404');
//     }
// });


// show/create form
Route::get('/register',[UserController::class, 'create']);

Route::get('/login',[UserController::class , 'login']);

// store/create user in db
Route::post('/users',[UserController::class, 'store']);

Route::get('/auth/google',[GoogleAuthController::class, 'redirect'])->name('google-auth');

Route::get('/auth/google/call-back',[GoogleAuthController::class, 'callbackGoogle']);

Route::get('/logout',[UserController::class, 'logout']);
