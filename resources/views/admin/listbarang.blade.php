@extends('layouts.app')
@section('content')
    
<div class="container">


<div class="trending-wrapper">
    <div class="row">
      <h3 class="col-sm-4">List Products</h3>
      <a href="{{ url('/admin/add-barang') }}"><button class="btn btn-success">Tambah Barang</button></a>
    </div>
    <div class="row">

      @foreach ($products as $item)
      <div class="card mr-3" style="width: 18rem;">
        <img src="{{ $item['gallery'] }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{ $item['name'] }}</h5>
          <p class="card-text">{{ $item['description'] }}</p>
          <a href="{{ url('/detail') }}/{{$item['id']}}" class="btn btn-primary">Detail</a>
        </div>
      </div>
        {{-- <div class="trending-item col-sm-6">
        <a href="detail/{{$item['id']}}">
            <img class="trending-image col-sm-6" src="{{ $item['gallery'] }}" >
            <div class="col-sm-6">
                <h3>{{ $item['name'] }}</h3>
                
            </div>
        </a>
        </div> --}}
      @endforeach
    </div>
</div>
</div>
@endsection