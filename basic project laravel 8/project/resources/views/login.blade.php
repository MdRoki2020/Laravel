@extends('master')
@section('content')


    <div class="col-md-6 login">
        <h1>Login Page</h1><br/>

        @if(Session::has('error'))
            <div class="alert alert-danger">
                {{ Session::get('error')}}
            </div>
        @endif

        <form action="login" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control"  placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary form-control">Submit</button>
        </form>
    </div>

    <div class="col-md-6 extra">
    </div>
@endsection

