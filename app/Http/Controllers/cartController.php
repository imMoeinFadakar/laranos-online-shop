<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\Product;
use Illuminate\Http\Request;

class cartController extends Controller
{
    function add(){


    }
    function edit(){


    }
    function pay(){


    }
 function remove(){

 }
 function removeall(){


 }
 function paySpecialItem(){

 }
function showAll(){
//         finding proName name :
    $carts = cart::all();






        return view('Admin/cart/showAllcarts')->with([
          "carts" => $carts,

        ]);
}

}
