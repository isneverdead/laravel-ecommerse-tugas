@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
        <img class="col-sm-12" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6" >
            {{-- <a href="favorite/add/{{ $product['id'] }}">
                <h3 style="position: absolute; top:10px; right:10px; color:rgb(235, 49, 80); background-color:rgba(250, 250, 250, 0.486); padding:5px; border-radius:15%;"><i class="far fa-heart"></i>
    
                </h3>
              </a> --}}
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
    
@endsection