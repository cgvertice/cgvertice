<?php

namespace App\Http\Controllers;

use App\Models\Converge;
use App\Models\Producto;
use App\Models\Proyecto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $V2 = Producto::all();
        $Blog = Converge::all();
        $mainBlog = Converge::latest()->take(6)->get();
        return view('welcome', compact('V2','Blog', 'mainBlog'));
    
    }

    public function indexEyF()
    {
        return view('EyF');
    }

    public function indexGestionDesarrollo()
    {
        return view('gestionDesarrollo');
    }

    public function indexFormacionContinua()
    {
        return view('FormacionContinua');
    }

    public function indexFC()
    {
        return view('FormacionConsultores');
    }

    public function indexServicios()
    {
        return view('servicios');
    }

    public function indexGestionE()
    {
        return view("GestionE");
    }
    public function indexGestionEmpresas()
    {
        return view("GestionEmpresas");
    }
    public function indexGestionIps()
    {
        return view("GestionIps");
    }
    public function indexBotiquin()
    {
        return view("V2/info");
    }
    public function indexBlog()
    {
        return view("blog/index");
    }
    public function indexSeguridad()
    {
        return view("blog/Seguridad");
    }
    public function indexNosotros()
    {
        return view("nosotros");
    }

    public function indexGestionCalidad()
    {
        return view ("/GestionCalidad");
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
        //
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proyecto $proyecto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Proyecto $proyecto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proyecto $proyecto)
    {
        //
    }
}