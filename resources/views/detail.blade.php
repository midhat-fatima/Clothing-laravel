@extends('master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}">
        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a>
            <h2>Name : {{$product['name']}}</h2>
            <h4>Price : {{$product['price']}}</h4>
            <h4>Category : {{$product['categories']}}</h4>
            <p>Description : {{$product['description']}}</p>
            <br><br>
            <form action="/add_to_cart" method="POST">
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                @csrf
                <button class="btn btn-success">Add To Cart</button>
            </form>
            <br><br>
        </div>
    </div>
</div>

@endsection