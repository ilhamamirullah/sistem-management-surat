<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $fillable = ['nama', 'nip', 'jabatan', 'alamat'];
    protected $table = 'karyawan';
}
