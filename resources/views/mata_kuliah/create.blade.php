@extends('layouts.app')

@section('title', 'Tambah Mata Kuliah')

@section('content')
<div class="app-content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">Tambah Mata Kuliah</h3>
            </div>
        </div>
    </div>
</div>

<div class="app-content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title mb-0">Form Tambah Data</h3>
            </div>
            <form action="{{ route('mata-kuliah.store') }}" method="POST" novalidate>
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="kode" class="form-label">Kode Mata Kuliah</label>
                        <input
                            type="text"
                            class="form-control @error('kode') is-invalid @enderror"
                            id="kode"
                            name="kode"
                            value="{{ old('kode') }}"
                            placeholder="Contoh: TI2301"
                        >
                        @error('kode')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Mata Kuliah</label>
                        <input
                            type="text"
                            class="form-control @error('nama') is-invalid @enderror"
                            id="nama"
                            name="nama"
                            value="{{ old('nama') }}"
                            placeholder="Contoh: Pemrograman Web"
                        >
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="sks" class="form-label">SKS</label>
                        <input
                            type="number"
                            class="form-control @error('sks') is-invalid @enderror"
                            id="sks"
                            name="sks"
                            value="{{ old('sks') }}"
                            placeholder="1 - 4"
                        >
                        @error('sks')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-check form-switch">
                        <input
                            class="form-check-input"
                            type="checkbox"
                            role="switch"
                            id="status"
                            name="status"
                            value="1"
                            {{ old('status') ? 'checked' : '' }}
                        >
                        <label class="form-check-label" for="status">Aktif</label>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('mata-kuliah.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection