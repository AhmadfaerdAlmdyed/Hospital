@extends('admin.layouts')
@section('title','new conditions ')
@section('content')
<div class="col-12">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">new conditions</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('conditions.store')}}"method="POST"
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
              <label for="exampleInputEmail1">title</label>
              <input type="text" name="title" class="form-control"
              id="exampleInputEmail1" placeholder="name"value="{{old('title')}}">
            </div>
             <div class="form-group">
                <label>Descrption</label>
                <textarea  name="descrption" class="form-control"
                 rows="3" placeholder="Descrption"></textarea>
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
