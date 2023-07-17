@extends('admin.layouts')
@section('title','new sections ')
@section('content')
<div class="col-12">
    <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Quick Example</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('sections.store')}}"method="POST"
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
            <label>Select blog</label>
            <select class="select2 select2-hidden-accessible"
              multiple="" data-placeholder="Select a State" style="width: 100%;
              margin-left: 2px ;"
             data-select2-id="6" tabindex="-1" 
             aria-hidden="true" name="blog">
             @foreach ($blogs as $blog)
             <option value="{{$blog->id}}">{{$blog->id}}-{{$blog->title}}</option>
             @endforeach
            </select>
          </div>
          
            <div class="card-body">
              <div class="form-group">
              <label for="exampleInputEmail1">title</label>
              <input type="text" name="title" class="form-control"
              id="exampleInputEmail1" placeholder="title"value="{{old('title')}}">
            </div>
            {{--Descrption--}}
            <div class="form-group">
              <label for="exampleInputPassword1">descrption</label>
              <input type="text" name="descrption" class="form-control"
              id="exampleInputPassword1" placeholder="descrption"
              value="{{old('descrption')}}">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">points</label>
              <input type="text" name="points" class="form-control"
              id="exampleInputPassword1" placeholder="points"
              value="{{old('points')}}">
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
