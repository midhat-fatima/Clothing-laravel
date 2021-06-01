@extends('master')
@section('content')

<div class="custom-product">
    <div class="col-sm-10">
        <div class="treading-wrapper">
            <h2>Thank You !!!! Orders List</h2>
            <br><br>
            <div class="">
                @foreach($orders as $item)
                    <div class="row searching-item cart-list-divider">
                        <div class="col-sm-3">
                            <a href="detail/{{$item->id}}">
                            <img class="treading-img" src="{{$item->gallery}}">
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <div class="">
                                <h3>{{$item->name}}</h3>
                                <h5>Delivery Status : {{$item->status}}</h5>
                                <h5>Payment Status : {{$item->payment_status}}</h5>
                                <h5>Payment Method : {{$item->payment_method}}</h5>
                                <h5>Delivery Address : {{$item->address}}</h5>
                                <h5>Price : {{$item->price}}</h5>
                            </div>
                        </div>
                        <div class="col-sm-3">
                              
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection