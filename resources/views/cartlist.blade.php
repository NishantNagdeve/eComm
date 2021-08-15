@extends('master')
@section('content')
<div class="container" id="nav-bottom-margin">
    <div class="row">
        @foreach ($product as $item)
            <div class="col-sm-12 cartlist-divider">
                <a href="product-detail/{{ $item->product_id}}">
                    <div class="col-sm-4">
                        <img src="{{ Storage::url($item->gallery) }}">
                    </div>
                </a>
            <div class="col-sm-3 cartlist-product-padding">
                <h3>{{$item->name}}</h3>
                <h4>Price : Rs. {{$item->price}}.00</h4>
                <h4>Specification : {{$item->description}}</h4>
            </div>
            <div class="col-sm-3 cartlist-remove-btn-padding">
                <a href="/removecart/{{$item->cart_id}}" class="btn btn-primary">Remove from Cart</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection