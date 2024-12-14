<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPSTORM_META\map;

class Siswa extends Model
{
    /** @use HasFactory<\Database\Factories\SiswaFactory> */
    use HasFactory;

    protected $fillable = [
        'nama',
        'nis',
        'jurusan',
        'alamat',
        'no_hp',
        'jenis_kelamin',
        'kelas_id',
    ];
    protected $table = 'siswas';

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }
    public function recapkehadiran()
    {
        return $this->hasMany(recapKehadiran::class, 'siswa_id');
    }
}
