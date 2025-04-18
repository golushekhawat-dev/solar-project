 <!-- footer start -->

 @php 
        $content =App\Models\indexs::first();
        @endphp

 <footer class="pt-5 mt-3 text-light" style="background-color:	#004d99">
    <div class="container">
       <div class="row">
          <div class="col-lg-4"> 
            <a class="navbar-brand fw-bold" href="#"><img src="{{asset($content->logoimage)}}" alt="" class="img-fluid"></a>

             <!-- <h3 class="fw-bold">Advance Solar Soluction</h3> -->
          
             <p>A solar panel primarily consists of solar cells made from silicon, which are the core component that generates electricity when exposed to sunlight; these cells are then encased in a protective layer of tempered glass, attached to a metal frame, and backed by a protective sheet, making up the main components of a solar panel:. </p>
             
          </div>
          <div class="col-lg-2 mt-3">
             <h3>Menu</h3>
             <ul class="list-unstyled pt-2">
                <a href="{{url('index')}}" class="text-light">
                   <li class="py-1">Home</li>
                </a>
                <a href="{{url('project')}}" class="text-light">
                   <li class="py-1">Project</li>
                </a>
                <a href="{{url('ourvision')}}" class="text-light">
                   <li class="py-1">Our-Vision</li>
                </a>
                <a href="{{url('career')}}" class="text-light">
                   <li class="py-1">Careers</li>
                </a>
                <a href="{{url('about')}}" class="text-light">
                   <li class="py-1">About Us</li>
                </a>
                <a href="{{url('contact')}}" class="text-light">
                   <li class="py-1">Contact</li>
                </a>
             </ul>
          </div>
         
          <div class="col-lg-6 mt-3"> 
             <p class="pt-2">{!!($content->address)!!}</p>

               <p>GSTIN :{!!($content->gstnumber)!!}</p>
               </p>
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
