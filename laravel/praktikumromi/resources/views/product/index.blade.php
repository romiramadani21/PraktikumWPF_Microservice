@extends('master')
@section('judul','Data Produk')
@section('content')
  <div class="card-tools">
   <a href="{{ url('product/create') }}"> <small class="badge badge-primary"><i class="fa fa-plus"></i>Tambah Data</small>
    </a>
</div><br/>
    <table id="tabel_product" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Satuan</th>
                <th>Jumlah</th>
                <th>Harga Awal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $key => $value)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$value->nama}}</td>
                <td>{{$value->satuan}}</td>
                <td>{{$value->jumlah}}</td>
                <td>{{$value->harga_awal}}</td>
                <td><a href="{{url('product/'.$value->id.'/edit')}}"><small class="badge badge-warning"><i class="fa fa-edit text-white"></i></small></a> | 
                    <a href="{{url('product/delete/'.$value->id)}}"><small class="badge badge-danger"><i class="fa fa-trash"></i></small></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection