<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImportAsin;
use App\Models\ImportName;
use App\Models\CheckProduct;
class ImportProductAsinController extends Controller
{
    //

    public function importasin(Request $request){

    		$productAsin = $request->productAsins;
    		$importname = $request->importname;
    	
    		$productAsinArray = explode("\n",$productAsin);
    		$productcount = count($productAsinArray);	
    		foreach($productAsinArray as $asin){
    			$check_asin = ImportAsin::where(['productasin'=>$asin])->get();
    			if(!count($check_asin)){
    				$recode = ImportAsin::create([
    					'productasin' => $asin
    				]);
    			}
    		}

    		return response()->json([
    			'status' => 'true',
    			'data' => $productAsinArray
    		
    		]);


    }
}
