
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
          <h5 class="card-title text-center">Insert Form</h5>

          <!-- Horizontal Form -->
          
          <form method="POST" enctype="multipart/form-data" action="{{url('indexs')}}">
            @csrf
            <div class="row mb-3 p-3">
              <label for="logoimage" class="col-sm-2 col-form-label">Logo-Image</label>
              <div class="col-sm-8">
                <input type="file" class="form-control p-3 bg-light" id="logoimage" name="logoimage">
              </div>
            </div>  
              
            <div class="row mb-3 p-3">
              <label for="address" class="col-sm-2 col-form-label">Address</label>
              <div class="col-sm-8">
                <input type="text" class="form-control p-3 bg-light" id="address" name="address">
              </div>
            </div>  
            <div class="row mb-3 p-3">
                <label for="email" class="col-sm-2 col-form-label">email</label>
                <div class="col-sm-8">
                  <input type="email" class="form-control p-3 bg-light" id="email" name="email">
                </div>
              </div>
              <div class="row mb-3 p-3">
                <label for="mobilenumber" class="col-sm-2 col-form-label">Mobile-Number</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control p-3 bg-light" id="emamobilenumberil" name="mobilenumber">
                </div>
              </div>
           
        <div class="row mb-3 p-3">
              <label for="gstnumber" class="col-sm-2 col-form-label">Gst-Number</label>
              <div class="col-sm-8">
                <input type="text" class="form-control p-3 bg-light" id="gstnumber" name="gstnumber">
              </div>
            </div>
           
           
             
            
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