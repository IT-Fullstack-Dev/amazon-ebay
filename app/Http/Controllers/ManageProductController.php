<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageProductController extends Controller
{
    //
    public function index(){
        return view('front.ManageProduct');
    }
}
