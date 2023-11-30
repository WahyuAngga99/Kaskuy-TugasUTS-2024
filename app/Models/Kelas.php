<?php

// File: app/Models/Kelas.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';

    protected $fillable = [
        'nama_kelas',
        'totalKeseluruhanNominal',
    ];

    // Relasi One-to-Many dengan siswa
    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'kelas_id');
    }
}
