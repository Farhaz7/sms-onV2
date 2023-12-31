<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berkas extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'surat_pengantar',
        'ktp_meninggal',
        'surat_tdk_mampu',
        'ktp_ahwa',
        'kk_meninggal',
        'akte_meninggal',
        'kk_ahwa',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
