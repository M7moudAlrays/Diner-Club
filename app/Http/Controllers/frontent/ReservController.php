<?php

namespace App\Http\Controllers\frontent;

use App\Http\Controllers\Controller;
use App\Models\reservation;
use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\AddReservation;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Auth;



class ReservController extends Controller
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
        return view ('front.reservation') ;
    }

    public function store(Request $request)
    {
        $request->validate
        ([
            // 'name'=>'required|min:3|max:30' ,
            // 'email'=>'required|email' ,
         ]) ;

        // $id = Auth::user()->id;
         $user = User::first();
         $id=Reservation::latest()->first();

        //  $id=$id->id;
         $id = Auth::user()->id;
         Notification::send($user,new AddReservation($id));


        $name = Auth::user()->name ;
        $email = Auth::user()->email;

        $reservation = new reservation ;
        $reservation->name = $name ;
        $reservation->email = $email ;
        $reservation->guests_number = request("guests_number");
        $reservation->attendance_time = request("attendance_time");
        $reservation->attendance_date = request("attendance_date");
        $reservation->user_id = Auth::id();
        $reservation->save() ;
        // reservation::create ($request->all()) ;
        sleep(1) ;

        return redirect()->route('reservation.create') ;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {

        $data['reservation']=Reservation::where('user_id',$id);
        dd($data);
        return view('backend.reservations.show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(reservation $reservation)
    {
        //
    }
}
