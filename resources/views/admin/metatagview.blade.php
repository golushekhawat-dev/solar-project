
@extends('admin.layouts.app')

@section('admin.content')

<main id="main" class="main">
   <div class="pagetitle">
      <h1>Table Layouts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('metatagcreate')}}">Home</a></li>
          <li class="breadcrumb-item">Table</li>
          <li class="breadcrumb-item active">Layouts</li>
        </ol>
      </nav>
    </div>  
    
    <div class="container-fluid mt-5">
      <div class="row">
          <div class="col-lg-12">
              <div class="d-flex justify-content-end">
                  <a href="{{ url('metatagcreate') }}">
                      <button class="btn btn-primary mx-2">Create</button>
                  </a>
              </div>
  
              <div class="table-responsive"> <!-- Responsive Table -->
                  <table class="table table-bordered mt-3">
                      <thead>
                          <tr class="text-center">
                              <th>ID</th> 
                              <th>Route Name</th> 
                              <th>Meta Title</th> 
                              <th>Meta Description</th> 
                              <th>Meta Keywords</th>  
                              <th>Status</th>
                              <th colspan="3">Action</th>
                          </tr>
                      </thead>
                      <tbody> 
                          @foreach($metadata as $m) 
                          <tr class="text-center">
                              <td>{{ $loop->iteration }}</td> 
                              <td>{{ Str::limit($m->route_name, 20) }}</td> <!-- Limit text -->
                              <td>{{ Str::limit($m->meta_title, 30) }}</td>
                              <td>{{ Str::limit($m->meta_description, 50) }}</td>
                              <td>{{ Str::limit($m->meta_keywords, 40) }}</td>  
                              <td>
                                  @if($m->status == 1)
                                      <span class="text-success fw-bold">Active</span>
                                  @else
                                      <span class="text-danger fw-bold">Inactive</span>
                                  @endif
                              </td> 
                              <td>
                                 <a class="btn btn-outline-success btn-sm" href="{{ url('metatagedit', $m->id) }}">
                                     <i class="bi bi-pencil-square"></i>
                                 </a>
                             </td>
                             <td>
                                 <a class="btn btn-outline-danger btn-sm" href="{{ url('metatagdestroy', $m->id) }}">
                                     <i class="bi bi-trash"></i>
                                 </a>
                             </td>
                             <td>
                                 <a class="btn btn-outline-warning btn-sm" href="{{ url('metatagpdelete', $m->id) }}">
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