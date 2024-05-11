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

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

Route::get('/', function () {
    return view('listings', [
        'nameOfRes' => 'Result chai hya dekhaucha',
        'listings' => Listing::all()
    ]);
});

//find a specific item
Route::get('/listings/{listing}',function(Listing $listing){
    return view("listing",[
        'listing' => $listing
    ]);
    
});
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






