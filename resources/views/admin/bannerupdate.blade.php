
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
              <h5 class="card-title text-center">Update Form</h5>

              <!-- Horizontal Form -->
              <div style="color:red;">
              @if(session()->has('alert-success')){{session()->get('alert-success')}}
		@endif 
    </div>
              <form method="POST" enctype="multipart/form-data" action="{{url('bannerupdate')}}/{{$banner->id}}">
                @csrf 

                <div class="row mb-3 p-3">
                    <label for="route_name" class="col-sm-2 col-form-label">route_name</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control p-3 bg-light" id="route_name" name="route_name" value="{{$banner->route_name}}">
    
                    </div>
                  </div>  
                  @error('route_name')
              {{$message}}
              <span class="alert-error"></span>
              @enderror
              
                <div class="row mb-3 p-3">
                  <label for="desktop_image" class="col-sm-2 col-form-label">desktop_image</label>
                  <div class="col-sm-8">
                    <input type="file" class="form-control p-3 bg-light" id="desktop_image" name="desktop_image" value="{{$banner->desktop_image}}">
                    <img width="70px" height="50px" class="mt-3" src="{{ asset('storage/'. $banner->desktop_image) }}" alt="">  
                  </div> 
                </div> 
                @error('desktop_image')
            {{$message}}
			<span class="alert-error"></span>
            @enderror
            <div class="row mb-3 p-3">
              <label for="mobile_image" class="col-sm-2 col-form-label">mobile_image</label>
              <div class="col-sm-8">
                <input type="file" class="form-control p-3 bg-light" id="mobile_image" name="mobile_image" value="{{$banner->mobile_image}}">
                <img width="70px" height="50px" class="mt-3" src="{{ asset('storage/'. $banner->mobile_image) }}" alt="">  
              </div> 
            </div> 
            @error('mobile_image')
        {{$message}}
  <span class="alert-error"></span>
        @enderror
            <div class="row mb-3 p-3">
              <label class="col-sm-2 col-form-label">Is Overlay Text</label>
              <div class="col-sm-8 d-flex align-items-center">
                <div class="form-check me-4">
                  <input 
                    class="form-check-input" 
                    type="radio" 
                    name="is_overlay_text" 
                    id="overlay_text_yes" 
                    value="1" 
                    {{ old('is_overlay_text', $banner->is_overlay_text) == '1' ? 'checked' : '' }}>
                  <label class="form-check-label" for="overlay_text_yes">
                    Yes
                  </label>
                </div>
                <div class="form-check">
                  <input 
                    class="form-check-input" 
                    type="radio" 
                    name="is_overlay_text" 
                    id="overlay_text_no" 
                    value="0" 
                    {{ old('is_overlay_text', $banner->is_overlay_text) == '0' ? 'checked' : '' }}>
                  <label class="form-check-label" for="overlay_text_no">
                    No
                  </label>
                </div>
              </div>
            </div>
            
            @error('is_overlay_text')
              <div class="text-danger">{{ $message }}</div>
            @enderror
            
            
            
  
          
          <div class="row mb-3 p-3">
            <label for="heading" class="col-sm-2 col-form-label">heading</label>
            <div class="col-sm-8">
              <input type="text" class="form-control p-3 bg-light" id="heading" name="heading" value="{{$banner->heading}}">

            </div>
          </div>  
          @error('heading')
      {{$message}}
      <span class="alert-error"></span>
      @enderror 

      <div class="row mb-3 p-3">
        <label for="sub_heading" class="col-sm-2 col-form-label">sub_heading</label>
        <div class="col-sm-8">
          <input type="text" class="form-control p-3 bg-light" id="sub_heading" name="sub_heading" value="{{$banner->sub_heading}}">

        </div>
      </div>  
      @error('sub_heading')
  {{$message}}
  <span class="alert-error"></span>
  @enderror 
        
  <div class="row mb-3 p-3">
    <label for="order_by_count" class="col-sm-2 col-form-label">Order</label>
    <div class="col-sm-8">
      <input type="number" class="form-control p-3 bg-light" id="order_by_count" name="order_by_count" value="{{$banner->order_by_count}}">

    </div>
  </div>  
  @error('order_by_count')
{{$message}}
<span class="alert-error"></span>
@enderror
            <select name="status"> 
   @if($banner->status == 1)
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