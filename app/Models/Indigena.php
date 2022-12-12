<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indigena extends Model
{
    use HasFactory;
    protected $table = 'indigenas';
    protected $primaryKey = 'id_indigena';
    protected $guarded = ['id_indigena'];
    
    public function Etnia(){
        return $this->hasMany(Etnia::class,'id_etnia','etnia_id');
    }
    public function Artesania(){
        return $this->belongsTo(Artesania::class,'id_indigena','indigena_id');
    }

}
