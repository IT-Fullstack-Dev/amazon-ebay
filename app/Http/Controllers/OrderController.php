<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\EmailTemplate;

use Illuminate\Support\Facades\Mail;
use App\Mail\OrderReplyEmail;
use Symfony\Component\HttpFoundation\Response;

class OrderController extends Controller
{
    //

    public function registerOrders(Request $request){
         
        $orders = $request -> orders;
        // dd($orders);
        foreach($orders as $order){
             $is_exist_record = Order::where([
                                    'order_id' => $order['order_id']
                                ])->get();
             if(count($is_exist_record) == 0){
                    Order::create([
                        'store_id' => $order['store_id'],
                        'order_id' => $order['order_id'],
                        'buyer_email' =>$order['buyer_email']
                    ]);
                    $store_id = $order['store_id'];
                    $result = EmailTemplate::where([
                        'store_id' => $store_id
                    ])->first();
                    $store_email = $result['email_template'];
                    // if(str_contains($store_email,'@')){
                         Mail::to($order['buyer_email'])->send(new OrderReplyEmail($store_email));
                    // } 
                    
             }
        }

        return response()->json([
            'data' => 'true'
        ]);
    }


}
