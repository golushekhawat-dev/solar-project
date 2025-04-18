
@extends('admin.layouts.app')

@section('admin.content')

<main id="main" class="main">
   <div class="pagetitle">
      <h1>Table Layouts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('contact')}}">Home</a></li>
          <li class="breadcrumb-item">Table</li>
          <li class="breadcrumb-item active">Layouts</li>
        </ol>
      </nav>
    </div>  
    
    <div class="container-fluid mt-5">
      <div class="row">
          <div class="col-lg-12">
              <div class="d-flex justify-content-end">
                  <a href="{{ url('contact') }}">
                      <button class="btn btn-primary mx-2">Create</button>
                  </a>
              </div>
  
              <div class="table-responsive"> <!-- Responsive Table -->
                  <table class="table table-bordered mt-3">
                      <thead>
                          <tr class="text-center">
                              <th>ID</th> 
                              <th>First Name</th> 
                              <th>Last Name</th>
                              <th>Email</th>  
                              <th>Address</th>  
                              <th>Solar</th> 
                              <th>Status</th>
                              <th colspan="2">Action</th>
                          </tr>
                      </thead>
                      <tbody> 
                          @foreach($content as $c) 
                          <tr class="text-center">
                              <td>{{ $loop->iteration }}</td>  
                              <td>{{ Str::limit($c->fname, 15) }}</td> <!-- Limit text -->
                              <td>{{ Str::limit($c->lname, 15) }}</td>
                              <td>{{ Str::limit($c->email, 25) }}</td>  
                              <td>{{ Str::limit($c->address, 30) }}</td>  
                              <td>{{ $c->solar }}</td> 
                              <td>
                                  @if($c->status == 1)
                                      <span class="text-success fw-bold">Active</span>
                                  @else
                                      <span class="text-danger fw-bold">Inactive</span>
                                  @endif
                              </td> 
                              <td>
                                 <a class="btn btn-outline-danger btn-sm" href="{{ url('contactdestroy', $c->id) }}">
                                     <i class="bi bi-trash"></i>
                                 </a>
                             </td>
                             <td>
                                 <a class="btn btn-outline-warning btn-sm" href="{{ url('contactpdelete', $c->id) }}">
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