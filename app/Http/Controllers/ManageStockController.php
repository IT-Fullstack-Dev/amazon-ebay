<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManageStockController extends Controller
{
    //
    public function index(){
        return view('front.managestock.managestock');
    }
}
