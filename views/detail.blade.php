@extends('master')
@section("content")
<div class=" container">
    <div class="row">
        <div class="col-sm-6">
            <img class="img-detail" src="{{$product['gallery']}}" alt=''>

        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a>
        <h2>{{$product['name']}}</h2>
        <h3>{{$product['price']}}</h3>
        <h4>Description:{{$product['description']}}</h4>
        <h5>Catagory:{{$product['catagory']}}</h5>
        <br><br>
        <form action="/add_to_cart" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{$product['id']}}">
        <button class="btn btn-primary">Add to Cart</button>
        <br><br>
        <button class="btn btn-success">Buy</button>
        <br><br>
        </div>
    </div>

</div>
@endsection