<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destinasi extends Model
{
    protected $table = 'destinasi';
    protected $primaryKey = 'id_destinasi';
    public $timestamps = true;

    protected $fillable = [
        'nama',
        'gambar',
        'kategori',
        'alamat',
        'sejarah',
        'jam_buka',
        'fasilitas',
        'kontak',
    ];
}
