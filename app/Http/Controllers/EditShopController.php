<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\BusinessPolicy;
use Qoo10\Api\Qoo10ApiProcessor;
use Qoo10\Api\Qoo10CertGenerator;
use Illuminate\Support\Facades\Log;
use Spatie\Async\Pool;
       
class EditShopController extends Controller
{
    //
    public function index(){
        return view('front.Editshop');
    }

    public function registerStore(Request $request){
        
       $store_name = $request -> store_name;
       $user_token = $request -> user_token;
       
       $result = Store::create([
            'store_name' => $store_name,
            'user_token' => $user_token
       ]);

       $get_result = Store::all();
        return response()-> json([
            'data' => $get_result
        ]);
        
    }

    public function getStore(Request $request){
        $result = Store::all();
        return response()-> json([
            'data' => $result
        ]);
    }

    public function deleteStore(Request $request){
        $result = Store::where([
            'id' => $request -> id
        ])
        ->delete();
        $result = Store::all();
        return response()-> json([
            'data' => $result
        ]);
    }

    public function registerBusinessPolicy(Request $request){
        $result = BusinessPolicy::first();
        if(isset($result)){
            BusinessPolicy::where([
                'id'=>$result['id']
            ])
            ->update([
                'user_token'=>$request->user_token,
                'currency_rating'=>$request->rating,
                'payment_id'=>$request->payment_id,
                'payment_name'=>$request->payment_name,
                'return_id'=>$request->return_id,
                'return_name'=>$request->return_name,
                'shipping_id'=>$request->shipping_id,
                'shipping_name'=>$request->shipping_name
            ]);
        }
        else{
            BusinessPolicy::create([
                'user_token'=>$request->user_token,
                'payment_id'=>$request->payment_id,
                'payment_name'=>$request->payment_name,
                'return_id'=>$request->return_id,
                'return_name'=>$request->return_name,
                'shipping_id'=>$request->shipping_id,
                'shipping_name'=>$request->shipping_name
            ]);
        }
    }
}
