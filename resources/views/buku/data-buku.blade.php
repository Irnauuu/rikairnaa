@extends('layouts.app')

@section('content')
@if(session('sukses'))
        <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i>Sukses!</h5>
                {{ session('sukses')}}
        </div>
@endif
        <a href="{{ route('admin.addbuku') }}" class="btn btn-primary mb-3">Tambah Buku</a>
        <table class="table table-bordered">
        <tr>
        <th>No</th>
        <th>Nama Buku</th>
        <th>Jumlah Hal</th>
        <th>Penerbit</th>
        <th>Aksi</th>
        
        </tr>

        <?php $no=1; ?>
        @foreach ($data as $d)
        <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $d->nama_buku }}</td>
                <td>{{ $d->jml_hal }}</td>
                <td>{{ $d->penerbit }}</td>
                <td>
                        <a href="{{ route('admin.editbuku', ['id' => $d->id]) }}" class="btn btn-info">Edit</a>
                        <a href="{{ route('admin.deletebuku', ['id' => $d->id]) }}" class="btn btn-danger">Delete</a>
                       
                </td>
        </tr>
        @endforeach
        </table>
@endsection