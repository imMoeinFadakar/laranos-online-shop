<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\admintable;
use App\Models\cart;
use App\Models\catagories;
use App\Models\Comment;
use App\Models\commentsshild;
use App\Models\Image;
use App\Models\Information;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use App\Models\users;
use App\Models\vreyfied_comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Return_;
use app\models\Admins;


class adminController extends Controller
{



    function securityShowAdmin(){




    }







    function allCart(){
        //Admin rights : only can see usersCarts

        $products = cart::all();

        return view('');

    }







    function commentShield(){
        // admin rights ; see , agree to insert comments
          $checkComments = Comment::all();

        return view('/admin/comments/commentsCheck')->with([

            "checkComments" => $checkComments

        ]);

    }

    function allComments(){
        // admin rights : see , delete


    }
    function allImages(){
        // admin rights : see , changes , delete , add

    }
    function allInformation(){
        // admin rights : see ,  change , add , delete

    }
    function Order(){
        // admin rights : see

    }
    function Products(){
        // admin rights : see


    }
    function allUser(){
// admin rights : see , delete

    }

function deleteComments($id){
        $deleteComments = Comment::all()->find($id);
        if (!$deleteComments){
            $massage = "چنین کامنتی نداریم";
        }else{
            $deleteComments->delete();
            $massage = "پاک شد";
        }
        return redirect()->to("/checkComments")->with([
            "massage" => $massage , 
        ]);
}

function  verifedComments(Request $request){

    $verComments = new vreyfied_comments();
    $verComments->user_id  = $request["User_Id"];
    $verComments->product_id = $request["product_id"]  ;
    $verComments->text  = $request["text"]  ;
    $verComments->save();

    if ($verComments = true){

$verCommentsId = $request["id"];
$EnteredCommentsId = Comment::where('id' , '=' , $verCommentsId);
$EnteredCommentsId->delete();

$massage = "کامنت با موفقیت ثبت شد ";

    }


return redirect()->to('/checkComments')->with([

   "massage" => $massage  ,

]) ;}

function show_all_images(){

$allImages = Image::all();
$allProducts = Product::all();




return view('/Admin/image/showAllImages')->with([
"allImages" => $allImages ,
  "allProducts" => $allProducts , 
 
]);
}


function delete_image_selected($id){
$selected_image = Image::where('id' , '=' , $id);

if(!$selected_image){
 $massage = "عکس مورد نظر یافت نشد";

}else{
$selected_image->delete();
    $massage = "عکس مورد نظر  با موفقیت حذف شد";
}


return redirect()->to('/checkImage')->with([
    "massage" => $massage ,
]);

}
  
function edit_selected_image(request $request ){
$selectImage = Image::all()->find($request["ID"]);


if(!$selectImage){
    $massage =" عکس پیدا نشد" ;
}else{
$selectImage->url = $request["URL_NAME"];
$selectImage->product_id = $request["PRODUCT_ID"];
$selectImage->update();
$massage = "عکس با موفقیت تغییر کرد" ;
}

Return redirect()->to('/checkImage')->with([

   "massage" =>  $massage ,

]);
}

 function addNewImage(Request $request){
    $image = new Image();
     $image->url =  $request["images"];
     $image->product_id = $request["product_id"];
     $image->has_star = $request["has_star"];
 $image->has_star = $request["has_star"] ;
       $image->save();

    return redirect()->to('/checkImage');
}


