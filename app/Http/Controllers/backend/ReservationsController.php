<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Mail\ReservationResponseMail;
use Illuminate\Support\Facades\Notification;
use App\Notifications\AddReservation;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class ReservationsController extends Controller
{

    function __construct()
    {


        $this->middleware('permission:reservations', ['only' => ['index','store']]);
        // $this->middleware('permission:role-create', ['only' => ['create','store']]);
        // $this->middleware('permission:role-edit', ['only' => ['edit','update']]);
        // $this->middleware('permission:role-delete', ['only' => ['destroy']]);


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data['reservations']=Reservation::all();
        return view('backend.reservations.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $user = User::first();
        // Notification::send($user,new AddReservation);
        // return redirect()->route('reservations.index');
        return view('backend.reservations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->user_id=Auth::id();
        Reservation::create($request->all());
        session()->flash('success','reservation is inserted sucessfully');

        $user = User::first();
        Notification::send($user,new AddReservation);
        return redirect()->route('reservations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        $data['reservation']=$reservation;
            //    dd($reservation);

              return view('backend.reservations.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
               $data['reservation']=$reservation;

              return view('backend.reservations.edit')->with($data);

            }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {


        // dd($request->all());
        $reservation=Reservation::findOrFail($id);
        // dd($reservation);
// $reservation->update([
//     'status'=>"ok"

//     ]);


          $reservation->update([
              'name'=>$request->name,
              'email'=>$request->email,
              'status'=>$request->status,
              'attendance_date'=>$request->attendance_date,
              'attendance_time'=>$request->attendance_time,
              'table_number'=>$request->table_number,
              'guests_number'=>$request->guests_number


]);

if($request->status=="confirmed")
{
    $name=$request->name;
    $date=$request->date;
    $time=$request->time;
    $table_number=$request->table_number;
// send email to user
    $reciver=$request->email;
    $name=$request->name;
    // Mail::to($reciver)->send(new ReservationResponseMail($name,$date,$time,$table_number));


}
session()->flash('success','reservation is updated sucessfully');
return redirect()->route('reservations.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {

        $reservation->delete();
        return redirect()->back();
    }
}
