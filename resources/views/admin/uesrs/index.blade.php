@extends('admin.layouts')
@section('title','uesr')
@section('content')
<div class="col-md-12">
   <div class="card">
    <div class="card-header">
      <h3 class="card-title mt-2">uesr Table</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body"> 
        @if (session()->has('massage'))
         <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i> Scsses</h5>
            <h2>{{ session()->get('massage')}}</h2>
         </div>
        @endif
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">id</th>
            <th>name</th>
            <th>email</th>
            <th>phone</th>
            <th >cover</th>
            <th >Create Data</th>
            <th >Update Data</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $uesrs )
          <tr>
            <td>{{$uesrs ->id}}</td>
            <td>{{$uesrs ->name}}</td>
            <td>{{$uesrs ->email}}</td>
            <td>{{$uesrs ->phone}}</td> 
            <td><img style="width: 60px ;height:60px ;"
              src="{{Storage::url('users/'.$uesrs->cover)}}"></td>
            <td>{{$uesrs->created_at}}</td>
            <td>{{$uesrs->updated_at}}</td>

          <td>
            <div class="btn-group">
            <a href="{{route('uesrs.edit',$uesrs->id)}}" class="btn btn-info">
                <i class="fas fa-edit"></i>
            </a>
                    <form action="{{route('uesrs.destroy',$uesrs->id)}}" method="POST">
                         @csrf @method('delete')
                    <button type="submit" class="btn btn-danger">
                        <i class="fas fa-trash"></i>
                    </button>
                   </form>
            </div>
            </td>
            @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
      <ul class="pagination pagination-sm m-0 float-right">
        <li class="page-item"><a class="page-link" href="#">«</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">»</a></li>
      </ul>
    </div>
  </div>
</div>
@endsection

