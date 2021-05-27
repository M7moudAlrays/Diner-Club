<?php

namespace App\Http\Controllers\frontent;

use App\Http\Controllers\Controller;
use App\Models\User ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash ;
use Symfony\Component\Console\Input\Input;

class UsController extends Controller
{

    public function index()
    {
        $users = User::all() ;
        return view('front.signin' , ["data" => $users]) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('front.signin') ;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate
        ([
            'name'=>'required|min:3|max:30' ,
            'email'=>'unique:users| required|email' ,
            'password'=>'required|min:5' ,
            'phone'=>'required|max:11|starts_with:012,011,010'
         ]) ;

        $input = $request->all();
        $input['roles_name']=["user"];
        $input['Status']="Active";
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        $user->assignRole(["user"]);
        // user::create ($request->all()) ;
        return view('auth.login') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
        //
    }
}
