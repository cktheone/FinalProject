<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KomentarJawaban extends Model
{
    protected $table = "komentar_jawaban";

    protected $guarded =[];

    public function user(){
        return $this->belongsTo('App\User2', 'id_tukangkomen');
    }
}
