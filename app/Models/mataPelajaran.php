<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mataPelajaran extends Model
{
    /** @use HasFactory<\Database\Factories\MataPelajaranFactory> */
    use HasFactory;

    protected $fillable = [
        'nama_matapelajaran',
    ];

    public function guru()
    {
        return $this->hasMany(Guru::class, 'mata_pelajaran_id');
    }
    public function jadwal()
    {
        return $this->hasMany(Jadwal::class, 'mata_pelajaran_id');
    }
}
