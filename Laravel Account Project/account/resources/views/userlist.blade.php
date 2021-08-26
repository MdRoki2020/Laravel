@extends('layout')
@section('content')

<h1>User List Page</h1>

<table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
    @foreach($user as $item)
      <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
      </tr>
    @endforeach
    </tbody>
  </table>

@endsection