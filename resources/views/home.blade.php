@extends('layouts.header')
@section('content')
<div class="container-fluid">
    <div class="col-lg-12">
        <div class="row">
            <div class="main-content-inner">
                <div class="sales-report-area sales-style-two">
                    <div class="row">
                        <!-- Card 1: Daftar Barang Dipinjam -->
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-md-6 mt-5 mb-3">
                                    <a href="{{ route('peminjaman.index') }}" class="text-decoration-none">
                                    <div class="card">
                                        <div class="seo-fact sbg1">
                                            <div class="p-4 d-flex justify-content-between align-items-center">
                                                <div class="seofct-icon"><i class="ti-thumb-up"></i>Daftar Barang Dipinjam</div>
                                                <h2>2,315</h2>
                                            </div>
                                            <canvas id="seolinechart1" height="50"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-md-5 mb-3">
                                    <a href="{{ route('laporan.barang-tersedia') }}" class="text-decoration-none">
                                    <div class="card">
                                        <div class="seo-fact sbg2">
                                            <div class="p-4 d-flex justify-content-between align-items-center">
                                                <div class="seofct-icon"><i class="ti-share"></i>Laporan Daftar Barang</div>
                                            </div>
                                            <canvas id="seolinechart2" height="50"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-md-5 mb-3">
                                    <a href="{{ route('barang.dipinjam') }}" class="text-decoration-none">
                                    <div class="card">
                                        <div class="seo-fact sbg3">
                                            <div class="p-4 d-flex justify-content-between align-items-center">
                                                <div class="seofct-icon">Barang Belum Kembali</div>
                                                <canvas id="seolinechart3" height="50"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>


</script>

@endsection
