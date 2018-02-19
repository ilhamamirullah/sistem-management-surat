<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'client';
    protected $fillable = ['nama', 'tanggal_lahir', 'jenis_kelamin', 'agama', 'no_identitas', 'alamat', 'no_telp', 'email', 'jabatan', 'instansi', 'alamat_instansi'];
}
