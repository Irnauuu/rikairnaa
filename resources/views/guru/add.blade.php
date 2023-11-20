@extends('layouts.app')

@section('content')
<h3>Tambah Guru</h3>

<form action="{{ route('admin.insertguru') }}" method="post">
    @csrf
    <div class="row">
    <div class="col-lg-3">
    <div class="form-group">
        <label for="">Nama Guru</label>
        <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
        <div class="text-danger">
            @error('nama')
                {{ $message }}
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email" class="form-control" value="{{ old('email') }}">
        <div class="text-danger">
            @error('email')
                {{ $message }}
            @enderror
        </div>

    <div class="form-group">
        <label for="">No hp</label>
        <input type="text" name="no_hp" class="form-control" value="{{ old('no_hp') }}">
        <div class="text-danger">
            @error('no_hp')
                {{ $message }}
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label for="">Password</label>
        <input type="text" name="password" class="form-control" value="{{ old('password') }}">
        <div class="text-danger">
            @error('password')
                {{ $message }}
            @enderror
        </div>

    
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

    </div>
    </div>

</form>

@endsection