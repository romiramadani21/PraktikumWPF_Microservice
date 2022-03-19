@extends('master')
@section('judul','Data Produk')
@section('content')
  <div class="card-tools">
   <a href="{{ url('karyawan/create') }}"> <small class="badge badge-primary"><i class="fa fa-plus"></i>Tambah Data</small>
    </a>
</div><br/>
    <table id="tabel_karyawan" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Karyawan</th>
                <th>jabatan</th>
                <th>Tanggal Lahir</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($karyawan as $key => $value)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$value->nama_karyawan}}</td>
                <td>{{$value->jabatan}}</td>
                <td>{{$value->tgl_lahir}}</td>
                <td><a href="{{url('karyawan/'.$value->id.'/edit')}}">
                    <small class="badge badge-warning"><i class="fa fa-edit text-white"></i></small></a> | 
                    <a href="{{url('karyawan/delete/'.$value->id)}}">
                        <small class="badge badge-danger"><i class="fa fa-trash"></i></small></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection