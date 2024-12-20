@extends('layouts.app')
 
@section('body')
    <h1 class="mb-0">Add Book</h1>
    <hr />
    <form action="{{ route('product.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="kode_buku" class="form-control" placeholder="Kode Buku">
            </div>
            <div class="col">
                <input type="text" name="judul" class="form-control" placeholder="Judul">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="penulis" class="form-control" placeholder="Penulis">
            </div>
            <div class="col">
                <textarea class="form-control" name="tahun_terbit" placeholder="Tahun Terbit"></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="harga" class="form-control" placeholder="Harga">
            </div>
            <div class="col">
                <textarea class="form-control" name="jumlah" placeholder="Jumlah"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection