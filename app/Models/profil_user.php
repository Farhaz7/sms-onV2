<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profil_user extends Model
{
    protected $fillable = [
        'nik_meninggal',
        'nama_meninggal',
        'tgl_meninggal',
        'alamat_meninggal',
        'kecamatan_meninggal',
        'kelurahan_meninggal',
        'notelp_ahwa',
        'email',
        'alamat_ahwa',
        'nik_ahwa',
        'nama_ahwa',
        'kecamatan_ahwa',
        'kelurahan_ahwa',
        'kedudukan'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

