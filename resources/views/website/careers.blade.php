

@extends('website.layouts.app')



@section('website.content')
      <!-- slider start  -->
      {{-- <div class="container-fluid p-0" id="home">
         <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item position-relative active" >
                  <img src="website/assets/img/career-slider.jpg" alt="career-slider-img"  class="img-fluid">
                  <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center bottom-0">
                     <div class="d-flex justify-content-center">
                        <div class="p-3">
                           <h4 class="slider_heading">"करियर भी, पर्यावरण भी – सोलर इंडस्ट्री के साथ"</h4> 
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> --}}
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
$data =App\Models\careers::where('status',1)->get();
@endphp 
       
      <div class="container mt-5">
         <div class="row">
            <h2 class="text-center">Career information</h2>
            @foreach($data as $d)
            <div class="col-lg-4 mt-3">
               <div class="card">
                  <img src="{!!('storage/'.$d->main_img)!!}" class="card-img-top" alt="main_img">
                   <div class="card-body">
                     <h5 class="card-title text-secondary">{!!($d->text)!!}</h5>
                     <p class="card-text text-secondary">{!!($d->long_text)!!}</p>
                     <a href="{{route('career_details',$d->slug)}}">
                        <button type="submit" class="btn btn-outline-dark btn-lg mt-3">Apply Now</button></a>
                  </div>
               </div>
            </div>
            @endforeach 
            {{-- <div class="col-lg-4 mt-3">
               <div class="card">
                  <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8dXNlciUyMHByb2ZpbGV8ZW58MHx8MHx8fDA%3D" class="card-img-top" alt="Engineer_img">
                  <div class="card-body">
                     <h5 class="card-title text-secondary">Engineer</h5>
                     <p class="card-text text-secondary">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     <a href="{{url('career-details' ,$d->slug)}}"><button type="button" class="btn btn-outline-dark btn-lg mt-3">Apply Now</button></a>
                  </div>
               </div>
            </div>
            <div class="col-lg-4 mt-3">
               <div class="card">
                  <img src="https://codingyaar.com/wp-content/uploads/bootstrap-profile-card-image.jpg" class="card-img-top" alt="Sales_img">
                  <div class="card-body">
                     <h5 class="card-title text-secondary">Sales</h5>
                     <p class="card-text text-secondary">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     <a href="{{url('career-details')}}"><button type="button" class="btn btn-outline-dark btn-lg mt-3">Apply Now</button></a>
                  </div>
               </div>
            </div> --}}
         </div>
      </div>
    

      @endsection
     