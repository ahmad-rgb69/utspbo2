<?php
use Illuminate\Support\Facades\Route;
use App\Models\MataKuliah;
use App\Http\Controllers\MataKuliahController;

Route::get('/', function () {
    $total = MataKuliah::count();
    $aktif = MataKuliah::where('status', true)->count();
    $tidakAktif = MataKuliah::where('status', false)->count();

    return view('dashboard', compact('total', 'aktif', 'tidakAktif'));
})->name('dashboard');

Route::resource('mata-kuliah', MataKuliahController::class);