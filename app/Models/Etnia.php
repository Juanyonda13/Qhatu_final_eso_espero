<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etnia extends Model
{
    use HasFactory;
    protected $table = 'etnias';
    protected $primaryKey = 'id_etnia';
    protected $guarded = ['id_etnia'];

    public function Indigena(){
        return $this->belongsTo(Indigena::class,'indigena_id');
    }
}
