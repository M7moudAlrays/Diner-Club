@extends('front.master')
@section('style') @endsection

<link href="{{asset('css/details.css')}}" rel="stylesheet">
{{-- <link href="{{asset('css/recipes.css')}}" rel="stylesheet"> --}}
<link href="{{asset('css/Checkout.css')}}" rel="stylesheet">
@section('content')


<section id="details_main">
    <div class="details_inner clearfix container">
      <div class="row">
          <div class="details_main_1">
               <h1>Paying Page</h1>
               <ul>
                    <li><a href="{{route('homePage.index')}}">Home</a></li>
                    <li><i class="fa fa-angle-double-right"></i></li>
                    <li> Paying Page </li>
               </ul>
          </div>
      </div>
    </div>
</section>


<section class="serve-form">
    <div class="container">
    <div class="row">
        <div class="col-sm-12" style="margin-top:3%">
            {{-- <h4 class="alert alert-danger">CheckOut</h4> --}}
            <h4 class="alert alert-danger"> Total Price is :{{$total}} &dollar;</h4>
        </div>


          <div class="col-sm-12 forms">
                    <form method="POST"  class="form" action="">
                        @csrf

                        <div class="form-group form-title">
                            <h3 class="alert"> Payment Form </h3>
                        </div>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control"
                                   value="{{old('name')}}"  placeholder="Enter Your Name"/>
                            <label class="text-danger">{{$errors->first('name')}}</label>
                        </div>

                        <div class="form-group ">
                            <input type="text" name="email" class="form-control"
                                   value="{{old('email')}}"  placeholder="Enter Your Email" />
                            <label class="text-danger">{{$errors->first('email')}}</label>
                        </div>



                        {{-- <div class="form-group">
                            <input type="number" name="phone" class="form-control" value="{{old('phone')}}"
                                   placeholder="Enter Your Phone Number" />
                            <label class="error-lable">{{$errors->first('phone')}}</label>
                        </div>

                        <div class="form-group">
                            <textarea name="address" class="form-control"
                            placeholder="Enter Your Address" rows="4"></textarea>
                        </div> --}}


                        <div class="form-group">
                            <input type="text" name="card-name" class="form-control" 
                                   placeholder="Enter Your card Holder Name" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="credit-number" class="form-control" 
                                   placeholder="Enter Your credit card number" required />
                        </div>

                        <div class="form-group">
                            <p class="alert alert-danger">
                                Expiration Date :
                            </p>
                            <input type="date" name="expiration-date" class="form-control"
                            placeholder="Enter Your Expiration Date" required />
                        </div>

                        <div class="form-group">
                            <input type="text" name="CVC" class="form-control" 
                                   placeholder="Enter Your CVC"  required />
                        </div>

                        {{csrf_field()}}
                        <div class="form-group">
                            <a href="#"><input type="submit" class="btn" value="Buy Now"></a>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</section>
@endsection
