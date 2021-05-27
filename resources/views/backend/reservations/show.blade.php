@extends('backend.layout.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row m-2 mt-5">
            <div class="col-sm-6">
            <h5 class="m-0 text-dark">Reservation Details</h5>
            </div><!-- /.col -->

        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    {{-- @include('admin.inc.messages') --}}

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Show</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                          <table class="table table-hover text-nowrap">

                            <tbody>

                                <tr>
                                    <th>Name</th>
                                    <td>{{ $reservation->name }}</td>
                                </tr>

                                <tr>
                                    <th>Email</th>
                                    <td>{{ $reservation->email }}</td>
                                </tr>
                                <tr>
                                    <th>attendance date</th>
                                    <td>{{ $reservation->attendance_date }}</td>
                                </tr>

                                <tr>
                                    <th>attendance time</th>
                                    <td>{{ $reservation->attendance_time }}</td>
                                </tr>

                                <tr>
                                    <th>table number</th>
                                    <td>{{ $reservation->table_number }}</td>
                                </tr> <tr>
                                    <th>guests_number</th>
                                    <td>{{ $reservation->guests_number }}</td>
                                </tr> <tr>
                                    <th>status</th>
                                    <td>{{ $reservation->status }}</td>
                                </tr>

                            </tbody>
                          </table>


                        </div>
                        <!-- /.card-body -->
                    </div>

            
                </div>
            </div>
        <!-- /.row -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
