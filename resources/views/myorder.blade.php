@extends('layouts.app')
@section('content')
<div class="container custom-product">
    
     
      <div class="col-sm-10">
        <div class="trending-wrapper">
            <h3>Orders List</h3>
          @foreach ($orders as $item)
          <div class="row searched-item cart-list-devider">
          <div class="col-sm-3">
            <a href="detail/{{$item->id}}">
                <img class="trending-image" src="{{ $item->gallery }}" >
                
            </a>
          </div>
          <div class="col-sm-3">
            
                
                <div class="">
                  <h2>{{ $item->name }}</h2>
                  <h5>Delivery Status : {{ $item->status }}</h5>
                  <h5>Payment Status : {{ $item->payment_status }}</h5>
                  <h5>Payment Method : {{ $item->payment_method }}</h5>
                  <h5>Delivery Address : {{ $item->address }}</h5>
                  <h5>Price : {{ $item->price }}</h5>
                  
                </div>
            
          </div>
          <div class="col-sm-3">
          {{-- <a href="/removecart/{{$item->cart_id}}"> --}}
        
            {{-- <button class="btn btn-danger">Remove from cart</button> --}}
        {{-- </a> --}}
          </div>
          </div>
          @endforeach
        </div>
      </div>
</div>
    
@endsection