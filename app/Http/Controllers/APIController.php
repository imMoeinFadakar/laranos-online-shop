<?php

namespace App\Http\Controllers;

use App\Models\catagories;
use App\Models\Product;
use App\Models\star;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;

use function PHPSTORM_META\type;

class APIController extends Controller
{
    //
        function getProducts(){

            $allProducts = Product::all();
                 return response()->json($allProducts , 200 , ['Content-type' => 'application/json;  charset=utf-8' ], JSON_UNESCAPED_UNICODE ) ;


        }

 function getCategories (){

   $allCategories = catagories::all();

   return response()->json($allCategories , 200 , ['Content-type' => 'application/json;  charset=utf-8' ], JSON_UNESCAPED_UNICODE ) ;

 }


function getStars(){

  $allUsers = user::all();

  return response()->json($allUsers , 200 , ['Content-type' => 'application/json; charset=utf-8'  ] , JSON_UNESCAPED_UNICODE  );
}

}
