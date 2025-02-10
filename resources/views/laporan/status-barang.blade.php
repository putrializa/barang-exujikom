@extends('layouts.header')
@section('title', 'Status Barang')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body mt-5">
            <h5 class="card-title fw-bold m-3">Status Barang</h5>
            <div class="table-responsive">
                <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="border-bottom-0">
                                <h6 class="fw-bold mb-0">Kode Barang</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-bold mb-0">Kode Jenis Barang</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-bold mb-0">Nama Jenis Barang</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-bold mb-0">Nama Barang</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-bold mb-0">Status</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($status as $data)
                        <tr>
                            <td class="border-bottom-0">
                                <p class="fw-semibold mb-0">{{$data->br_kode}}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="fw-normal">{{$data->jns_brg_kode}}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{$data->jns_brg_nama}}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">{{$data->br_nama}}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">
                                    @if ($data->br_sts == 0) dihapus @endif
                                    @if ($data->br_sts == 1) kondisi baik @endif
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
