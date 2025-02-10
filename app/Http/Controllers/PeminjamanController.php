<?php

namespace App\Http\Controllers;

use App\Models\BarangInventaris;
use App\Models\Peminjaman;
use App\Models\PeminjamanBarang;
use App\Models\Pengembalian;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peminjaman = Peminjaman::all();
        return view('peminjaman.index', compact('peminjaman'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barang = BarangInventaris::all()->sortBy('br_nama');
        $users = User::all();
        return view('peminjaman.create', compact('users', 'barang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->merge(['user_id' => Auth::id()]);
    $peminjaman = Peminjaman::create($request->except('br_kode')); // Simpan data peminjaman tanpa br_kode

    $pb_id = $peminjaman->pb_id;
    $pdb_tgl = $peminjaman->pb_tgl;
    $pdb_sts = $peminjaman->pb_sts;

    // Pastikan br_kode adalah array
    $barangDipinjam = (array) $request->input('br_kode');

    foreach ($barangDipinjam as $index => $br_kode) {
        $no = PeminjamanBarang::where('pb_id', $pb_id)->count() + 1;
        $pbd_id = sprintf("%s%03d", $pb_id, $no);

        PeminjamanBarang::create([
            'pbd_id' => $pbd_id,
            'pb_id' => $pb_id,
            'br_kode' => $br_kode, // Simpan setiap barang ke tabel PeminjamanBarang
            'pdb_tgl' => $pdb_tgl,
            'pdb_sts' => $pdb_sts
        ]);
    }

    return redirect()->route('peminjaman.index');
}


    /**
     * Display the specified resource.
     */
    public function show(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peminjaman $peminjaman)
    {
        $barang = BarangInventaris::all();
        $users = User::all();
        return view('peminjaman.edit', compact('peminjaman', 'users', 'barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peminjaman $peminjaman)
    {
        $peminjaman->update($request->all());
        return redirect()->route('peminjaman.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peminjaman $peminjaman)
    {
        $peminjaman->delete();
        return redirect()->route('peminjaman.index');
    }

    public function addPengembalian()
    {
        $peminjaman = Peminjaman::all();
        $users = User::all();
        view('peminjaman.pengembalian', compact('peminjaman', 'users'));
    }

    public function pengembalian(Request $request)
    {
        Pengembalian::create($request);
        return redirect()->route('peminjaman.index');
    }
}
