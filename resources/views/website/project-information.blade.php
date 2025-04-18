@extends('website.layouts.app')

@section('website.content')

{{-- information  --}}
 
<div class="container"> 
    <div class="row">   
        <div class="col-lg-12 text-secondary"> 
            <p>{!!($data->content)!!}</p>  
        </div>
      
   
    </div>
  
</div>

{{-- information  --}}

@endsection