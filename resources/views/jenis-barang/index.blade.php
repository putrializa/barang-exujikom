@extends('layouts.header')
@section('title', 'Jenis Barang')
@section('content')
<div class="container-fluid">
    <div class="card mb-3">
        <div class="card-body mt-5">
            <h5 class="card-title fw-bold m-3">Tambah Jenis Barang</h5>
            <form action="{{route('jenis-barang.store')}}" method="post" class="form-sample mx-3">
                @csrf
                <div class="form-group mb-3">
                    <label for="jns_brg_nama" class="form-label">Nama Jenis Barang</label>
                    <input type="text" class="form-control" name="jns_brg_nama" id="jns_brg_nama">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Tambah Barang</button>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-bold m-3">Daftar Barang</h5>
            <div class="table-responsive">
                <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-primary fs-4">
                        <tr>
                            <th class="border-bottom-0">
                                <p class="fw-bold mb-0">Kode Barang</p>
                            </th>
                            <th class="border-bottom-0">
                                <p class="fw-bold mb-0">Jenis Barang</p>
                            </th>
                            <th class="border-bottom-0">
                                <p class="fw-bold mb-0"> </p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jenis as $data)
                        <tr>
                            <td class="border-bottom-0">
                                <p class="fw-semibold mb-0">{{$data->jns_brg_kode}}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0">{{$data->jns_brg_nama}}</p>
                            </td>
                            <td class="border-bottom-0">
                                <form action="{{route('jenis-barang.destroy', $data->jns_brg_kode)}}" method="post">
                                        <a href="{{route('jenis-barang.edit', $data->jns_brg_kode)}}" class="btn btn-outline-secondary">
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
