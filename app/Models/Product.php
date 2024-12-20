<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable =[
        'kode_buku',
        'judul',
        'penulis',
        'tahun_terbit',
        'harga',
        'jumlah'
    ];

}
