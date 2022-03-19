@extends('master')
@section('judul','Data Produk')
@section('content')
    <form action="{{($action!='product.store') ? url($action): route($action) }}" class="form-horizontal" method="POST">
        {{csrf_field() }}
        <input type="hidden" name="id" value="{{ ($action!='product.store') ? $product->id :'' }}">
        <div class="card-body">
          <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama" placeholder="" name="nama" value="{{ ($action!='product.store') ? $product->nama : ''}}">
            </div>
          </div>
          <div class="form-group row">
            <label for="satuan" class="col-sm-2 col-form-label">Satuan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="satuan" placeholder="" name="satuan" value="{{ ($action!='product.store') ? $product->satuan : ''}}">
            </div>
          </div>
          <div class="form-group row">
            <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="jumlah" placeholder="" name="jumlah" value="{{ ($action!='product.store') ? $product->jumlah : ''}}">
            </div>
          </div>
          <div class="form-group row">
            <label for="harga_awal" class="col-sm-2 col-form-label">Harga Awal</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="harga_awal" placeholder="" name="harga_awal" value="{{ ($action!='product.store') ? $product->harga_awal : ''}}">
            </div>
          </div>
          <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Tambah Data</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
    </form>
@endsection