<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Pembayaran;

class Siswa extends Model
{
    protected $fillable = [
        'user_id',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'no_kk',
        'nama_ayah',
        'pekerjaan_ayah',
        'no_telp_ayah',
        'nama_ibu',
        'pekerjaan_ibu',
        'no_telp_ibu',
        'file_akta_kelahiran',
        'file_kk',
        'file_foto',
        'status_verifikasi',
    ];

    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
