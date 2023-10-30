<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class DataSiswa extends Controller
{
    public function dataSiswa(){
        $data = Student::orderBy('id','desc')->get();
        return view('siswa.data-siswa', compact('data'));
    }
    public function add(){
        return view('siswa.add');
    }
    public function insert(request $request){
        $request->validate([
            'nama_siswa' => 'required',
            'no_hp' => 'required | numeric',
            'jenkel' => 'required',
        ],[
        'nama_siswa.required' => 'Nama Siswa Wajib Diisi!',
        'no_hp.required' => 'No Hp Wajib Diisi!',
        'jenkel.required' => 'Jenis Kelamin Wajib Diisi!',
        'no_hp.numeric' => 'No Hp Harus Nomor',
    ]);
       Student::create([
        'nama_siswa' => $request->nama_siswa,
        'no_hp' => $request->no_hp,
        'jenkel' => $request->jenkel,
       ]);

       return redirect()->route('admin.datasiswa')->with('sukses', 'Data Berhasil ditambahkan');
    }
    public function edit($id){
        $data = Student::where('id', $id)->first();
        return view('siswa.edit', compact('data'));
}

    public function update(request $request){
        student::where('id', $request->id)->update([
            'nama_siswa' => $request->nama_siswa,
            'no_hp' => $request->no_hp,
            'jenkel' => $request->jenkel,
        ]);

    return redirect()->route('admin.datasiswa');
      }

      public function delete($id){
        student::where('id', $id)->delete();
      return redirect()->route('admin.datasiswa');
      }
}
