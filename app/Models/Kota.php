<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kota extends Model
{
    use HasFactory;

    protected $table = 'kota';
    protected $primaryKey = 'id'; 
    protected $fillable = ['id', 'id_propinsi', 'nama_kota'];

    public function getPropinsi()
        {
            return $this->belongsTo('App\models\Propinsi','id_propinsi');
        }

    public function propinsi()
    {
        return $this->belongsTo(Propinsi::class, 'id_propinsi', 'id');
            // ->select('kota.*', 'propinsi.*');
    }
}


