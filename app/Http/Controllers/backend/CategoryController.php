<?php
namespace App\Http\Controllers\backend;
use App\Events\UserMessage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Notification;
use App\Notifications\AddOrder;
use App\Models\Category;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{

             $data['data']=Category::all();
    return view('backend.categories.index')->with($data);
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // event(new UserMessage);

        return view('backend.categories.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Category::create($request->all());

    $user = User::first();
   $order=Category::latest()->first();
// dd($order);
   Notification::send($user,new AddOrder($order));
// $user->notify(new \App\Notifications\AddOrder);
//    $user->notify(new \App\Notifications\AddOrder($order));

    //  session()->flash('success','category creaed successfully');

     return redirect()->route('categories.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $data['category']=$category;

        return view('backend.categories.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {


        $category->update($request->all());

     session()->flash('success','category updated successfully');
     return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {


        $category->delete();
       session()->flash('success','category deleted successfully');
       return redirect()->route('categories.index');

    }


function MarkAsRead_all()
{
$userUnreadNotifications=auth()->user()->unreadNotifications;
if($userUnreadNotifications)
{

    $userUnreadNotifications->markAsRead();

    return back();
}

}







}
