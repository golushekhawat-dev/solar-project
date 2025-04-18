

@extends('website.layouts.app')

@section('website.content')
      {{-- slider section start --}}
      @if(count($banners) > 0)
      <div class="slider_image home-slider">
          <div class="container-fluid p-0" id="home">
              <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000" data-pause="false">
                  <div class="carousel-inner">
                      @foreach ($banners as $key => $b)
                      <div class="carousel-item position-relative {{ $key == 0 ? 'active' : '' }}">
                          @if (isset($b['mobile_image']) && $b['mobile_image'])
                          <img src="{{ asset('storage/' . $b['mobile_image']) }}" alt="Banner Image Mobile" class=" d-block d-sm-none">
                          @endif
                          <img src="{{ asset('storage/' . $b['desktop_image']) }}" alt="Banner Image Desktop" class=" d-none d-sm-block">
      
                          @if (!empty($b['is_overlay_text']) && $b['is_overlay_text'] == 1)
                          <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center bottom-0">
                              <div class="p-3 slider-text">
                                  <p class="slider_par">{{ $b['sub_heading'] }}</p>
                              </div>
                          </div>
                          @endif
                      </div>
                      @endforeach
                  </div>
      
                  {{-- Show arrows only if more than 1 banner --}}
                  @if(count($banners) > 1)
                  <!-- Left Right Arrows -->
                  <a class="carousel-control-prev justify-content-start" href="#header-carousel" data-slide="prev">
                    <div class="custom-carousel-control">
                        <span class="carousel-control-prev-icon"></span>
                    </div>
                </a>
                
                <a class="carousel-control-next justify-content-end" href="#header-carousel" data-slide="next">
                    <div class="custom-carousel-control">
                        <span class="carousel-control-next-icon"></span>
                    </div>
                </a>
                  @endif
      
              </div>
          </div>
      </div>
      @endif
      {{-- slider section end --}}
      
     {{-- contact section start --}}
     <div class="container mt-5">
      <div class="row justify-content-center">
          <!-- Contact Form -->
          <div class="col-lg-6 mt-4">
              <form class="p-4 shadow text-dark" id="contact" action="{{url('contacts')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <h2 class="text-center mb-4 text-dark">📩 Contact Us</h2>
  
                  <div class="form-group mb-3">
                      <label for="fname" class="fw-bold">First Name:</label>
                      <input type="text" class="form-control border-0 shadow-sm p-2" name="fname" placeholder="Enter first name">
                  </div>
  
                  <div class="form-group mb-3">
                      <label for="lname" class="fw-bold">Last Name:</label>
                      <input type="text" class="form-control border-0 shadow-sm p-2" name="lname" placeholder="Enter last name">
                  </div>
  
                  <div class="form-group mb-3">
                      <label for="email" class="fw-bold">Email Address:</label>
                      <input type="email" class="form-control border-0 shadow-sm p-2" name="email" placeholder="Enter your email">
                  </div>
  
                  <div class="form-group mb-3">
                      <label for="address" class="fw-bold">Address:</label>
                      <input type="text" class="form-control border-0 shadow-sm p-2" name="address" placeholder="Enter your address">
                  </div> 
  
                  <div class="form-group mb-3">
                      <label for="select" class="fw-bold">Select Requirement:</label> 
                      <select class="form-select border-0 shadow-sm p-2" name="solar">
                          <option selected disabled>Choose an option...</option>
                          <option>Residential Solar Panel</option>
                          <option>Commercial Solar Panel</option>
                          <option>Industrial Solar Panel</option>
                      </select>
                  </div>
  
                  <button type="submit" id="form-submit" class="btn btn-primary btn-lg w-100 shadow-sm fw-bold mt-3">🚀 Submit</button>
              </form>
          </div>
  
          <!-- Image Section -->
          <div class="col-lg-6 mt-4">
            <img src="website/assets/img/contact-1.jpg" alt="contact-left" class="img-fluid h-100 w-100">
         </div>
      </div>
  </div>
  
      {{-- conatct section end --}}

      @endsection
    