
@extends('admin.layouts.app')

@section('admin.content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Layouts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('careercreate')}}">Home</a></li>
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
              <form method="POST" enctype="multipart/form-data" action="{{url('careerupdate')}}/{{$data->id}}">
                @csrf 
                <div class="row mb-3 p-3">
                  <label for="banner_img" class="col-sm-2 col-form-label">Banner_Img</label>
                  <div class="col-sm-8">
                    <input type="file" class="form-control p-3 bg-light" id="baneer_img" name="banner_img" value="{{$data->banner_img}}">
                    <img width="70px" height="50px" class="mt-3" src="{{ asset('storage/'. $data->banner_img) }}" alt=""> 

                  </div> 
                </div> 
                @error('banner_img')
            {{$message}}
			<span class="alert-error"></span>
            @enderror

            <div class="row mb-3 p-3">
                <label for="banner_text" class="col-sm-2 col-form-label">Banner_text</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control p-3 bg-light" id="banner_text" name="banner_text" value="{{$data->banner_text}}">

                </div>
              </div>  
              @error('banner_text')
          {{$message}}
          <span class="alert-error"></span>
          @enderror 

          
                <div class="row mb-3 p-3">
                  <label for="content" class="col-sm-2 col-form-label">Content</label>
                  <div class="col-sm-8">
                    {{-- <input type="text" class="form-control p-3 bg-light" id="information" name="information"> --}}
                    <textarea name="content" class="form-control  pt-15" id="summernote" cols="30" rows="5" >{{$data->content}}</textarea>

                  </div>
                </div>  
                @error('content')
            {{$message}}
			<span class="alert-error"></span>
            @enderror 
           
       
          
          <div class="row mb-3 p-3">
            <label for="text" class="col-sm-2 col-form-label">Text</label>
            <div class="col-sm-8">
              <input type="text" class="form-control p-3 bg-light" id="text" name="text" value="{{$data->text}}">

            </div>
          </div>  
          @error('banner_text')
      {{$message}}
      <span class="alert-error"></span>
      @enderror 
      <div class="row mb-3 p-3">
        <label for="long_text" class="col-sm-2 col-form-label">long_text</label>
        <div class="col-sm-8">
          <input type="text" class="form-control p-3 bg-light" id="long_text" name="long_text" value="{{$data->long_text}}">

        </div>
      </div>  
      @error('banner_text')
  {{$message}}
  <span class="alert-error"></span>
  @enderror 
          <div class="row mb-3 p-3">
            <label for="main_img" class="col-sm-2 col-form-label">Main_img</label>
            <div class="col-sm-8">
              <input type="file" class="form-control p-3 bg-light" id="main_img" name="main_img" value="{{$data->main_img}}">
              <img width="70px" height="50px" class="mt-3" src="{{ asset('storage/'.$data->main_img) }}" alt=""> 

            </div> 
          </div> 
          @error('main_img')
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