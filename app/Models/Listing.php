<?php

namespace App\Models;

class Listing {
    public static function all(){
        return [
            [
                'id' => 1,
                'nam' => 'NAm aba k xa',
                'description' =>" hya ta obvisoulsy description nai huni va j paitei copy paste vanda typing speed vayesi type nai handim na(Felx)!",
            ]
            ,
            [
                'id' => 2,
                'nam' => 'NAm',
                'description' =>" hya ta obvisoulsy description nai huni va j paitei copy paste vanda typing speed vayesi type nai handim na(Felx)!",
            ]
        ];
    }

    public static function find($id){
        $listings = self::all();

        foreach($listings as $listing){
            if ($listing['id'] == $id){
                return $listing;
            }
        }
    }
}