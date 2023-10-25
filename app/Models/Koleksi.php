<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Nama : Makiyah Azahra
// Kelas : D3IF46-03
// NIM : 6706220059
class Koleksi extends Model
{
    use HasFactory;
    protected $table = 'koleksi';
    
    protected $fillable = [
        'namaKoleksi',
        'jenisKoleksi',
        'jumlahKoleksi',
        'jumlahKeluar',
        'jumlahSisa'
    ];
}