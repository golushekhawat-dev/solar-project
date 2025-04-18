
@extends('admin.layouts.app')

@section('admin.content')

<main id="main" class="main">
   <div class="pagetitle">
      <h1>Table Layouts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('indexcreate')}}">Home</a></li>
          <li class="breadcrumb-item">Table</li>
          <li class="breadcrumb-item active">Layouts</li>
        </ol>
      </nav>
    </div>  
    
    <div class="container-fluid mt-5">
      <div class="row">
          <div class="col-lg-12">
              <div class="d-flex justify-content-end">
                  <a href="{{ url('indexcreate') }}">
                      <button class="btn btn-primary mx-2"> Create</button>
                  </a>
              </div>
  
              <div class="table-responsive"> <!-- Table Responsive banaya -->
                  <table class="table table-bordered mt-3">
                      <thead>
                          <tr class="text-center">
                              <th>ID</th> 
                              <th>Logo</th> 
                              <th>Address</th> 
                              <th>Email</th> 
                              <th>Mobile</th>   
                              <th>GST</th> 
                              <th>Status</th>
                              <th colspan="3">Action</th>
                          </tr>
                      </thead>
                      <tbody> 
                          @foreach($content as $c) 
                          <tr class="text-center">
                              <td>{{ $loop->iteration }}</td> 
                              <td>
                                  <img src="{{ asset( 'storage/'.$c->logoimage) }}" width="50px" class="img-fluid rounded" alt="Logo">
                              </td>  
                              <td>{{ Str::limit($c->address, 30) }}</td> <!-- Text limit -->
                              <td>{{ Str::limit($c->email, 25) }}</td>  
                              <td>{{ $c->mobilenumber }}</td> 
                              <td>{{ $c->gstnumber }}</td> 
                              <td>
                                  @if($c->status == 1)
                                      <span class="text-success fw-bold">Active</span>
                                  @else
                                      <span class="text-danger fw-bold">Unactive</span>
                                  @endif
                              </td> 
                              <td>
                                 <a class="btn btn-outline-success btn-sm" href="{{ url('indexedit', $c->id) }}">
                                     <i class="bi bi-pencil-square"></i>
                                 </a>
                             </td>
                             <td>
                                 <a class="btn btn-outline-danger btn-sm" href="{{ url('indexdestroy', $c->id) }}">
                                     <i class="bi bi-trash"></i>
                                 </a>
                             </td>
                             <td>
                                 <a class="btn btn-outline-warning btn-sm" href="{{ url('indexpdelete', $c->id) }}">
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