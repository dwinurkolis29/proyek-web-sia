<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Angsuran extends Model
{
    use HasFactory;

    protected $table = 'angsuran';
    protected $primaryKey = 'id_angsuran';

    protected $fillable = [
        'id_pinjaman',
        'id_anggota',
        'tanggal_pembayaran',
        'tanggal_jatuh_tempo',
        'angsuran_ke',
        'besar_angsuran',
        'status'
    ];

    //relasi Pijaman ke Objek/kelas Anggota
    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'id_anggota');
    }

    public function pinjaman()
    {
        return $this->belongsTo(Pinjaman::class, 'id_pinjaman');
    }

    public function jumlahSudahAngsur()
    {
        
    }
}
