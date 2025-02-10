<?php

namespace App\Http\Controllers;

use App\Models\JenisBarang;
use Illuminate\Http\Request;

class JenisBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenis = JenisBarang::all();
        return view('jenis-barang.index', compact('jenis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jenis-barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        JenisBarang::create($request->all());
        return redirect()->route('jenis-barang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(JenisBarang $jenis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jenis = JenisBarang::where('jns_brg_kode', $id)->firstOrFail(); // Pakai firstOrFail() agar error lebih jelas
        return view('jenis-barang.edit', compact('jenis'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $jenis = JenisBarang::where('jns_brg_kode', $id)->firstOrFail(); // Pakai firstOrFail() agar error lebih jelas
        $jenis->update($request->all());
        return redirect()->route('jenis-barang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jenis = JenisBarang::findOrFail($id);
        $jenis->delete();
        return redirect()->route('jenis-barang.index')->with('success', 'Jenis Barang Berhasil Dihapus');
    }
}
