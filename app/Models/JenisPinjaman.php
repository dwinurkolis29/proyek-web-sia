<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisPinjaman extends Model
{
    use HasFactory;

    protected $table = 'jenis_pinjaman';
    protected $primaryKey = 'id_jenis';

    protected $fillable = [
        'jenis_pinjaman',
        'bunga',
        'maks_angsuran'
    ];
}
