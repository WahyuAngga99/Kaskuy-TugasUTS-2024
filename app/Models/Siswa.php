<?php

// File: app/Models/Siswa.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';

    protected $fillable = [
        'nama_siswa',
        'nis',
        'alamat',
        'kelas_id',
    ];

    // Relasi Many-to-One dengan kelas
    public function kelas() {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }
}
