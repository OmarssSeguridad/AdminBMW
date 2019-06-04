<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB;
use App\Motociclistas;
use App\Productos;

class PdfController extends Controller
{

	public function imprimir($id)
	{
		$pagos = DB::select('SELECT d.id_detalle as id, d.id_pago as pago, m.name AS name, m.ap AS ap, m.am AS am, p.fecha as fecha, q.name AS modopago, w.name as producto, d.cantidad as cantidad, d.precio as precio FROM detalles_pagos d JOIN pagos p, motociclistas m, modo_pagos q, productos w WHERE p.id_motociclista = m.id_motociclista AND q.id_modopago = p.id_modopago AND w.id_producto = d.id_producto AND p.id_pago = d.id_pago and p.id_pago ='.$id);
		$pagos=$pagos[0];
		$pdf = \PDF::loadView('pdfs.pdfPago', compact('pagos'));

  		return $pdf->download('pagos.pdf');
	}

	public function imprimirMotociclistas()
	{
		$motociclistas = Motociclistas::all();
		//dd($motociclistas);
		$pdf = \PDF::loadView('pdfs.pdfMotociclistas', compact('motociclistas'));

  		return $pdf->download('Motociclistas.pdf');
	}
	public function imprimirProductos()
	{
        $productos = DB::table('productos')
            ->join('categorias', 'productos.id_categoria', '=', 'categorias.id_categoria')
            ->select('productos.*','categorias.detalle as detalle', 'categorias.name as categoria')
            ->get();

  		$pdf = \PDF::loadView('pdfs.pdfProductos', compact('productos'));
		return $pdf->download('productos.pdf');

	}
	public function imprimirPagos()
	{
		
	
	}
}