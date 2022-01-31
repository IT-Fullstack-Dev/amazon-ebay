<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmailTemplate;
use Appp\Models\Store;

class EmailTemplateController extends Controller
{
    //

    public function register(Request $request){

        $store_id = $request -> store_id;
        $email_template = $request -> email_template;
        $result = EmailTemplate::create([
                'store_id' => $store_id,
                'email_template' => $email_template
        ]);

        $email_template = EmailTemplate::select(
               "emailtemplate.id",
               "emailtemplate.email_template",
               "store.store_name"
        )
        ->leftJoin("store","store.id","=","emailtemplate.store_id")
        ->get();

        return response()->json([
                'data' => $email_template
        ]);
    }

    public function getEmailTemplate(Request $request){
         
        $email_template = EmailTemplate::select(
            "emailtemplate.id",
            "emailtemplate.email_template",
            "store.store_name"
        )
        ->leftJoin("store","store.id","=","emailtemplate.store_id")
        ->get();

        return response()->json([
                'data' => $email_template
        ]);

    }

    public function deleteEmailTemplate(Request $request){

        $id = $request -> id;
        $email_template = EmailTemplate::where([
            'id' => $id
        ])
        ->delete();

        $email_template = EmailTemplate::select(
            "emailtemplate.id",
            "emailtemplate.email_template",
            "store.store_name"
     )
     ->leftJoin("store","store.id","=","emailtemplate.store_id")
     ->get();

        return response()->json([
                'data' => $email_template
        ]);

    }
}
