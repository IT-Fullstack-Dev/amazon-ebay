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

    public function translateTitle($title)
    {
        $output = $this->translateOutput($title);
        $eng_title = explode('"', $output)[1];
        return $eng_title;
    }

    public function translateOutput($title)
    {
        $host = "http://translate.google.com/translate_a/single?client=webapp&sl=auto&tl=en&hl=en&dt=at&dt=bd&dt=ex&dt=ld&dt=md&dt=qca&dt=rw&dt=rm&dt=ss&dt=t&dt=gt&pc=1&otf=1&ssel=0&tsel=0&kc=1&tk=&q=".urlencode( $title );

        $curl = curl_init();
		
        curl_setopt_array($curl, array(
            CURLOPT_URL => $host,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "Accept: */*",
                "Accept-Encoding: gzip, deflate",
                "Cache-Control: no-cache",
                "Connection: keep-alive",
                "Cookie: NID=190=NY1ox5yIwHWgl-YC23LlJa8mn9_tWoiLRHJGpd8-RMEJsnh-jrF_cOvMEWqSSsR0J7WSrvhXF-_QqJpJ1s75Ymc76YSqXjS9NxXXnQKSDPmVySE0zNlzrVLQqK3IrmTa-et4Bu-8peiwE9jGnv4QFFjgGuxD5E0Mwbe0bzCvLiU",
                "Host: translate.google.com",
                "Postman-Token: b8b0ae52-b3c2-479e-9c4d-7e73e0540fb8,b70b881c-dcd6-4d23-a9f3-0bd7eeff91e6",
                "User-Agent: PostmanRuntime/7.19.0",
                "cache-control: no-cache"
            ),
        ));

		$output = utf8_decode(curl_exec($curl));
        $err = curl_error($curl);
		curl_close($curl);
        if($err)
            echo 'Curl Error #:' . $err;
        else
            return $output;
    }

    public function checkProductInformation(Request $request){

        $productarray = [];
        $productarray = $request->productarray;
        
        $asin_check_result = [];
        $temp_asin='';
        $checkresult = 0;
        $ngword_list = [];
        $first_check_pass_count = 0;
        $second_check_pass_count = 0;
        // $total_product_count = count($productarray);
        
        $first_check_pass_array = [];
        $second_check_pass_array = [];
     

       foreach($productarray as $product){
           Log::info($product);
            if(is_numeric($product['price']) & is_numeric($product['quantity'])){
              $check = ProductInformation::where(['asin'=>$product['asin']])
                       ->get();
              if(count($check)==0){
                  $title = $this->translateTitle($product['title']);
                  $description = $this->translateTitle($product['description']);
                  try{
                        $pass_product_register_result = ProductInformation::create([
             
                        'asin' => $product['asin'],
                        'title' => $title,
                        'price' => $product['price'],
                        'quantity' => $product['quantity'],
                        'category' => $product['category'],
                        'shipping_day' =>$product['between_day'],
                        'together_buy' => $product['together_buy'],
                        'description' => $description,
                        'ranking' => $product['ranking'],
                        'product_size' => $product['productsize'],
                        'brand' => $product['brand'],
                        'main_imageURL' => $product['main_imageURL'],
                        'flag'=>'0'
                        ]);
                    }catch(\Exception $e){
                       continue;

                  }    
                        
                        foreach($product['imageurl'] as $img){
                           $register_product_image = ProductImage::create([
             
                             'asin' => $product['asin'],
                             'image_url' => $img
                           ]);
                        }
              
                  
              }         

           }
          


       }
        
       
        return response()->json([
             'data'=>'true'
        ]);

    }
}
