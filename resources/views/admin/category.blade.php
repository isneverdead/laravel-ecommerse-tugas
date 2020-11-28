@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <form action="add-category" class="row d-flex justify-content-between align-items-center mb-5 mr-2" method="POST">
                @csrf
                <div class="col-sm-6">
                  <label for="inputCategory">Tambah Kategori</label>
                  <input type="text" name="category" class="form-control" id="inputCategory" aria-describedby="inputCat">
                  
                </div>
                <div class="col-sm-2">

                    <button type="submit" class="align-bottom btn btn-primary">Submit</button>
                </div>
              </form>
              
            <ul class="list-group ">
                @foreach ($data as $item)
            <li class="list-group-item  d-flex justify-content-between align-items-center">
                {{$item->category}} 
                <span>
                <a href="remove-category/{{$item->id}}">
                
                    <button class="btn btn-danger">delete</button>
                </a>
                </span>
            </li>
                @endforeach
                
              </ul>
        </div>
    </div>
</div>
    
@endsection