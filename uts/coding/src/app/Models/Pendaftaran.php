<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $fillable = [
        'user_id', 'beasiswa_id', 'tanggal_daftar', 'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function beasiswa()
    {
        return $this->belongsTo(Beasiswa::class);
    }

    public function dokumen()
    {
        return $this->hasMany(Dokumen::class);
    }
}