<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use App\Models\Pengembalian;
use App\Models\TmUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengembalianController extends Controller
{

    public function index()
    {
        $peminjaman = Peminjaman::all(); // INI WAJIB ADA UNTUK MENGAMBIL DATA
        return view('pengembalian.create', compact('peminjaman'));
    }
    /**
     * Display a listing of the resource.
     */
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $peminjaman = Peminjaman::all();
        $users = TmUser::all();
        return view('pengembalian.create', compact('peminjaman', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $pengembalian = $request->validate([
            'pb_id' => 'required|string',
            'kembali_tgl' => 'required|date',
            'kembali_sts' => 'required|string'
        ]);
        Pengembalian::create($pengembalian);
        return redirect()->route('peminjaman.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pengembalian $peminjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengembalian $peminjaman)
    {
        return view('peminjaman.edit', compact('peminjaman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengembalian $pengembalian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengembalian $pengembalian)
    {
        //
    }
}
