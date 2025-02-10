<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * Membuat view `barang_tersedia` untuk menampilkan daftar barang yang belum dipinjam.
     */
    public function up(): void
    {
        DB::statement("
            CREATE OR REPLACE VIEW barang_tersedia AS
            SELECT
                a.br_kode,
                a.br_nama
            FROM tm_barang_inventaris a
            WHERE a.br_kode NOT IN (
                SELECT b.br_kode
                FROM td_peminjaman_barang b
                WHERE b.pdb_sts = 1
            )
        ");
    }

    /**
     * Reverse the migrations.
     *
     * Menghapus view `barang_tersedia` jika ada.
     */
    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS barang_tersedia");
    }
};
