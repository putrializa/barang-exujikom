@extends('layouts.header')
@section('title', 'Daftar Pengguna')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body mt-5">
            <h5 class="card-title fw-bold m-3">Daftar Pengguna</h5>
            <div class="table-responsive">
                <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="border-bottom-0">
                                <p class="fw-bold mb-0">ID</p>
                            </th>
                            <th class="border-bottom-0">
                                <p class="fw-bold mb-0">Nama</p>
                            </th>
                            <th class="border-bottom-0">
                                <p class="fw-bold mb-0">Hak</p>
                            </th>
                            <th class="border-bottom-0">
                                <p class="fw-bold mb-0">Status</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $data)
                        <tr>
                            <td class="border-bottom-0">
                                <p class="fw-semibold mb-0">{{$data->user_id}}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0">{{$data->user_nama}}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0">{{$data->user_hak}}</p>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0">
                                    @if ($data->user_sts == '0') dihapus @endif
                                    @if ($data->user_sts == '1') aktif @endif
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
