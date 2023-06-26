@extends('admin.layouts')
@section('title', 'edit doctor')
@section('content')
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit doctor</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('doctors.update',$doctor->id) }}" method="POST" enctype="multipart/form-data">
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
                    <div class="form-group" data-select2-id="34">
                        <label>select hospital</label>
                        <select class="form-control select2 select2-danger select2-hidden-accessible"
                            data-dropdown-css-class="select2-info" style="width: 100%;" data-select2-id="11" tabindex="-1"
                            aria-hidden="true" name="hospital_id">
                            @foreach ($hospitals as $hospital)
                                <option @if ($doctor->hospital_id == $hospital->id)
                                    selected
                                @endif
                                value="{{ $hospital->id }}">{{ $hospital->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Enter name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="name"
                            value="{{ $doctor->name }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Enter email</label>
                        <input type="text" name="email" class="form-control" id="exampleInputEmail1"
                            placeholder="email" value="{{$doctor->email }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Enter phone</label>
                        <input type="number" name="phone" class="form-control" id="exampleInputPassword1"
                            placeholder="phone" value="{{ $doctor->phone }}">
                    </div>
                    <div class="form-group">
                        <label>Descrption</label>
                        <textarea class="form-control" name="descrption" rows="3" placeholder="Enter your descrption">
                            {{ $doctor->descrption}}
                        </textarea>
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
@section('script')
    <script>
        $(function() {
            // $('.select2').select2()
            $('.select2').select2({
                theme: 'bootstrap4'
            })
        })
    </script>
@endsection
{{--     tokenSeparators: [',', '  '], --}}
