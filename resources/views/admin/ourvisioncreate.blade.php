
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
          <h5 class="card-title text-center">Insert Form</h5>

          <!-- Horizontal Form -->
          
          <form method="POST" enctype="multipart/form-data" action="{{url('ourvisions')}}">
            @csrf
           
            <div class="row mb-3 p-3">
              <label for="content" class="col-sm-2 col-form-label">Content :-</label>
              <div class="col-sm-8">
                <textarea type="text" name="content" id="summernote" class="form-control  pt-15" cols="30" rows="5" ></textarea>
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