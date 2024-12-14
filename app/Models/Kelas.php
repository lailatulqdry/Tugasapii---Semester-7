<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    /** @use HasFactory<\Database\Factories\KelasFactory> */
    use HasFactory;

    protected $fillable = [
        'kelas',
    ];

    protected $table = 'kelas';
    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'kelas_id');
    }
    public function jadwal()
    {
        return $this->hasMany(Jadwal::class, 'kelas_id');
    }
}
