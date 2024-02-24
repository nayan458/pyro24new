<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //register products
    function registerProduct(Request $request){
        DB::table('product')->insert([

        ]);
    }

    // get products
    function getProductsByType(){
        
    }

    // search products
    function searchProduct(){

    }
}
