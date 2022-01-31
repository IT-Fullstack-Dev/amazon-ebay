<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Description;

class DescriptionController extends Controller
{
    //
    public function getDescription(Request $request){
        $result = Description::all();
        return response()->json([
                'data' => $result
        ]);
    }

    //
    public function registerDescription(Request $request){
        $name = $request -> name;
        $description = $request -> description;
        $result = Description::create([
                'name' => $name,
                'description' => $description
        ]);
        $result = Description::all();
        return response()->json([
            'data' => $result
        ]);
    }

    //
    public function deleteDescription(Request $request){
         $id = $request -> id;
         $result = Description::where([
             'id'=>$id
         ])
         ->delete();
         $result = Description::all();
         return response()->json([
             'data' => $result
         ]);
    }

}
