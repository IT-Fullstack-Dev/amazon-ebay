<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminManageContactController extends Controller
{
    //
    public function index(){
        return view('admin.managecontact.managecontact');
    }
}
