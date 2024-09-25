<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\productController;
use App\Http\Controllers\userController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

// admin secret code

 Route::get('/', [\App\Http\Controllers\HomeController::class, "home"] );
Route::get('/header', [\App\Http\Controllers\HomeController::class, "header"]);
Route::get('/footer', [\App\Http\Controllers\HomeController::class, "footer"]);
Route::get('/product', [\App\Http\Controllers\HomeController::class, "productYield"]);
Route::get('/admin',[\App\Http\Controllers\HomeController::class, "Admin"]);
Route::get('/product', function (){
    return view('productYield');
});

/// admin routing

Route::post("/sendNewCount" , [productController::class , "sendNewCount"]);




Route::get('/735dfef73ghfy57shjfvk', [\App\Http\Controllers\adminController::class , "AdminEnterCheck" ]) ;
Route::post('/adminLoginPost' , [adminController::class , "adminLoginPost"]);
Route::get('/getAdminIndex' , [adminController::class , "getAdminIndex"])->middleware('auth');
Route::get('/LogoutAdmin' , [adminController::class , "Logout"])->middleware('auth');
Route::post('/sendRating'  , [productController::class , "sendRating"])->middleware('auth');
Route::post('addToOrders'  , [userController::class , "addToOrders"])->middleware('auth');

Route::get('/seeUserBasket'  , [userController::class , "seeUserBasket"])->middleware('auth');
Route::get('/setting' , [userController::class , "setting" ])->middleware('auth');
Route::get('/checkComments', [\App\Http\Controllers\adminController::class , "commentShield"])->middleware('auth');
Route::get('/deleteComments/{id}' , [\App\Http\Controllers\adminController::class, "deleteComments"] )->middleware('auth');
Route::post('/submited_comments' , [adminController::class  ,  "verifedComments"] )->middleware('auth');
Route::get('/deleteOrder/{id}' , [userController::class , "deleteOrder"])->middleware('auth');
Route::post("/editUserInformation" , [userController::class , "editUserInformation" ])->middleware('auth');

Route::get('/checkImage'  , [adminController::class , "show_all_images"])->middleware('auth');
Route::post('/addNewImage' , [adminController::class , "addNewImage"])->middleware('auth');
Route::get('/check_Information' , [adminController::class , "check_Information"])->middleware('auth');
Route::get('Add_information'  , [adminController::class , "Add_information"] )->middleware('auth');
Route::get('admin_all_products' , [adminController::class ,  "admin_all_products"  ])->middleware('auth');
Route::get('/showAllOrders' , [adminController::class , "showAllOrders"])->middleware('auth');
Route::get('/delete_image_selected/{id}' , [adminController::class , "delete_image_selected"])->middleware('auth');
Route::post('/edit_selected_image' , [adminController::class , "edit_selected_image"])->middleware('auth');
Route::get('/deleteProduct/{id}' , [adminController::class , "deleteProduct"])->middleware('auth');
Route::post('/addNewProducts' , [adminController::class , "addNewProducts"])->middleware('auth');
Route::post('/edit_Product' , [adminController::class, "edit_Product"])->middleware('auth');
Route::get('/ShowUser' ,[adminController::class ,  "showUser"])->middleware('auth');
Route::get('/DeleteUser/{id}' , [adminController::class , "DeleteUser"])->middleware('auth');
//products controller

Route::get('/showcategory/{id}', [\App\Http\Controllers\productController::class, "showSpecificCategory" ])->middleware('auth');
Route::get('/productPage/{id}' , [\App\Http\Controllers\productController::class, "showSpecificProducts"])->middleware('auth');
Route::get('/see_all_products', [\App\Http\Controllers\productController::class, 'getAll' ] )->middleware('auth');


//cities routing

Route::get('/admin/cities/edit/{id}' , [\App\Http\Controllers\citieController::class, "enterEdit"])->middleware('auth');
Route::get('/admin/cities/delete/{id}', [\App\Http\Controllers\citieController::class, "delete"] )->middleware('auth');
Route::get('/admin/editCities', [\App\Http\Controllers\citieController::class, "edit"])->middleware('auth');
Route::get('/admin/showCities', [\App\Http\Controllers\citieController::class, "show_all_cities" ])->middleware('auth');
Route::post('/saveCity' , [\App\Http\Controllers\citieController::class, "add_new_city"])->middleware('auth');

// category Controller

Route::get('/showAllCategories' , [\App\Http\Controllers\categoryController::class, 'allCategory'])->middleware('auth');
Route::post('changeCategories', [\App\Http\Controllers\categoryController::class , "editCategory"])->middleware('auth');
Route::get('/add_new_category' , [\App\Http\Controllers\categoryController::class , 'addCategory'])->middleware('auth');
Route::get('/deleteCategory/{id}' , [\App\Http\Controllers\categoryController::class , "deleteCategory"])->middleware('auth');

// cart Controller

Route::get('/seeAllCarts' , [\App\Http\Controllers\cartController::class , 'showAll'])->middleware('auth');

// login client

Route::get('/loginClient' , [userController::class , "signIn"]);
Route::post('/login_post' , [userController::class , "login_post"]);

// register client

Route::get('/registerClient' , [userController::class , "registerClient"  ] );
Route::post('/registerClientPost' , [userController::class , "registerClientPost"]);

// logout

Route::get('/Logout' , [userController::class , "Logout"])->middleware('auth');
Route::get('/profile' , [userController::class  ,  "profile"])->middleware('auth');

// add comments

Route::post('/sendComments' , [userController::class ,  "addNewComment" ])->middleware('auth');


