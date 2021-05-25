@extends('master')
@section('content')

<div class="custom-product">
    <div class="treading-wrapper">
        <h2> Result for Products </h2>
        @foreach($products as $item)
            <div class="searching-item">
                <a href="detail/{{$item['id']}}">
                    <img class="treading-img" src="{{$item['gallery']}}">
                        <div class="">
                            <h3>{{$item['name']}}</h3>
                            <h5>{{$item['decription']}}</h5>
                        </div>
                </a>
            </div>
        @endforeach
    </div>
</div>

@endsection