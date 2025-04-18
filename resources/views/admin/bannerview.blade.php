@extends('admin.layouts.app')

@section('admin.content')

<main id="main" class="main">
   <div class="pagetitle">
      <h1>Table Layouts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('bannercreate') }}">Home</a></li>
          <li class="breadcrumb-item">Table</li>
          <li class="breadcrumb-item active">Layouts</li>
        </ol>
      </nav>
    </div>  
    
    <div class="container-fluid mt-5">
      <div class="row">
          <div class="col-lg-12">
              <div class="d-flex justify-content-end">
                  <a href="{{ url('bannercreate') }}">
                      <button class="btn btn-primary mx-2">Create</button>
                  </a> 
              </div>

              <div class="table-responsive">
                  <table class="table table-bordered mt-3">
                      <thead>
                          <tr class="text-center">
                              <th>ID</th> 
                              <th>Route Name</th> 
                              <th>Desktop_Image</th> 
                              <th>mobile_Image</th>  
                              <th>Heading</th>  
                              <th>Sub Heading</th> 
                              <th>Order</th> 
                              <th>Overlay Text</th>
                              <th>Status</th>
                              <th colspan="3">Action</th>
                          </tr>
                      </thead>
                      <tbody> 
                          @foreach($banner as $b) 
                          <tr class="text-center">
                              <td>{{ $loop->iteration }}</td> 
                              <td>{{ $b->route_name }}</td>
                              <td>
                                <img src="{{ asset('storage/' . $b->desktop_image) }}" width="60px" alt="banner image">
                              </td>
                              <td>
                                <img src="{{ asset('storage/' . $b->mobile_image) }}" width="60px" alt="banner image">
                              </td>
                              <td>{{ $b->heading }}</td>  
                              <td>{{ $b->sub_heading }}</td> 
                              <td>{{ $b->order_by_count }}</td> 
                              <td>
                                  @if($b->is_overlay_text == 1)
                                      <span class="text-primary fw-bold">Yes</span>
                                  @else
                                      <span class="text-muted fw-bold">No</span>
                                  @endif
                              </td>
                              <td>
                                  @if($b->status == 1)
                                      <span class="text-success fw-bold">Active</span>
                                  @else
                                      <span class="text-danger fw-bold">Unactive</span>
                                  @endif
                              </td> 
                              <td>
                                 <a class="btn btn-outline-success btn-sm" href="{{ url('banneredit', $b->id) }}">
                                     <i class="bi bi-pencil-square"></i>
                                 </a>
                              </td>
                              <td>
                                 <a class="btn btn-outline-danger btn-sm" href="{{ url('bannerdestroy', $b->id) }}">
                                     <i class="bi bi-trash"></i>
                                 </a>
                              </td>
                              <td>
                                 <a class="btn btn-outline-warning btn-sm" href="{{ url('bannerpdelete', $b->id) }}">
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
