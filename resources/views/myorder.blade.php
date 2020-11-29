@extends('layouts.app')
@section('content')
<div class="container custom-product">
    
     
      <div class="col-sm-10">
        <div class="trending-wrapper">
            <h3>Orders List</h3>
          @foreach ($orders as $item)
          <div class="row searched-item mb-3">
          <div class="col-sm-3">
            <a href="detail/{{$item->id}}">
                <img class="trending-image col-sm-12" src="{{ $item->gallery }}" >
                
            </a>
          </div>
          <div class="col-sm-9">
            
            <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between align-items-center ">Delivery Status : <span>{{ $item->status }}</span></li>
              <li class="list-group-item d-flex justify-content-between align-items-center">Payment Status : <span>{{ $item->payment_status }}</span></li>
              <li class="list-group-item d-flex justify-content-between align-items-center">Payment Method : <span>{{ $item->payment_method }}</span></li>
              <li class="list-group-item d-flex justify-content-between align-items-center">Delivery Address : <span>{{ $item->address }}</span></li>
              <li class="list-group-item  d-flex justify-content-between align-items-center">Price : <span>Rp.{{ $item->price }}</span> </li>
            </ul>
               
            
          </div>
          
          </div>
          @endforeach
        </div>
      </div>
</div>
    
@endsection