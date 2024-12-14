<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    /** @use HasFactory<\Database\Factories\AbsensiFactory> */
    use HasFactory;

    protected $fillable = [
        'status',
        'siswa_id',
        'jadwal_id',
        'recap_kehadiran_id',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'jadwal_id');
    }

    public function recap_kehadiran()
    {
        return $this->belongsTo(RecapKehadiran::class, 'recap_kehadiran_id');
    }
}
