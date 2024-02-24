<?php

namespace App\Http\Controllers;

use Faker\Core\Uuid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Rfc4122\UuidV5;

class SalesController extends Controller
{
    // AddProduct
        function addProduct(Request $request){
            DB::table('products')->insert([
                'modelNumber' => UuidV5::uuid4(),
                'name' => $request->name,
                'quantity' => $request->quantity,
                'price' => $request->price,
                // 'photo' => 
            ]);
        }

    // registerStore

    // 
}
 