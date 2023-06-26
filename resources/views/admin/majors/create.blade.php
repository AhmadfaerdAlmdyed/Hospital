@extends('admin.layouts')
@section('title','new Major ')
@section('content')
<div class="col-12">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Major Example</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('majors.store')}}"method="POST"
        enctype="multipart/form-data">
         @csrf
            @if ($errors->any())
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert"
                aria-hidden="true">×</button>
                <h5><i class="icon fas fa-ban"></i> Errors!</h5>
                @foreach ( $errors->all() as $error )
                <li>{{$error}}</li>
            @endforeach
          </div>
          @endif
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">name</label>
              <input type="text" name="name" class="form-control"
              id="exampleInputEmail1" placeholder="name"value="{{old('name')}}">
            </div>
            <div class="form-group">
                <label>Descrption</label>
                <textarea  name="descrption" class="form-control" rows="3"
                placeholder="Descrption"></textarea>
              </div>
              
            <div class="form-group">
              <label for="exampleInputFile"></label>
              <div class="input-group">
                <div class="custom-file">
                  <input name="cover"
                   type="file" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div  class="input-group-append">
                  <span class="input-group-text">Upload</span>
                </div>
              </div>

              <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox"
                  name="is_active" class="custom-control-input" id="customSwitch1" checked>
                  <label class="custom-control-label" for="customSwitch1">Active</label>
                </div>
              </div>
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

