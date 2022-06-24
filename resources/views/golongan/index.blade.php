@extends('layouts.app')

@section('content')

<div class="container">
    <h3> Daftar Ggolongan
        <a class="btn btn-primary btn-sm float-end" href="{{ url('golongan/create') }}">Tambah Data</a>
    </h3>

    <table class="table table-bordered">
        <tr>
            <td>NO</td>
            <td>KODE GOLONGAN</td>
            <td>NAMA GOLONGAN</td>
            <td>DIBUAT PADA</td>
            <td>DIUBAH PADA</td>
            <td>EDIT</td>
            <td>HAPUS</td>
        </tr>
        @foreach($rows as $row)
        <tr>
            <td>{{ $row->gol_id }}</td>
            <td>{{ $row->gol_kode }}</td>
            <td>{{ $row->gol_nama }}</td>
            <td>{{ $row->created_at }}</td>
            <td>{{ $row->updated_at }}</td>
            <td><a class="btn btn-warning btn-sm" href="{{ url('golongan/' . $row->gol_id . '/edit') }}">Edit</a></td>
            <td>
                <form action="{{ url('golongan/' . $row->gol_id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-secondary btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection