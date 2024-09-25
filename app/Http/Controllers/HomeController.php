<?php

namespace App\Http\Controllers;

use App\Models\catagories;
use App\Models\Product;
use App\Models\Image;
use App\Models\star;
use App\Models\User;
use App\Models\users;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class HomeController extends Controller
{
    //

    public function home(){ // see home page
         $countProducts = Product::all()->count();
        $getTops = Product::all()->where('has_star','=',1);
        $clothes = Product::all()->where('catgory_id','=',1);
        $AllCategory = catagories::all();
        $countCategory = catagories::all()->count();
$countUser = user::all()->count();
$countStar = star::all()->count();
$allProducts = Product::paginate(6);
        return view('welcome' , [
            "getTops" => $getTops,
            "countProducts" => $countProducts,
"countCategory" => $countCategory,
            "countUser" => $countUser,
            "countStar" => $countStar,
            "allProducts" => $allProducts,
            "clothes" => $clothes,
            "AllCategory" => $AllCategory
        ]);

    }

    function header(){


        $starsProducts = Product::all()->where('has_star','=',1);

        return view('header',
        [
"starsProducts" => $starsProducts
        ]
        );
    }

    function footer(){

        return view('footer');

    }

    function productYield(){

        return view('productYield');

    }




}
