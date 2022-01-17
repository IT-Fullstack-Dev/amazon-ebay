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
    		$user_id = $request->user_id;
    		$productAsinArray = explode("\n",$productAsin);
    		$productcount = count($productAsinArray);

    		$insert_import_name = ImportName::create([
    			'user_id' => $user_id,
    			'import_name' => $importname,
    			'productcount' => $productcount
    		]);

    		$insert_check_product = CheckProduct::create([
    				'user_id' => $user_id,
    				'importname_id' =>$insert_import_name->id
    		]);

			
    		foreach($productAsinArray as $asin){
    			$check_asin = ImportAsin::where(['productasin'=>$asin,'user_id'=>$user_id])->get();
    			if(!count($check_asin)){
    				$recode = ImportAsin::create([
    					'user_id' => $user_id,
    					'import_name_id' => $insert_import_name->id,
    					'productasin' => $asin
    				]);
    			}
    		}

    		return response()->json([
    			'status' => 'true',
    			'data' => $productAsinArray,
    			'id'=>$insert_import_name->id
    		]);


    }
}
