<style>
    .mb-0{
        text-align: center;
    }
</style>


@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">EDIT PRODUK BUKU</h1>
    <hr />
    <form action="{{ route('product.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Kode Buku</label>
                <input type="text" name="kode_buku" class="form-control" placeholder="Title" value="{{ $product->kode_buku}}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Judul</label>
                <input type="text" name="judul" class="form-control" placeholder="Price" value="{{ $product->judul }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Penulis</label>
                <input type="text" name="penulis" class="form-control" placeholder="Product Code" value="{{ $product->penulis}}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Tahun Terbit</label>
                <textarea class="form-control" name="tahun_terbit" placeholder="Descriptoin" >{{ $product->tahun_terbit }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Harga</label>
                <input type="text" name="penulis" class="form-control" placeholder="Product Code" value="{{ $product->harga}}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Jumlah</label>
                <textarea class="form-control" name="jumlah" placeholder="Descriptoin" >{{ $product->jumlah }}</textarea>
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
    @endsection