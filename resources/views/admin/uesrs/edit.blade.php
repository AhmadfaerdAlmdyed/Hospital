@extends('admin.layouts')
@section('title', 'edit user')
@section('content')
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit user</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('uesrs.update',$user->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                 @method('PUT')
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
                    <div class="form-group">
                        <label for="exampleInputEmail1">Enter name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="name"
                            value="{{ $user->name }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Enter email</label>
                        <input type="text" name="email" class="form-control" id="exampleInputEmail1"
                            placeholder="email" value="{{$user->email }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Enter phone</label>
                        <input type="text" name="phone" class="form-control" id="exampleInputPassword1"
                            placeholder="phone" value="{{ $user->phone }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Upload image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="cover" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="form-group">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" name="is_active" class="custom-control-input" id="customSwitch1" checked>
                            <label class="custom-control-label" for="customSwitch1">Activate</label>
                        </div>
                    </div> --}}
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

{{--     tokenSeparators: [',', '  '], --}}
