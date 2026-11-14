@extends('layouts.app')

@section('title', 'Mata Kuliah')

@section('content')
<div class="app-content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">Data Mata Kuliah</h3>
            </div>
        </div>
    </div>
</div>

<div class="app-content">
    <div class="container-fluid">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Tutup"></button>
            </div>
        @endif

        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title mb-0">Mata Kuliah ({{ $mataKuliah->count() }})</h3>
                <a href="{{ route('mata-kuliah.create') }}" class="btn btn-primary btn-sm ms-auto">
                    <i class="bi bi-plus-lg"></i> Tambah Data
                </a>
            </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-bordered table-hover mb-0">
                    <thead>
                        <tr>
                            <th style="width: 60px;">No</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th style="width: 80px;">SKS</th>
                            <th style="width: 120px;">Status</th>
                            <th style="width: 120px;">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($mataKuliah as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->kode }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->sks }}</td>
                                <td>
                                    @if ($item->status)
                                        <span class="badge bg-success">Aktif</span>
                                    @else
                                        <span class="badge bg-secondary">Tidak aktif</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('mata-kuliah.edit', $item->id) }}" class="btn btn-warning btn-sm" title="Ubah">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <button
                                        type="button"
                                        class="btn btn-danger btn-sm"
                                        title="Hapus"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modalHapus"
                                        data-url="{{ route('mata-kuliah.destroy', $item->id) }}"
                                        data-nama="{{ $item->nama }}"
                                    >
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">Belum ada data.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{{-- Modal Konfirmasi Hapus --}}
<div class="modal fade" id="modalHapus" tabindex="-1" aria-labelledby="modalHapusLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalHapusLabel">Konfirmasi Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
            </div>
            <form id="formHapus" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus mata kuliah <strong id="hapusNama"></strong>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const modalHapus = document.getElementById('modalHapus');
    modalHapus.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;
        document.getElementById('formHapus').action = button.getAttribute('data-url');
        document.getElementById('hapusNama').textContent = button.getAttribute('data-nama');
    });
});
</script>
@endsection