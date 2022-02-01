@extends('layouts.main')

@section('content')
<!-- <h2 class="mt-4">Dashboard</h2> -->
<br>
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="text-align: center;"><h4>Create Shop Tenent User</h4></div>

                <div class="card-body">
                   <!--FORM  -->
                   <div class="container">
                   <form method="POST" action="/rentuser">
                   @csrf
                        <div class="form-group mb-3 col-sm-10">
                            <label for="fullname">Full Name</label>
                            <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Full Name">
                        </div>
                        <div class="form-group mb-3 col-sm-10">
                            <label for="address">Address</label>
                            <textarea class="form-control" name="address" id="address" placeholder="Address"></textarea>
                        </div>
                        <div class="form-group mb-3 col-sm-10">
                            <label for="mobile">Mobile</label>
                            <input type="tel" class="form-control" name="mobile" id="mobile" placeholder="Mobile">
                        </div>
                        <div class="form-group mb-3 col-sm-10">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="email">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Type of User</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01" name="usertype">
                                <option selected>Choose...</option>
                                <option value="shop">Shop</option>
                                <option value="house">Rent House</option>
                                
                            </select>
                            </div>
                        <div class="form-group mb-3 col-sm-10">
                            <label for="shopname">Shop Name</label>
                            <input type="text" class="form-control" name="shopname" id="shopname" placeholder="shopname">
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                        </div>
                   <!--FORM  -->
                
                </div>
            </div>
        </div>
    </div>

@endsection