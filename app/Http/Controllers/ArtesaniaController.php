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
            return view('Artesanias.detalleArtesania',compact('artesania','imagen','array','imagen','artesanias'));
    }
    public function pasarela($id_artesania){
        return view('pasarela.pasarela',compact('id_artesania'));
    }
    public function pasarelaStore(Request $request,$id_artesania){ 
        $envio=new Envio();
        $envio->nombre=$request->nombre;
        $envio->direccion=$request->direccion;
        $envio->municipio=$request->municipio;
        $envio->pais=$request->pais;
        $envio->codigo_postal=$request->codigo_postal;
        $rnvio->save();
    }


}
