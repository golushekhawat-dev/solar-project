
@extends('admin.layouts.app')

@section('admin.content')

<main id="main" class="main">
   <div class="pagetitle">
      <h1>Table Layouts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item">Table</li>
          <li class="breadcrumb-item active">Layouts</li>
        </ol>
      </nav>
    </div>  
    
    <div class="container-fluid mt-5">
      <h3 class="text-center text-success fw-bold">Query User Data Table</h3>
      <div class="row">
          <div class="col-lg-12">
              <div class="table-responsive"> 
                  <table class="table table-bordered mt-3">
                      <thead>
                          <tr class="text-center">
                              <th>ID</th> 
                              <th>First Name</th>  
                              <th>Email</th>  
                              <th>Address</th>  
                              <th>Phone</th>  
                              <th>House Size</th>
                              <th>Roof Type</th>
                              <th>Daily Ele. Use</th>
                              <th>Monthly Bill</th>
                              <th>Battery Backup</th>
                              <th>Solar Type</th>
                              <th>Image</th>
                              <th>Status</th>
                              <th colspan="2">Action</th>
                          </tr>
                      </thead>
                      <tbody> 
                          @foreach($data as $d) 
                          <tr class="text-center align-middle">
                              <td>{{ $loop->iteration }}</td>  
                              <td>{{ $d->fname }}</td> 
                              <td>{{ $d->email }}</td> 
                              <td>{{ $d->address }}</td> 
                              <td>{{ $d->mobilenumber }}</td> 
                              <td>{{ $d->house_size }}</td>   
                              <td>{{ $d->roof_type }}</td> 
                              <td>{{ $d->light_avg }}</td> 
                              <td>{{ $d->monthly_bill }}</td> 
                              <td>{{ $d->battery_backup }}</td> 
                              <td>{{ $d->solar_type }}</td>  
                              <td>
                                  <img src="{{ asset( 'storage/'.$d->image) }}" width="50px" class="rounded shadow-sm" alt="image">
                              </td> 
                              <td>
                                  <span class="fw-bold {{ $d->status == 1 ? 'text-success' : 'text-danger' }}">
                                      {{ $d->status == 1 ? 'Active' : 'Inactive' }}
                                  </span>
                              </td> 
                              <td>
                                 <a class="btn btn-outline-danger btn-sm" href="{{ url('querydestroy', $d->id) }}">
                                     <i class="bi bi-trash"></i>
                                 </a>
                             </td>
                             <td>
                                 <a class="btn btn-outline-warning btn-sm" href="{{ url('querypdelete', $d->id) }}">
                                     <i class="bi bi-trash3"></i>
                                 </a>
                             </td>
                             
                          </tr> 
                          @endforeach          
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
  
</main>
@endsection