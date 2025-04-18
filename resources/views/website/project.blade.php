

@extends('website.layouts.app')

@section('website.content') 


      <!-- slider-start -->
      {{-- <div class="container-fluid p-0" id="home">
         <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item position-relative active" >
                  <img src="website/assets/img/project-slider.jpg" alt="project-slider-img"  class="img-fluid">
                  <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center bottom-0">
                     <div class="d-flex justify-content-center">
                        <div class="p-3">
                           <h4 class="slider_heading">⚡ हर छत पर सूरज की रोशनी — हमारे प्रोजेक्ट्स के साथ</h4>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> --}}
     <!-- Check if there's at least 1 banner -->
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

      <div class="container mt-5">
         <h2 class="text-center">Project List </h2>
         <hr>
         <p class="text-secondary text-center">A "solar projects" section in content would typically detail information about various solar energy initiatives, including project types, locations, capacity, technology used, environmental impact, and potential benefits, often highlighting key aspects like rooftop solar installations, utility-scale solar farms, community solar programs, and innovative solar technologies, while also discussing project development stages from planning and permitting to construction and operation. </p>
      </div> 
      
      @php 
      $data =App\Models\projects::where('status',1)->get();
      @endphp
 
      <!-- IMAGE GALLERY STARTS  --> 
      <div class="container">    
            <div class="row mb-5 card-effects">
               @foreach($data as $d)
               <div class="col-lg-4 mt-3">
                 <div class="card card-effect p-0 h-100">
                   <div class="card-img rounded-0">
                     <div class="img-hover">
                        <img class="rounded-top img-fluid" style="height:200px; width:100%;" 
                        src="{{ asset('storage/' . $d->image) }}" alt="project-img">
                     </div>
                   </div>
                   <div class="card-body position-relative pt-0 px-1-9 pb-1-9">
                     <div class="pt-6">
                        <h5 class="details text-dark p-2">{!!($d->text)!!}</h5>
                       <p class="text-secondary">
                        {!!($d->long_text)!!}</p>
                     </div>
                     <div class="text-center">
                        <a href="{{route('project_information',$d->slug)}}">
                           <button type="submit" class="btn btn-outline-dark btn-lg mt-3">Read More</button></a>
                     </div>
                   </div>
                 </div>
               </div>
               @endforeach

            </div>
           
      </div>

    

@endsection
     
      