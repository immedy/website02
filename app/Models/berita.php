<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function referensi()
    {
        return $this->belongsTo(Referensi::class);
    }
}
