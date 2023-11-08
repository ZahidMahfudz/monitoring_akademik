<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $guarded = ['id']; // Ganti 'guarded' dengan 'fillable'

    public function doswal(): HasOne // Ganti 'Mahasiswa' dengan 'doswal'
    {
        return $this->hasOne(Doswal::class);
    }

    public function User():HasOne{
        return $this->hasOne(User::class);
    }

    public function Skripsi():HasMany{
        return $this->hasMany(Skripsi::class);
    }
}
