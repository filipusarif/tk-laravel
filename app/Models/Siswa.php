<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Pembayaran;

class Siswa extends Model
{
    protected $fillable = [
        'user_id',
        'nama_lengkap',
        'nama_panggilan',
        'jenis_kelamin',
        'nik',
        'kk',
        'tempat_lahir',
        'tanggal_lahir',
        'akte',
        'tinggi',
        'berat',
        'agama',
        'kewarganegaraan',
        'jumlah_saudara',
        'berkebutuhan_khusus',
        'alamat',
        'jarak',
        'waktu',

        'nama_ayah',
        'nik_ayah',
        'tempat_lahir_ayah',
        'tanggal_lahir_ayah',
        'pendidikan_ayah',
        'pekerjaan_ayah',
        'email_ayah',
        'no_telp_ayah',
        'penghasilan_ayah',

        'nama_ibu',
        'nik_ibu',
        'tempat_lahir_ibu',
        'tanggal_lahir_ibu',
        'pendidikan_ibu',
        'pekerjaan_ibu',
        'email_ibu',
        'no_telp_ibu',
        'penghasilan_ibu',


        'file_akta_kelahiran',
        'file_kk',
        'file_foto',
        'file_imunisasi',
        'status_verifikasi',
    ];

    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class, 'siswa_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
