<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\Blacklist;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Black;
use App\Models\Ngword;

class ImportBlacklistController extends Controller
{
    //
    public function index(){
        return view('front.ImportBlackList');
    }

    // public function blackAsinImport(Request $request){

    //     Excel::import(new BlackList,$request->file('blackasin')->store('temp'));
    //     return response()->json([
    //     	'state'=>'success'
    //     ]);
    // }

    public function blackAsinImport(Request $request){
        
        $user_id = $request->userID;
        $blackasins = $request->blackasin;
        $blackasinArray = explode("\n",$blackasins);

         foreach($blackasinArray as $asin){
         	$check_asin = Black::where(['blackasin'=>$asin])->get();
		  	if(!count($check_asin)){
                $record = Black::create([
        	      'user_id' => $user_id,
        	      'blackasin' => $asin
        	   ]);
         	}
        	
        	       
        }
        return response()->json([
        	'blackasins'=>$blackasinArray,
        	'user_id'=>$user_id,
            'status'=>'true'
        ]);
       

      }


    public function ngwordImport(Request $request){

    	$user_id = $request->userID;
        $ngwords = $request->ngword;
        $ngwordArray = explode("\n",$ngwords);

         foreach($ngwordArray as $ngword){
         	$check_asin = Ngword::where(['blackword'=>$ngword])->get();
		  	if(!count($check_asin)){
                $record = Ngword::create([
        	      'user_id' => $user_id,
        	      'blackword' => $ngword
        	   ]);
         	}
        	       
        }
        return response()->json([
            'status'=>'true'
        ]);
       
    }
    
}
