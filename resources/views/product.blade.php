@extends('layouts.app')
@section('content')
<div class="container custom-product">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      
      @foreach ($products as $item)
          
      <div class="carousel-item {{$item['id'] == $products['0']['id'] ? 'active' : ''}} "  >
        <a href="detail/{{$item['id']}}">
        
          <img  src="{{ $item['gallery'] }}" class="d-block w-auto " style="height: 500px" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>{{ $item['name'] }}</h5>
            <p>{{ $item['description'] }}</p>
          </div>
        </a>
      </div>
      @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    
      <div class="trending-wrapper ">
          <h3>Trending Products</h3>
          <div class="row">

            @foreach ($products as $item)
            <div class="card col-sm-3" style="width: 18rem; position: relative;">
              <img src="{{ $item['gallery'] }}" class="card-img-top" alt="...">
              <a href="favorite/add/{{ $item['id'] }}">
                <h3 style="position: absolute; top:10px; right:10px; color:rgb(235, 49, 80); background-color:rgba(250, 250, 250, 0.486); padding:5px; border-radius:15%;"><i class="far fa-heart"></i>
    
                </h3>
              </a>
              <div class="card-body mt-auto">
                <h5 class="card-title">{{ $item['name'] }}</h5>
                <div class="row">
  
                  <a href="detail/{{$item['id']}}" class="mx-auto"><button type="button" class="btn btn-outline-danger px-5 ">Beli</button>
                  </a>
                </div>
              </div>
            </div>


            
            @endforeach
          </div>
      </div>
</div>
    
@endsection