<style>
</style>

@extends('layouts.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Produk<h1>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Kode Buku</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if($product->count() > 0)
                @foreach($product as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->kode_buku }}</td>
                        <td class="align-middle">{{ $rs->judul }}</td>
                        <td class="align-middle">{{ $rs->penulis }}</td>
                        <td class="align-middle">{{ $rs->tahun_terbit }}</td>
                        <td class="align-middle">{{ $rs->harga }}</td>
                        <td class="align-middle">{{ $rs->jumlah }}</td>
                        <td class="align-middle">
                            <a href="{{ route('product.show', $rs->id) }}" class="btn btn-secondary">Detail Produk</a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="8">Product not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
