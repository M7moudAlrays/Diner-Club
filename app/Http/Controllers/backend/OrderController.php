<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Notifications\AddReservation;

use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['orders']=Order::get();
        // dd($data);
        return view('backend.orders.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data['categories']=Order::all();
        // $user = User::first();
        // Notification::send($user,new AddOrder);
        return view('backend.orders.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\giyRequest  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        if ($request->hasFile('image'))
        {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath,$imageName);

        }

        Order::create([

            'name'=>$request->name,
            'ingrediens'=>$request->ingrediens,
            'description'=>$request->description,
            'image'=>$request->image,
            'category_id'=>$request->category_id

            ]);

            //notification

//             $user=Auth::get();
//             $order=Order::latest()->first();

//  $user->notify(new \App\Notifications\AddOrder($order));
        session()->flash('success','Reciepe is inserted sucessfully');
        return redirect()->route('reciepes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {

        $data['order']=$order;
        return view('backend.orders.show')->with($data);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {        $order=Order::findOrFail($id);

        $data['order']=$order;
        return view('backend.orders.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {

        $order->update([

           
            'status'=>$request->status,

            ]);

        session()->flash('success','order is updated sucessfully');
        return redirect()->route('orders.index');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $contact=Order::findOrFail($id);
        $contact->delete();
       session()->flash('success','order deleted successfully');
       return redirect()->route('orders.index');
    }
}
