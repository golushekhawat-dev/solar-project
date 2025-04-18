@php 
    $content = App\Models\indexs::first(); // Get the first record
@endphp

<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container"> 
            <a class="navbar-brand fw-bold" href="#">
                <img src="{{ asset( 'storage/'.$content->logoimage) }}" alt="Logo" class="img-fluid">
            </a> 

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto fs-6">
                <li class="nav-item ml-4 {{ request()->routeIs('home') ? 'active' : '' }}">
                    <a class="nav-link fw-bold" href="{{ route('home') }}" 
                       style="color: {{ request()->routeIs('home') ? 'orangered' : 'black' }};">
                       Home
                    </a>
                </li>
                <li class="nav-item ml-4 {{ request()->routeIs('project') ? 'active' : '' }}">
                    <a class="nav-link fw-bold" href="{{ route('project') }}" 
                       style="color: {{ request()->routeIs('project') ? 'orangered' : 'black' }};">
                       Project
                    </a>
                </li>
                <li class="nav-item ml-4 {{ request()->routeIs('product') ? 'active' : '' }}">
                    <a class="nav-link fw-bold" href="{{ route('product') }}" 
                       style="color: {{ request()->routeIs('product') ? 'orangered' : 'black' }};">
                       Product
                    </a>
                </li>
                <li class="nav-item ml-4 {{ request()->routeIs('ourvision') ? 'active' : '' }}">
                    <a class="nav-link fw-bold" href="{{ route('ourvision') }}" 
                       style="color: {{ request()->routeIs('ourvision') ? 'orangered' : 'black' }};">
                       Ourvision
                    </a>
                </li>
                <li class="nav-item ml-4 {{ request()->routeIs('career') ? 'active' : '' }}">
                    <a class="nav-link fw-bold" href="{{ route('career') }}" 
                       style="color: {{ request()->routeIs('career') ? 'orangered' : 'black' }};">
                       Careers
                    </a>
                </li>
                <li class="nav-item ml-4 {{ request()->routeIs('about') ? 'active' : '' }}">
                    <a class="nav-link fw-bold" href="{{ route('about') }}" 
                       style="color: {{ request()->routeIs('about') ? 'orangered' : 'black' }};">
                       Abouts
                    </a>
                </li>
                <li class="nav-item ml-4 {{ request()->routeIs('contacts') ? 'active' : '' }}">
                    <a class="nav-link fw-bold" href="{{ route('contacts') }}" 
                       style="color: {{ request()->routeIs('contacts') ? 'orangered' : 'black' }};">
                       Contact
                    </a>
                </li>

                <li class="nav-item ml-4 {{ request()->routeIs('query') ? 'active' : '' }}">
                    <a class="nav-link fw-bold" href="{{ route('query') }}" 
                       style="color: {{ request()->routeIs('query') ? 'orangered' : 'black' }};">
                       Query
                    </a>
                </li>
            </ul>
            
        </div>
    </div>
</nav>
