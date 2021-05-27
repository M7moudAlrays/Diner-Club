@extends('backend.layout.master')
@section('css')

@section('title')
Dinner Club
@stop
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Orders</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                      Print order</span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row row-sm">
        <div class="col-md-12 col-xl-12">
            <div class=" main-content-body-invoice" id="print">
                <div class="card card-invoice">
                    <div class="card-body">
                        <div class="invoice-header">
                         
                        </div><!-- invoice-header -->
                        <div class="row mg-t-20 ">
                            <div class="col-md-4  offset-3 ">
                                {{-- <label class="tx-gray-600  bg-danger float-left"><h6>Billed To</h6></label> --}}
                                <br>
                                <div class="billed-to ">
                                                                    <p class="invoice-info-row"><span> </span>

                                        Tel No:{{$about->address}} <br>
                                                                        <p class="invoice-info-row"><span> </span>

                                        Email: {{$about->email}}</p>
                                                                        <p class="invoice-info-row"><span> </span>
                                        
                                        Address: {{$user->email}}</p>
                               
                                </div>
                            </div>
                            <div class="col-md-5  ">
                                <span > Bill Info</span>
                                <p class="invoice-info-row"><span> </span>
                                <span>{{ $order->order_number }}</span></p>

                                <p class="invoice-info-row"><span> {{ $order->order_time }}</span>
                                <span>sdsd</span></p>

                                <p class="invoice-info-row"><span>Date </span>
                               
                            </div>
                        </div>
                        <div class="table-responsive mg-t-40">
                            <table class="table table-invoice border text-md-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th class="wd-20p">#</th>
                                        <th class="wd-20p">receipe</th>
                                        <th class="tx-center"> Price</th>
                                        <th class="tx-right">Count </th>
                                        <th class="tx-right">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- <tr>
                                        <td>1</td>
                                        <td class="tx-12">{{ $order->product }}</td>
                                        <td class="tx-center">{{ number_format($orderDetails->total_price, 2) }}</td>
                                        <td class="tx-right">{{ number_format($orderDetails->total_price, 2) }}</td>
                                        @php
                                        // $total = $invoices->Amount_collection + $invoices->Amount_Commission ;
                                        @endphp
                                        <td class="tx-right">
                                            {{ number_format($orderDetails->total_price, 2) }}
                                        </td>
                                    </tr> --}}
                            @foreach ($orderDetails as $orderDetail )

                                <tr>
                                    {{-- <td>{{ ++$i }}</td> --}}
                                    <td>{{ $orderDetail->id }}</td>
                                    {{-- <td>{{ $orderDetail->order_id }}</td> --}}
                                    <td>{{ $orderDetail->receipe_name}}</td>
                                    <td>{{ $orderDetail->price }}</td>
                                    <td>{{ $orderDetail->count}}</td>
                                    <td>{{ $orderDetail->count* $orderDetail->price}}</td>

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
                                   </tbody>
                            </table>
                             <div class="table-responsive mg-t-40">
                            <table class="table table-invoice border text-md-nowrap mb-0">
                                <thead>
                            <tr class="">
                                    {{-- <tr>
                                        <td class="tx-right" colspan="2"> Disaccount Percentage </td>
                                        <td class="tx-right" colspan="2"> Disaccount Percentage </td>
                                    </tr>
                                    <tr>
                                        <td class="tx-right"> Price After DisAccount</td>
                                        <td class="tx-right"> Price After DisAccount</td> --}}
                                        {{-- <td class="tx-right" colspan="2"> {{ number_format($order->price, 2) }}</td> --}}
                               <div class="col-md  w-50 ">
                                <p class="invoice-info-row"><span>Total Price </span>
                                    <span>{{ $order->order_number }}1333LG</span></p>
                                <p class="invoice-info-row"><span>Price After Dissacount </span>
                                    <span>343434433</span></p>
                               </tr>
                            </div>
                                    {{-- </tr> --}}
                                    {{-- <tr>
                                        <td class="tx-right tx-uppercase tx-bold tx-inverse"> Total  </td>
                                        <td class="tx-right" colspan="2">
                                            <h4 class="tx-primary tx-bold">{{ number_format($order->Total, 2) }}</h4>
                                        </td>
                                    </tr> --}}
                                </tbody>
                            </table>
                        </div>
                        <hr class="mg-b-40">



                        <button class="btn btn-danger  float-left mt-3 mr-2" id="print_Button" onclick="printDiv()"> <i
                                class="mdi mdi-printer ml-1"></i>Print</button>
                    </div>
                </div>
            </div>
        </div><!-- COL-END -->
    </div>
    <!-- row closed -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
    <!--Internal  Chart.bundle js -->
    <script src="{{ URL::asset('assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>


    <script type="text/javascript">
        function printDiv() {
            var printContents = document.getElementById('print').innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
            location.reload();
        }
    </script>

@endsection