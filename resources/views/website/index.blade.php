
@extends('website.layouts.app') 
@section('website.content')
      <!-- Carousel Start -->

      {{-- <div class="slider_image">
         <div class="container-fluid p-0" id="home">
            <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000" data-pause="false">
               <div class="carousel-inner">
                  
                  <div class="carousel-item position-relative active"> 
                     <img src="website/assets/img/slider.1.jpg">
                     <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center bottom-0 ">
                        <div class="p-3 slider-text">
                           <h4>🌞 सौर ऊर्जा: प्रकृति की शक्ति, आपके घर की रोशनी</h4>
                           <p class="slider_par">अब बिजली सूरज से पाएं — बिना किसी चिंता, बिना किसी बिल के!  
                              सौर ऊर्जा अपनाइए और हर महीने के बिजली खर्च से पाएं छुटकारा।</p>
                                                   </div>
                     </div>
                  </div>
                  <div class="carousel-item position-relative"> 
                     <img src="website/assets/img/slider.2.webp">
                     <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center bottom-0 ">
                        <div class="p-3 slider-text">
                           <h4>🌞 सरकार दे रही है सोलर लगाने पर सीधी सब्सिडी! </h4>
                           <p class="slider_par">अपने घर की छत पर लगवाएं सोलर सिस्टम और पाएं बिजली के बिल में 60% तक की बचत। अब समय है सोलर अपनाने का!</p>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item position-relative"> 
                     <img src="website/assets/img/slider.3.webp">
                     <div class="carousel-caption d-flex flex-column h-100 align-items-center justify-content-center bottom-0 ">
                        <div class="p-3 slider-text">
                           <h4> 🌞प्रकृति को दीजिए नई रौशनी </h4>
                           <p class="slider_par">अब बिजली के बढ़ते बिलों की चिंता छोड़िए। अपने घर की छत पर लगवाइए सोलर पैनल और बनाइए खुद अपनी बिजली — 100% मुफ्त और स्वच्छ। एक बार का निवेश, सालों की बचत।
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev justify-content-start" href="#header-carousel" data-slide="prev">
                  <div style="width: 68px; height: 68px;">
                     <span class="carousel-control-prev-icon mt-3"></span>
                  </div>
               </a>
               <a class="carousel-control-next justify-content-end" href="#header-carousel" data-slide="next">
                  <div style="width: 68px; height: 68px;">
                     <span class="carousel-control-next-icon mt-3"></span>
                  </div>
               </a>
            </div>
         </div>
      </div> 
       --}}
       <div class="slider_image  home-slider">
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
                                 <h4>{{ $b['heading'] }}</h4>
                                 <p class="slider_par">{{ $b['sub_heading'] }}</p>
                             </div>
                         </div>
                         @endif
     
                     </div>
                     @endforeach
                 </div>
     
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
             </div>
         </div>
     </div>
     
      
      
      <!-- Carousel End --> 
      <!-- about section start -->
      <div class="container mt-3">
         <div class="row align-items-center">
            <div class="col-md-6 pt-3">
               <h2 class="h2 mb-4">About Our Company</h2>
               <p class="text-secondary">APS (Advance power solution ) is committed to powering a cleaner, more sustainable future through innovative solar energy solutions. Designed to harness  abundant sunshine, APS-compatible solar panel systems help homeowners and businesses reduce their energy costs, lower their carbon footprint, and gain energy independence.

                  With cutting-edge solar technology, smart energy storage options, and seamless integration with APS’s energy plans, customers can enjoy reliable, renewable power tailored to their needs. Whether you're looking to save on monthly bills, increase your property value, or contribute to a greener planet, APS solar solutions make the transition to clean energy easy and rewarding.
                  
                  Backed by expert support, fast installation, and long-term performance, APS solar panels are more than just a power solution—they’re a step toward a brighter future.</p>
               <a href="{{url('about')}}"><button type="button" class="btn btn-outline-dark btn-lg">Click Here</button></a>
            </div>
            <div class="col-md-6 mt-3 text-center">
               <div class="row ">
                  <div class="col-md-6 mb-3">
                     <img src="website/assets/img/about-index-1.webp" class=" h-100 w-100 rounded img-fluid" alt="">
                  </div>
                  <div class="col-md-6 mb-3">
                     <img src="website/assets/img/about-index.png" class="h-100 w-100 rounded img-fluid" alt="">
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
      <!-- about section end -->
      <!-- process start -->
      <div class="container mt-5">
         <h2 class="text-center underline">Our Process (Installation)</h2>
         <div class="d-flex justify-content-between mt-5 text-center">
            <h6><b>Step 1</b> <br>Order Confirmation</h6>
            <h6><b>Step 2 </b><br>Design Thinking</h6>
            <h6><b>Step 3 </b><br>Required Planning</h6>
            <h6><b>Step 4 </b><br>Project Begin</h6>
         </div>
         <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
         </div>
         <div class="step-container d-flex justify-content-between">
            <div class="step-circle" onclick="displayStep(1)">1</div>
            <div class="step-circle" onclick="displayStep(2)">2</div>
            <div class="step-circle" onclick="displayStep(3)">3</div>
            <div class="step-circle" onclick="displayStep(4)">4</div>
         </div>
      </div>
      <div class="container" >
         <div class="row">
            <div class="col-lg-5">
               <form id="multi-step-form" class="container">
                  <!-- Step 1 -->
                  <div class="step step-1 text-center">
                     <p class="text-secondary"><b>Step 1</b></p>
                     <p class="text-secondary">Order Confirmation</p>
                     <div class="d-flex justify-content-around">
                        <button type="button" class="btn btn-outline-dark prev-step">
                        <i class="fas fa-arrow-left"></i>
                        </button>
                        <button type="button" class=" btn btn-outline-dark next-step">
                        <i class="fas fa-arrow-right"></i>
                        </button>
                     </div>
                     <div class="card text-dark mb-3 mt-3">
                        <i>
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" fill="rgba(0,0,0,1)">
                              <path d="M2 12H4V21H2V12ZM5 14H7V21H5V14ZM16 8H18V21H16V8ZM19 10H21V21H19V10ZM9 2H11V21H9V2ZM12 4H14V21H12V4Z"></path>
                           </svg>
                        </i>
                        <div class="card-body">
                           <h5 class="card-title text-secondary">Site Survey</h5>
                           <p class="card-text text-secondary">information about the site, roof, electricity, and other factors that affect the installation of solar panels. </p>
                        </div>
                     </div>
                     <!-- Only Next button on first step -->
                  </div>
                  <!-- Step 2 -->
                  <div class="step step-2 text-center">
                     <p class="text-secondary"><b>Step 2</b></p>
                     <p class="text-secondary">Design Thinking</p>
                     <div class="d-flex justify-content-around">
                        <button type="button" class="btn btn-outline-dark prev-step">
                        <i class="fas fa-arrow-left"></i>
                        </button>
                        <button type="button" class=" btn btn-outline-dark next-step">
                        <i class="fas fa-arrow-right"></i>
                        </button>
                     </div>
                     <div class="card text-dark mb-3 mt-3">
                        <i>
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" fill="rgba(0,0,0,1)">
                              <path d="M20.0833 15.1999L21.2854 15.9212C21.5221 16.0633 21.5989 16.3704 21.4569 16.6072C21.4146 16.6776 21.3557 16.7365 21.2854 16.7787L12.5144 22.0412C12.1977 22.2313 11.8021 22.2313 11.4854 22.0412L2.71451 16.7787C2.47772 16.6366 2.40093 16.3295 2.54301 16.0927C2.58523 16.0223 2.64413 15.9634 2.71451 15.9212L3.9166 15.1999L11.9999 20.0499L20.0833 15.1999ZM20.0833 10.4999L21.2854 11.2212C21.5221 11.3633 21.5989 11.6704 21.4569 11.9072C21.4146 11.9776 21.3557 12.0365 21.2854 12.0787L11.9999 17.6499L2.71451 12.0787C2.47772 11.9366 2.40093 11.6295 2.54301 11.3927C2.58523 11.3223 2.64413 11.2634 2.71451 11.2212L3.9166 10.4999L11.9999 15.3499L20.0833 10.4999ZM12.5144 1.30864L21.2854 6.5712C21.5221 6.71327 21.5989 7.0204 21.4569 7.25719C21.4146 7.32757 21.3557 7.38647 21.2854 7.42869L11.9999 12.9999L2.71451 7.42869C2.47772 7.28662 2.40093 6.97949 2.54301 6.7427C2.58523 6.67232 2.64413 6.61343 2.71451 6.5712L11.4854 1.30864C11.8021 1.11864 12.1977 1.11864 12.5144 1.30864ZM11.9999 3.33233L5.88723 6.99995L11.9999 10.6676L18.1126 6.99995L11.9999 3.33233Z"></path>
                           </svg>
                        </i>
                        <div class="card-body">
                           <h5 class="card-title text-secondary">Pattern Designs</h5>
                           <p class="card-text text-secondary">desired system capacity, panel selection, mounting structure details, inverter specifications, </p>
                        </div>
                     </div>
                  </div>
                  <!-- Step 3 -->
                  <div class="step step-3 text-center">
                     <p class="text-secondary"><b>Step 3</b></p>
                     <p class="text-secondary">Required Planning</p>
                     <div class="d-flex justify-content-around">
                        <button type="button" class="btn btn-outline-dark prev-step">
                        <i class="fas fa-arrow-left"></i>
                        </button>
                        <button type="button" class=" btn btn-outline-dark next-step">
                        <i class="fas fa-arrow-right"></i>
                        </button>
                     </div>
                     <div class="card text-dark mb-3 mt-3">
                        <i>
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" fill="rgba(0,0,0,1)">
                              <path d="M2 22C2 17.5817 5.58172 14 10 14C14.4183 14 18 17.5817 18 22H2ZM10 13C6.685 13 4 10.315 4 7C4 3.685 6.685 1 10 1C13.315 1 16 3.685 16 7C16 10.315 13.315 13 10 13ZM20 17H24V19H20V17ZM17 12H24V14H17V12ZM19 7H24V9H19V7Z"></path>
                           </svg>
                        </i>
                        <div class="card-body">
                           <h5 class="card-title text-secondary">Permits & Approvals</h5>
                           <p class="card-text text-secondary">site assessment (roof suitability, solar potential), energy consumption analysis,</p>
                        </div>
                     </div>
                  </div>
                  <!-- Step 4 -->
                  <div class="step step-4 text-center">
                     <p class="text-secondary"><b>Step 4</b></p>
                     <p class="text-secondary">Project Begin</p>
                     <div class="d-flex justify-content-around">
                        <button type="button" class="btn btn-outline-dark prev-step">
                        <i class="fas fa-arrow-left"></i>
                        </button>
                        <button type="button" class=" btn btn-outline-dark next-step">
                        <i class="fas fa-arrow-right"></i>
                        </button>
                     </div>
                     <div class="card text-dark mb-3 mt-3">
                        <i>
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" fill="rgba(0,0,0,1)">
                              <path d="M13 10H20L11 23V14H4L13 1V10Z"></path>
                           </svg>
                        </i>
                        <div class="card-body">
                           <h5 class="card-title text-secondary">Installation</h5>
                           <p class="card-text text-secondary">battery storage needs (if applicable), electrical grid connection information, permitting requirements, cost estimation, and maintenance plan</p>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
            <div class="col-lg-7">
               <img src="website/assets/img/progress-bar-img.jpg" alt="progress_bar_image" class="img-fluid w-100 h-100">
            </div>
         </div>
      </div>
      </div>
      <div class="container mt-5">
         <h2 class="text-center underline">Our Resolution (Rooftop)</h2>
         <div class="row mt-5">
            <div class="col-lg-7">
               <h5 class="fw-bold">"Power Your Home with APS Rooftop Solar Panels"</h5>
               <p class="text-secondary">
                  At APS, our resolution is to empower homes and businesses with clean, renewable energy—starting right from the rooftop. Our rooftop solar panel solutions are designed to make the most of Arizona’s powerful sunlight, converting it into reliable electricity while helping you save on utility bills and reduce your carbon footprint.<br>

                  With sleek, space-efficient designs and high-efficiency technology, our rooftop systems integrate seamlessly with your property. From site assessment to installation and grid connection, our expert team ensures a smooth, worry-free experience. Plus, with APS-compatible systems, you can take advantage of net metering, time-of-use savings, and long-term energy independence.<br>
                  
                  Choosing rooftop solar with APS isn't just an upgrade—it's a resolution for a cleaner, smarter, and more sustainable future.</p>
               {{-- <h5 class="text-secondary">Limitless energy</h5>
               <p class="text-secondary">The sun provides more than enough energy to meet the whole world’s energy needs, and unlike fossil fuels, it won’t run out anytime soon.</p>
               <h5 class="text-secondary">Save on electricity bills</h5>
               <p class="text-secondary">Installing solar panels significantly reduces monthly elctricity bills and dependence on the power grid.</p>
               <h5 class="text-secondary">Reduces your carbon footprint</h5>
               <p class="text-secondary">
                  Limitless energy
                  The sun provides more than enough energy to meet the whole world’s energy needs, and unlike fossil fuels, it won’t run out anytime soon.
                  Save on electricity bills
                  Installing solar panels significantly reduces monthly elctricity bills and dependence on the power grid.
                  Reduces your carbon footprint
                  Unlike energy generated by fossil fuels, solar doesn’t release harmful carbon dioxide (CO2) emission.
               </p> --}}
            </div>
            <div class="col-lg-5">
               <img src="website/assets/img/rooftop-solar-img.webp" alt="rooftop-solar-img" class="img-fluid w-100 h-100">
            </div>
         </div>
      </div>
      <!-- process end -->
      <!-- why choose us section -->
      <div class="container mt-5">
         <h2 class="text-center underline">"Services"</h2>
         <p class="text-secondary text-center mt-3">Our services include everything from personalized energy consultations and site evaluations to professional installation, system monitoring, and support. We offer high-efficiency solar panels, smart inverters, and energy storage options that work seamlessly with APS’s rate plans, including time-of-use and net metering benefits.</p>
         <div class="row">
            <div class="col-lg-4">
               <div class="card shadow-sm mb-2 bg-body rounded-end-circle service_card">
                  <div class="card-body ">
                     <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" fill="rgba(70,146,221,1)"><path d="M2 20H22V22H2V20ZM4 12H6V19H4V12ZM9 12H11V19H9V12ZM13 12H15V19H13V12ZM18 12H20V19H18V12ZM2 7L12 2L22 7V11H2V7ZM4 8.23607V9H20V8.23607L12 4.23607L4 8.23607ZM12 8C11.4477 8 11 7.55228 11 7C11 6.44772 11.4477 6 12 6C12.5523 6 13 6.44772 13 7C13 7.55228 12.5523 8 12 8Z"></path></svg>
                     </i>
                     <h5 class="card-title mt-3 text-primary">Long-Term Savings with APS Solar Panels</h5>
                     <p class="card-text  text-secondary">Investing in APS solar panels isn't just good for the environment—it's a smart financial move. Over the lifespan of a solar panel system (typically 25–30 years), homeowners can expect significant savings on electricity bills. By generating your own clean energy, you can reduce or even eliminate monthly utility costs.
                     </p>
                     </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="card shadow-sm  mb-2 bg-body rounded-end-circle service_card ">
                  <div class="card-body">
                     <i>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" fill="rgba(70,146,221,1)">
                           <path d="M20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20C16.4183 20 20 16.4183 20 12ZM22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM13.5003 8C13.8278 8.43606 14.0625 8.94584 14.175 9.5H16V11H14.175C13.8275 12.7117 12.3142 14 10.5 14H10.3107L14.0303 17.7197L12.9697 18.7803L8 13.8107V12.5H10.5C11.4797 12.5 12.3131 11.8739 12.622 11H8V9.5H12.622C12.3131 8.62611 11.4797 8 10.5 8H8V6.5H16V8H13.5003Z"></path>
                        </svg>
                     </i>
                     <h5 class="card-title mt-1 text-primary">Reasonable Price</h5>
                     <p class="card-text text-secondary">The price of solar panels can vary depending on several factors like size, efficiency, brand, and installation costs. On average, for residential use, you might expect to pay between for a complete installation of solar panels, including equipment and installation. This can be influenced by government incentives or local subsidies that could make the investment more affordable. Have you been considering solar panels for your home?</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="card shadow-sm  mb-2 bg-body rounded-end-circle service_card">
                  <div class="card-body">
                     <i>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" fill="rgba(70,146,221,1)"><path d="M8.68637 4.00008L11.293 1.39348C11.6835 1.00295 12.3167 1.00295 12.7072 1.39348L15.3138 4.00008H19.0001C19.5524 4.00008 20.0001 4.4478 20.0001 5.00008V8.68637L22.6067 11.293C22.9972 11.6835 22.9972 12.3167 22.6067 12.7072L20.0001 15.3138V19.0001C20.0001 19.5524 19.5524 20.0001 19.0001 20.0001H15.3138L12.7072 22.6067C12.3167 22.9972 11.6835 22.9972 11.293 22.6067L8.68637 20.0001H5.00008C4.4478 20.0001 4.00008 19.5524 4.00008 19.0001V15.3138L1.39348 12.7072C1.00295 12.3167 1.00295 11.6835 1.39348 11.293L4.00008 8.68637V5.00008C4.00008 4.4478 4.4478 4.00008 5.00008 4.00008H8.68637ZM6.00008 6.00008V9.5148L3.5148 12.0001L6.00008 14.4854V18.0001H9.5148L12.0001 20.4854L14.4854 18.0001H18.0001V14.4854L20.4854 12.0001L18.0001 9.5148V6.00008H14.4854L12.0001 3.5148L9.5148 6.00008H6.00008ZM12.0001 16.0001C9.79094 16.0001 8.00008 14.2092 8.00008 12.0001C8.00008 9.79094 9.79094 8.00008 12.0001 8.00008C14.2092 8.00008 16.0001 9.79094 16.0001 12.0001C16.0001 14.2092 14.2092 16.0001 12.0001 16.0001ZM12.0001 14.0001C13.1047 14.0001 14.0001 13.1047 14.0001 12.0001C14.0001 10.8955 13.1047 10.0001 12.0001 10.0001C10.8955 10.0001 10.0001 10.8955 10.0001 12.0001C10.0001 13.1047 10.8955 14.0001 12.0001 14.0001Z"></path></svg>
                     </i>
                     <h5 class="card-title mt-1 text-primary">Latest Technology in APS Solar Panels</h5>
                     <p class="card-text text-secondary">APS solar panel systems are now powered by cutting-edge technology designed to maximize energy efficiency and long-term performance. Today’s panels feature high-efficiency monocrystalline cells, allowing more power to be generated even in smaller spaces. With advanced inverter technology, users benefit from real-time energy monitoring and smarter load management—ensuring optimal performance throughout the day. </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-4">
               <div class="card shadow-sm mb-2 bg-body rounded-end-circle service_card">
                  <div class="card-body">
                     <i>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" fill="rgba(70,146,221,1)">
                           <path d="M17 8H20L23 12.0557V18H20.9646C20.7219 19.6961 19.2632 21 17.5 21C15.7368 21 14.2781 19.6961 14.0354 18H8.96456C8.72194 19.6961 7.26324 21 5.5 21C3.73676 21 2.27806 19.6961 2.03544 18H1V6C1 5.44772 1.44772 5 2 5H16C16.5523 5 17 5.44772 17 6V8ZM17 10V13H21V12.715L18.9917 10H17Z"></path>
                        </svg>
                     </i>
                     <h5 class="card-title mt-1 text-primary">Fast Feature Delivery with APS Solar Panels</h5>
                     <p class="card-text text-secondary">Modern APS-compatible solar setups come pre-equipped with plug-and-play features, allowing for fast activation, real-time energy monitoring, and immediate connection to APS’s grid. From day one, you can track your system’s performance through intuitive mobile apps, manage energy usage, and take advantage of smart savings tools.
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="card shadow-sm  mb-2  bg-body rounded-end-circle service_card ">
                  <div class="card-body">
                     <i class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" fill="rgba(70,146,221,1)">
                           <path d="M19 7H24V9H19V7ZM17 12H24V14H17V12ZM20 17H24V19H20V17ZM2 22C2 17.5817 5.58172 14 10 14C14.4183 14 18 17.5817 18 22H16C16 18.6863 13.3137 16 10 16C6.68629 16 4 18.6863 4 22H2ZM10 13C6.685 13 4 10.315 4 7C4 3.685 6.685 1 10 1C13.315 1 16 3.685 16 7C16 10.315 13.315 13 10 13ZM10 11C12.21 11 14 9.21 14 7C14 4.79 12.21 3 10 3C7.79 3 6 4.79 6 7C6 9.21 7.79 11 10 11Z"></path>
                        </svg>
                     </i>
                     <h5 class="card-title mt-1 text-primary">Expert Team Behind APS Solar Panels</h5>
                     <p class="card-text text-secondary">When you choose APS-compatible solar panels, you're backed by an expert team dedicated to delivering top-tier service and support every step of the way. From initial consultation to final installation, our certified solar professionals bring years of experience and industry knowledge to ensure your system is designed for maximum performance and long-term reliability.

