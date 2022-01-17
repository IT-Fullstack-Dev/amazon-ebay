<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\JanCodeImport;
use Maatwebsite\Excel\Facades\Excel;

class JanCodeController extends Controller
{
    //
   public function fileImport(Request $request){
    Excel::import(new JanCodeImport, $request->file('file')->store('temp'));
    return back();
   }
}