 function check_Information(){
 $all_Information = Information::all(); 

return view("Admin.information.showInformationsAll")->with([

"all_Information" => $all_Information ,
    
]);
 }
  

function Add_information(request  $request){
$addNewInfo = new Information();
$addNewInfo->title = $request[""];
$addNewInfo->product_id = $request[""];

}


function admin_all_products(){

$all_products = Product::all();
$all_cats = catagories::all();

return view("Admin.products.showAllProducts")->with([
    "all_products" => $all_products , "all_cats" => $all_cats
]);

}

function addNewProducts(request $request ) {

$newProduct = new Product();
$newProduct->price = $request["price"];
$newProduct->description = $request["description"];
$newProduct->name = $request["name"];
$newProduct->price_off = $request["price_off"];
$newProduct->catgory_id = $request["catgory_id"];
$newProduct->count = $request["count"];
$newProduct->has_star = $request["has_star"];
$newProduct->save();
$massage = "محصول با موفقیت اضافه شد";

return redirect()->to('/admin_all_products')->with([
    "massage" => $massage ,
    ]);

}

function deleteProduct($id){
$DeletedProduct = Product::all()->find($id);

if (!$DeletedProduct){
$massage = "محصول مورد نظر پیدا نشد";

}else{
    $massage = "محصول مورد نظر حذف شد ";
    $DeletedProduct->delete();

}


return redirect()->to('/admin_all_products')->with([
"massage" => $massage ,
]);
}

function edit_Product( request  $request){

    $newProduct = Product::all()->find($request["ID"]);
    $newProduct->price = $request["price"];
    $newProduct->description = $request["description"];
    $newProduct->name = $request["name"];
    $newProduct->price_off = $request["price_off"];
    $newProduct->catgory_id = $request["catgory_id"];
    $newProduct->count = $request["count"];
    $newProduct->has_star = $request["has_star"];
    $newProduct->update();
    $massage = "محصول با موفقیت تغییر کرد";
    
    return redirect()->to('/admin_all_products')->with([
        "massage" => $massage ,
        ]);
    


}


function showAllOrders(){

$allOrders = Order::all();


return view("Admin.order.showAllOrders")->with([
"allOrders" => $allOrders , 

]);
}


function showUser(){
$allUsers = User::all();
return view('Admin.users.showAllusers')->with([
"allUsers" => $allUsers ,
]);

}

function DeleteUser($id){
$deleteUser = User::all()->find($id);
if(!$deleteUser){
$massage = "مخاطب پیدا نشد" ;

}else{
    $massage = "مخاطب حذف شد " ;
$deleteUser->delete();
}


return redirect()->to("/ShowUser")->with([

"massage"=> $massage ,

]);
}

function AdminEnterCheck(){
 

   return view('Admin.adminlogin', [
    
   ] );
}


function adminLoginPost(request $request){
  


$this->validate($request , [
    'EUM' => 'required' ,
    'password' => 'required' ,

]);



if (Auth::attempt([  "username" => $request["EUM"] , "password" => $request["password"] , "roll" => "1" ])){

    if(isset($request["remember"] ) && !empty($request["remember"])){
        setcookie('EUM' , $request["EUM"] , time() + 86500 * 30 );
        setcookie('password' , $request["password"] , time() + 86500 * 30  );
     }else{

         setcookie('EUM' , '');
         setcookie('password' , '');
     }

$massage = "خوش امدید مدیر محترم ";
return redirect()->to('getAdminIndex')->with([
"massage" => $massage ,
]);

}
if (Auth::attempt([  "email" => $request["EUM"] , "password" => $request["password"] , "roll" => "1" ])){

    if(isset($request["remember"] ) && !empty($request["remember"])){
        setcookie('EUM' , $request["EUM"] , time() + 86500 * 30   );
        setcookie('password' , $request["password"] , time() + 86500 * 30   );
     }else{

         setcookie('EUM' , '');
         setcookie('password' , '');
     }

$massage = "خوش امدید مدیر محترم ";
return redirect()->to('getAdminIndex')->with([
"massage" => $massage ,
]);

}
if (Auth::attempt([  "mobail_number" => $request["EUM"] , "password" => $request["password"] , "roll" => "1" ])){

    if(isset($request["remember"] ) && !empty($request["remember"])){
        setcookie('EUM' , $request["EUM"] , time() + 86500 * 30  );
        setcookie('password' , $request["password"] , time() + 86500 * 30   );
     }else{

         setcookie('EUM' , '');
         setcookie('password' , '');
     }

$massage = "خوش امدید مدیر محترم ";
return redirect()->to('getAdminIndex')->with([
"massage" => $massage ,
]);

}

$massage = " اطلاعات شما درست نبود";
return redirect()->to('/735dfef73ghfy57shjfvk')->with([
"massage" => $massage ,
]);

}

function getAdminIndex(){

    return view('/admin/index');
        }


function Logout(){

    Auth::logout();

    $massage = " از حساب کاربری خود خارج شدید";
     
             return redirect()->to('/')->with([
                 "massage" => $massage
             ]);
    

}
        

}
