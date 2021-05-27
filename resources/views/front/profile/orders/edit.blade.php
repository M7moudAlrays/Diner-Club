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
            <h4 class="content-title mb-0 my-auto">Categories</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                New Category</span>
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
                        <a class="btn btn-primary btn-sm" href="{{ route('receipes.index') }}">back</a>
                    </div>
                </div><br>
                <form class="parsley-style-1" id="selectForm2" autocomplete="off" name="selectForm2"
                    action="{{route('receipes.update',$receipe->id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    @method("PUT")
                    <div class="">

                        <div class="row mg-b-20">
                            <div class="parsley-input col-md-6" id="fnWrapper">
                                <label>Name : <span class="tx-danger">*</span></label>
                                <input class="form-control form-control-sm mg-b-20"
                                    data-parsley-class-handler="#lnWrapper" name="name" required="" type="text" value="{{$reciepe->name}}">
                            </div>



                            <div class="parsley-input col-md-6" id="fnWrapper">
                                <label>ingrediens : <span class="tx-danger">*</span></label>
                                <textarea class="form-control form-control-sm mg-b-20"
                                    data-parsley-class-handler="#lnWrapper" name="ingrediens" required="" type="text" >value="{{$receipe->ingrediens}}"</textarea>
                            </div>
                        </div>


                    <div class="row mg-b-20">
                        <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                            <label> description: <span class="tx-danger">*</span></label>
                            <textarea class="form-control" data-parsley-class-handler="#lnWrapper"
                                name="description" >
                              {{$reciepe->description}}
                            </textarea>
                        </div>



                        <div class="parsley-input col-md-6" id="fnWrapper">
                            <label>image : <span class="tx-danger">*</span></label>
                            <input class="form-control "
                                data-parsley-class-handler="#lnWrapper" name="image" type="file">
                        </div>

                    </div>
                    <div class="row mg-b-20">
                        <div class="parsley-input col-md-6 mg-t-20 mg-md-t-0" id="lnWrapper">
                            <label> category: <span class="tx-danger">*</span></label>
                            <select class="form-control form-control-sm mg-b-20" data-parsley-class-handler="#lnWrapper"
                                name="category_id"  >
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>

                                @endforeach
                            </select>
                        </div>


                    </div>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button class="btn btn-main-primary pd-x-20" type="submit">confirm</button>
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
