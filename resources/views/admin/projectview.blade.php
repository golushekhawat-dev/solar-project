
@extends('admin.layouts.app')

@section('admin.content')
 
<main id="main" class="main">
   <div class="pagetitle">
      <h1>Table Layouts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{url('projectcreate')}}">Home</a></li>
          <li class="breadcrumb-item">Table</li>
          <li class="breadcrumb-item active">Layouts</li>
        </ol>
      </nav>
    </div>  
    
    <div class="container-fluid mt-5">
      <div class="row">
          <div class="col-lg-12">
              <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4 class="text-primary fw-bold">Projects List</h4>
                  <a href="{{ url('projectcreate') }}" class="btn btn-primary">+ Create</a>
              </div>
  
              <div class="table-responsive">
                  <table class="table table-bordered text-center align-middle">
                      <thead>
                          <tr>
                              <th>ID</th> 
                              <th>Image</th>  
                              <th>Text</th> 
                              <th>Slug</th> 
                              <th>Long Text</th> 
                              <th>Status</th>
                              <th colspan="3">Action</th>
                          </tr>
                      </thead>
                      <tbody> 
                          @foreach($data as $d) 
                          <tr>
                              <td>{{ $loop->iteration }}</td>                            
                                {{-- <td>{{ $d->image }}</td> --}}
                              <td>
                                    <img src="{{ asset('storage/' . $d->image) }}"  width="50px" alt="Project Image">
                            </td>  
                              <td>{{ Str::limit($d->text, 20) }}</td>
                              <td>{{ $d->slug }}</td>
                              <td>{{ Str::limit($d->long_text, 30) }}</td>
                              <td>
                                  <span class="fw-bold {{ $d->status == 1 ? 'text-success' : 'text-danger' }}">
                                      {{ $d->status == 1 ? 'Active' : 'Inactive' }}
                                  </span>
                              </td> 
                              <td>
                                 <a class="btn btn-outline-success btn-sm" href="{{ url('projectedit', $d->id) }}">
                                     <i class="bi bi-pencil-square"></i>
                                 </a>
                             </td>
                             <td>
                                 <a class="btn btn-outline-danger btn-sm" href="{{ url('projectdestroy', $d->id) }}">
                                     <i class="bi bi-trash"></i>
                                 </a>
                             </td>
                             <td>
                                 <a class="btn btn-outline-warning btn-sm" href="{{ url('projectpdelete', $d->id) }}">
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



