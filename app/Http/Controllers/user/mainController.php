<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class mainController extends Controller
{


    public function home(){
        return view("user.home");
    }

     public function products($slug){

       if(isValidValue($slug)!=true){
           return abort(404);
       }
       ////////////////////////////////////////
       $category=getGeneralModel("categories")->where("slug",$slug)->first();
       if(isValidValue($category)!=true){
           return abort(404);
       }
       //////////////////////////////////////
       $category_id=getProperty($category,"id");

       $products =getGeneralModel("products")->where("category_id",$category_id)->get();

       ////////////////////////
        return view("user.category",compact('category','products'));
     }
     public function product($slug){
         if(isValidValue($slug)!=true){
             return abort(404);
         }
         ////////////////////////
         $product=getGeneralModel("products")->where("slug",$slug)->first();
         if(isValidValue($product)!=true){
             return abort(404);
         }
         //////////////////

         $properties=getProperty($product,"properties");

         $properties=(json_decode($properties));

        return view("user.single",compact('product','properties'));
     }


    public function search_product(Request $request)
    {
        $search_value=$request->get("search");
        if(isValidValue($search_value)!=true){
            return abort(404);
        }
        ////////////////////
        //$products= getGeneralModel("products")->where("title",$search_value)->get();

        $products= getGeneralModel("products")->where("title","LIKE","%".$search_value."%")->get();

//        $products= getGeneralModel("products")->where(function ($query) use ($search_value){
//            $query=$query->orWhere("title","LIKE","%".$search_value."%");
//            $query=$query->orWhere("slug","LIKE","%".$search_value."%");
//            $query=$query->orWhere("name","LIKE","%".$search_value."%");
//            $query=$query->orWhere("id",$search_value);
//        })->get();

        return view("user.search",compact("search_value",'products'));
    }

     public function support(){


        return view("user.support");
     }

}
