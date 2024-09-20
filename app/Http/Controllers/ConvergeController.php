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
    $request->validate([
        'NombreN' => 'required',
        'DescripcionN' => 'required',
        'Imagen' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        'Video' => 'nullable|mimetypes:video/avi,video/mp4,video/mpeg,video/quicktime|max:50000',
        'Opcion' => 'required',
        'Autor' => 'required|string|max:255',
        'Url' => 'nullable|url'
    ]);

    // Procesar imagen
    $imagen = $request->file('Imagen');
    $nombreImagen = time() . '.' . $imagen->getClientOriginalExtension();
    $rutaImagen = 'imagenesBlog/img/' . $nombreImagen;
    $imagen->move(public_path('imagenesBlog/img/'), $nombreImagen);

    // Procesar video si existe
    $rutaVideo = null;
    if ($request->hasFile('Video')) {
        $video = $request->file('Video');
        $nombreVideo = time() . '.' . $video->getClientOriginalExtension();
        $rutaVideo = 'videos/videos/' . $nombreVideo;
        $video->move(public_path('videos/videos'), $nombreVideo);
    }

    // Guardar noticia
    Converge::create([
        'opcion' => $request->input('Opcion'),
        'nombre_noticia' => $request->input('NombreN'),
        'descripcion_noticia' => $request->input('DescripcionN'),
        'foto' => $rutaImagen,
        'video' => $rutaVideo,
        'author' => $request->input('Autor'),
        'url' => $request->input('Url'),
        'created_at' => now(),
    ]);

    return redirect()->back()->with('success', 'Noticia guardada exitosamente.');
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'NombreE' => 'required',
            'DescripcionE' => 'required',
            'ImagenE' => $request->hasFile('ImagenE') ? 'image|mimes:jpeg,png,jpg|max:2048' : '',
            'VideoE' => $request->hasFile('VideoE') ? 'mimetypes:video/avi,video/mp4,video/mpeg|max:50000' : '',
            'OpcionE' => 'required',
            'AutorE' => 'required|string|max:255',
            'UrlE' => 'nullable|url'
        ]);
    
        $blogs = Converge::find($id);
    
        // Procesar imagen si se actualiza
        if ($request->hasFile('ImagenE')) {
            $imagen = $request->file('ImagenE');
            $nombreImagen = time() . '.' . $imagen->getClientOriginalExtension();
            $rutaImagen = 'imagenesBlog/img/' . $nombreImagen;
            $imagen->move(public_path('imagenesBlog/img/'), $nombreImagen);
    
            // Eliminar la imagen anterior si existe
            if ($blogs->foto && file_exists(public_path($blogs->foto))) {
                unlink(public_path($blogs->foto));
            }
    
            $blogs->foto = $rutaImagen;
        }
    
        // Procesar video si se actualiza
        if ($request->hasFile('VideoE')) {
            $video = $request->file('VideoE');
            $nombreVideo = time() . '.' . $video->getClientOriginalExtension();
            $rutaVideo = 'videos/videos/' . $nombreVideo;
            $video->move(public_path('videos/videos'), $nombreVideo);
    
            // Eliminar el video anterior si existe
            if ($blogs->video && file_exists(public_path($blogs->video))) {
                unlink(public_path($blogs->video));
            }
    
            $blogs->video = $rutaVideo;
        }
    
        // Actualizar otros campos
        $blogs->nombre_noticia = $request->input('NombreE');
        $blogs->descripcion_noticia = $request->input('DescripcionE');
        $blogs->opcion = $request->input('OpcionE');
        $blogs->author = $request->input('AutorE');
        $blogs->url = $request->input('UrlE');
    
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