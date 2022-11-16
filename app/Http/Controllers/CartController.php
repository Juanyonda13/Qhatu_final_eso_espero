<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artesania;

class CartController extends Controller
{
    // public function shop()
    // {
    //     $artesanias = Artesania::all();
    //   // dd($artesanias);
    //     return view('shop')->withTitle('E-COMMERCE STORE | SHOP')->with(['artesanias' => $artesanias]);
    // }

    public function cart()  {
        $cartCollection = \Cart::getContent();
        //dd($cartCollection);
        return view('cart')->withTitle('E-COMMERCE STORE | CART')->with(['cartCollection' => $cartCollection]);;
    }


    public function remove(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('cart.index')->with('success_msg', 'Item is removed!');
    }

    public function add(Request $request){
        \Cart::add(array(
            'id' => $request->id_artesania,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            // 'descripcion' => $request->descripcion,
            // 'indigena_id' => $request->indigena_id,
            'attributes' => array(
            // 'image' => $request->img,
            'slug' => $request->slug
                 )
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Artesania Agregada a sú Carrito!');
    }

    public function update(Request $request){
        \Cart::update($request->id,
            array(
                
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Cart is Updated!');
    }

    public function clear(){
        \Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', 'Car is cleared!');
    }

 

}

