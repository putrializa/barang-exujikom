@extends('layouts.header')
@section('title', 'Edit Barang')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body mt-5">
            <h5 class="card-title fw-bold m-3">Edit Barang</h5>
            <form action="{{route('barang.update', $barang->br_kode)}}" method="post" class="form-sample mx-3">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="form-group mb-3 col-6">
                        <label for="jns_brg_kode" class="form-label">Kode Jenis Barang</label>
                        <select class="form-select js-example-basic-single" name="jns_brg_kode" id="jns_brg_kode">
                            @foreach($jns as $j)
                            <option value="{{$j->jns_brg_kode}}" @if ($j->jns_brg_kode == $barang->jns_brg_kode) selected @endif>
                                {{$j->jns_brg_kode}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-3 col-6">
                        <label for="user_id" class="form-label">User ID</label>
                        <select class="form-select js-example-basic-single" name="user_id" id="user_id">
                            @foreach($users as $u)
                            <option value="{{$u->user_id}}" @if ($u->user_id == $barang->user_id) selected @endif>
                                {{$u->user_id}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label for="br_nama" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" name="br_nama" id="br_nama" value="{{$barang->br_nama}}">
                </div>
                <div class="form-group mb-3 col-6">
                    <label for="br_tgl_terima" class="form-label">Tanggal Terima Barang</label>
                    <input type="date" class="form-control" name="br_tgl_terima" id="br_tgl_terima" value="{{$barang->br_tgl_terima}}">
                </div>
                <div class="form-group mb-3">
                    <label for="br_sts" class="form-label">Status</label>
                    <div class="d-flex gap-2">
                        <div class="d-flex gap-2">
                            <input type="radio" class="form-check-input" name="br_sts" id="br_hapus" value="0"
                                @if ($barang->br_sts == '0') checked @endif>
                            <label for="br_hapus" class="form-check-label">barang dihapus dari system</label>
                        </div>
                        <div class="d-flex gap-2">
                            <input type="radio" class="form-check-input" name="br_sts" id="br_baik" value="1"
                                @if ($barang->br_sts == '1') checked @endif>
                            <label for="br_baik" class="form-check-label">barang kondisi baik</label>
                        </div>
                        <div class="d-flex gap-2">
                            <input type="radio" class="form-check-input" name="br_sts" id="br_buruk" value="2"
                                @if ($barang->br_sts == '2') checked @endif>
                            <label for="br_baik" class="form-check-label">barang kondisi buruk</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
</div>
@endsection
