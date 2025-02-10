<?php

namespace App\Http\Controllers;

use App\Models\BarangInventaris;
use App\Models\BarangTersedia;
use App\Models\PeminjamanBarang;
use App\Models\Pengembalian;
use App\Models\StatusBarang;
use App\Models\User;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function dipinjam()
    {
        $peminjaman_br = PeminjamanBarang::all();
        $brg = BarangInventaris::all();
        return view('peminjaman.brg-blm-kmbl', compact('peminjaman_br', 'brg'));
    }

    public function tersedia()
    {
        $tersedia = BarangTersedia::all();
        return view('laporan.barang-tersedia', compact('tersedia'));
    }

    public function pengembalian()
    {
        $pengembalian = Pengembalian::all();
        return view('laporan.pengembalian-barang', compact('pengembalian'));
    }

    public function status()
    {
        $status = StatusBarang::all();
        return view('laporan.status-barang', compact('status'));
    }

    public function pengguna()
    {
        $users = User::all();
        return view('laporan.daftar-pengguna', compact('users'));
    }
}
