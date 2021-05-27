@extends('backend.layout.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h5 class="m-0 text-dark">Message Deails</h5>
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
                                    <td>{{ $message->name }}</td>
                                </tr>

                                <tr>
                                    <th>Email</th>
                                    <td>{{ $message->user->email }}</td>
                                </tr>


                                <tr>
                                    <th>message </th>
                                    <td>{{ $message->message  }}</td>
                                </tr>

                            </tbody>
                          </table>


                        </div>
                        <!-- /.card-body -->
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Send response</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">


                            <form method="POST" action="{{route('contactResponse',$message->id) }}">
                                @csrf

                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" class="form-control" name="title">
                                    </div>

                                    <div class="form-group">
                                        <label>Body</label>
                                        <textarea class="form-control" rows="5" name="body"></textarea>
                                    </div>

                                  <div>
                                      <button type="submit" class="btn btn-success">Submit</button>
                                      <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
                                  </div>
                                </div>
                            </form>


                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
