@extends('master')
@section('content')
<div class="container">
    <h3>Result products</h3>
    <div class="row">
        @foreach ($products as $item)
                <a href="product-detail/{{ $item['id'] }}">
                    <div class="col-sm-10">
                        <img src="{{ Storage::url($item->gallery) }}">
                    </div>
                </a>
                <div class="col-sm-10">
                    <h3>{{$item->name}}</h3>
                    <h4>Price : Rs. {{$item->price}}.00</h4>
                    <h4>Specification : {{$item->description}}</h4><br>
                </div>
        @endforeach
    </div>
</div>
@endsection