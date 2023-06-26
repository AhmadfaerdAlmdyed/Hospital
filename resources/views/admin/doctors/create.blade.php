@extends('admin.layouts')
@section('title','new doctor ')
@section('content')
<div class="col-12">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">new doctor</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('doctors.store')}}"method="POST"
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
               {{-- hospital --}}
               <div class="card-body">
                <div class="form-group" data-select2-id="34">
                  <label>select hospital</label>
                  <select class="form-control select2 select2-danger
                  select2-hidden-accessible"
                  data-dropdown-css-class="select2-info"
                  style="width: 100%;"  data-select2-id="11"
                   tabindex="-1" aria-hidden="true"
                   name="hospital_id">
                     @foreach ($hospitals as $hospital)
                     <option
                      value="{{$hospital->id}}">{{$hospital->name}}
                    </option>
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
            {{--email--}}
            <div class="card-body">
              <div class="form-group">
              <label for="exampleInputEmail1">email</label>
              <input type="text" name="email" class="form-control"
              id="exampleInputEmail1" placeholder="email"value="{{old('email')}}">
             </div>
             {{--phone--}}
             <div class="form-group">
              <label for="exampleInputPassword1">phone</label>
              <input type="text" name="phone" class="form-control"
              id="exampleInputPassword1" placeholder="phone"
              value="{{old('phone')}}">
             </div>

             <div class="form-group">
                <label>Descrption</label>
                <textarea  name="descrption" class="form-control"
                 rows="3" placeholder="Descrption"></textarea>
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
