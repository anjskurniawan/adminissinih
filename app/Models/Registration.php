<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama_lengkap',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'kelas',
        'tim',
        'email',
        'kota_asal',
        'no_wa',
        'golongan_darah',
        'ukuran_jersey',
        'kartu_identitas',
    ];
}
