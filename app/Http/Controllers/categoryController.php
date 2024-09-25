<?php

namespace App\Http\Controllers;

use App\Models\catagories;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    function add(){

    }
    function delete(){


    }
    function edit(){


    }

// admin rights : add , delete , edit . see (all)

    function allCategory(){
        $allCategorys = catagories::all();


        return view('Admin/categories/showAllCategories')->with([
            "allCategorys" => $allCategorys ,
        ]);
    }

    function addCategory(Request $request){
        $newCategory = new catagories();
        $newCategory->title  = $request["title"];
        $newCategory->save();
         $massage = "با موفقیت اضافه شد";

        return redirect()->to('showAllCategories')->with([
         "massage" =>  $massage
        ]);
    }

    function deleteCategory($id){
        $selectCategory = catagories::all()->find($id);

        if(!$selectCategory){
            $massage = "دسته بندی مورد نظر پیدا نشد !";

        }else{
            $massage = "با موفقیت حذف شد !";
            $selectCategory->delete();
        }

        return redirect()->to('showAllCategories')->with([
            "massage" => $massage
        ]);
    }

    function editCategory(Request $request){
     $findCategory = catagories::all()->find($request["categoryId"]);
     if (!$findCategory){
         $massage = "دسته بندی مور نظر یافت نشد ! ";
     }else{

         $findCategory->title = $request["title"];
         $findCategory->update();

         $massage = "با موفقیت تغییر کرد ! ";
     }

        return redirect()->to('showAllCategories')->with([
            "massage" => $massage
        ]);
    }




}
