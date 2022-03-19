@extends('master')
@section('judul','Data Produk')
@section('content')
  <div class="card-tools">
   <a href="{{ url('kategori/create') }}"> <small class="badge badge-primary"><i class="fa fa-plus"></i>Tambah Data</small>
    </a>
</div><br/>
    <table id="tabel_kategori" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Status</th>              
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kategori as $key => $value)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$value->nama_kategori}}</td>
                <td>{{$value->status}}</td>
                <td><a href="{{url('kategori/'.$value->id.'/edit')}}">
                    <small class="badge badge-warning"><i class="fa fa-edit text-white"></i></small></a> | 
                    <a href="{{url('kategori/delete/'.$value->id)}}">
                        <small class="badge badge-danger"><i class="fa fa-trash"></i></small></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection