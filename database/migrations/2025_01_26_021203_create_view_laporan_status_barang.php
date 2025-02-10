<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Drop the view if it already exists before creating it again
        DB::statement("DROP VIEW IF EXISTS status_barang");

        // Create the new view
        DB::statement("
            CREATE VIEW status_barang AS
            SELECT
                a.br_kode,
                a.jns_brg_kode,
                b.jns_brg_nama,
                a.br_nama,
                a.br_sts
            FROM tm_barang_inventaris a
            LEFT JOIN tr_jenis_barang b ON a.jns_brg_kode = b.jns_brg_kode
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the view if it exists when rolling back the migration
        DB::statement("DROP VIEW IF EXISTS status_barang");
    }
};
