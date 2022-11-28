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

    protected $with = [
        'reff_smf_details',
        'reff_poli_details',
    ];

    public function reff_smf_details()
    {
        # code...
        return $this->belongsTo(Referensi::class, 'smf');
    }

    public function reff_poli_details()
    {
        # code...
        return $this->belongsTo(Referensi::class, 'poliklinik');
    }
}
