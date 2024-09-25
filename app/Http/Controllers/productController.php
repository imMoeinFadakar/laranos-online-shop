<?php

namespace App\Http\Controllers;


use App\Models\catagories;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Image;
use App\Models\Information;
use App\Models\Order;
use App\Models\Product;
use App\Models\star;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class productController extends Controller
{
    function showSpecificProducts($id){
$allComments = Comment::all();

foreach($allComments as $allComments){
$user_id = $allComments->userid;
}
    // stars query

$allStarsForThisCount = star::all()->where('productId' , '=' , $id )->count();
$allStarsForThis = star::all()->where('productId' , '=' , $id );
$fiveStars = star::all()->where('productId' , '=' , $id )->where('score' , '=' , "5")->count();
$fourStars = star::all()->where('productId' , '=' , $id )->where('score' , '=' , "4")->count();
$threeStars = star::all()->where('productId' , '=' , $id )->where('score' , '=' , "3")->count();
$towStars = star::all()->where('productId' , '=' , $id )->where('score' , '=' , "2")->count();

$hasExist = Order::all()->where('user_id' ,'=' , Auth::id() )->where('product_id' , '=' ,  $id ) ;
$ID = $id ;


$user_id = $allComments->userid;
        $specificProducts = Product::all()->where('id','=',$id);
        $IOSPs = Information::all()->where('product_id','=',$id);
$productImage = Image::all()->where('product_id','=',$id);
$productsComment = Comment::all()->where('productId' , '=' , $id );
$accessToUser = user::all()->where('id' , '=' ,  $user_id );
// $theUserId = $productsComment->userid;
// $commentWriter = Comment::all()->where('userid' , '=' , $accessToUser->id  );

foreach ($specificProducts as $specificProduct){
    $findCategoryId = $specificProduct->catgory_id;
}

$allSimilarCategories = Product::all()->where('catgory_id','=', $findCategoryId)->where('id' , '!=' , $id );

$user = auth()->user();  

if ($user) {  
    $name = $user->name;  
    $idUser = $user->id;  
    
    // انجام فعالیت‌های مربوط به کاربر  
}  

$maybeYouLikeThis = Product::all()->where('has_star','=','1');
        return view('productPage' ,
        [
            "fiveStars"=>$fiveStars,
            "fourStars"=>$fourStars,
            "threeStars"=>$threeStars,
            "towStars"=>$towStars,
         "specificProducts" => $specificProducts,
         "allStarsForThisCount" => $allStarsForThisCount,
         "IOSPs" => $IOSPs,
"productImage" => $productImage,
            "maybeYouLikeThis" => $maybeYouLikeThis,
            "allSimilarCategories" => $allSimilarCategories,
            "productsComment" => $productsComment,
            "accessToUser" => $accessToUser,
               "id" => $id ,
               "idUser" => $idUser ,
               "allStarsForThis" => $allStarsForThis ,
               "hasExist" => $hasExist ,
        ]
        );


    }
    function showSpecificCategory($id){
      
        $findCategorys = Product::all()->where('catgory_id','=',$id);
        $all_pro = Product::all()->where('catgory_id' , '=' , $id);
        $allProducts = Product::all();
        $countProductcategory = $findCategorys->count();
$categoryNames = catagories::all()->where('id','=',$id);
$categories = catagories::all();
        return view('showCategory' , [
            "findCategorys" => $findCategorys,
            "categoryNames" => $categoryNames ,
"all_pro" => $all_pro ,
              "categories"=>$categories ,
            "countProductcategory" => $countProductcategory,
            "allProducts"=>$allProducts ,
        ]);

    }


    function add(){ // add product


    }
    function edit(){ // edit product



    }
    function delete(){ // delete product



    }
function stars()
{



}


    function getAll(){
$products = Product::paginate(8);
$pro = catagories::all();

return view('allproduct', [


    "pro" => $pro,
       "products" => $products
    ] );


    }

    function get_by_category($category_id){ // this category well get products by category



    }

function sendRating(request $request){
 

        $ratedUser = star::all()->where("userid" , '=' ,  $request["user_id"] )->where('productId' , '=' , $request["product_id"]);
        
    if ( $ratedUser->count() == 0  ){
        
        $newRating = new star();
        $newRating->productId = $request["product_id"] ;
        $newRating->userid = $request["user_id"] ;
        $newRating->score = $request["score"] ;
        $newRating->save();

          $massage = "امتیاز شما با موفقیت ثبت شد" ;

          return $massage ;

    }else  {
        
        $updateRating = $ratedUser->first() ;
        $updateRating->score = $request["score"] ;
         $updateRating->update();            
         $massage = "امتیاز شما با   موفقیت به روز رسانی شد" ;

         return $massage ;
    }
  

       

   






}

function sendNewCount(request $request){

$findThatOrder = Order::find($request["order_id"]);
$findThatOrder->user_id = $request["user_id"];
$findThatOrder->product_id = $request["product_id"];
$findThatOrder->count = $request["count"];
$findThatOrder->update();


}


    function search(){ // for search and find something


    }
function dontExistProduct($id_product){


}


}
