@extends('layouts.header')
@section('title', 'Daftar Barang')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body mt-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="card-title fw-bold">Daftar Barang</h5>
            </div>
            <div class="text-end" style="margin-right: 20px;">
                <!-- <a href="{{ route('barang.create') }}" class="btn btn-dark">Tambah Barang</a> -->
            </div>

            <div class="table-responsive">
                <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="border-bottom-0">
                                <p class="fw-bold mb-0">Kode</p>
                            </th>
                            <th class="border-bottom-0">
                                <p class="fw-bold mb-0">Nama</p>
                            </th>
                            <th class="border-bottom-0">
                                <p class="fw-bold mb-0">Kode Barang</p>
                            </th>
                            <th class="border-bottom-0">
                                <p class="fw-bold mb-0">User Id</p>
                            </th>
                            <th class="border-bottom-0">
                                <p class="fw-bold mb-0">Tanggal Terima</p>
                            </th>
                            <th class="border-bottom-0">
                                <p class="fw-bold mb-0">Tanggal Entry</p>
                            </th>
                            <th class="border-bottom-0">
                                <p class="fw-bold mb-0">Status</p>
                            </th>
                            <th class="border-bottom-0">
                                <p class="fw-bold mb-0"> </p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($barang as $data)
                        <tr>
                            <td class="border-bottom-0">
                                <p class="fw-semibold mb-0">{{$data->br_kode}}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0">{{$data->br_nama}}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0">{{$data->jns_brg_kode}}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0">{{$data->user_id}}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0">{{$data->br_tgl_terima}}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0">{{$data->br_tgl_entry}}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0">
                                    @if ($data->br_sts == '0') dihapus @endif
                                    @if ($data->br_sts == '1') kondisi baik @endif
                                    @if ($data->br_sts == '2') kondisi buruk @endif
                                </p>
                            </td>
                            <td class="border-bottom-0">
                            </td>
                            <td class="border-bottom-0">
                                <form action="{{route('barang.destroy', $data->br_kode)}}" method="post">
                                        <a href="{{route('barang.edit', $data->br_kode)}}" class="btn btn-outline-secondary">
                                            <i class="ti ti-pencil"></i>
                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger">
                                            <i class="ti ti-eraser"></i>
                                        </button>
                                </form>
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
