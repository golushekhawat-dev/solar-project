 <!-- footer start -->

 @php 
        $content =App\Models\indexs::first();
        @endphp

 <footer class="pt-5 mt-3 text-light" style="background-color:	#004d99">
    <div class="container">
       <div class="row">
          <div class="col-lg-4"> 
            <a class="navbar-brand fw-bold" href="#"><img src="{{asset('storage/'.$content->logoimage)}}" alt="" class="img-fluid"></a>

             <!-- <h3 class="fw-bold">Advance Solar Soluction</h3> -->
          
             <p>APS Solar Panels are designed with cutting-edge photovoltaic technology to provide maximum energy output, durability, and performance. Whether you’re powering a home, business, or industrial unit, APS ensures long-term energy savings with minimal maintenance.</p>
             
          </div>
          <div class="col-lg-2 mt-3">
             <h3>Menu</h3>
             <ul class="list-unstyled pt-2">
                <a href="{{route('home')}}" class="text-light">
                   <li class="py-1">Home</li>
                </a>
                <a href="{{route('project')}}" class="text-light">
                   <li class="py-1">Project</li>
                </a>
                <a href="{{route('product')}}" class="text-light">
                  <li class="py-1">Product</li>
               </a>
                <a href="{{route('ourvision')}}" class="text-light">
                   <li class="py-1">Our-Vision</li>
                </a>
                <a href="{{route('career')}}" class="text-light">
                   <li class="py-1">Careers</li>
                </a>
                <a href="{{route('about')}}" class="text-light">
                   <li class="py-1">About Us</li>
                </a>
                <a href="{{route('contacts')}}" class="text-light">
                   <li class="py-1">Contact</li>
                </a>
                <a href="{{route('query')}}" class="text-light">
                  <li class="py-1">Query</li>
               </a>
             </ul>
          </div>
         
          <div class="col-lg-6 mt-3"> 
             <p class="pt-2">{!!($content->address)!!}</p> 
               <p>GSTIN :{!!($content->gstnumber)!!}</p>
           
             <p class="mb-2"><span><i class="fa-duotone fa-solid fa-phone"></i></span>&nbsp &nbsp{!!($content->mobilenumber)!!}</p>
             <p class="mb-2"><span><i class="fa-regular fa-envelope"></i></span>&nbsp &nbsp{!!($content->email)!!}</p>
             <div class="social-media pt-2">
               <a href="#" class="text-light fs-4 me-3"><i class="fa-brands fa-facebook"></i></a>
               <a href="#" class="text-light fs-4 me-3"><i class="fa-brands fa-instagram"></i></i></a>
               <a href="#" class="text-light fs-4 me-3"><i class="fa-brands fa-whatsapp"></i></a>
               <a href="#" class="text-light fs-4 me-3"><i class="fa-brands fa-twitter"></i></i></a>
               <a href="#" class="text-light fs-4"><i class="fa-brands fa-linkedin"></i></a>
            </div>
          </div>
      
       </div>
       <hr>
       <div class="d-sm-flex justify-content-between py-1">
          <p>© Copyright 2020-2025 Apna Payment Services Pvt. Ltd.. All rights reserved.   </p>
          <p>
             <a href="#" class="text-light text-decoration-none pe-4">Terms of use</a>
             <a href="#" class="text-light text-decoration-none"> Privacy policy</a>
          </p>
       </div>
    </div>
    {{-- <a href="https://api.whatsapp.com/send?phone=51000000000&text=olá" class="whatsapp-button" target="_blank" style="position: fixed;  right: 15px; bottom: 15px;">
    <img src="https://i.ibb.co/VgSspjY/whatsapp-button.png" alt="botão whatsapp">
    </a> --}}
 </footer>
 <!-- footer end -->
