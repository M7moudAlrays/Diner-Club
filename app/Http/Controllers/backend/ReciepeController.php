<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Reciepe;
use Illuminate\Http\Request;

class ReciepeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['reciepes']=Reciepe::all();
        return view('backend.reciepes.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data['categories']=Category::all();
        return view('backend.reciepes.create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
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

        Reciepe::create([

            'name'=>$request->name,
            'ingrediens'=>$request->ingrediens,
            'description'=>$request->description,
            'image'=>$request->image,
            'category_id'=>$request->category_id

            ]);


        session()->flash('success','Reciepe is inserted sucessfully');
        return redirect()->route('receipes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Reciepe $reciepe)
    {

        $data['reciepe']=$reciepe;
        return view('backend.reciepes.show')->with($data);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $reciepe=  Reciepe::findOrFail($id);
        $data['receipe']=$reciepe;
        $data['categories']=Category::all();
        return view('backend.reciepes.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {


        $reciepe= Reciepe::findOrfail($id);

        if ($request->hasFile('image'))
        {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath,$imageName);

        }



        $reciepe->update([

            'name'=>$request->name,
            'ingrediens'=>$request->ingrediens,
            'description'=>$request->description,
            'image'=>$imageName,
            'category_id'=>$request->category_id

            ]);

            // dd("hg");

        session()->flash('success','Reciepe is inserted sucessfully');
        return redirect()->route('receipes.index');    }

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
