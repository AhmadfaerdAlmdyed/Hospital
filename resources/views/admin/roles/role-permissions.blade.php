@extends('admin.layouts')
@section('title','Role Permissions')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title mt-2">Role Permissions Table</h3>
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
                            <th>Assigned</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($permissions as $permission)
                            <tr>
                                <td>{{ $permission->id }}</td>
                                <td>{{ $permission->name }}</td>
                                <td>{{ $permission->guard_name}}</td>
                                <td>
                                    <div class="form-check">
                                        <input onclick="assign('{{ $role->id }}','{{ $permission->id }}')"
                                         class="form-check-input"
                                          type="checkbox"
                                          id="permission_{{ $permission->id}}"
                                          @if($permission->assign) checked @endif
                                          >
                                        <label
                                        for="permission_{{ $permission->id}}"
                                         class="form-check-label">Assigned</label>
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

<script>
    function assign(roleId,permissionId){
        axios.post('admin/permissions/role',{
            role_Id:roleId,
            permission_Id:permissionId
        }).then(function(response){
            console.log(response.data);
            toastr.success(response.data.message)
        }).catch(function(error){
            toastr.error(error.response.data.message)
        })
        
    }
</script>