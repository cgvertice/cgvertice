<?php

namespace App\Http\Controllers;

use App\Models\Detalleproducto;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $V2 = Producto::all();
        return view('sistema.V2.index', compact('V2'));
    }
    
    public function search(Request $request)
    {
        $query = $request->input('query');
        $V2 = Producto::where('nombre', 'LIKE', "%{$query}%")->get();

        return view('sistema.V2.index', compact('V2'));
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
            'Nombre' => 'required',
            'Imagen' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'Precio' => 'required',
            'Descripcion' => 'required',
            'InformacionA' => 'required',
            'Opcion' => 'required',
        ]);

        // Procesar y almacenar la imagen
        if ($request->hasFile('Imagen')) {
            $imagen = $request->file('Imagen');
            $nombreImagen = time() . '.' . $imagen->getClientOriginalExtension();
            $rutaImagen = public_path('imagenesProducto/img/');

            // Mueve la imagen a la carpeta de destino
            $imagen->move($rutaImagen, $nombreImagen);
        } else {
            return redirect()->back()->withErrors(['Imagen' => 'Debe seleccionar una imagen.'])->withInput();
        }

        // Guardar los demás campos en la base de datos
        $producto = new Producto;
        $producto->nombre = $request->input('Nombre');
        $producto->imagen = $nombreImagen;
        $producto->precio = $request->input('Precio');
        $producto->descripcion = $request->input('Descripcion');
        $producto->informacionA = $request->input('InformacionA');
        $producto->opcion = $request->input('Opcion');
        $producto->save();

        return redirect()->back();
    }



    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $producto = Producto::with('detalleproductos')->find($id);

        if (!$producto) {
            abort(404); // O redirige a una vista de error 404
        }

        return view('sistema/V2/info', ['producto' => $producto]);
    }




    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Nombre' => 'required',
            'Precio' => 'required',
            'Descripcion' => 'required',
            'InformacionA' => 'required',
            'Opcion' => 'required',
            'Imagen' => $request->hasFile('Imagen')
        ]);

        $producto = Producto::find($id);

        // Verifica si hay una nueva imagen en la solicitud
        if ($request->hasFile('Imagen')) {
            $imagen = $request->file('Imagen');
            $nombreImagen = time() . '.' . $imagen->getClientOriginalExtension();
            $rutaImagen = public_path('imagenesProducto/img/');

            // Mueve la nueva imagen a la carpeta de destino
            $imagen->move($rutaImagen, $nombreImagen);

            // Actualiza el campo de imagen en el modelo
            $producto->imagen = $nombreImagen;
        }

        // Actualiza los demás campos en la base de datos
        $producto->nombre = $request->input('Nombre');
        $producto->precio = $request->input('Precio');
        $producto->descripcion = $request->input('Descripcion');
        $producto->informacionA = $request->input('InformacionA');
        $producto->opcion = $request->input('Opcion');

        $producto->update($request->all());

        return redirect()->back();
    }

    public function destroy($id)
    {
        $totalProductos = Producto::count();

        if ($totalProductos >= 1) {
            $producto = Producto::findOrFail($id);
            $producto->delete();

        // Construcción de rutas
        $imagenRuta = public_path('imagenesProducto/img/' . $producto->imagen);

        if ($producto->imagen && file_exists($imagenRuta)) {
            if (unlink($imagenRuta)) {
                echo 'Imagen eliminada exitosamente.';
            } else {
                echo 'Error al eliminar la imagen.';
            }
        }

            return response()->json(['message' => 'Producto eliminado correctamente']);
        } else {
            return response()->json(['error' => 'No puedes eliminar el último producto.'], 400);
        }
    }

     // Método para añadir un producto al carrito
     public function addToCart($id)
     {
         $producto = Producto::find($id); // Busca el producto por ID
         
         if ($producto) {
             // Inicializa el carrito si no existe
             if (!session()->has('cart')) {
                 session(['cart' => []]);
             }
             
             // Añadir producto al carrito
             $cart = session('cart');
             if (isset($cart[$id])) {
                 $cart[$id]['quantity']++; // Incrementa la cantidad si ya existe
             } else {
                 $cart[$id] = [
                     'name' => $producto->nombre,
                     'price' => $producto->precio, // Asegúrate de que el modelo tenga este atributo
                     'quantity' => 1
                 ];
             }
             session(['cart' => $cart]);
         }
 
         return redirect()->route('productos.index')->with('success', 'Producto añadido al carrito.');
     }
 
     // Método para mostrar el carrito
     public function showCart()
     {
         $cart = session('cart', []); // Obtiene el carrito de la sesión
         return view('sistema.carrito.index', compact('cart')); // Cambia 'carrito.index' por la vista que tengas para el carrito
     }

     public function removeFromCart($id)
{
    $cart = session()->get('cart');

    // Verifica si el producto está en el carrito
    if (isset($cart[$id])) {
        // Elimina el producto del carrito
        unset($cart[$id]);
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Producto eliminado del carrito.');
    }

    return redirect()->back()->with('error', 'Producto no encontrado en el carrito.');
}

public function clearCart()
{
    session()->forget('cart'); // Elimina todo el carrito de la sesión
    return redirect()->back()->with('success', 'Carrito vaciado exitosamente.');
}
}