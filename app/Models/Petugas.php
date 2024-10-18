<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Petugas extends Authenticatable
{
    use HasFactory;

    protected $primarykey = 'id_petugas';

    protected $fillable = [
        'id_petugas',
        'nama_petugas',
        'username',
        'password',
        'telp',
        'level',
    ];


}
