@extends('welcome')
@section('route')

<x-slot name="title">
 
Tickets

</x-slot>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-12">
       <div class="card">
          <div class="card-header">
              <h4>
              Tickets
                <a href="{{ url('categories/create') }}" class="btn btn-primary float-end">Add Ticket</a>
              </h4>
          </div>
          <div class="card-body">

              <!-- {{ $categories }} -->


              <table class="table table-bordered table-striped">
                 <thead>

                   <tr>
                      <th>ID</th>
                      <th>Title of problem</th>
                      <th>Details</th>
                  </tr>     

                 </thead>

                 <tbody>

                   @foreach ($categories as $item )
                        <tr>
                            <td>{{  $item ->id }}</td>
                            <td>{{  $item ->name }}</td>
                            <td>{{  $item ->description }}</td>


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

<hr />

@endsection