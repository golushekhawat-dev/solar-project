<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center bg-white shadow-sm">

  <div class="d-flex align-items-center justify-content-between">
      <a href="{{url('dashboard')}}" class="logo d-flex align-items-center">
          <img src="{{ asset('admin/assets/img/weblogo.png') }}" alt="logo-img">
      </a>
      <i class="bi bi-list toggle-sidebar-btn text-dark"></i>
  </div><!-- End Logo -->

  <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
          <input type="text" name="query" placeholder="Search" title="Enter search keyword" class="form-control">
          <button type="submit" class="btn btn-light border ms-2" title="Search">
              <i class="bi bi-search"></i>
          </button>
      </form>
  </div><!-- End Search Bar -->

  <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
          <li class="nav-item d-block d-lg-none">
              <a class="nav-link nav-icon search-bar-toggle text-dark" href="#">
                  <i class="bi bi-search"></i>
              </a>
          </li><!-- End Search Icon--> 

          <!-- Logout Button -->
          <li class="nav-item">
              <form action="{{route('logout')}}" method="POST">
                @csrf
                  <button type="submit" class="btn btn-outline-dark btn-sm mx-3">
                      <i class="bi bi-box-arrow-right"></i> Logout
                  </button>
              </form>
          </li>
      </ul>
  </nav><!-- End Icons Navigation -->

</header><!-- End Header -->
