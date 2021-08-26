@extends('master')
@section('content')
    <div class="title">
        <h1>Resister Students</h1>
    </div>

    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Address</th>
            <th scope="col">Email</th>
            <th scope="col">Picture</th>
            <th scope="col">Submit Time</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($user as $item)
            <tr>
            <td>{{$item['fname']}}</td>
            <td>{{$item['lname']}}</td>
            <td>{{$item['address']}}</td>
            <td>{{$item['email']}}</td>
            <td><img src="{{asset('uploads/'.$item['picture'])}}" width="70px" height="70px"/></td>
            <td>{{$item['signupTime']}}</td>
            <td>
                <a class='btn btn-info' href={{'edit/'.$item['id']}}>Edit</a>
                <a class='btn btn-danger' href={{'delete/'.$item['id']}}>Delete</a>
            </td>
            <tr>
        @endforeach
        </tbody>
    </table>

@endsection
