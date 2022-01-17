<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jan;
class MyPageController extends Controller
{
    //
    public function index(){
        $data = Jan::all();
        $jans = $data;
     
        return view('front.mypage.mypage')->with(['datas' => $jans]);
    }

}
