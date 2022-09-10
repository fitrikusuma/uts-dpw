<?php

namespace App\Http\Controllers;
use App\Models\Artikel; 

class ArtikelController extends Controller
{

    function index(){
        $data['list_artikel'] = artikel::all();
        return view('artikel.index', $data);  
    }

    function create(){
        return view('artikel.create');  
    }

    function store(){
        $artikel = new Artikel;
        $artikel->judul = request('judul');
        $artikel->penulis = request('penulis');
        $artikel->tanggal = request('tanggal');
        $artikel->deskripsi = request('deskripsi');
        $artikel->save();

        return redirect('admin/artikel')->with('success', 'Data Berhasil Ditambahkan');

    }

    function show(Artikel $artikel){
        $data['artikel'] = $artikel;
        return view('artikel.show', $data);
    }

    function edit(Artikel $artikel){
        $data['artikel'] = $artikel;
        return view('artikel.edit', $data);
     
    }

    function update(Artikel $artikel){
        $artikel->judul = request('judul');
        $artikel->penulis = request('penulis');
        $artikel->tanggal = request('tanggal');

        $artikel->deskripsi = request('deskripsi');
        $artikel->save();

        return redirect('admin/artikel')->with('success', 'Data Berhasil Diedit');
     
    }

    function destroy(Artikel $artikel){
        $artikel->delete();

        return redirect('admin/artikel')->with('danger', 'Data Berhasil Dihapus');
     
    }

    function filter(){
        $nama = request('nama');
        $stok = explode(",", request('stok'));
        $data['harga_min'] = $harga_min = request('harga_min');
        $data['harga_max'] = $harga_max = request('harga_max');
        //$data['list_artikel'] = Artikel::where('nama', 'like', "%$nama%")->get();
        //$data['list_artikel'] = Artikel::whereIn('stok', $stok)->get();
        $data['list_artikel'] = Artikel::whereBetween('harga', [$harga_min, $harga_max])->get();
        //$data['list_artikel'] = Artikel::where('stok', '<>', $stok)->get();
        //$data['list_artikel'] = Artikel::whereNotIn('stok', $stok)->get();
        //$data['list_artikel'] = Artikel::whereNotBetween('harga', [$harga_min, $harga_max])->get();
        //$data['list_artikel'] = Artikel::whereNotNull('stok')->get();
        //$data['list_artikel'] = Artikel::whereDate('created_at', ['2022-08-21', '2022-08-31'])->get();
        //$data['list_artikel'] = Artikel::whereBetween('harga', [$harga_min, $harga_max])->whereNotIn('stok', [35])->whereYear('created_at', '2021')->get();
        $data['nama'] = $nama;
        $data['stok'] = request('stok');

        return view('artikel.index', $data);
    }

}