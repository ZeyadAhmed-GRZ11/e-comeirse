@extends('welcome')
@section('route')

<x-slot name="title">
 
 Categories

</x-slot>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-12">
       <div class="card">
          <div class="card-header">
              <h4>
                Categories
                <a href="{{ url('categories/create') }}" class="btn btn-primary float-end">Add Category</a>
              </h4>
          </div>
          <div class="card-body">

              <!-- {{ $categories }} -->


              <table class="table table-bordered table-striped">
                 <thead>

                   <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Is Active</th>
                      <th>Action</th>
                  </tr>     

                 </thead>

                 <tbody>

                   @foreach ($categories as $item )
                        <tr>
                            <td>{{  $item ->id }}</td>
                            <td>{{  $item ->name }}</td>
                            <td>{{  $item ->description }}</td>

                            <td>
                              @if ($item ->is_active)
                                  Active
                              @else
                              In-Active
                              @endif
                            </td>

                            <td>
                              <a href=" {{ url('categories/'.$item->id.'/edit') }} " class="btn btn-success">Edit</a>
                              <a href="{{ url('categories/'.$item->id.'/delete') }} " class="btn btn-danger">Delete</a>
                            </td>
                            
                            
                        </tr>
                   @endforeach

                 </tbody>
                

              </table>
          </div>
       </div>
    </div>
  </div>
</div>


@endsection