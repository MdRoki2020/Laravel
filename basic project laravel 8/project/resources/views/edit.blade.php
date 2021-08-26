@extends('master')
@section('content')


    <div class="col-md-6">
        <h1>Student Update</h1><br/>

        <form action="edit" method="post">
            @csrf
            <div>
                <input type="hidden" name='id' value="{{$data['id']}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">First Name</label>
                <input type="text" value="{{$data['fname']}}" name="fname" class="form-control"  placeholder="Enter First Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Last Name</label>
                <input type="text" value="{{$data['lname']}}" name="lname" class="form-control"  placeholder="Enter Last Name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" value="{{$data['email']}}" name="email" class="form-control"  placeholder="Enter email">
            </div>
            <button type="submit" class="btn btn-primary form-control updateBtn">update</button>
        </form>
    </div>

    <div class="col-md-6">
    </div>
@endsection
