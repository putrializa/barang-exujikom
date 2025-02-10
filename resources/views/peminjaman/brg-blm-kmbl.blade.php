@extends('layouts.header')
@section('title', 'Barang Belum Kembali')
@section('content')
<div class="container-fluid mt-5">
    <div class="card">
        <div class="card-body mt-5">
            <h5 class="card-title fw-bold m-3">Belum Kembali</h5>
            <!-- daftar barang belum kembali -->
            <div class="table-responsive">
                <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="border-bottom-0">
                                <p class="fw-bold mb-0">ID</p>
                            </th>
                            <th class="border-bottom-0">
                                <p class="fw-bold mb-0">Peminjaman ID</p>
                            </th>
                            <th class="border-bottom-0">
                                <p class="fw-bold mb-0">Kode Barang</p>
                            </th>
                            <th class="border-bottom-0">
                                <p class="fw-bold mb-0">Tanggal Entry</p>
                            </th>
                            <th class="border-bottom-0">
                                <p class="fw-bold mb-0">Status</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($peminjaman_br as $data)
                        @if($data->pdb_sts == 1)
                        <tr>
                            <td class="border-bottom-0">
                                <p class="fw-semibold mb-0">{{$data->pbd_id}}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0">{{$data->pb_id}}</p>
                            </td>
                            <td class="border-bottom-0">
                                @foreach ($brg as $br)
                                @if ($br->br_kode == $data->br_kode)
                                <p class="mb-0">{{$br->br_nama}}</p>
                                @endif
                                @endforeach
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0">{{$data->pdb_tgl}}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0">
                                    @if ($data->pdb_sts == 0) dikembalikan @endif
                                    @if ($data->pdb_sts == 1) dipinjam @endif
                                </p>
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
