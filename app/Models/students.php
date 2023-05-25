<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class students extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $primaryKey = 'nim';
    public $incrementing = false;
    public $timestamps = true;
    protected $fillable = [
        'nim', 'kode_kelas', 'nama_mahasiswa', 'email', 'username', 'password', 'jk', 'alamat', 'no_hp', 'foto'
    ];

    protected function foto(): Attribute
    {
        return Attribute::make(
            get: fn ($foto) => ('storage/students/' . $foto),
        );
    }
}
