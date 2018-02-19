<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surat_Masuk extends Model
{
        protected $table = 'surat_masuk';
    protected $fillable = ['tanggal', 'keterangan'];
}
