@extends('backend.layout.master')
@section('css')
@section('title')
Dinner Club
@stop

<!-- Internal Data table css -->

<link href="{{ URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
<link href="{{ URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css') }}" rel="stylesheet">
<!--Internal   Notify -->
<link href="{{ URL::asset('assets/plugins/notify/css/notifIt.css') }}" rel="stylesheet" />

@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">orders</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                order detail </span>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection

@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<!-- row opened -->
<div class="row row-sm">

    <div class="col-xl-12">
        <div class="card">
            <div class="card-header pb-0">
                <div class="col-sm-1 col-md-2">
                </div>
            </div>

            
            <table class="table table-hover" id="example1" data-page-length='10' style=" text-align: center;">
                @foreach ($Details as $orderDetail )

                <tr>
                    {{-- <td>{{ $orderDetail->id }}</td> --}}
                    {{-- <td>{{ $orderDetail->order_id }}</td> --}}
                    <td>{{ $orderDetail->status}}</td>
</tr>
<tr>
                    <td>{{ $orderDetail->order->user->email}}</td>

         @endforeach

            </table>
            <div class="card-body">
                <div class="table-responsive hoverable-table">
                    <table class="table table-hover" id="example1" data-page-length='50' style=" text-align: center;">
                        <thead>
                            <tr>
                                {{-- <th class="wd-10p border-bottom-0"> id</th> --}}
                                <th class="wd-10p border-bottom-0">  id</th>
                                <th class="wd-10p border-bottom-0">price</th>
                                <th class="wd-10p border-bottom-0">  count</th>
                                <th class="wd-15p border-bottom-0"> Total Price </th>
                                <th class="wd-15p border-bottom-0">  user</th>
                                <th class="wd-15p border-bottom-0">  total</th>
                                {{-- <th class="wd-20p border-bottom-0"> count</th>
                                <th class="wd-20p border-bottom-0"> Tatal</th> --}}


                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orderDetails as $orderDetail )

                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    {{-- <td>{{ $orderDetail->id }}</td> --}}
                                    {{-- <td>{{ $orderDetail->order_id }}</td> --}}
                                    {{-- <td>{{ $orderDetail->status}}</td> --}}

                                    <td>{{ $orderDetail->total_price}}</td>
                                    <td>{{ $orderDetail->count}}</td>
                                   <td>{{ $orderDetail->total_price* $orderDetail->count}}</td>

                                    <td>{{ $orderDetail->order->user->email}}</td>
                                    {{-- <td> --}}
                                        {{-- @foreach ($orderDetail->roles as $role) {
                                            echo $role->pivot->created_at;
                                        } --}}




                                        {{-- {{ $orderDetail->receipes->name }} --}}

                                    {{-- </td> --}}
                                    {{-- <td>{{ $orderDetail->count }}</td>
                                    <td>{{ $orderDetail->count*$orderDetail->price }}L.E</td> --}}


                                </tr>

                                @endforeach
<tr>
    <td>Total price</td>

    <td colspan="4"></td>

    <td><span>563</span></td>
</tr>
<tr>

</tr>
                        </tbody>
                    </table>
           
                </div>
               <hr class="mg-b-40">


                        <a class="btn btn-danger  float-left mt-3 mr-2"  href="{{route('Print_order',$orderDetail->order_id)}} id="print_Button" onclick="printDiv()"> <i
                                class="mdi mdi-printer ml-1"></i>Print</a>
                    </div>
            </div>
        </div>
    </div>
    <!--/div-->

</div>

</div>
<!-- /row -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')
<!-- Internal Data tables -->
<script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/jquery.dataTables.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js') }}"></script>
<!--Internal  Datatable js -->
<script src="{{ URL::asset('assets/js/table-data.js') }}"></script>
<!--Internal  Notify js -->
<script src="{{ URL::asset('assets/plugins/notify/js/notifIt.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/notify/js/notifit-custom.js') }}"></script>
<!-- Internal Modal js-->
<script src="{{ URL::asset('assets/js/modal.js') }}"></script>

@endsection
