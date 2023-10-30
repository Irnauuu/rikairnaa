@extends('layouts.app')

@section('content')
<h3>Tambah Buku</h3>

<form action="{{ route('admin.insertbuku') }}" method="post">
    @csrf
    <div class="row">
    <div class="col-lg-3">
    <div class="form-group">
        <label for="">Nama Buku</label>
        <input type="text" name="nama_buku" class="form-control" value="{{ old('nama_buku') }}">
        <div class="text-danger">
            @error('nama_buku')
                {{ $message }}
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label for="">Jumlah Halaman</label>
        <input type="text" name="jml_hal" class="form-control">
        <div class="text-danger">
            @error('jml_hal')
                {{ $message }}
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label for="">Penerbit</label>
        <input type="text" name="penerbit" class="form-control" value="{{ old('Penerbit') }}">
        <div class="text-danger">
            @error('penerbit')
                {{ $message }}
            @enderror
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

    </div>
    </div>

</form>

@endsection