<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrderRecipe;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\about;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class orderDetailsControlle extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['orderDetails']=OrderDetail::where('order_id','=',$id)->get();
        $data['Details']=OrderDetail::where('order_id','=',$id)->take(1)->get();
        
        // dd($data);
        $data['sum']=DB::table("orders_reciepes")->get()->sum("price");
        return view('backend.ordersDetails.show')->with($data);

    }

    public function Print_order($id)
    {
        $data['orderDetails']=OrderRecipe::where('order_id','=',$id)->get();
        $data['order']=Order::findOrFail($id);
        $data['user']=Auth::user();
        $data['about']=About::first();
        // dd($data);
        return view('backend.ordersDetails.print_reseet')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
