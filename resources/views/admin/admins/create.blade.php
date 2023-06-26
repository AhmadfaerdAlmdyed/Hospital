@extends('admin.layouts')
@section('title', 'new admin')
@section('content')
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Create Admin</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('admins.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <h5><i class="icon fas fa-ban"></i> Errors!</h5>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif
                      <div class="form-group" data-select2-id="34">
                        <label>select Role</label>
                        <select class="form-control select2 select2-danger select2-hidden-accessible"
                            data-dropdown-css-class="select2-info" style="width: 100%;" data-select2-id="11" tabindex="-1"
                            aria-hidden="true" name="role_id">
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Enter name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="name"
                            value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Enter Email</label>
                        <input type="text" name="email" class="form-control" id="exampleInputPassword1"
                            placeholder="email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Enter Password</label>
                        <input type="password" class="form-control" id="password" placeholder="أدخل كلمة المرور"
                            name="password">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(function() {
            // $('.select2').select2()
            $('.select2').select2({
                majors: true,
                theme: 'bootstrap4'
            })
        })
    </script>
@endsection
{{--     tokenSeparators: [',', '  '], --}}
