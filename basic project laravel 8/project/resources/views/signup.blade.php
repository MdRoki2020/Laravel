@extends('master')
@section('content')


    <div class="col-md-6">
        <h1>Signup Page</h1><br/>

        @if(session('email'))
            <div class="alert alert-success" role="alert">
                <p>Student has heen added</p>
            </div>
        @endif

        <form action="signup" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">First Name</label>
                <input type="text" name="fname" class="form-control"  placeholder="Enter First Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Last Name</label>
                <input type="text" name="lname" class="form-control"  placeholder="Enter Last Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Address</label>
                <select class="form-control" name="address">
                    <option>Select An Address</option>
                    <option>Barishal</option>
                    <option>Chattogram</option>
                    <option>Dhaka</option>
                    <option>Khulna</option>
                    <option>Rajshahi</option>
                    <option>Rangpur</option>
                    <option>Mymensingh</option>
                    <option>Sylhet</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control"  placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Profile Picture</label>
                <input type="file" name="picture" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary form-control">Submit</button>
        </form>
    </div>

    <div class="col-md-6">
    </div>
@endsection
