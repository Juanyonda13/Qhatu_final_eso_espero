<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artesania extends Model
{
    use HasFactory;
    protected $table = 'Artesanias';
    protected $primaryKey = 'id_artesania';
    protected $guarded = ['id_artesania'];

    public function Imagen(){
        return $this->belongsTo(Imagen::class,'id_artesania','artesania_id');
    }
    public function  Indigena(){
        return $this->hasMany(Indigena::class,'id_indigena','indigena_id');
    }
}
