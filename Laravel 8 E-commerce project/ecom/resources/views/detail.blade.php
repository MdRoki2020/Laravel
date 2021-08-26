@extends('master')
@section('content')

<div class=''>

    <div class='row'>
    <div class='col-sm-6'>
        <img class='img-fluid' src='{{$product["gallery"]}}'/>
    </div>
    <div class='col-sm-6'>
        <br/><br/>
        <a href='/'>Go Back</a>
        <br/><br/>
        <h2>{{$product["name"]}}</h2>
        <h3>Price: {{$product["price"]}}</h3>
        <h4>Details: {{$product["discription"]}}</h4>
        <h4>Category: {{$product["category"]}}</h4>
        <br/><br/>
        <form action='add_to_cart' method="post">
           @csrf
        <input type="hidden" name="product_id" value="{{$product['id']}}"/>
        <input type="submit" class="btn btn-primary" value="Add to Cart"/>
        </form>
        <br/><br/>
        <button class='btn btn-success'>Buy Now</button>
    </div>
    </div>

</div>

@endsection