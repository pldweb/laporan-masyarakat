<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alamat extends Model
{
    protected $table = 'alamat';

    protected $fillable = [
        'user_id',
        'laporan_id',
        'jalan',
        'kelurahan',
        'kecamatan',
        'kota',
        'provinsi',
        'kode_pos',
    ];

    public function user()
    {

    }
}
