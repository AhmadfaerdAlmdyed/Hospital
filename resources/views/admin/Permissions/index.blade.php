@extends('admin.layouts')
@section('title', 'permissions')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title mt-2">permissions Table</h3>
                <a href="{{ route('permissions.create') }}"
                class="btn btn-success float-right">new role</a>
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
                            <th>GuardName</th>
                            <th>Create Date</th>
                            <th>Update Date</th>
                            <td>Actions</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($permission as $permissions)
                            <tr>
                                <td>{{ $permissions->id }}</td>
                                <td>{{ $permissions->name }}</td>
                                <td>{{ $permissions->guard_name }}</td>
                                <td>{{ $permissions->created_at }}</td>
                                <td>{{ $permissions->updated_at }}</td>
                                 <td>
                                    <div class="btn-group">
                                        <div class="btn-group">
                                            <a href="{{ route('permissions.edit', $permissions->id) }}" class="btn btn-info"><i
                                                    class="fas fa-edit"></i></a>
                                            <form action="{{ route('permissions.destroy', $permissions->id) }}" method="POST">
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
