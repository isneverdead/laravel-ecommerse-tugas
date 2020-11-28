@extends('layouts.app')
@section('content')
<div class="container custom-product">
    
     
      <div class="col-sm-10">
        <div class="trending-wrapper">
            <h3>Cart List</h3>
            <a  href="/checkout"><button style="margin: 10px" class="btn btn-success">Checkout</button></a>
          @foreach ($products as $item)
          <div class="row searched-item cart-list-devider">
          <div class="col-sm-3">
            <a href="detail/{{$item->id}}">
                <img class="col-sm-12" src="{{ $item->gallery }}" >
                
            </a>
          </div>
          <div class="col-sm-3">
            
                
                <div class="">
                  <h2>{{ $item->name }}</h2>
                  <h5>{{ $item->description }}</h5>
                  
                </div>
            
          </div>
          <div class="col-sm-3">
          <a href="/removecart/{{$item->cart_id}}">
        
            <button class="btn btn-danger">Remove from cart</button>
        </a>
          </div>
          </div>
          @endforeach
        </div>
      </div>
</div>
    
@endsection