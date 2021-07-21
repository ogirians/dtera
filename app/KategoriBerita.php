<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriBerita extends Model
{
    protected $table 		= "kategori";
	protected $primaryKey 	= 'id_kategori';

    public function berita()
        {
            return $this->hasMany('App\Berita_model','id_kategori','id_kategori');
        }
}
