@extends('layouts.header')
@section('title', 'Daftar Peminjaman')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body mt-5">
            <h5 class="card-title fw-bold m-3">Daftar Peminjaman</h5>
            <!-- daftar peminjaman -->
            <div class="table-responsive">
                <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="border-bottom-0">
                                <p class="fw-bold mb-0">ID</p>
                            </th>
                            <th class="border-bottom-0">
                                <p class="fw-bold mb-0">User ID</p>
                            </th>
                            <th class="border-bottom-0">
                                <p class="fw-bold mb-0">Tanggal</p>
                            </th>
                            <th class="border-bottom-0">
                                <p class="fw-bold mb-0">No. Siswa</p>
                            </th>
                            <th class="border-bottom-0">
                                <p class="fw-bold mb-0">Nama Siswa</p>
                            </th>
                            <th class="border-bottom-0">
                                <p class="fw-bold mb-0">Tanggal Kembali</p>
                            </th>
                            <th class="border-bottom-0">
                                <p class="fw-bold mb-0">stsus</p>
                            </th>
                            <th class="border-bottom-0">
                                <p class="fw-bold mb-0"> </p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($peminjaman as $data)
                        <tr>
                            <td class="border-bottom-0">
                                <p class="fw-semibold mb-0">{{$data->pb_id}}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0">{{$data->user_id}}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0">{{$data->pb_tgl}}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0">{{$data->pb_no_siswa}}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0">{{$data->pb_nama_siswa}}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0">{{$data->pb_harus_kembali_tgl}}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0">
                                    @if ($data->pb_sts == 0) dihapus @endif
                                    @if ($data->pb_sts == 1) aktif @endif
                                </p>
                            </td>
                            <td class="border-bottom-0">
                                <form action="{{route('peminjaman.destroy', $data->pb_id)}}" method="post">
                                        <a href="{{route('peminjaman.edit', $data->pb_id)}}" class="btn btn-outline-secondary">
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
