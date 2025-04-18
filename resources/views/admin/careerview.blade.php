
@extends('admin.layouts.app')

@section('admin.content')
 
<main id="main" class="main">
   <div class="pagetitle">
      <h1>Table Layouts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('careercreate')}}">Home</a></li>
          <li class="breadcrumb-item">Table</li>
          <li class="breadcrumb-item active">Layouts</li>
        </ol>
      </nav>
    </div>  
    
    <div class="container-fluid mt-5">
      <div class="row">
          <div class="col-lg-12">
              <div class="d-flex justify-content-end">
                  <a href="{{ url('careercreate') }}">
                      <button class="btn btn-primary mx-2">Create</button>
                  </a> 
              </div>
  
              <div class="table-responsive"> <!-- Table Responsive banaya -->
                  <table class="table table-bordered mt-3">
                      <thead>
                          <tr class="text-center">
                              <th>ID</th> 
                              <th>Banner Image</th> 
                              <th>Banner Text</th>  
                              <th>Slug</th>  
                              <th>Text</th>  
                              <th>Long Text</th>  
                              <th>Main Image</th>  
                              <th>Status</th>
                              <th colspan="3">Action</th>
                          </tr>
                      </thead>
                      <tbody> 
                          @foreach($data as $d) 
                          <tr class="text-center">
                              <td>{{ $loop->iteration }}</td> 
                              <td>
                                <img src="{{ asset('storage/' . $d->banner_img) }}"  width="50px" alt="career image">
                            </td> 
                              <td>{{ Str::limit($d->banner_text, 20) }}</td> <!-- Text limit -->
                              <td>{{ Str::limit($d->slug, 20) }}</td>  
                              <td>{{ Str::limit($d->text, 30) }}</td> 
                              <td>{{ Str::limit($d->long_text, 50) }}</td> 
                              <td>
                                <img src="{{ asset('storage/' . $d->main_img) }}"  width="50px" alt="career Image">
                            </td>  
                              <td>
                                  @if($d->status == 1)
                                      <span class="text-success fw-bold">Active</span>
                                  @else
                                      <span class="text-danger fw-bold">Unactive</span>
                                  @endif
                              </td> 
                              <td>
                                 <a class="btn btn-outline-success btn-sm" href="{{ url('careeredit', $d->id) }}">
                                     <i class="bi bi-pencil-square"></i>
                                 </a>
                             </td>
                             <td>
                                 <a class="btn btn-outline-danger btn-sm" href="{{ url('careerdestroy', $d->id) }}">
                                     <i class="bi bi-trash"></i>
                                 </a>
                             </td>
                             <td>
                                 <a class="btn btn-outline-warning btn-sm" href="{{ url('careerpdelete', $d->id) }}">
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