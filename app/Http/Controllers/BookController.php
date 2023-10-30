<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function databuku(){
        $data = Book::orderBy('id','desc')->get();
        return view('buku.data-buku', compact('data'));
    }
    public function add(){
        return view('buku.add');
    }
    public function insert(request $request){
        $request->validate([
            'nama_buku' => 'required',
            'jml_hal' => 'required | numeric',
            'penerbit' => 'required',
        ],[
        'nama_buku.required' => 'Nama Buku Wajib Diisi!',
        'jml_hal.required' => 'Jumlah Halaman Wajib Diisi!',
        'penerbit.required' => 'Penerbit Wajib Diisi!',
        'jml_hal.numeric' => 'Jumlah Halaman Harus Nomor',
    ]);
       Book::create([
        'nama_buku' => $request->nama_buku,
        'jml_hal' => $request->jml_hal,
        'penerbit' => $request->penerbit,
       ]);

       return redirect()->route('admin.dashboardbuku')->with('sukses', 'Data Berhasil ditambahkan');

    }

    public function edit($id){
        $data = Book::where('id', $id)->first();
        return view('buku.edit  ', compact('data'));
}

    public function update(request $request){
        Book::where('id', $request->id)->update([
            'nama_buku' => $request->nama_buku,
            'jml_hal' => $request->jml_hal,
            'penerbit' => $request->penerbit,
        ]);

    return redirect()->route('admin.dashboardbuku');
      }

      public function delete($id){
        Book::where('id', $id)->delete();
      return redirect()->route('admin.dashboardbuku');
      }
}