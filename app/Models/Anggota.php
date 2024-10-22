<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'anggota';
    protected $primaryKey = 'id_anggota';
    public $incrementing = true; // Set true jika auto-increment
    protected $keyType = 'int';

    protected $fillable = [
        'nama', 
        'alamat', 
        'tanggal_lahir', 
        'jenis_kelamin', 
        'status', 
        'no_telepon', 
        'email'
    ];

    public $timestamps = false;

    public function getRouteKeyName(): int
    {
        return 'id_anggota';
    }
}
