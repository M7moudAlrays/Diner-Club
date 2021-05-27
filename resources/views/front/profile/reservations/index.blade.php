@extends('backend.layout.master2')
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
            <h4 class="content-title mb-0 my-auto">Reservations</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                Reservations List</span>
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
                        <a class="btn btn-primary btn" href="{{ route('reservations.create') }}"> New</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive hoverable-table">
                    <table class="table table-hover" id="example1" data-page-length='50' style=" text-align: center;">
                        <thead>
                            <tr>
                                <th class="wd-10p border-bottom-0">#</th>
                                <th class="wd-15p border-bottom-0">reservation name</th>
                                <th class="wd-20p border-bottom-0"> date</th>
                                <th class="wd-20p border-bottom-0"> time</th>
                                <th class="wd-15p border-bottom-0"> table_number</th>
                                <th class="wd-15p border-bottom-0"> status</th>
                                <th class="wd-15p border-bottom-0"> status</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php  $i=0 ?>
                            @foreach ($reservations as $reservation)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $reservation->name }}</td>
                                    <td>{{ $reservation->attendance_date }}</td>
                                    <td>{{ $reservation->attendance_time }}</td>
                                    <td>{{ $reservation->table_number}}</td>
                                    <td>

                                          @if($reservation->status=="pendding")
                                          <button class="btn btn-sm text-light btn-warning">
                                            {{ $reservation->status }}
                                          </button>
                                          @elseif($reservation->status=="cancelled")
                                          <button class="btn btn-sm text-light btn-danger">
                                            {{ $reservation->status }}
                                          </button>
                                           @else
                                            <button class="btn btn-sm text-light btn-success">
                                           {{ $reservation->status }}
                                            </button>


                                            @endif
                                            </td>

                                    </td>
                                    <td>
                                     
                                        <form action="{{ route('reservations.destroy', $reservation->id) }}" class="d-inline" method="POST">
                                            @csrf
                                            @method("delete")
                                                 <button class="btn btn-sm text-light btn-danger"
                                                ><i class="las la-trash"></i></button>

                                             </form>
                                             <a>
    
                                            </a>
                                        </td>


                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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
