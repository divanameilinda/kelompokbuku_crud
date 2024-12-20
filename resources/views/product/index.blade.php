<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    
</style>
@extends('layouts.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Daftar Produk</h1>
        <a href="{{ route('product.create') }}" class="btn btn-primary">Tambah Produk</a>
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
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <form action="{{ route('product.show', $rs->id) }}" method="GET" class="d-inline">
                                    <button type="submit" class="btn btn-secondary me-2" title="Detail">
                                        <i class="fas fa-eye"></i> 
                                    </button>
                                </form>
                                
                                <form action="{{ route('product.edit', $rs->id) }}" method="GET" class="d-inline">
                                    <button type="submit" class="btn btn-warning me-2" title="Edit">
                                        <i class="fas fa-edit"></i> 
                                    </button>
                                </form>
                                
                                <form action="{{ route('product.destroy', $rs->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" title="Delete">
                                        <i class="fas fa-trash"></i> 
                                    </button>
                                </form>
                            </div>
                        </td>                     
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Product not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
