@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Edit Data Pelanggan</h3>
    <form action="{{ url('/pelanggan/' . $row->pel_id) }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="mb-3">
            <label>ID GOLONGAN</label>
            <input type="text" class="form-control" name="pel_id_gol" value="{{ $row->pel_id_gol }}">
        </div>
        <div class="mb-3">
            <label>NOMOR PELANGGAN</label>
            <input type="text" class="form-control" name="pel_no" value="{{ $row->pel_no }}">
        </div>
        <div class="mb-3">
            <label>NAMA PELANGGAN</label>
            <input type="text" class="form-control" name="pel_nama" value="{{ $row->pel_nama }}">
        </div>
        <div class="mb-3">
            <label>ALAMAT PELANGGAN</label>
            <input type="text" class="form-control" name="pel_alamat" value="{{ $row->pel_alamat }}">
        </div>
        <div class="mb-3">
            <label>NO HP PELANGGAN</label>
            <input type="text" class="form-control" name="pel_hp" value="{{ $row->pel_hp }}">
        </div>
        <div class="mb-3">
            <label>KTP PELANGGAN</label>
            <input type="text" class="form-control" name="pel_ktp" value="{{ $row->pel_ktp }}">
        </div>
        <div class="mb-3">
            <label>SERI PELANGGAN</label>
            <input type="text" class="form-control" name="pel_seri" value="{{ $row->pel_seri }}">
        </div>
        <div class="mb-3">
            <label>METERAN PELANGGAN</label>
            <input type="text" class="form-control" name="pel_meteran" value="{{ $row->pel_meteran }}">
        </div>
        <div class="mb-3">
            <label>AKTIF</label>
            <input type="text" class="form-control" name="pel_aktif" value="{{ $row->pel_aktif }}">
        </div>
        <div class="mb-3">
            <label>ID USER</label>
            <input type="text" class="form-control" name="pel_id_user" value="{{ $row->pel_id_user }}">
        </div>
        <div class="mb-3">
            <input type="submit" value="SIMPAN">
        </div>
    </form>
</div>
@endsection