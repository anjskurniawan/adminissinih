<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'updated_at',
        'registration_id',
        'jumlah_tiket',
        'total',
        'verified_by',
        'is_verfied',
        'nomor_pembayaran',
        'kode_unik',
        'metode_pembayaran',
        'jumlah_pembayaran',
        'bukti_pembayaran',
        'bank_asal',
        'bank_tujuan',
        'pemilik_rekening',
    ];
}
