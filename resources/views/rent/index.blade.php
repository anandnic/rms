@extends('layouts.main')

@section('content')
<h2 class="mt-4">Dashboard</h2>
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Rent Tenent List</div>

                <div class="card-body">
                <table class="table table-striped table-xm">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Mobile</th>
      <th scope="col">email</th>
      <th scope="col">Type</th>
      <th scope="col">Shop</th>
      <th scope="col">Active</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($rentuser as $rentuser)
    <tr>
      <th scope="row">{{$rentuser->id}}</th>
      <td>{{$rentuser->fullname}}</td>
      <td>{{$rentuser->address}}</td>
      <td>{{$rentuser->mobile}}</td>
      <td>{{$rentuser->email}}</td>
      <td>{{$rentuser->usertype}}</td>
      <td>{{$rentuser->shopname}}</td>
      <td>{{($rentuser->active) ? 'active':'inactive'}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
                
                </div>
            </div>
        </div>
    </div>

@endsection