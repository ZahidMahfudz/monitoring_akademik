<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Skripsi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function Mahasiswa():HasOne{
        return $this->hasOne(Doswal::class);
    }
}
