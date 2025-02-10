@extends('layouts.header')
@section('title', 'Form Pengembalian')
@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body mt-5">
            <h5 class="card-title fw-bold mx-3">Form Pengembalian</h5>
            <form action="{{route('pengembalian.store')}}" method="post" class="form-sample mx-3">
                @csrf
                <div class="mb-3 form-group col-6">
                    <label for="pb_id" class="form-label">ID Peminjaman</label>
                    <select class="form-select js-example-basic-single" name="pb_id" id="pb_id">
                        @foreach($peminjaman as $pb)
                        <option value="{{$pb->pb_id}}">{{$pb->pb_id}}</option>
                        @endforeach
                    </select>
                </div>
                {{-- <!-- <div class="row">
                    <div class="mb-3 form-group col-6">
                        <label for="user_id" class="form-label">User ID</label>
                        <select class="form-select js-example-basic-single" name="user_id" id="user_id">
                            @foreach($users as $u)
                            <option value="{{$u->user_id}}">{{$u->user_id}}</option>
                            @endforeach
                        </select>
                    </div>
                </div> --> --}}
                <div class="mb-3 form-group">
                    <label for="kembali_tgl" class="form-label">Tanggal Kembali</label>
                    <input type="date" class="form-control" name="kembali_tgl" id="kembali_tgl">
                </div>
                <div class="mb-3 form-group">
                    <label for="kembali_sts" class="form-label">Status</label>
                    <div class="d-flex gap-2">
                        <div class="d-flex gap-2">
                            <input type="radio" class="form-check-input" name="kembali_sts" id="kembali_0" value="0">
                            <label for="kembali_0" class="form-check-label">kembali</label>
                        </div>
                        <div class="d-flex gap-2">
                            <input type="radio" class="form-check-input" name="kembali_sts" id="kembali_1" value="1">
                            <label for="kembali_1" class="form-check-label">belum kembali</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>
@endsection
