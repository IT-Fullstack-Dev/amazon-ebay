<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminManageUserController extends Controller
{
    //
    public function index(){
        return view('admin.manageuser.manageuser');
    }
}
