<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IRS extends Model
{
    protected $fillable = ['status_verifikasi'];
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }
}
