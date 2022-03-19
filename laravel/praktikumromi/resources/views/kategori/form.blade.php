@extends('master')
@section('judul','Data Produk')
@section('content')
    <form action="{{($action!='kategori.store') ? url($action): route($action) }}" class="form-horizontal" method="POST">
        {{csrf_field() }}
        <input type="hidden" name="id" value="{{ ($action!='kategori.store') ? $kategori->id :'' }}">
        <div class="card-body">
          <div class="form-group row">
            <label for="nama_kategori" class="col-sm-2 col-form-label">Nama Kategori</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama_kategori" placeholder="" name="nama_kategori" value="{{ ($action!='kategori.store') ? $kategori->nama_kategori : ''}}">
            </div>
          </div>
          <div class="form-group row">
            <label for="status" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="status" placeholder="" name="status" value="{{ ($action!='kategori.store') ? $kategori->status : ''}}">
            </div>
          </div>
          <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Tambah Data</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
    </form>
@endsection