@extends('master')
@section('judul','Data Produk')
@section('content')
    <form action="{{($action!='karyawan.store') ? url($action): route($action) }}" class="form-horizontal" method="POST">
        {{csrf_field() }}
        <input type="hidden" name="id" value="{{ ($action!='karyawan.store') ? $karyawan->id :'' }}">
        <div class="card-body">
          <div class="form-group row">
            <label for="nama_karyawan" class="col-sm-2 col-form-label">Nama Karyawan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nama_karyawan" placeholder="" name="nama_karyawan" value="{{ ($action!='karyawan.store') ? $karyawan->nama_karyawan : ''}}">
            </div>
          </div>
          <div class="form-group row">
            <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="jabatan" placeholder="" name="jabatan" value="{{ ($action!='karyawan.store') ? $karyawan->jabatan : ''}}">
            </div>
          </div>
          <div class="form-group row">
            <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="tgl_lahir" placeholder="" name="tgl_lahir" value="{{ ($action!='karyawan.store') ? $karyawan->tgl_lahir : ''}}">
            </div>
          </div>
          <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Tambah Data</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
    </form>
@endsection