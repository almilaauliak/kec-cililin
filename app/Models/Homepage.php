<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Homepage extends Model
{
    use HasFactory;

    protected $table = 'homepages'; // Pastikan ini sesuai dengan nama tabel di database
    protected $guarded = ['id'];

    // Nonaktifkan timestamps hanya untuk model ini
    public $timestamps = false;

   
    protected $fillable = [
        'content',
        'judul',
        'desc',
        'image',
    ];
}
