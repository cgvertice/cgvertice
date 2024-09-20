<?php

namespace App\Http\Controllers;

use App\Models\DetalleProducto;
use App\Models\Producto;
use Illuminate\Http\Request;

class DetalleProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'elementos.*' => 'required',
            'unidades.*' => 'required',
            'cantidades.*' => 'required'
        ]);

        // Guardar los demás campos en la base de datos
        foreach ($request->elementos as $key => $elemento) {
            $detalle = new DetalleProducto;
            $detalle->id_producto = $request->input('id_producto');
            $detalle->elementos = $elemento;
            $detalle->unidades = $request->unidades[$key];
            $detalle->cantidad = $request->cantidades[$key];
            $detalle->save();
        }

        return redirect()->back();
    }


    public function showDetallesModal($id)
    {
        $producto = Producto::with('detalleproductos')->find($id);

        if (!$producto) {
            abort(404); // O redirige a una vista de error 404
        }

        return view('V2/detalles', ['producto' => $producto]);
    }
    /**
     * Display the specified resource.
     */
    public function show(DetalleProducto $detalleProducto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DetalleProducto $detalleProducto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Elemento' => 'required',
            'Unidad' => 'required',
            'Cantidad' => 'required'
        ]);

        $detalle = DetalleProducto::find($id);

        // Actualiza los demás campos en la base de datos
        $detalle->elementos = $request->input('Elemento');
        $detalle->unidades = $request->input('Unidad');
        $detalle->cantidad = $request->input('Cantidad');

        $detalle->update($request->all());

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function eliminarDetalle($idDetalle)
    {
        try {
            $detalle = DetalleProducto::findOrFail($idDetalle);
            $detalle->delete();

            return response()->json(['success' => true], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error al eliminar el detalle.'], 500);
        }
    }
}
