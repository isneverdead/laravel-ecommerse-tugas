@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Product</div>
 
                <div class="card-body">
                    <form action="add-barang" method="POST">
                      @csrf
                        <div class="form-group">
                          <label for="inputBarang">Nama Barang</label>
                          <input type="text" name="namaBarang" class="form-control" id="inputBarang" aria-describedby="namaBarang">
                          <small id="namaBarang" class="form-text text-muted">Tuliskan nama barang</small>
                        </div>
                        
                        <div class="form-group">
                          <label for="inputHargaBarang">Harga Barang</label>
                          <input type="text" name="hargaBarang" class="form-control" id="inputHargaBarang" aria-describedby="hargaBarang">
                          <small id="hargaBarang" class="form-text text-muted">Tuliskan Harga barang</small>
                        </div>
                        <div class="form-group">
                            <label for="inputUrlBarang">Url foto Barang</label>
                            <input type="text" name="urlBarang" class="form-control" id="inputUrlBarang" aria-describedby="urlBarang">
                            <small id="urlBarang" class="form-text text-muted">Tuliskan url foto barang</small>
                        </div>
                        <div class="form-group">
                            <label for="inputKategoriBarang">Kategori Barang</label>
                            <select class="form-control" name="kategoriBarang" id="inputKategoriBarang">
                              @foreach ($data as $item)
                              <option>{{$item->category}}</option>
                              @endforeach
                              
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputDeskripsiBarang">Deskripsi Barang</label>
                            <textarea class="form-control" name="deskripsiBarang" id="inputDeskripsiBarang" rows="3"></textarea>
                        </div>
                        {{-- <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div> --}}
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection