<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class instalasi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function referensi()
    {
        return $this->belongsTo(Referensi::class,'jenis','id');
    }
}
