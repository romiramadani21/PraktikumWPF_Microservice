<?php

namespace App\Http\Controllers;

use App\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
   
    public function index()
    {
        $kategoris = Kategori::all();
        $data['kategori'] = $kategoris;
        return view('kategori.index',$data);
    }

    public function create()
    {
        $data['action'] = 'kategori.store';
        return view('kategori.form',$data);
    }

    public function store(Request $request)
    {
        $kategori = new Kategori();
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->status = $request->status;
        $kategori->save();

        return redirect('/kategori');
    }

    public function edit(Kategori $kategori)
    {
        $kategori = Kategori::find($kategori->id);
        $data['action'] = 'kategori/update';
        $data['kategori'] = $kategori;
        return view('kategori.form',$data);
    }

    public function update(Request $request)
    {
        $kategori =Kategori::find($request->id);
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->status = $request->status;
        $kategori->save();
        return redirect('/kategori');
    }

    public function delete($id)
    {
        $kategori = Kategori::find($id);
        $kategori->delete();
        return redirect('/kategori');
    }
}
