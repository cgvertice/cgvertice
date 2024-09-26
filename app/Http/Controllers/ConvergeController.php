<?php

namespace App\Http\Controllers;

use App\Models\Converge;
use Illuminate\Http\Request;

class ConvergeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Blog = Converge::all();
        return view('sistema.blog.index', compact('Blog'));
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
        // Validar solo los campos necesarios
        $request->validate([
            'NombreN' => 'required',
            'DescripcionN' => 'required',
            'Opcion' => 'required',
            'Autor' => 'required|string|max:255',
            'Url' => 'nullable|url',
            'rutaImagen' => 'required|string',  // Ruta de la imagen debe ser requerida
            'rutaVideo' => 'nullable|string'    // Video opcional
        ]);
    
        // Ya no es necesario procesar los archivos, recibimos las rutas directamente
        $rutaImagen = $request->input('rutaImagen');
        $rutaVideo = $request->input('rutaVideo');  // Si el video es opcional
    
        // Guardar noticia con las rutas de la imagen y el video
        Converge::create([
            'opcion' => $request->input('Opcion'),
            'nombre_noticia' => $request->input('NombreN'),
            'descripcion_noticia' => $request->input('DescripcionN'),
            'foto' => $rutaImagen,   // Guardamos la ruta de la imagen
            'video' => $rutaVideo,   // Guardamos la ruta del video (si existe)
            'author' => $request->input('Autor'),
            'url' => $request->input('Url'),
            'created_at' => now(),
        ]);
    
        return redirect()->back()->with('success', 'Noticia guardada exitosamente.');
    }
    



public function uploadMultimedia(Request $request)
{
    $rutaImagen = null;
    $rutaVideo = null;

    // Procesar imagen si existe
    if ($request->hasFile('Imagen')) {
        $imagen = $request->file('Imagen');
        $nombreImagen = time() . '.' . $imagen->getClientOriginalExtension();
        $rutaImagen = 'imagenesBlog/img/' . $nombreImagen;
        $imagen->move(public_path('imagenesBlog/img/'), $nombreImagen);
    }

    // Procesar video si existe
    if ($request->hasFile('Video')) {
        $video = $request->file('Video');
        $nombreVideo = time() . '.' . $video->getClientOriginalExtension();
        $rutaVideo = 'imagenesBlog/video/' . $nombreVideo;
        $video->move(public_path('imagenesBlog/video/'), $nombreVideo);
    }

    // Retornar respuesta en JSON con las rutas de los archivos subidos
    return response()->json([
        'rutaImagen' => $rutaImagen,
        'rutaVideo' => $rutaVideo
    ]);
}

public function deleteMultimedia(Request $request)
{
    $rutaImagen = $request->input('rutaImagen');
    $rutaVideo = $request->input('rutaVideo');

    // Eliminar imagen si existe
    if ($rutaImagen && file_exists(public_path($rutaImagen))) {
        unlink(public_path($rutaImagen));
    }

    // Eliminar video si existe
    if ($rutaVideo && file_exists(public_path($rutaVideo))) {
        unlink(public_path($rutaVideo));
    }

    // Retornar respuesta en JSON confirmando la eliminación
    return response()->json([
        'mensaje' => 'Archivos eliminados correctamente',
    ]);
}




    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'NombreE' => 'required',
            'DescripcionE' => 'required',
            'OpcionE' => 'required',
            'AutorE' => 'required|string|max:255',
            'UrlE' => 'nullable|url',
            'rutaImagen' => 'required|string',  // Ruta de la imagen debe ser requerida
            'rutaVideo' => 'nullable|string'    // Video opcional
            
        ]);
    
        $blogs = Converge::find($id);

        if ($blogs->foto && file_exists(public_path($blogs->foto))){
            unlink(public_path($blogs->foto));
        }

        if ($blogs->video && file_exists(public_path($blogs->video))){
            unlink(public_path($blogs->video));
        }


        // Actualizar otros campos
        $blogs->nombre_noticia = $request->input('NombreE');
        $blogs->descripcion_noticia = $request->input('DescripcionE');
        $blogs->opcion = $request->input('OpcionE');
        $blogs->author = $request->input('AutorE');
        $blogs->url = $request->input('UrlE');
        $blogs->foto = $request->input('rutaImagen');
        $blogs->video = $request->input('rutaVideo');
    
        $blogs->save();
    
        return redirect()->back()->with('success', 'Noticia actualizada exitosamente.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Converge $converge)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Converge $converge)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idNoticia)
    {
        $blog = Converge::find($idNoticia);
    
        if (!$blog) {
            return redirect()->back()->with('error', 'Noticia no encontrada.');
        }
    
        // Eliminar imagen si existe
        if ($blog->foto && file_exists(public_path($blog->foto))) {
            unlink(public_path($blog->foto));
        }
    
        // Eliminar video si existe
        if ($blog->video && file_exists(public_path($blog->video))) {
            unlink(public_path($blog->video));
        }
    
        // Eliminar noticia
        $blog->delete();
    
        return redirect()->back()->with('success', 'Noticia eliminada exitosamente.');
    }
    
}