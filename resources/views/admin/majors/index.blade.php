@extends('admin.layouts')
@section('title','Major')
@section('content')
<div class="col-md-12">
   <div class="card">
    <div class="card-header">
      <h3 class="card-title mt-2">Major Table</h3>
      <a href="{{route('majors.create')}}"
      class="btn btn-success float-right">new Major</a>
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
            <th>descrption</th>
            <th>Active</th>
            <th >cover</th>
            <th >Create Data</th>
            <th >Update Data</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $majors )
          <tr>
            <td>{{$majors ->id}}</td>
            <td>{{$majors ->name}}</td>
            <td>{{$majors ->descrption}}</td>
            <th>
                <span class="brdge{{$majors->is_active ? 'bg-success' : 'bg-danger'}}">
                {{$majors->active_status}}
                </span>
            </th>
            <td><img style="width: 60px ;height:60px ;"
              src="{{Storage::url('majors/'.$majors->cover)}}"></td>
            <td>{{$majors->created_at}}</td>
            <td>{{$majors->updated_at}}</td>

        <td>
            <div class="btn-group">
            <a href="{{route('majors.edit',$majors->id)}}" class="btn btn-info">
                <i class="fas fa-edit"></i>
            </a>
                    <form action="{{route('majors.destroy',$majors->id)}}" method="POST">
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

