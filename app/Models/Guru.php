<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    /** @use HasFactory<\Database\Factories\GuruFactory> */
    use HasFactory;

    protected $fillable = [
        'nama',
        'nip',
        'email',
        'alamat',
        'no_hp',
        'jenis_kelamin',
        'mata_pelajaran_id',
    ];

    public function mata_pelajaran()
    {
        return $this->belongsTo(MataPelajaran::class, 'mata_pelajaran_id');
    }
    public function jadwal()
    {
        return $this->hasMany(Jadwal::class, 'guru_id');
    }
}
