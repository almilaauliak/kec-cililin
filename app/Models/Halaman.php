<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Halaman extends Model
{
    use HasFactory;

    protected $table = 'halaman'; // Pastikan ini sesuai dengan nama tabel di database
    protected $guarded = ['id'];

    // Nonaktifkan timestamps hanya untuk model ini
    public $timestamps = false;

    // Definisikan kolom yang dapat diisi
    protected $fillable = ['judul', 'desc', 'page', 'kategori'];
}
