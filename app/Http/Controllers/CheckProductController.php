<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\ImportName;
use App\Models\CheckProduct;
use App\Models\ImportAsin;
use App\Models\Black;
use App\Models\ProductCheck;
use App\Models\Ngword;
use App\Models\ProductInformation;
use App\Models\ProductImage;

class CheckProductController extends Controller
{
    //

    public function checkproduct(Request $request){

    	$user_id = $request->user_id;
        // $result = ImportName::where(['user_id'=>$user_id])->get();
        // $join = ImportName::join('checkasin','checkasin.user_id','=','importname.user_id')
        //      ->where('importname.user_id',$user_id)
        //      ->get(['checkasin.*','importname.import_name','importname.productcount']);
        $result = ImportName::select("checkasin.*","importname.import_name","importname.productcount")
        ->join("checkasin",function($join){
        	$join->on("checkasin.user_id","=","importname.user_id")
        	->on("checkasin.importname_id","=","importname.id");
        })->where(['checkasin.user_id'=>$user_id])->get();

    	return response()->json([
    		 'data'=>$result
    	]);
    }

    public function getAsin(Request $request){
    	
    	$user_id = $request->user_id;
    	$import_id = $request->import_id;
        $start_time = $request->start_time;
        $insert_starttime = CheckProduct::where(['user_id'=>$user_id,'importname_id'=>$import_id])->update(['start_work'=>$start_time]);
        $result = ImportAsin::where(['import_name_id'=>$import_id,'user_id'=>$user_id])->get();
        return response()->json([

        	 'data'=>$result	
        ]);

    }

    public function checkProductInformation(Request $request){

        
        $productarray = $request->productarray;
        
        $user_id = $request->user_id;
        $importname_id = $request->importname_id;
        $asin_check_result = [];
        $temp_asin='';
        $checkresult = 0;
        $ngword_list = [];
        $first_check_pass_count = 0;
        $second_check_pass_count = 0;
        $total_product_count = count($productarray);
        
        $first_check_pass_array = [];
        $second_check_pass_array = [];
        
    //     $ngword_array = Ngword::where(['user_id'=>$user_id])->get();
    //     foreach($ngword_array as $ngword){
               
    //           array_push($ngword_list,$ngword['blackword']);  

    //     }

    //     foreach($productarray as $product){
    //         $checkresult = 0;
    //         Log::info($product);
    //         $temp_asin = $product['asin'];
    //         $temp_title = $product['title'];
    //         $temp_deliver_day = $product['between_day'];
           

    //         //blackasin check
    //         $blackasin_result = Black::where(['blackasin'=>$product['asin'],'user_id'=>$user_id])->get();
         

    //         if(count($blackasin_result)){
    //               $checkresult = 1; // blackasin case            
    //         }

    //         //ngword check
    //         foreach($ngword_list as $ngitem){
               
    //             if(strpos($temp_title,$ngitem)!==false){

    //                 $checkresult = 2; //ngword case
    //             }
    //         }

    //         //between day
    //         if($temp_deliver_day>2 || $temp_deliver_day==null){
                
    //             $checkresult = 3; //between day
    //         }
    //         if($checkresult!=1 && $checkresult!=2 && $checkresult!=3){
    //               array_push($first_check_pass_array,$product);
    //               $first_check_pass_count++;
    //         }
    //         else{
    //               $productcheck = ProductCheck::create([
    //                     'user_id' => $user_id,
    //                     'imporname_id' =>$importname_id,
    //                     'asin' => $temp_asin,
    //                     'checkresult' => $checkresult
    //             ]);

    //         }
          
           

    //     }
        
    //     foreach($first_check_pass_array as $first_pass){
    //         $checkresult = 0;
    //         $temp_together_buy = $product['together_buy'];
    //         $temp_price = $product['price'];
    //         $temp_stock = $product['quantity'];
           
    //         //together buy
    //         // if($temp_together_buy == '一緒に購入'){
    //         //      $checkresult = 4; //together buy
    //         // }


    //         //no price
    //         if($temp_price == null){
    //             $checkresult = 5; // no price
    //         }

    //         if($temp_stock == null){
    //             $checkresult = 6; //no stock
    //         }

    //          if($checkresult==0){
    //             //   array_push($second_check_pass_array,$first_pass);
    //               $second_check_pass_count++;
    //         }

    //         $productcheck = ProductCheck::create([
    //                     'user_id' => $user_id,
    //                     'imporname_id' =>$importname_id,
    //                     'asin' => $temp_asin,
    //                     'checkresult' => $checkresult
    //             ]);

    //         }
       

    //    $checkproduct_result = CheckProduct::where(['user_id'=>$user_id,'importname_id'=>$importname_id])->update(['total_count'=>$total_product_count,'1pass_count'=>$first_check_pass_count,'2pass_count'=>$second_check_pass_count]);

    //    dd($second_check_pass_array);
       Log::info($productarray);
       foreach($productarray as $product){
           if(is_numeric($product['price'])){
               
              $pass_product_register_result = ProductInformation::create([
                'user_id' => $user_id,
                'importname_id' => $importname_id,
                'asin' => $product['asin'],
                'title' => $product['title'],
                'price' => $product['price'],
                'quantity' => $product['quantity'],
                'category' => $product['category'],
                'shipping_day' =>$product['between_day'],
                'together_buy' => $product['together_buy'],
                'description' => $product['description'],
                'ranking' => $product['ranking'],
                'product_size' => $product['productsize'],
                'brand' => $product['brand'],
                'main_imageURL' => $product['main_imageURL']
                ]);
                
                foreach($product['imageurl'] as $img){
                   $register_product_image = ProductImage::create([
     
                     'asin' => $product['asin'],
                     'image_url' => $img
                   ]);
                }
           }
          


       }
        
       
        return response()->json([

            'user_id' => $user_id,
            'importname_id' =>$importname_id
        ]);

    }
}
