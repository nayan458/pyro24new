<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AuthenticationController extends Controller
{
    use HasApiTokens,AuthorizesRequests;
    // register sellrs
        function sellerReg(Request $request) {
            try{
                Seller::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                ]);
            } catch (\Throwable $th){
                return response(["ERROR" => "Please provide valid input"],401);
            }
            return response(["Message" => "User registered successfully"],200);
        }   

    // register customers
        function customerReg(Request $request) {
            try{
                Customer::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'password' => Hash::make($request->password),
                ]);
            } catch (\Throwable $th){
                return response(["ERROR" => "Please provide valid input"],401);
            }
            return response(["Message" => "User registered successfully"],200);
        }

    // login sellrs
        function sellerLogin(Request $request) {
            if(Auth::guard('seller')->attempt([
                'email' => $request->email,
                'password' => $request->password,
            ])){
                $user = Auth::guard('seller')->user();        
                $token = $user->createToken('seller_token',['seller'])->plainTextToken;
                return response()->json([
                    "token" => $token,
                ],200);
            }
        }
    // login customers
        function customerLogin(Request $request) {
            if(Auth::guard('customer')->attempt([
                'email' => $request->email,
                'password' => $request->password,
            ])){
                $user = Auth::guard('customer')->user();        
                $token = $user->createToken('customer_token',['customer'])->plainTextToken;
                return response()->json([
                    "token" => $token,
                ],200);
            }
        }
}
