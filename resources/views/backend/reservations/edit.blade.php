@extends('backend.layout.master')
@section('css')
<!-- Internal Nice-select css  -->
<link href="{{URL::asset('assets/plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet" />
@section('title')
Dinner Club
@stop


@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">reservations</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                New</span>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">


    <div class="col-lg-12 col-md-12">

        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>خطا</strong>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <div class="card">
            <div class="card-body">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('reservations.index') }}">back</a>
                    </div>
                </div><br>
                <form class="parsley-style-1" id="selectForm2" autocomplete="off" name="selectForm2"
                    action="{{route('reservations.update',$reservation->id)}}" method="post">
                    {{csrf_field()}}

                    @method("PUT")
                    <div class="">

                        <div class="row mg-b-20">
                            <div class="parsley-input col-md-6" id="fnWrapper">
                                <label>Name : <span class="tx-danger">*</span></label>
                                <input class="form-control form-control-sm mg-b-20"
                                    data-parsley-class-handler="#lnWrapper" name="name" required=""  type="text" value="{{$reservation->name}}">
                            </div>

                            <div class="parsley-input col-md-6" id="fnWrapper">
                                <label>Email: <span class="tx-danger">*</span></label>
                                <input class="form-control form-control-sm mg-b-20"
                                    data-parsley-class-handler="#lnWrapper" name="email" required="" type="email" value="{{$reservation->email}}">
                            </div>

                        </div>

                        <div class="row mg-b-20">
                            <div class="parsley-input col-md-6" id="fnWrapper">
                                <label>date : <span class="tx-danger">*</span></label>
                                <input class="form-control fc-datepicker" name="attendance_date"
                                type="text" value="{{$reservation->attendance_date}}" required>
                            </div>

                            <div class="parsley-input col-md-6" id="fnWrapper">
                                <label>time: <span class="tx-danger">*</span></label>
                                <input class="form-control form-control-sm mg-b-20"
                                    data-parsley-class-handler="#lnWrapper" name="attendance_time" required="" type="time" value="{{$reservation->attendance_time}}">


                                </div>

                        </div>

                        <div class="row mg-b-20">
                            <div class="parsley-input col-md-6" id="fnWrapper">
                                <label>table_number : <span class="tx-danger">*</span></label>
                                <input class="form-control form-control-sm mg-b-20"
                                    data-parsley-class-handler="#lnWrapper" name="table_number" required="" type="number"value="{{$reservation->table_number}}">
                            </div>

                            <div class="parsley-input col-md-6" id="fnWrapper">
                                <label>guests_number: <span class="tx-danger">*</span></label>
                                <input class="form-control form-control-sm mg-b-20"
                                    data-parsley-class-handler="#lnWrapper" name="guests_number" required="" type="number"value="{{$reservation->guests_number}}">
                            </div>

                        </div>

                    <div class="row mg-b-20">
                        <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0 mb-5" id="lnWrapper">
                            <label> status: <span class="tx-danger">*</span></label>

                            <select class="form-control  nice-select  custom-select"  data-parsley-class-handler="#lnWrapper"
                                name="status">

                                <option value="" class="disabled br-readonly">select status</option>

                                  <option value="pendding" @if($reservation->status=="pendding")
                                    selected="selected" @endif>pendding</option>

                                    <option value="confirmed" @if($reservation->status=="confirmed")
                                        selected="selected" @endif>confirmed</option>


                                        <option value="cancelled" @if($reservation->status=="cancelled")
                                            selected="selected" @endif>cancelled</option>

                                    </select>
                        </div>


                    </div>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button class="btn btn-main-primary pd-x-20 mb-4" type="submit">update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')


<!-- Internal Nice-select js-->
<script src="{{URL::asset('assets/plugins/jquery-nice-select/js/jquery.nice-select.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-nice-select/js/nice-select.js')}}"></script>

<!--Internal  Parsley.min js -->
<script src="{{URL::asset('assets/plugins/parsleyjs/parsley.min.js')}}"></script>
<!-- Internal Form-validation js -->
<script src="{{URL::asset('assets/js/form-validation.js')}}"></script>
@endsection
