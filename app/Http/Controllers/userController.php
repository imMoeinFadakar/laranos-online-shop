<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\cites;
use App\Models\Comment;
use App\Models\Order;
use App\Models\Product;
use App\Models\star;
use App\Models\User;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Metadata\Uses;

class userController extends Controller
{

    // signup functions

    function registerClient(){
       
       $cities = cites::all();
    
        return view('signupClient')->with([
           "cities" => $cities , 
        ]);
     }

function registerClientPost(request  $request){
    
$this->validate($request , [
   
    'email' => 'required | unique:users',
    'username' => 'required | unique:users',
    'name' => 'required | max:120' ,
    'password'  => 'required | min: 8' ,
    'repeat_password' => 'same:password' ,
  

]);

$newUser = new user();
$newUser->name =  $request["name"];
$newUser->email =  $request["email"];
$newUser->username =  $request["username"];
$newUser->password = bcrypt($request["password"]); 
$newUser->city_id =  $request["cities"];
$newUser->address =  $request["Address"];
$newUser->mobail_number =  $request["number"];
$newUser->roll =  0 ;
$newUser->save();

$massage = "با موفقیت ثبت نام شدید";

$login_satus = true ;


return redirect()->to('/')->with([   // sending a massage and tell to user : its successful
"massage" => $massage , "login_satus" => $login_satus ,


]);

}

     // sign in functions


    function signIn(){
      
          $all = User::all();

            return view('loginClient' , [
                "all" => $all ,
            ]);
        }
        

function addNewComment(request $request){

    $this->validate( $request , [

       'text' => 'required',
        

    ]);


$id = $request["product_id"] ;

// 0: this parts are nessesary

$newComments = new Comment();
$newComments->productId = $request["product_id"]   ;
$newComments->userid = $request["user_id"];
$newComments->text = $request["text"];

//  1: if optional items is exist we,ll insert them

if( $request["weakness"]    ){
$newComments->weakness_point = $request["weakness"] ;
}
if ($request["power"] ){
    $newComments->strength = $request["power"] ;
}
if ($request["images"] ){
    $newComments->url = $request["images"] ;
}

 // 2: we save the insert

$newComments->save();

// 3: we send a massage to client that make him sure his comment has been saved 

$massage = "کامنت شما با موفقیت ثبت شد";

return redirect()->to('/productPage/'.$id  )->with([
"massage" => $massage ,
]);


}



    function login_post(request $request ){


         $this->validate($request , [

             'EUM'    => 'required' ,        
               'password' => 'required | min:8'

         ]);




         
$findNormalUsers = User::all()->where('roll' , '=' , 0)->count();
if ($findNormalUsers != 0 ){

    if (Auth::attempt([  "email" => $request["EUM"] , "password" => $request["password"] , "roll" => "0" ] ,  $request["Remember_me"]   )  ){
         
             if(isset($request["remember"] ) && !empty($request["remember"])){
                setcookie('EUM' , $request["EUM"] , time() + 86400 * 30 );
                setcookie('password' , $request["password"] , time() + 86400 * 30 );
             }else{

                 setcookie('EUM' , '');
                 setcookie('password' , '');
             }
                  
        
        $user = Auth::user(); 
        $massage = "با موفقیت وارد شدید"  ;
        return redirect()->to('/')->with([
        "massage" => $massage ,
        ]);
        
        }
     
         if (  Auth::attempt([  "username" => $request["EUM"] , "password" => $request["password"] , "roll" => "0" ] , $request["Remember_me"]  )  ){

            if(isset($request["remember"] ) && !empty($request["remember"])){
                setcookie('EUM' , $request["EUM"] , time() + 86400 * 30 );
                setcookie('password' , $request["password"] , time() + 86400 * 30 );
             }else{

                 setcookie('EUM' , '');
                 setcookie('password' , '');
             }
                  
            $user = Auth::user(); 
            $massage = "با موفقیت وارد شدید"  ;
            return redirect()->to('/')->with([
            "massage" => $massage ,
            ]);
         }
         if (  Auth::attempt([  "mobail_number" => $request["EUM"] , "password" => $request["password"] , "roll" => "0" ]  , $request["Remember_me"]  )  ){
            if(isset($request["remember"] ) && !empty($request["remember"])){
                setcookie('EUM' , $request["EUM"] , time() + 86400 * 30  );
                setcookie('password' , $request["password"] , time() + 86400  * 30);
             }else{

                 setcookie('EUM' , '');
                 setcookie('password' , '');
             }
                  

            $user = Auth::user(); 
            if ($user){
                $userId = $user->id;
                $username = $user->name;
            }
            $massage = "با موفقیت وارد شدید"  ;
            return redirect()->to('/')->with([
            "massage" => $massage ,
            "userId" => $userId,
            "username" => $username,
            ]);
         }


         $massage = " اطلاعات وارد شده صحیح نیست";
         return redirect()->to('/loginClient')->with([
         "massage" => $massage ,
         ]);

} else{



}


      








    }
   // sign out functions

