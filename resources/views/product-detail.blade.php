@extends('master')
@section('content')
<div class="container" id="nav-bottom-margin">
    <div class="row">
        <div class="col-sm-6">
            <img  src="{{ Storage::url($product->gallery) }}">
        </div>
        <div class="col-6">
            <h3>{{$product['name']}}</h3>
            <h4>Price : Rs. {{$product['price']}}.00</h4>
            <h4>Specification : {{$product['description']}}</h4><br>
            <form action="/add-to-cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value={{$product['id']}}>
                <button class="btn btn-primary">Add to Cart</button>
            </form>
            <br><button class="btn btn-primary">Buy</button>
        </div>
    </div>
</div>
@endsection