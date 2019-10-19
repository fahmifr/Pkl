<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class daftarArt extends Model
{

	protected $fillable = [
        'namaKesenian', 'hargaSewa', 'Keterangan','alamat','user_id',
];
        
    public function penyedia()
    {
    	return $this->belongTo('app\User');
    }

}
