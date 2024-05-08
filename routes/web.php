<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('firstOne');
});

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


