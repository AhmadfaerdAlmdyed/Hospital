@extends('admin.layouts')
@section('title', 'roles')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title mt-2">roles Table</h3>
                <a href="{{ route('roles.create') }}"
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
                            <th>RolePermissions</th>
                            <th>Create Date</th>
                            <th>Update Date</th>
                            <td>Actions</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($role as $roles)
                            <tr>
                                <td>{{ $roles->id }}</td>
                                <td>{{ $roles->name }}</td>
                                <td>{{ $roles->guard_name }}</td>
                                <td> <a herf="{{route('role.show',$roles->id)}}"
                                    class="btn btn-block btn-secondary btn-sm">
                                    Permissions({{ count($roles->permissions)}})</a></td> 
                                <td>{{ $roles->created_at }}</td>
                                <td>{{ $roles->updated_at }}</td>
                                < <td>
                                    <div class="btn-group">
                                        <div class="btn-group">
                                            <a href="{{ route('roles.edit', $roles->id) }}" class="btn btn-info"><i
                                                    class="fas fa-edit"></i></a>
                                            <form action="{{ route('roles.destroy', $roles->id) }}" method="POST">
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
