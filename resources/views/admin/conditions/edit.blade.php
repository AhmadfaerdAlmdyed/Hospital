@extends('admin.layouts')
@section('title', 'edit conditions')
@section('content')
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit conditions</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('conditions.update',$conditions->id) }}" method="POST" enctype="multipart/form-data">
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
                        <label for="exampleInputEmail1">Enter title</label>
                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="name"
                            value="{{ $conditions->title }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Enter descrption</label>
                        <input type="text" name="descrption" class="form-control" id="exampleInputEmail1"
                            placeholder="email" value="{{$conditions->descrption }}">
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
