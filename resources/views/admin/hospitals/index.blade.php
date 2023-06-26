@extends('admin.layouts')
@section('title','Hospital')
@section('content')
<div class="col-md-12">
   <div class="card">
    <div class="card-header">
      <h3 class="card-title mt-2">Hospital Table</h3>
      <a href="{{route('hosptials.create')}}" class="btn btn-success float-right">new Hospital</a>
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
            <th>location</th>
            <th>info</th>
            <th >cover</th>
            <th >Active</th>
            <th >Create Data</th>
            <th >Update Data</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $hospitls )
          <tr>
            <td>{{$hospitls->id}}</td>
            <td>{{$hospitls->name}}</td>
            <td>{{$hospitls->location}}</td>
            <td>{{$hospitls->info}}</td>
            <td><img style="width: 60px ;height:60px ;"
              src="{{Storage::url('hospitals/'.$hospitls->cover )}}"></td>
              {{--is_active الي استعملتها في لمودل في عرض getActiveStatusAttribute  استخدمت دالة  --}}
            <td> <span class="bridge{{$hospitls->is_active ?'bg-success':'bg-danger'}}">
                {{$hospitls->active_status}}</span></td>
            <td>{{$hospitls->created_at}}</td>
            <td>{{$hospitls->updated_at}}</td>

        <td>
            <div class="btn-group">
            <a href="{{route('hosptials.edit',$hospitls->id )}}" class="btn btn-info">
                <i class="fas fa-edit"></i>
            </a>

            <a href="{{route('hosptials.show',$hospitls->id )}}"
                class="btn btn-warning ">
                <i class="fab fa-elementor"></i>
            </a>

                    <form action="{{route('hosptials.destroy',$hospitls->id)}}"
                       method="POST"> @csrf @method('delete')
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

