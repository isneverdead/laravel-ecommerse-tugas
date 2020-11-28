@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
        <img class="col-sm-12" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Go back</a>
        <h2>{{$product['name']}}</h2>
        <h3>Price : {{$product['price']}}</h3>
        <h4>Details : {{$product['description']}}</h4>
        <h4>Category : {{$product['category']}}</h4>

        
        @if(auth()->user() != null && auth()->user()->is_admin == 1)
        <form action="/admin/remove-barang/{{$product->id}}" method="POST">
            @csrf 
            <input type="hidden" name="product_id" value={{$product['id']}}>
            <button style="margin: 20px" class="btn btn-danger">Delete</button>
        </form>
        @else
        <form action="/add_to_cart" method="POST">
            @csrf 
            <input type="hidden" name="product_id" value={{$product['id']}}>
            <button style="margin: 20px" class="btn btn-primary">Add to Cart</button>
        </form>
        @endif
        <button style="margin: 20px" class="btn btn-success">Buy Now</button>
        </div>
    </div>
</div>
    
@endsection