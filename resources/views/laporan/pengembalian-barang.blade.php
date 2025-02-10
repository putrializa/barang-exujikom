@extends('layouts.header')
@section('title', 'Pengembalian Barang')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body mt-5">
            <h5 class="card-title fw-bold m-3">Pengembalian Barang</h5>
            <!-- Laporan Pengembalian Barang -->
            <div class="table-responsive">
                <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="border-bottom-0">
                                <h6 class="fw-bold mb-0">ID</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-bold mb-0">Peminjaman ID</h6>
                            </th>
                            <!-- <th class="border-bottom-0">
                                    <h6 class="fw-bold mb-0">Kode Barang</h6>
                                </th> -->
                            <th class="border-bottom-0">
                                <h6 class="fw-bold mb-0">Tanggal Entry</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-bold mb-0">Status</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pengembalian as $data)
                        <tr>
                            <td class="border-bottom-0">
                                <p class="fw-semibold mb-0">{{$data->kembali_id}}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{$data->pb_id}}</p>
                            </td>
                            <!-- <td class="border-bottom-0">
                                    <p class="mb-0 fw-normal">{{$data->br_kode}}</p>
                                </td> -->
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{$data->kembali_tgl}}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">
                                    @if ($data->kembali_sts == 0) dikembalikan @endif
                                    @if ($data->kembali_sts == 1) dipinjam @endif
                                </p>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
