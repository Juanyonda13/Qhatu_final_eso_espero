<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleCompra extends Model
{
    use HasFactory;

    public function Artesania(){
        return $this->belongsTo(Artesania::class,'artesania_id','id_artesania');
    }
}
