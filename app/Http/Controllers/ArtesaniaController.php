<?php

namespace App\Http\Controllers;

use App\Models\Artesania;
use App\Models\Imagen;

use Illuminate\Http\Request;

class ArtesaniaController extends Controller
{
    //
    public function detalle_artesania($id_artesania){
            $artesania=Artesania::findorFail($id_artesania);
            $imagenes=Imagen::where('artesania_id',$id_artesania)->get();
            $artesanias=Artesania::get();           
            foreach($artesanias as $a){
                $imagen=Imagen::where('artesania_id',$a->id_artesania)->first();
                $array[]=[$imagen];
            }
            return view('Artesanias.detalleArtesania',compact('artesania','imagenes','artesanias','array','imagen'));
    }
    public function pasarela(){
        return view('shop_craft.pasarela1');
    }

}
