@extends('admin.layouts')
@section('title','new Hosptals ')
@section('content')
<div class="col-12">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Quick Example</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('hosptials.store')}}"method="POST"
        enctype="multipart/form-data">
         @csrf
           @if($errors->any())
             <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert"
                aria-hidden="true">×</button>
                <h5><i class="icon fas fa-ban"></i> Errors!</h5>
                @foreach ( $errors->all() as $error )
                <li>{{$error}}</li>
                @endforeach
             </div>
           @endif
            {{--Majors--}}
          <div class="form-group" data-select2-id="28">
            <label>Select Majors</label>
            <select class="select2 select2-hidden-accessible"
              multiple="" data-placeholder="Select a State" style="width: 100%;
              margin-left: 2px ;"
             data-select2-id="6" tabindex="-1" 
             aria-hidden="true" name="majors[]">
             @foreach ($majors as $major)
             <option value="{{$major->id}}">{{$major->name}}</option>
             @endforeach
            </select>
          </div>
            {{--name--}}
            <div class="card-body">
              <div class="form-group">
              <label for="exampleInputEmail1">name</label>
              <input type="text" name="name" class="form-control"
              id="exampleInputEmail1" placeholder="name"value="{{old('name')}}">
            </div>
            {{--location--}}
            <div class="form-group">
              <label for="exampleInputPassword1">location</label>
              <input type="text" name="location" class="form-control"
              id="exampleInputPassword1" placeholder="location"
              value="{{old('location')}}">
            </div>
             {{--Descrption--}}
            <div class="form-group">
                <label>Descrption</label>
                <textarea  name="info" class="form-control" rows="3"
                 placeholder="Descrption"></textarea>
              </div>
              {{--file--}}
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
            </div>
          {{--Active--}}
            <div class="form-group">
                <div class="custom-control custom-switch">
                  <input type="checkbox"
                  name="is_active" class="custom-control-input" id="customSwitch1" checked>
                  <label class="custom-control-label" for="customSwitch1">Active</label>
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


@section('script')
<script>
     $(function(){
        $('.select2').select2({
            majors :true,
            tokenSepators: [',','  '],
            theme: 'bootstrap4'
    })
    })
</script>
@endsection
@endsection
