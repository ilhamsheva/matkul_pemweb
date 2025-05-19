<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    protected $fillable = [
        'nama_beasiswa',
        'deskripsi',
        'syarat',
        'deadline',
        'status',
    ];

    public function pendaftarans()
    {
        return $this->hasMany(Pendaftaran::class);
    } 
}
