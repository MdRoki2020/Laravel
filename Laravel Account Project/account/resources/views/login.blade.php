@extends('layout')
@section('content')
<h1 class='mb-4'>Login Page</h1>
<div class='col-sm-6'>
<form action="loginsubmit" method="post">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name='email' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name='password' class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<div class='col-sm-6'>
    
</div>
@endsection