    function Logout(){
       
           Auth::logout();

$massage = " از حساب کاربری خود خارج شدید";
 
         return redirect()->to('/')->with([
             "massage" => $massage
         ]);

    }

    function editProfile(){


    }

    function  resetPassword(){



    }

function profile(){



    return view("profileUser");
}


function addToOrders(request   $request ){

$hasExist = Order::all()->where('user_id' ,'=' , Auth::id() )->where('product_id' , '=' ,  $request["product_id"] ) ;

 if ( $hasExist->count() == 0 ){
       
    $newOrder = new Order();
    $newOrder->user_id = Auth::id();
    $newOrder->product_id = $request["product_id"] ;
    $newOrder->count = $request["count"] ;
    $newOrder->save();
   $massage = "محصول با موفقیت در سبد کالا اضافه شد" ;

    return   $massage ;
 }else{
    $massage = "   این محصول رو یک بار ثبت کردید " ;

    return   $massage ;
 }




}

function setting(){

$allUsersInformation = User::all()->where('id' , '=' , Auth::id());
$allProductSolidToUser = cart::all()->where("user_id" , '=' , Auth::id());
$UsersOrders = Order::all()->where("user_id" , '=' , Auth::id());
$UsersComment = Comment::all()->where("userid" , '=' , Auth::id());
$UsersStar = star::all()->where("userid" , '=' , Auth::id());
$allCities = cites::all();



return view('setting')->with([

// list of something that you need to show:

"allUsersInformation"  => $allUsersInformation ,
"allProductSolidToUser" => $allProductSolidToUser ,
"UsersOrders" => $UsersOrders ,
"UsersComment" => $UsersComment ,
"UsersStar" => $UsersStar ,
"allCities"=> $allCities,
]);

}

function editUserInformation(request $request  )  {

    
    $user = User::all()->where('id' , '=' ,  $request["id"] );

$this->validate($request , [
'name'=> 'required ',
'username' => 'required' ,
'email' => 'required' ,
'city' => 'required' ,
'address' => 'required' ,
'mobail_number' => 'required',


]);



          $updateUserInformation = $user->first();
        $updateUserInformation->name = $request["name"];
        $updateUserInformation->username = $request["username"];
        $updateUserInformation->email = $request["email"];
        $updateUserInformation->city_id = $request["city"];
        $updateUserInformation->address = $request["address"];
        $updateUserInformation->mobail_number = $request["mobail_number"];

if ($request["password"] && $request["re-enter-password"] && $request["password"] = $request["re-enter-password"]  ){

      $updateUserInformation->password =  bcrypt($request["password"]);

}
 
         $updateUserInformation->update();
            $massage =  "با موفقیت به روز شد";

      return redirect()->to('/setting')->with([
        "massage" => $massage ,
      ]);




}

    function seeUserBasket(){

        $orders = Order::all()->where('user_id' , '=' , Auth::id());
         $users = User::all()->where('id' , '=' , Auth::id() );  
             

        return view('basketUser')->with([
            
            "orders"=>$orders ,
                  "users"=> $users
        ]);

    }
       
    function deleteOrder($id){

       $deleteOrders = Order::all()->find($id);
         if (! $deleteOrders){
           
            $massage = " مورد یافت نشد";

         }else{  
           $deleteOrders->delete();
 $massage = "سفارش شما با موفقیت حذف شد";
         }

      

       return redirect()->to('/seeUserBasket')->with([
            "massage"=>$massage ,
       ]);
    }


}
