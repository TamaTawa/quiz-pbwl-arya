@extends('layouts.app')

@section('content')

<div class="container">
    <h3> Daftar Pelanggan
        <a class="btn btn-primary btn-sm float-end" href="{{ url('pelanggan/create') }}">Tambah Data</a>
    </h3>

    <table class="table table-bordered">
        <tr>
            <td>NO</td>
            <td>ID GOLONGAN</td>
            <td>NOMOR PELANGGAN</td>
            <td>NAMA PELANGGAN</td>
            <td>ALAMAT PELANGGAN</td>
            <td>NO HP PELANGGAN</td>
            <td>KTP PELANGGAN</td>
            <td>SERI PELANGGAN</td>
            <td>METERAN PELANGGAN</td>
            <td>AKTIF</td>
            <td>ID USER</td>
            <td>DIBUAT PADA</td>
            <td>DIUBAH PADA</td>
            <td>EDIT</td>
            <td>HAPUS</td>
        </tr>
        @foreach($rows as $row)
        <tr>
            <td>{{ $row->pel_id }}</td>
            <td>{{ $row->pel_id_gol }}</td>
            <td>{{ $row->pel_no }}</td>
            <td>{{ $row->pel_nama }}</td>
            <td>{{ $row->pel_alamat }}</td>
            <td>{{ $row->pel_hp }}</td>
            <td>{{ $row->pel_ktp }}</td>
            <td>{{ $row->pel_seri }}</td>
            <td>{{ $row->pel_meteran }}</td>
            <td>{{ $row->pel_aktif }}</td>
            <td>{{ $row->pel_id_user }}</td>
            <td>{{ $row->created_at }}</td>
            <td>{{ $row->updated_at }}</td>
            <td><a class="btn btn-warning btn-sm" href="{{ url('pelanggan/' . $row->pel_id . '/edit') }}">Edit</a></td>
            <td>
                <form action="{{ url('pelanggan/' . $row->pel_id) }}" method="POST">
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