<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class paymentProviderController extends Controller
{
    public function getChechOutId(Request $request){

        $url = config('payment.hyperpay.url') . "/v1/checkouts";
        $data = "entityId=". config('payment.hyperpay.entity_id') .
        "&amount=". $request->price.
        "&currency=EUR" .
        "&paymentType=DB";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization:Bearer OGE4Mjk0MTc0YjdlY2IyODAxNGI5Njk5MjIwMDE1Y2N8c3k2S0pzVDg='));
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// this should be set to true in production
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseData = curl_exec($ch);

           curl_close($ch);

        $res = json_decode($responseData, true);


        $view = view('front.Ajax.form')->with(['responseData' =>$res])
        ->renderSections()['main'];


        return response()->json([
            'status' => true,
            'content' => $view
        ]);
        }

public function getStars(Request $request){

{


    // return 33;

    $view = view('front.stars.rating') ->renderSections()['main'];
return $view;
}
    
    
    
    }




}
