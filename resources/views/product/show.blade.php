@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Detail Product</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Kode Buku</label>
            <input type="text" name="kode_buku" class="form-control" placeholder="kode_buku" value="{{ $product->kode_buku }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Judul</label>
            <input type="text" name="judul" class="form-control" placeholder="judul" value="{{ $product->judul }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Penulis</label>
            <input type="text" name="penulis" class="form-control" placeholder="penulis" value="{{ $product->penulis }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Tahun Terbit</label>
            <textarea class="form-control" name="tahun_terbit" placeholder="tahun_terbit" readonly>{{ $product->tahun_terbit }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Harga Buku</label>
            <input type="text" name="harga" class="form-control" placeholder="harga" value="{{ $product->harga }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Jumlah</label>
            <textarea class="form-control" name="jumlah" placeholder="jumlah" readonly>{{ $product->jumlah }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $product->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $product->updated_at }}" readonly>
        </div>
    </div>
@endsection