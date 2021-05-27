<?php

namespace App\Http\Controllers\frontent;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Reservation;
use App\Mail\ReservationResponseMail;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Auth;
use App\Notifications\AddReservation;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;



class profileController extends Controller
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
    public function show(User $user)
    {

$data['user']=$user;

return view('front.profile.show')->with($data);

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
    function getReservations($id)
    {
     $data['reservations']=Reservation::where('user_id',$id)->get();
    //  dd($data);

     return view('front.profile.reservations.index')->with($data);
    }

    public function editReservation($id)
    {

      $data['reservation']=Reservation::findOrFail($id);

              return view('front.profile.reservations.edit')->with($data);

      }




      public function updateReservation(Request $request, Reservation $reservation)
      {
          // dd($request->all());
  $reservation->update($request->all());
  if($request->status=="confirmed")
  {
      $name=$request->name;
      $date=$request->date;
      $time=$request->time;
      $table_number=$request->table_number;
  // send email to user
      $reciver=$request->email;
      $name=$request->name;
      Mail::to($reciver)->send(new ReservationResponseMail($name,$date,$time,$table_number));
  return redirect()->route('geMyReservations',Auth::id());

  }





      }






    function getMessages($id)
    {
        $data['messages']=Contact::where('user_id',$id)->get();

        return view('front.profile.messages.index')->with($data);

    }

    function getOrders($id)
    {
        $data['orders']=Order::where('user_id',$id)->get();

        return view('front.profile.orders.index')->with($data);

    }
    public function editProfile($id)
    {
    $data['user'] = User::find($id);
    return view('front.profile.setting.edit')->with($data);
    }

function changeImageProfile($id){



return 8;
}
function Updateprofile(Request $request,$id)
{
// $request->validate([

//     'name'=>'required',
//     'email'=>'required|email',
//     'password'=>'required',
//     'image'=>'required'
// ]);
// dd($request->image);
$user=User::findOrFail($id);
$password=Hash::make($request->password);
$user->image=$request->image;
    $user->update([
        'name'=>$request->name,
        'image'=>$request->image,
        'email'=>$request->email,
        'password'=>$password,


    ]);
return back();
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
