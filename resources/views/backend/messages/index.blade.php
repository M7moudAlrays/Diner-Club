@extends('backend.layout.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">

        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">
<div class="row  ">
    <div class="col-12  card">
        @if (session('success'))
        <div class="Message alert-success">
            {{ session('success') }}
        </div>
    @endif

    </div>    </div>
            <div class="row">
                <div class="col-12">




                    <div class="card">
                        <div class="card-header">
                    <h3 class="card-title">All Messages</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                          <table class="table table-hover text-nowrap">
                            <thead>
                              <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($messages as $message)

                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        {{-- <td>{{ $message->name }}</td> --}}
                                        <td>{{ $message->name }}</td>
                                        <td>{{ $message->mail }}</td>

                                        <td>
                                            <a href="{{route('messages.show',$message->id) }}" class="btn btn-sm btn-primary">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <form action="{{ route('messages.destroy', $message->id) }}" class="d-inline" method="POST">
                                                @csrf
                                                @method("delete")
                                                     <button class="btn btn-sm text-light btn-danger"
                                                    ><i class="las la-trash"></i></button>

                                                 </form>

                                        </td>
                                    </tr>

                                @endforeach
                            </tbody>
                          </table>
                        </div>
                    </div>
                          <div class="d-flex my-3 justify-content-center">
                              {{-- {{ $messages->links() }} --}}
                          </div>

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
