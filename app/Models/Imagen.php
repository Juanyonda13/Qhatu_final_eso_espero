<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    use HasFactory;
    protected $table = 'imagen';
    protected $primaryKey = 'id_imagen';
    protected $guarded = ['id_imagen'];

    public function Artesania(){
        return $this->hasMany(Artesania::class,'id_artesania','artesania_id');
    }

}
