@extends('layouts.header')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body mt-5">
            <h5 class="card-title fw-semibold mb-4">Edit Barang</h5>
            <div class="card">
                <div class="card-body">
                    <form action="{{route('jenis-barang.update', $jenis->jns_brg_kode)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3 col-6">
                            <label for="jns_brg_nama" class="form-label">Nama Jenis Barang</label>
                            <input type="text" class="form-control" name="jns_brg_nama" id="jns_brg_nama" value="{{ old('jns_brg_nama', $jenis->jns_brg_nama) }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
