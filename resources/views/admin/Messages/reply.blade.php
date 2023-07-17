@extends('admin.layouts')
@section('title', 'reply messages')
@section('content')
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">reply messages</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('messages.update',$messages->id) }}" method="POST" enctype="multipart/form-data">
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
                        <label>? {{ $messages->messages }}</label>
                    </div>
                    <div class="form-group">
                        <label>reply messages</label>
                        <textarea class="form-control" name="reply" rows="3" placeholder="Enter your descrption">
                        </textarea>
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

