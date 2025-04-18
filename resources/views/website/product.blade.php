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


 @php 
 $data =App\Models\products::where('status',1)->get();
 @endphp 


<div class="container mt-4">
    <h2 class="text-center">Product Listing</h2>
    <hr>
 
    <div class="row mt-3 images">
        @foreach($data as $d)
        <div class="col-lg-4 mt-4">
            <img src="{{ asset('storage/' . $d->image) }}" alt="solarimg(1)" class="img-fluid img-thumbnail clickable-image"> 
        </div>
        @endforeach
        {{-- <div class="col-lg-4">
            <img src="{{ asset('website/assest/img/solarimg2.png') }}" alt="solarimg(2)" class="img-fluid img-thumbnail clickable-image"> 
        </div>
        <div class="col-lg-4">
            <img src="{{ asset('website/assest/img/solarimg3.png') }}" alt="solarimg(3)" class="img-fluid img-thumbnail clickable-image">
        </div> --}}
    </div>
 
    
    <!-- Modal for displaying full image -->
    <div id="image-viewer" class="modal" style="display:none;">
        <span class="close" style="cursor:pointer; position:absolute; top:15px; right:35px; font-size:40px;">&times;</span>
        <img class="modal-content" id="full-image" style="margin:auto; display:block; max-width:65%; max-height:85%;">
    </div>
    
 
    
    {{-- <div class="row mt-5 images">
        <div class="col-lg-4">
            <img src="{{asset('website/assest/img/solarimg4.png')}}" alt="solarimg(4)" class="img-fluid img-thumbnail clickable-image"> 
        </div>
        <div class="col-lg-4">
            <img src="{{asset('website/assest/img/solarimg5.png')}}" alt="solarimg(5)" class="img-fluid img-thumbnail clickable-image"> 
        </div>
        <div class="col-lg-4">
            <img src="{{asset('website/assest/img/solarimg6.png')}}" alt="solarimg(6)" class="img-fluid img-thumbnail clickable-image">  
        </div>
        <!-- Modal for displaying full image -->
    <div id="image-viewer" class="modal" style="display:none;">
        <span class="close" style="cursor:pointer; position:absolute; top:15px; right:35px; font-size:40px;">&times;</span>
        <img class="modal-content" id="full-image" style="margin:auto; display:block; max-width:65%; max-height:85%;">
    </div>
    </div>
    <div class="row mt-5 images">
        <div class="col-lg-4">
            <img src="{{asset('website/assest/img/solarimg7.png')}}" alt="solarimg(7)" class="img-fluid img-thumbnail clickable-image"> 
        </div>
        <div class="col-lg-4">
            <img src="{{asset('website/assest/img/solarimg8.png')}}" alt="solarimg(8)" class="img-fluid img-thumbnail clickable-image"> 
        </div>
        <div class="col-lg-4">
            <img src="{{asset('website/assest/img/solarimg9.png')}}" alt="solarimg(9)" class="img-fluid img-thumbnail clickable-image"> 
        </div>
        <!-- Modal for displaying full image -->
    <div id="image-viewer" class="modal" style="display:none;">
        <span class="close" style="cursor:pointer; position:absolute; top:15px; right:35px; font-size:40px;">&times;</span>
        <img class="modal-content" id="full-image" style="margin:auto; display:block; max-width:65%; max-height:85%;">
    </div>
    </div>
    <div class="row mt-5 images">
        <div class="col-lg-4">
            <img src="{{asset('website/assest/img/solarimg10.png')}}" alt="solarimg(10)" class="img-fluid img-thumbnail clickable-image"> 
        </div>
        <div class="col-lg-4">
            <img src="{{asset('website/assest/img/solarimg11.png')}}" alt="solarimg(11)" class="img-fluid img-thumbnail clickable-image"> 
        </div>
        
        <!-- Modal for displaying full image -->
    <div id="image-viewer" class="modal" style="display:none;">
        <span class="close" style="cursor:pointer; position:absolute; top:15px; right:35px; font-size:40px;">&times;</span>
        <img class="modal-content" id="full-image" style="margin:auto; display:block; max-width:65%; max-height:85%;">
    </div>
    </div> --}}
 
</div>

@endsection