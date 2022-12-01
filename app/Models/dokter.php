<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    

    protected $with = [
        'ReferensiSmf',
        'ReferensiPoliklinik',
    ];

    public function ReferensiSmf()
    {
        # code...
        return $this->belongsTo(Referensi::class, 'smf');
    }

    public function ReferensiPoliklinik()
    {
        # code...
        return $this->belongsTo(Referensi::class, 'poliklinik');
    }
}
