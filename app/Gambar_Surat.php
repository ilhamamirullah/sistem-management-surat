<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gambar_Surat extends Model
{
	protected $table = 'gambar_surat';
     protected $fillable = ['id_surat_masuk', 'filename'];

    public function product()
    {
        return $this->belongsTo('App\Surat_Masuk');
    }
}
