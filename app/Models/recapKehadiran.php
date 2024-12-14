<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recapKehadiran extends Model
{
    /** @use HasFactory<\Database\Factories\RecapKehadiranFactory> */
    use HasFactory;

    protected $fillable = [
        'total_hadir',
        'total_izin',
        'total_sakit',
        'total_alpha',
        'siswa_id',
    ];
    public function absensi()
    {
        return $this->hasMany(Absensi::class);
    }
    public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
