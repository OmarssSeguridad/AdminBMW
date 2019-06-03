<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Productos;
use App\Motociclistas;
use App\modoPago;
class CartController extends Controller
{
	public function __construct()
	{
		if(!\Session::has('cart')) \Session::put('cart', array());
	}

    // Show cart
    public function show()
    {
    	$cart = \Session::get('cart');
    	$total = $this->total();
    	return view('store.cart', compact('cart', 'total'));
    }

    // Add item
    public function add(Productos $producto)
    {
    	$cart = \Session::get('cart');
    	$producto->cantidad = 1;
    	$cart[$producto->id_producto] = $producto;
    	\Session::put('cart', $cart);

    	return redirect()->route('cart-show');
    }

    // Delete item
    public function delete(Productos $producto)
    {
    	$cart = \Session::get('cart');
    	unset($cart[$producto->id_producto]);
    	\Session::put('cart', $cart);

    	return redirect()->route('cart-show');
    }

    // Update item
    public function update(Productos $producto, $cantidad)
    {
    	$cart = \Session::get('cart');
    	$cart[$producto->id_producto]->cantidad = $cantidad;
    	//dd($cart);
    	\Session::put('cart', $cart);

    	return redirect()->route('cart-show');
    }

    // Trash cart
    public function trash()
    {
    	\Session::forget('cart');

    	return redirect()->route('cart-show');
    }

    // Total
    private function total()
    {
    	$cart = \Session::get('cart');
    	$total = 0;
    	foreach($cart as $item){
    		$total += $item->precio * $item->cantidad;
    	}

    	return $total;
    }

    // Detalle del pedido
    public function orderDetail()
    {
    	$motociclista=Motociclistas::all();
        $modoPago = modoPago::all();
        $cart = \Session::get('cart');
        $total = $this->total();

        return view('store.order-detail', compact('cart', 'total','motociclista','modoPago'));
    }
}
