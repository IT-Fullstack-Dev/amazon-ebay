<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\ProductInformation;
use App\Models\Store;
use App\Models\ProductImage;
use App\Models\Category;
class ListingController extends Controller
{
    //
    public function index(){
        return view('front.listing.listing');
    }

    public function registerEabyCategory(Request $request){
        $productlist = $request -> productlist;
        $user_id = $request -> user_id;
        $importname_id = $request -> importname_id;
        foreach($productlist as $product){
            $result = ProductInformation::where(
                [
                    'user_id' => $user_id,
                    'importname_id' => $importname_id,
                    'category' => $product['category_name']
                ]
            )
            ->update(
                [
                    'ebay_category' => $product['ebay_category_id']
                ]
            );

        }
        return response()->json(
            [
                'result'=> 'true'
            ]
        );
        
    }
    public function getCategory(Request $request){
        $category_id = $request -> category_id;
        $int_category = intval($category_id);
        Log::info($category_id);
        $result = Category::where(
            [
                'cat_parent_id' => $int_category
            ]
        )
        ->whereColumn('cat_id','!=','cat_parent_id')
        ->selectRaw('cat_name,cat_id,cat_parent_id')
        ->get();
        return response()->json([
            'data' => $result
        ]);
    }
    public function listProducts(Request $request){
        
        $user_id = $request -> user_id;
        $importname_id = $request -> importname_id; 
        $search_result = ProductInformation::where(
            [
                'user_id' => $user_id,
                'importname_id' => $importname_id
                ]
            )
            ->selectRaw('count(id) as count,category')
            ->groupBy('category')
            ->get();
        $category = Category::where(
                    [
                        'level' => 1
                    ]
                )
                ->selectRaw('cat_name,cat_id')
                ->get();
        return response()->json([
            'data' => $search_result,
            'category' => $category
        ]);
    //   $qoo10_auth_key = Store::where(['user_id' => $user_id]) -> get();

    //   $search_result = ProductInformation::where(['user_id' => $user_id,'importname_id' => $importname_id])->get();
      
    //   $products = ProductInformation::select("product_information.*","table_categorymatching.qoo10_category_name","table_categorymatching.qoo10_category_id")
    //             ->join("table_categorymatching",function($join){
    //                  $join -> on("table_categorymatching.amazon_category_name","=","product_information.category");
    //             })->where(['product_information.user_id'=>$user_id,'product_information.importname_id'=>$importname_id])->get();
    
    //   foreach($products as $product){
       
    //     // $product_images = ProductImage::where(['asin' => $product['asin']]) -> get();
    //     // dd($qoo10_auth_key[0]['qoo10_auth_key']);
    //     $url = 'http://api.qoo10.jp/GMKT.INC.Front.QAPIService/ebayjapan.qapi/ItemsBasic.SetNewGoods';
    //     $data = [

    //         'SecondSubCat' => $product['qoo10_category_id'],
    //         'OuterSecondSubCat' => '',
    //         'Drugtype' => '',
    //         'BrandNo' => '0',
    //         'ItemTitle' => $product['title'],
    //         'PromotionName' => '',
    //         'SellerCode' => '',
    //         'IndustrialCodeType' => '',
    //         'IndustrialCode' => '',
    //         'ModelNM' => '',
    //         'ManufactureDate' => '',
    //         'ProductionPlaceType' => '3',
    //         'ProductionPlace' => 'no known',
    //         'Weight' => '',
    //         'Material' => '',
    //         'AdultYN' => '',
    //         'ContactInfo' => '',
    //         'AdditionalOption' => '',
    //         'StandardImage' => $product['main_imageURL'],
    //         'VideoURL' => '',
    //         'ItemDescription' => $product['description'],
    //         'ItemPrice' => $product['price'],
    //         'ItemQty' => $product['quantity'],
    //         'RetailPrice' => '',
    //         'ExpireDate' => '',
    //         'ShippingNo' => '0',
    //         'AvailableDateType' => '0',
    //         'AvailableDateValue' => '3',
    //         'returnType' => 'json',
    //         'key' => $qoo10_auth_key[0]['qoo10_auth_key'],
    //         'Keyword' => '',
    //         'ItemType' => ''

    //     ];

    //     $ch = curl_init();
    //     curl_setopt($ch, CURLOPT_URL,$url);
    //     curl_setopt($ch, CURLOPT_POST, true);
    //     curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
    //     curl_setopt(
    //         $ch, 
    //         CURLOPT_HTTPHEADER, 
    //         array(
    //             'Content-Type: application/x-www-form-urlencoded', // for define content type that is json
                
    //             'QAPIVersion: 1.1'
    //         ));
    //     curl_setopt($ch, CURLOPT_TIMEOUT, 36000);
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //     $server_output = curl_exec($ch);
    //     curl_close ($ch);
        
    //   }
      
    //   return response()->json([
    //       'data' => 'true'
    //   ]);

   ///////////SetSellerCheck API

    // $url = 'https://api.qoo10.jp/GMKT.INC.Front.QAPIService/ebayjapan.qapi/ShippingBasic.SetSellerCheckYN_V2';
    //     $data = [

    //             'OrderNo' => '697129307',
    //             'EstShipDt' => '20211225',
    //             'DelayType' => '1',
    //             'DelayMemo' => 'aaa'
                

    //     ];

    //      $ch = curl_init();

    //     curl_setopt($ch, CURLOPT_URL,$url);
    //     curl_setopt($ch, CURLOPT_POST, true);
    //     curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
    //     curl_setopt(
    //         $ch, 
    //         CURLOPT_HTTPHEADER, 
    //         array(
    //             'Content-Type: application/x-www-form-urlencoded', // for define content type that is json
    //             'GiosisCertificationKey: S5bnbfynQvOKjKOOi6rqr2kyaKwK_g_1__g_2_tyLHiSIJ7jifeGJ_g_2_tYHO_g_2_9lvlRVaBoXZdsquVBC3VERFI1swTZz8Jx_g_2_LTtMbTKziDCTpt62xvJx39u3jjQuqwyYOeGwPXWePCD',
    //             'QAPIVersion: 1.0'
    //         ));
    //     curl_setopt($ch, CURLOPT_TIMEOUT, 36000);
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //     $server_output = curl_exec($ch);
    //     curl_close ($ch);
 

    //     return response()->json([

    //         'data' => $server_output
    //     ]);


    }


}
