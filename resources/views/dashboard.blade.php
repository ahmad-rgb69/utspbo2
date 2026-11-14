@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="app-content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">Dashboard</h3>
            </div>
        </div>
    </div>
</div>

<div class="app-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-6">
                <div class="small-box text-bg-primary">
                    <div class="inner">
                        <h3>{{ $total }}</h3>
                        <p>Total Mata Kuliah</p>
                    </div>
                    <i class="small-box-icon bi bi-journal-bookmark"></i>
                    <a href="{{ route('mata-kuliah.index') }}" class="small-box-footer link-light">
                        Lihat data <i class="bi bi-arrow-right-circle"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-6">
                <div class="small-box text-bg-success">
                    <div class="inner">
                        <h3>{{ $aktif }}</h3>
                        <p>Mata Kuliah Aktif</p>
                    </div>
                    <i class="small-box-icon bi bi-check-circle"></i>
                    <a href="{{ route('mata-kuliah.index') }}" class="small-box-footer link-light">
                        Lihat data <i class="bi bi-arrow-right-circle"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-6">
                <div class="small-box text-bg-secondary">
                    <div class="inner">
                        <h3>{{ $tidakAktif }}</h3>
                        <p>Mata Kuliah Tidak Aktif</p>
                    </div>
                    <i class="small-box-icon bi bi-x-circle"></i>
                    <a href="{{ route('mata-kuliah.index') }}" class="small-box-footer link-light">
                        Lihat data <i class="bi bi-arrow-right-circle"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection