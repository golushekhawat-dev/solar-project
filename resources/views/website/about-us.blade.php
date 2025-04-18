
@extends('website.layouts.app')
 
@section('website.content')
      <!-- slider start  -->
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
      <!-- slider end  -->
      @php 
      $data =App\Models\abouts::where('status',1)->get();
      @endphp
      <div class="container mt-5">
         <h2 class="text-center">"Powering Your Future with Solar,"</h2>
         <p class="text-secondary text-center">A "solar about" section on a website would typically include information about the company's background,
             mission, expertise in solar energy solutions, the types of solar systems they offer (residential,
              commercial, industrial), their commitment to sustainability, customer testimonials, qualifications, 
              and contact details</p>
              @foreach($data as $d)
         <div class="row">
           
            <div class="col-lg-12">
               {{-- <small class="text-uppercase">About us</small>
               <h2 class="h2 mb-4">Technology and innovation:</h2> --}}
               <p class="text-secondary">{!!($d->content)!!} </p>
               
            </div>
        
            {{-- <div class="col-lg-6 p-0 text-center order-1 order-sm-2">
               <img src="website/assest/img/about-1.jpg"  alt="about-img(1)" class=" img-fluid h-100 w-100" alt="">
            </div> --}}
            {{-- <div class="col-lg-6 p-0 text-center">
               <img src="website/assest/img/about-2.jpg"  alt="about-img(2)"class="img-fluid h-100 w-100" alt="">
            </div>
            <div class="col-lg-6 p-4 p-sm-5">
               <small class="text-uppercase">About us</small>
               <h2 class="h2 mb-4">Services offered:</h2>
               <p class="text-secondary">List the range of solar services provided, including system design, installation, maintenance, monitoring, and potential battery storage options.List the range of solar services provided, including system design, installation, maintenance, monitoring, and potential battery storage options. </p>
           
            </div>
         </div>
         <div class="row">
            <div class="col-lg-6  p-sm-5 order-2 order-sm-1">
               <small class="text-uppercase">About us</small>
               <h2 class="h2 mb-4">Company mission and values:</h2>
               <p class="text-secondary">Clearly state the company's dedication to renewable energy and sustainability, highlighting their vision for a cleaner future. List the range of solar services provided, including system design, installation, maintenance, monitoring, and potential battery storage options.</p>
               
            </div>
            <div class="col-lg-6 p-0 text-center order-1 order-sm-2">
               <img src="website/assest/img/about_image(3).webp"  alt="about-img(3)" class=" img-fluid h-100 w-100" alt="">
            </div>
            <div class="col-lg-6 p-0 text-center">
               <img src="website/assest/img/about-4.webp"  alt="about-img(4)"class="img-fluid h-100 w-100" alt="">
            </div>
            <div class="col-lg-6 p-sm-5">
               <small class="text-uppercase">About us</small>
               <h2 class="h2 mb-4">Services offered:</h2>
               <p class="text-secondary">List the range of solar services provided, including system design, installation, maintenance, monitoring, and potential battery storage options.List the range of solar services provided, including system design, installation, maintenance, monitoring, and potential battery storage options. </p>
         
            </div>
         </div> --}}
      </div>
      @endforeach
   </div>

      @endsection