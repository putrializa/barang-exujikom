<?php

namespace App\Http\Controllers;

use App\Models\BarangInventaris;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $brg = BarangInventaris::all()->count();
        $pinjam = Peminjaman::all()->count();
        return view('home', compact('brg', 'pinjam'));
    }
}
