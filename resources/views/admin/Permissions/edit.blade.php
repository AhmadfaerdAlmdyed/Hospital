@extends('admin.layouts')
@section('title', 'edit permission')
@section('content')
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit permission</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('permissions.update',$permission->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
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
                        <label>select Gurds</label>
                        <select class="form-control select2 select2-danger select2-hidden-accessible"
                        data-dropdown-css-class="select2-info" style="width: 100%;" data-select2-id="11" tabindex="-1"
                        aria-hidden="true" name="guard_name">
                        <option value="admin">Admin</option>
                        <option value="web">Web</option>
                    </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Enter name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="name"
                            value="{{$permission->name}}">
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
