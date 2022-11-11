<?php

namespace App\Http\Controllers;

use App\Models\Artesania;
use App\Models\Imagen;
use App\Models\Indigena;

use Illuminate\Http\Request;

class ArtesaniaController extends Controller
{
    //
    public function index(){
        $artesania=Artesania::get();           
        foreach($artesania as $a){
            $imagen=Imagen::where('artesania_id',$a->id_artesania)->first();
            $array[]=[$imagen];
        }
       return view('index',compact('artesania','artesania','array','imagen')); 
    }
    public function detalle_artesania($id_artesania){
            $artesania=Artesania::findorFail($id_artesania);
            $imagen=Imagen::where('artesania_id',$id_artesania)->get();
            $artesanias=Artesania::get();          
            foreach($artesanias as $a){
                $imagens=Imagen::where('artesania_id',$a->id_artesania)->first();
                $array[]=$imagens;
            }
            return view('Artesanias.detalleArtesania',compact('artesania','imagen','artesania','array','imagen','artesanias'));
    }
    public function pasarela(){
        return view('shop_craft.pasarela1');
    }


}
