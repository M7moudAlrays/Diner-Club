<?php

namespace App\Http\Controllers\frontent;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Reciepe;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;

class indexController extends Controller
{
    
    // function index() 
    // {
    //   $data['reciepes']=Reciepe::all();
    //   return view('front.index')->with($data);   
    // }


    public function index()
    {
        $recps1 = reciepe::all();
        $recps2 = reciepe::all();
        $posts=Post::all();
        // dump($recps) ;
        $recps1 = Reciepe::orderBy('evaluation', 'desc')->Limit(3)->get();
        $recps2 = Reciepe::orderBy('prape_time', 'asc')->Limit(1)->get();
        $recps3 = Reciepe::orderBy('price', 'asc')->Limit(4)->get();
        return view("front.index" ,["rc_data"=>$recps1,"rc_data2"=>$recps2 , "rc_data3"=>$recps3,'posts'=>$posts]) ;
    }

}
