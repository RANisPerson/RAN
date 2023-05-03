<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    //set buku
    public function index(){
        $data_buku = Buku::all()->sortByDesc('id');
        $no = 0;
        return view('buku.index', compact('data_buku','no'));
    }

    //create
    public function create(Request $request){
        return view('buku.create');
    }

    public function store(Request $request){
        $buku = new Buku();
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->harga = $request->harga;
        $buku->tgl_terbit = $request->tgl_terbit;
        $buku->save();
        return redirect()->route('buku.index');
    }

    public function destroy($id){
        $buku = Buku::find($id);
        $buku->delete();
        return redirect()->route('buku.index');
    }

    public function edit($id){
        $data_buku = Buku::find($id);
        return view('buku.edit', ['data_buku' => $data_buku]);
    }

    public function update(Request $request, $id){
        $buku = Buku::find($id);
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->harga= $request->harga;
        $buku->tgl_terbit = $request->tgl_terbit;
        $buku->save();
        return redirect()->route('buku.index');

    }
}
