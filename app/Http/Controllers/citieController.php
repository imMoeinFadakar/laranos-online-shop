<?php

namespace App\Http\Controllers;

use App\Models\cites;
use App\Models\city;
use Illuminate\Http\Request;

class citieController extends Controller
{
    function show_all_cities(){


        $Citys = cites::all();

        return view('Admin/showCities' , [

            "Citys" => $Citys

            ] );
    }
    function add_new_city (Request $request){
        $addNewCites = new cites();
        $addNewCites->text = $request["cityName"];
         $addNewCites->save();

return redirect()->to('/admin/showCities');


    }

    function enterEdit($id){

$specificCitys = cites::all()->where('id','=', $id);

        return view('Admin/adminCitiesEdit' , [

            "specificCitys" => $specificCitys

        ]);
    }


// here we will insert data into database


function edit(Request $request){

        $city = cites::all()->find($request["cityId"]);
       $city->text = $request["cityName"];
        $city->update();


     return redirect()->to('/admin/showCities');
}

function delete($id){
    $city = cites::all()->find($id);
        if(!$city){
            $massage = "not found !";
        }else{
             $massage = "founded !";
            $city->delete();

        }

  return redirect()->to('/admin/showCities')->with([

      "massage" => $massage ,

  ]);
}



}
