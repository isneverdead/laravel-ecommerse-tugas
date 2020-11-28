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
          
      <div class="carousel-item {{$item['id'] == 4 ? 'active' : ''}} "  >
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
            <div class="trending-item col-sm-6">
            <a href="detail/{{$item['id']}}">
                <img class="trending-image col-sm-6" src="{{ $item['gallery'] }}" >
                <div class="col-sm-6">
                  <h3>{{ $item['name'] }}</h3>
                  
                </div>
            </a>
            </div>
            @endforeach
          </div>
      </div>
</div>
    
@endsection