<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'laporan';

    protected $fillable = [
        'user_id',
        'kategori_id',
        'status',
        'judul',
        'deskripsi',
        'lokasi_id',
        'petugas',
        'file_attach'
    ];

    public function alamat()
    {
        return $this->hasOne(Alamat::class, 'id', 'lokasi_id');
    }

    public function kategori()
    {
        return $this->hasOne(KategoriLaporan::class, 'id', 'kategori_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

}
