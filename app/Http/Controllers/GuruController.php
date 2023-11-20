<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index(){
        $data = User::leftJoin('teachers','teachers.id_user','users.id')->get();
        return view('guru.data-guru', compact('data'));
    }
    public function add(){
        return view('guru.add');
    }
    public function insert(request $request){
        $request->validate([
            'email' => 'required',
            'nama' => 'required',
            'password' => 'required',
            'no_hp' => 'required | numeric',
           
        ],[
        'nama_siswa.required' => 'Nama Siswa Wajib Diisi!',
        'no_hp.required' => 'No Hp Wajib Diisi!',
        'email.required' => 'Email Wajib Diisi!',
        'password.required' => 'Password Wajib Diisi!',
        'no_hp.numeric' => 'No Hp Harus Nomor',
    ]);
    $user = User::create([
        'email' => $request->email,
        'name' => $request->nama,
        'password' => bcrypt($request->password),

       ]);

       Teacher::create([
        'id_user' => $user->id,
        'nama' => $request->nama,
        'no_hp' => $request->no_hp,

       ]);
       

       return redirect()->route('admin.dataguru')->with('sukses', 'Data Berhasil ditambahkan');
    }
}