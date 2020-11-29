@extends('layouts.app')
@section('content')
<div class="container">


    <div class="trending-wrapper">
        <div class="row">
          <h3 class="col-sm-4">Your favorite Products</h3>
        </div>
        <div class="row">
         
          @foreach ($favItem as $item)
          <div class="card col-sm-3 mr-3" style="width: 18rem; position: relative;">
            <img src="{{ $item->gallery }}" class="card-img-top" alt="...">
            <a href="favorite/remove/{{ $item->favorite_id }}">
              <h3 style="position: absolute; top:10px; right:10px; color:rgb(235, 49, 80); background-color:rgba(250, 250, 250, 0.486); padding:5px; border-radius:15%;"><i class="fas fa-heart"></i>
            </a>

            </h3>
            <div class="card-body">
              <h5 class="card-title">{{ $item->name }}</h5>
              <p class="card-text">{{ $item->description }}</p>
              <div class="row">

                <a href="/detail/{{ $item->id }}" class="mx-auto"><button type="button" class="btn btn-outline-danger px-5 ">Beli</button>
                </a>
              </div>
            </div>
          </div>
           
          @endforeach
        </div>
    </div>
    </div>
    
@endsection