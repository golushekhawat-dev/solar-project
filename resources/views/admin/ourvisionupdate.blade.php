
@extends('admin.layouts.app')

@section('admin.content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Layouts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('ourvisioncreate')}}">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Layouts</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row d-flec justify-content-center">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title text-center">Update Form</h5> 
              <!-- Horizontal Form -->
              <div style="color:red;">
              @if(session()->has('alert-success')){{session()->get('alert-success')}}
		@endif 
    </div>
              <form method="POST" enctype="multipart/form-data" action="{{url('ourvisionupdate')}}/{{$data->id}}">
                @csrf  
                <div class="row mb-3 p-3"> 
                  <div class="col-sm-12">
                    <textarea name="content" class="form-control  pt-15" id="summernote" cols="30" rows="5" >{{$data->content}}</textarea>

                  </div>
                </div>  
                @error('content')
            {{$message}}
			<span class="alert-error"></span>
            @enderror 

            
       
            <select name="status"> 
   @if($data->status == 1)
       <option value="1">Active</option>
       <option value="0">unactive</option>
   @else
       <option value="0">unactive</option>
       <option value="1">Active</option>
   @endif


</select>
                <div class="text-center mt-3">
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                
                </div>
              </form><!-- End Horizontal Form -->

            </div>
          </div>  
        </div> 
      </div>
    </section>

  </main><!-- End #main -->

  @endsection