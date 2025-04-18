
@extends('admin.layouts.app')

@section('admin.content')


<main id="main" class="main">

<div class="pagetitle">
  <h1>Form Layouts</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('projectcreate')}}">Home</a></li>
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
          
          <form method="POST" enctype="multipart/form-data" action="{{url('careers')}}">
            @csrf
            <div class="row mb-3 p-3">
              <label for="banner_img" class="col-sm-2 col-form-label">Banner_Image</label>
              <div class="col-sm-8">
                <input type="file" class="form-control p-3 bg-light" id="banner_img" name="banner_img">
              </div>
            </div>
            <div class="row mb-3 p-3">
                <label for="banner_text" class="col-sm-2 col-form-label">Banner_text</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control p-3 bg-light" id="banner_text" name="banner_text">
                </div>
              </div>  
              <div class="row mb-3 p-3">
                <label for="slug" class="col-sm-2 col-form-label">slug</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control p-3 bg-light" id="slug" name="slug">
                </div>
              </div>  
            
               
            <div class="row mb-3 p-3">
              <label for="information" class="col-sm-2 col-form-label">Content</label>
              <div class="col-sm-8">
                <textarea type="text" name="content" id="summernote" class="form-control  pt-15" cols="30" rows="5" ></textarea>
              </div>
            </div> 
           
          
              <div class="row mb-3 p-3">
                <label for="text" class="col-sm-2 col-form-label">Text</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control p-3 bg-light" id="text" name="text">
                </div>
              </div>  
              <div class="row mb-3 p-3">
                <label for="long_text" class="col-sm-2 col-form-label">long_text</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control p-3 bg-light" id="long_text" name="long_text">
                </div>
              </div>  
              <div class="row mb-3 p-3">
                <label for="main_img" class="col-sm-2 col-form-label">Main_img</label>
                <div class="col-sm-8">
                  <input type="file" class="form-control p-3 bg-light" id="main_img" name="main_img">
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

</main>
<!-- End #main -->
@endsection