
     
     @extends('website.layouts.app')

     @section('website.content') 

     @php 
     $data =App\Models\ourvisions::where('status',1)->get();
     @endphp
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
     
      <div class="container mt-5">
      <h2 class="text-center">Our Mission & Vision</h2>
      <p class="text-center text-secondary">We envision a world where technology, sustainability, and customer-centric solutions come together to create meaningful progress. Our goal is to empower businesses and individuals with cutting-edge innovations that make a difference in everyday life.
         Our mission is to deliver exceptional, forward-thinking solutions that meet the evolving needs of our customers. We strive for continuous improvement, ethical business practices, and technological advancements that enhance efficiency, productivity, and sustainability.
      </p>
         <div class="row"> 
            @foreach($data as $d) 
            <div class="col-lg-12">
               <p>{!!($d->content)!!}</p>
            </div>
            @endforeach
     
        
      </div>
      </div>
      </section>

      @endsection
    