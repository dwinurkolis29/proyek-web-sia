<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propinsi extends Model
{
    use HasFactory;
    protected $table = 'propinsi';
    protected $primaryKey = 'id'; 
    protected $fillable = ['id','nama_propinsi'];

    // public function kota()
    // {
    //     return $this->hasMany(Kota::class);
    // }
}
