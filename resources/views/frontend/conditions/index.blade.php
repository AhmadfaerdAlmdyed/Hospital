@extends('frontend.layouts')
@section('content')
<div class="row">
    <div class="col-lg-9">
        @foreach ($conditions as $condition )
        <ul>
           
        <h1>
            {{ $condition->title}}
        </h1>
         
           <li>
        <p>
            {{ $condition->descrption}}
        </p> 
         </li>
    </ul>  
        @endforeach
       
    </div>
</div>
@endsection