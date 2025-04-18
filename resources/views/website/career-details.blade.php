@extends('website.layouts.app') 
@section('website.content')

<!-- Fetching career page content dynamically -->
<div class="slider_image home-slider">

<div class="container-fluid p-0" id="home">
    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel"> 
        <div class="carousel-inner">
            <div class="carousel-item position-relative active">
                <img src="{{ asset('storage/'.$data->banner_img) }}" alt="career_image" class="img-fluid" > 
                <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center bottom-0">
                    <div class="p-3">
                        <h4 class="slider_heading">{!! $data->banner_text !!}</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb custom-breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ url('index') }}"><i class="fas fa-home"></i> Home</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="{{ route('career') }}"><i class="fas fa-briefcase"></i> Career</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <i class="fas fa-angle-right"></i> {!! $data->text !!}
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>  
<!-- Career Content -->
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <p>{!! $data->content !!}</p>  
        </div>
    </div>
</div>

<!-- Requirement Form -->
<div class="container mt-5">
   <div class="row">
       <div class="col-lg-12 p-4 rounded shadow-lg" style="background: linear-gradient(135deg, #f3f4f6, #ffffff);">
           <h2 class="text-dark mb-4">📋 Requirement Form</h2>
           <form action="{{ url('reqforms') }}" method="POST" enctype="multipart/form-data">
               @csrf
               <div class="row">
                   <div class="col-md-6">
                       <div class="form-group mb-3">
                           <label for="fname" class="fw-bold text-primary">First Name:</label>
                           <input type="text" class="form-control border-0 shadow-sm p-2" name="fname" placeholder="Enter first name" required>
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="form-group mb-3">
                           <label for="lname" class="fw-bold text-primary">Last Name:</label>
                           <input type="text" class="form-control border-0 shadow-sm p-2" name="lname" placeholder="Enter last name" required>
                       </div>
                   </div>
               </div>

               <div class="form-group mb-3">
                   <label for="email" class="fw-bold text-primary">Email address:</label>
                   <input type="email" class="form-control border-0 shadow-sm p-2" name="email" placeholder="Enter your email" required>
               </div>

               <div class="form-group mb-3">
                   <label for="address" class="fw-bold text-primary">Address:</label>
                   <input type="text" class="form-control border-0 shadow-sm p-2" name="address" placeholder="Enter your address">
               </div>

               <div class="form-group mb-3">
                   <label for="number" class="fw-bold text-primary">Phone Number:</label>
                   <input type="number" class="form-control border-0 shadow-sm p-2" name="mobile_number" placeholder="Enter phone number" required>
               </div>

               <div class="form-group mb-3">
                   <label for="solar_req" class="fw-bold text-primary">Select Requirement:</label> 
                   <select class="form-select border-0 shadow-sm p-2" name="solar_req" required>
                       <option selected disabled>Choose a position...</option>
                       <option>Solar Telecaller</option>
                       <option>Solar Engineer</option>
                       <option>Solar Sales</option>
                   </select>
               </div>

               <div class="form-group mb-3">
                   <label for="image" class="fw-bold text-primary">Upload Resume (PDF/DOC):</label>
                   <input type="file" class="form-control p-3 bg-light" id="image" name="image">
                  </div>

               <button type="submit" class="btn btn-primary btn-lg px-4 shadow">🚀 Submit Application</button>
           </form>
       </div>
   </div>
</div>



@endsection
