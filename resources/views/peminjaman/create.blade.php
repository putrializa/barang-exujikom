@extends('layouts.header')
@section('title', 'Tambah Peminjaman')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold m-3">Tambah Peminjaman</h5>
            <form action="{{route('peminjaman.store')}}" method="post" class="form-sample mx-3">
                @csrf
                <div class="row">
                    <div class="mb-3 form-group col-6">
                        <label for="pb_no_siswa" class="form-label">No Siswa</label>
                        <input type="text" class="form-control" name="pb_no_siswa" id="pb_no_siswa">
                    </div>
                    <div class="mb-3 form-group col-6">
                        <label for="pb_nama_siswa" class="form-label">Nama Siswa</label>
                        <input type="text" class="form-control" name="pb_nama_siswa" id="pb_nama_siswa">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 form-group">
                        <label for="search_barang" class="form-label">Cari Barang</label>
                        <input type="text" class="form-control" id="search_barang" placeholder="Cari barang...">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="br_kode" class="form-label">Barang Dipinjam</label>
                        <select class="form-select js-example-basic-multiple w-100" multiple="multiple" name="br_kode[]" id="br_kode">
                            @foreach($barang as $br)
                            <option value="{{$br->br_kode}}" class="barang-option">{{$br->br_nama}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 form-group col-6">
                        <label for="pb_tgl" class="form-label">Tanggal Peminjaman</label>
                        <input type="date" class="form-control" name="pb_tgl" id="pb_tgl">
                    </div>
                    <div class="mb-3 form-group col-6">
                        <label for="pb_harus_kembali_tgl" class="form-label">Harus Kembali Tanggal</label>
                        <input type="date" class="form-control" name="pb_harus_kembali_tgl" id="pb_harus_kembali_tgl">
                    </div>
                </div><div class="mb-3 form-group">
                    <label for="pb_sts" class="form-label">Status</label>
                    <div class="d-flex gap-2">
                        <div class="d-flex gap-2">
                            <input type="radio" class="form-check-input" name="pb_sts" id="pb_hapus" value="0">
                            <label for="pb_hapus" class="form-check-label">peminjaman dihapus dari system</label>
                        </div>
                        <div class="d-flex gap-2">
                            <input type="radio" class="form-check-input" name="pb_sts" id="pb_baik" value="1">
                            <label for="pb_baik" class="form-check-label">peminjaman aktif</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-dark">Tambah</button>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById('search_barang').addEventListener('input', function() {
        let filter = this.value.toLowerCase();
        let options = document.querySelectorAll('.barang-option');

        options.forEach(option => {
            let text = option.textContent.toLowerCase();
            option.style.display = text.includes(filter) ? '' : 'none';
        });
    });
</script>
@endsection
