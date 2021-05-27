@extends('front.master')
@section('style') @endsection

<link href="{{asset('css/reservation.css')}}" rel="stylesheet">


@section('content')

<section class="serve-form">
    <div class="container">
        <div class="row">

        <div class="col-sm-10  col-md-6 forms">
                    <form method="POST"  class="form" action="{{route('reservation.store')}}">
                        @csrf

                       <div class="form-group">
                            <h3 class="alert"> Reservation Form  </h3>
                        </div>

                        {{-- <div class="form-group">
                            <input type="text" name="name" class="form-control"
                                   value="{{old('name')}}"  placeholder="Enter Your Name"/>
                            <label class="text-danger">{{$errors->first('name')}}</label>
                        </div> --}}

                        {{-- <div class="form-group ">
                            <input type="text" name="email" class="form-control"
                                   value="{{old('email')}}"  placeholder="Enter Your Email" />
                            <label class="text-danger">{{$errors->first('email')}}</label>
                        </div> --}}

                        <div class="form-group  ">
                            <input type="number" name="guests_number" class="form-control" value="{{old('guests_number')}}"
                                   placeholder="Enter Count Guests" />
                            <label class="text-danger">{{$errors->first('password')}}</label>
                        </div>

                        <div class="form-group">
                            <p class="alert alert-danger text-info">
                                Any Day You Want This Reservation ?
                            </p>
                            <input type="date" name="attendance_date" class="form-control"
                                   value="{{old('attendance_date')}}"/>
                        </div>

                        <div class="form-group">
                            <p class="alert alert-danger">
                                at Any hour of This Day You Want This Reservation ?
                            </p>
                            <input type="time" name="attendance_time" class="form-control"
                             value="{{old('attendance_time')}}"/>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn" value="Reserve">
                        </div>
                    </form>
                </div>
        </div>
    </div>
</section>
@endsection