</p>
                  </div>
               </div>
            </div>
            {{-- <div class="col-lg-4">
               <div class="card shadow-lg  mb-5 bg-body rounded-end-circle">
                  <div class="card-body">
                     <i>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" fill="rgba(70,146,221,1)">
                           <path d="M17 8H20L23 12.0557V18H20.9646C20.7219 19.6961 19.2632 21 17.5 21C15.7368 21 14.2781 19.6961 14.0354 18H8.96456C8.72194 19.6961 7.26324 21 5.5 21C3.73676 21 2.27806 19.6961 2.03544 18H1V6C1 5.44772 1.44772 5 2 5H16C16.5523 5 17 5.44772 17 6V8ZM17 10V13H21V12.715L18.9917 10H17Z"></path>
                        </svg>
                     </i>
                     <h5 class="card-title mt-3 text-primary">Fast Feature Delivery</h5>
                     <p class="card-text text-secondary">Local manufacturing of solar panels can lead to faster delivery times. Solar panel manufacturers can also design and produce panels that are tailored to local conditions and customer requirements. </p>
                  </div>
               </div>
            </div> --}}
         </div>
      </div>
      <!-- why choose us section end -->

      
     <!-- faq question start -->
<div class="container mt-5">
   <div class="row">
      <h2 class="text-center underline">Frequently Asked Questions </h2>
      <div class="col-lg-5 mt-3">
         <img src="website/assets/img/faq-img.gif" class="img-fluid w-100 h-100">
      </div>
      <div class="col-lg-7 mt-3">
         <div class="accordion">
            <div class="accordion__item">
               <div class="accordion__header" data-toggle="#faq1">How do solar panels work?</div>
               <div class="accordion__content" id="faq1">
                  <p>As sunlight cascades on the solar panels, a chemical reaction takes place and Direct Current (DC) power is produced. The DC power flows to an inverter where the DC power is transformed into Alternating Current (AC) power. This AC power is what the electric grid and your home runs on. The power or energy then flows to power your home or directly to the electric grid.</p>
               </div>
            </div>
            <div class="accordion__item">
               <div class="accordion__header" data-toggle="#faq2">Does solar power work at night?</div>
               <div class="accordion__content" id="faq2">
                  <p>Solar Panels require direct sunlight to produce power. So do solar panels work at night? No, but there are ways to get the power you need from the solar panels at night. Batteries are a great way to cover your power when the sun is not shining.</p>
               </div>
            </div>
            <div class="accordion__item">
               <div class="accordion__header" data-toggle="#faq3">How much do solar panels cost?</div>
               <div class="accordion__content" id="faq3">
                  <p>The price of solar power has dropped drastically over the past decade. Cost really depends on a lot of factors such as brand, size, type, and other things.</p>
               </div>
            </div>
            <div class="accordion__item">
               <div class="accordion__header" data-toggle="#faq4">Do solar panels work in the rain?</div>
               <div class="accordion__content" id="faq4">
                  <p>Yes, solar panels work in the snow, though any accumulating snow will need to be removed from the panels to ensure they are receiving direct sunlight.
                  </p>
               </div>
            </div>
            <div class="accordion__item">
               <div class="accordion__header" data-toggle="#faq5">Do solar panels work in the winter?</div>
               <div class="accordion__content" id="faq5">
                  <p>Solar output is also slightly reduced in the winter months, but you are still able to get most of the power you normally would. The good news is people tend to use less power in winter months vs. the summer, so this plays a factor as well.</p>
               </div>
            </div>
            <div class="accordion__item">
               <div class="accordion__header" data-toggle="#faq6">Do solar panels work in the shade? </div>
               <div class="accordion__content" id="faq6">
                  <p>Solar panels need direct sunlight to generate electricity, so shading will have a major impact on the power output.
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- faq question end -->
      <!-- contact form start -->
      <div class="container-fluid mt-5">
         <div class="row">
             <!-- Google Map Section -->
             <div class="col-lg-6 p-0">
                 <iframe 
                     src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d56906.996613378746!2d75.726848!3d26.9451264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1738737503954!5m2!1sen!2sin"
                     class="img-fluid w-100 shadow-lg rounded"
                     style="border: 0; height: 100%; min-height: 600px;"
                     allowfullscreen=""
                     loading="lazy">
                 </iframe>
             </div>
     
             <!-- Contact Form Section -->
             <div class="col-lg-6 p-4 d-flex align-items-center" style="background: linear-gradient(135deg, #ffffff, #f8f9fa);">
                 <form class="w-100 p-4 shadow-sm rounded bg-white" action="{{url('contacts')}}" method="POST" enctype="multipart/form-data">
                     @csrf
                     <h2 class="text-center text-primary mb-4">📞 Contact Us</h2>
     
                     <div class="mb-3">
                         <label for="fname" class="form-label fw-bold text-dark">First Name:</label>
                         <input type="text" class="form-control border-0 shadow-sm p-2" id="fname" name="fname" placeholder="Enter first name">
                     </div>
     
                     <div class="mb-3">
                         <label for="lname" class="form-label fw-bold text-dark">Last Name:</label>
                         <input type="text" class="form-control border-0 shadow-sm p-2" id="lname" name="lname" placeholder="Enter last name">
                     </div>
     
                     <div class="mb-3">
                         <label for="email" class="form-label fw-bold text-dark">Email Address:</label>
                         <input type="email" class="form-control border-0 shadow-sm p-2" id="email" name="email" placeholder="Enter your email">
                     </div>
     
                     <div class="mb-3">
                         <label for="address" class="form-label fw-bold text-dark">Address:</label>
                         <input type="text" class="form-control border-0 shadow-sm p-2" id="address" name="address" placeholder="Enter your address">
                     </div>
     
                     <div class="mb-3">
                         <label for="solar" class="form-label fw-bold text-dark">Select Requirement:</label>
                         <select class="form-select border-0 shadow-sm p-2" id="solar" name="solar">
                             <option selected disabled>Choose an option...</option>
                             <option>Residential Solar Panel</option>
                             <option>Commercial Solar Panel</option>
                             <option>Industrial Solar Panel</option>
                         </select>
                     </div>
     
                     <button type="submit" class="btn btn-primary btn-lg w-100 shadow-sm">🚀 Submit</button>
                 </form>
             </div>
         </div>
     </div>
     
      <!-- contact form end -->
     @endsection