
@extends('admin.layouts.app')

@section('admin.content')


<main id="main" class="main">

<div class="pagetitle">
  <h1>Form Layouts</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('bannercreate')}}">Home</a></li>
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
          
          <form method="POST" enctype="multipart/form-data" action="{{url('banners')}}">
            @csrf
            <div class="row mb-3 p-3">
              <label for="route_name" class="col-sm-2 col-form-label">Route_Name</label>
              <div class="col-sm-8">
                <input type="text" class="form-control p-3 bg-light" id="route_name" name="route_name">
              </div>
            </div>
            <div class="row mb-3 p-3">
                <label for="desktop_image" class="col-sm-2 col-form-label">desktop_image</label>
                <div class="col-sm-8">
                  <input type="file" class="form-control p-3 bg-light" id="desktop_image" name="desktop_image">
                </div>
              </div> 
              <div class="row mb-3 p-3">
                <label for="mobile_image" class="col-sm-2 col-form-label">mobile_image</label>
                <div class="col-sm-8">
                  <input type="file" class="form-control p-3 bg-light" id="mobile_image" name="mobile_image">
                </div>
              </div>  
              <div class="row mb-3 p-3">
                <label class="col-sm-2 col-form-label">Show Overlay Text</label>
                <div class="col-sm-8 d-flex align-items-center">
                    <div class="form-check me-4">
                        <input class="form-check-input" type="radio" name="is_overlay_text" id="overlay_yes" value="1"
                            {{ old('is_overlay_text') == '1' ? 'checked' : '' }}>
                        <label class="form-check-label" for="overlay_yes">
                            Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_overlay_text" id="overlay_no" value="0"
                            {{ old('is_overlay_text') == '0' ? 'checked' : '' }}>
                        <label class="form-check-label" for="overlay_no">
                            No
                        </label>
                    </div>
                </div>
            </div>
            
              <div class="row mb-3 p-3">
                <label for="heading" class="col-sm-2 col-form-label">heading</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control p-3 bg-light" id="heading" name="heading">
                </div>
              </div>   
          
              <div class="row mb-3 p-3">
                <label for="sub_heading" class="col-sm-2 col-form-label">sub_heading</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control p-3 bg-light" id="sub_heading" name="sub_heading">
                </div>
              </div>  
             
              <div class="row mb-3 p-3">
                <label for="order_by_count" class="col-sm-2 col-form-label">Order</label>
                <div class="col-sm-8">
                  <input type="number" name="order_by_count" id="order_by_count"  class="form-control p-3 bg-light">
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