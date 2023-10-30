@extends('layouts.app')

@section('content')
<h3>Edit Siswa</h3>

<form action="{{ route('admin.updatesiswa') }}" method="post">
    @csrf
    <div class="row">
        <input type="text" name="id" value="{{ $data->id }}" hidden>
    <div class="col-lg-3">
    <div class="form-group">
        <label for="">Nama Siswa</label>
        <input type="text" name="nama_siswa" class="form-control" value="{{ $data->nama_siswa }}">
    </div>

    <div class="form-group">
        <label for="">No hp</label>
        <input type="text" name="no_hp" class="form-control" value="{{ $data->no_hp }}">
    </div>

    <div class="form-group">
        <label for="">Jenis Kelamin</label>
        <select name="jenkel" class="form-control">
            <option value="">Pilih jenis kelamin</option>
            <option value="l" {{ $data->jenkel == 'l' ? 'selected' : '' }}>Laki laki</option>
            <option value="p" {{ $data->jenkel == 'p' ? 'selected' : '' }}>Perempuan</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

    </div>
    </div>

</form>

@endsection