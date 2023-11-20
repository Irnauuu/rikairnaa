@extends('layouts.app')

@section('content')
@if(session('sukses'))
        <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i>Sukses!</h5>
                {{ session('sukses')}}
        </div>
@endif
        <a href="{{ route('admin.addguru') }}" class="btn btn-primary mb-3">Tambah Guru</a>
        <table class="table table-bordered">
        <tr>
        <th>No</th>
        <th>Email</th>
        <th>Nama Guru</th>
        <th>No Hp</th>
        <th>Aksi</th>
        
        </tr>

        <?php $no=1; ?>
        @foreach ($data as $d)
        <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $d->email }}</td>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->no_hp }}</td>
                <td>
                        <a href="{{ route('admin.editguru', ['id' => $d->id]) }}" class="btn btn-info">Edit</a>
                        <a href="{{ route('admin.deleteguru', ['id' => $d->id]) }}" class="btn btn-danger">Delete</a>
                       
                </td>
        </tr>
        @endforeach
        </table>
@endsection