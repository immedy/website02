<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function Referensi()
    {
        return $this->belongsTo(referensi::class,'smf');
        return $this->belongsTo(referensi::class,'poliklinik');
    }
    
}
