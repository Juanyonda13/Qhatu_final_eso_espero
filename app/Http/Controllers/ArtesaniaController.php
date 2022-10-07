<?php

namespace App\Http\Controllers;

use App\Models\Artesania;
use Illuminate\Http\Request;

class ArtesaniaController extends Controller
{
    //
    public function detalle_artesania($id_artesania){
            $artesania=Artesania::findorFail($id_artesania);
            //return $artesania;
            return view('Artesanias.detalleArtesania',compact('artesania'));
    }

}
