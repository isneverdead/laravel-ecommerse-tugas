@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <form class="row ">
                <div class="col-sm-6">
                  <label for="inputCategory">Tambah Kategori</label>
                  <input type="text" class="form-control" id="inputCategory" aria-describedby="inputCat">
                  
                </div>
                <div class="col-sm-2">

                    <button type="submit" class="align-bottom btn btn-primary">Submit</button>
                </div>
              </form>
            <ul class="list-group">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
              </ul>
        </div>
    </div>
</div>
    
@endsection