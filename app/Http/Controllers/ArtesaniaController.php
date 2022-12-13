<?php

namespace App\Http\Controllers;

use App\Models\Artesania;
use App\Models\Imagen;
use App\Models\Indigena;
use App\Models\DetalleCompra;
use Illuminate\Http\Request;
use App\Models\Compra;
class ArtesaniaController extends Controller
{
    //
    public function index(){
        // $artesania=Artesania::get();           
        // foreach($artesania as $a){
        //     $imagen=Imagen::where('artesania_id',$a->id_artesania)->first();
        //     $array[]=[$imagen];
        // }
       return view('index'/* ,compact('artesania','artesania','array','imagen') */); 
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
        
        $detalle_compra=new DetalleCompra();
        $detalle_compra->unidades=$request->unidades;
        $detalle_compra->valor_unitario=$request->valor_unitario;
        $detalle_compra->valor_total=$request->valor_total;
        $detalle_compra->artesania_id=$id_artesania;
        $detalle_compra->comprador_id=$request->comprador_id;
        $detalle_compra->save();

        $compra=new Compra();
        $compra->fecha=$request->fecha;
        $compra->detalle_compra_id=$request->detalle_compra_id;
        $compra->save();

        $envio=new Envio();
        $envio->nombre=$request->nombre;
        $envio->direccion=$request->direccion;
        $envio->municipio=$request->municipio;
        $envio->pais=$request->pais;
        $envio->codigo_postal=$request->codigo_postal;
        $rnvio->save();
    }


}
