@extends('admin.layouts')
@section('title', 'admins')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title mt-2">admins Table</h3>
                <a href="{{ route('admins.create') }}"
                class="btn btn-success float-right">new admin</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">

                @if (session()->has('message'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-check"></i> Success</h5>
                        <h2>{{ session()->get('message') }}</h2>
                    </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Name</th>
                            <th>email</th>
                            <th>Create Date</th>
                            <th>Update Date</th>
                            <td>Actions</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $admins)
                            <tr>
                                <td>{{ $admins->id }}</td>
                                <td>{{ $admins->name }}</td>
                                <td>{{ $admins->email }}</td>
                                <td>{{ $admins->created_at }}</td>
                                <td>{{ $admins->updated_at }}</td>
                                <td>
                                    <div class="btn-group">
                                        <div class="btn-group">
                                            <a href="{{ route('admins.edit', $admins->id) }}" class="btn btn-info"><i
                                                    class="fas fa-edit"></i></a>
                                            <form action="{{ route('admins.destroy', $admins->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger"><i
                                                        class="fas fa-trash"></i></button>
                                            </form>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">»</a></li>

                </ul>
            </div>
        </div>
    </div>
@endsection
