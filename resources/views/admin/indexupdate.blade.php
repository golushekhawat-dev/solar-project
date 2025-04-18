
@extends('admin.layouts.app')

@section('admin.content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Layouts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('indexcreate')}}">Home</a></li>
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
              <form method="POST" enctype="multipart/form-data" action="{{url('indexupdate')}}/{{$content->id}}">
                @csrf 
                <div class="row mb-3 p-3">
                  <label for="logo-image" class="col-sm-2 col-form-label">Logo-Image</label>
                  <div class="col-sm-8">
                    <input type="file" class="form-control p-3 bg-light" id="logoimage" name="logoimage" value="{{$content->logoimage}}">
                    <img width="70px" height="50px" class="mt-3" src="{{ asset('storage/'.$content->logoimage) }}" alt=""> 

                  </div> 
                </div> 
                @error('logoimage')
            {{$message}}
			<span class="alert-error"></span>
            @enderror

                <div class="row mb-3 p-3">
                  <label for="address" class="col-sm-2 col-form-label">Address</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control p-3 bg-light" id="address" name="address" value="{{$content->address}}">
                  </div>
                </div>  
                @error('Address')
            {{$message}}
			<span class="alert-error"></span>
            @enderror

            <div class="row mb-3 p-3">
                  <label for="email" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-8">
                    <input type="email" class="form-control p-3 bg-light" id="email" name="email" value="{{$content->email}}">
                  </div>
                </div>  
                @error('email')
            {{$message}}
			<span class="alert-error"></span>
            @enderror
            <div class="row mb-3 p-3">
                  <label for="mobilenumber" class="col-sm-2 col-form-label">Mobile-Number</label>
                  <div class="col-sm-8">
                    <input type="mobilenumber" class="form-control p-3 bg-light" id="mobilenumber" name="mobilenumber" value="{{$content->mobilenumber}}">
                  </div>
                </div>  
                @error('mobilenumber')
            {{$message}}
			<span class="alert-error"></span>
            @enderror

            <div class="row mb-3 p-3">
                  <label for="gstnumber" class="col-sm-2 col-form-label">Gst-Number</label>
                  <div class="col-sm-8">
                    <input type="gstnumber" class="form-control p-3 bg-light" id="gstnumber" name="gstnumber" value="{{$content->gstnumber}}">
                     
                     
                  </div>
                </div> 
                @error('gstnumber')
            {{$message}}
			<span class="alert-error"></span>
            @enderror
          
               
            <select name="status"> 
   @if($content->status == 1)
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