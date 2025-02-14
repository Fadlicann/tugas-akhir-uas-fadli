<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosen';
    protected $fillable = [
        'nama_belakang',
        'nama_depan',
        'jenis_kelamin',
        'agama',
        'no_hp',
        'gelar',
        'nip',
    ];
}
