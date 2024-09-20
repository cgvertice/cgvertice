<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        return view('sistema.user.roles', compact('roles'));
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
    public function createAllRoles() {
        $roles = ['Admin', 'Profesional', 'Usuario'];
    
        foreach($roles as $role) {
            if (!Role::where('name', $role)->exists()) {
                Role::create(['name' => $role]);

                
            }
        }
    
        return redirect()->back()->with('status', 'Roles creados exitosamente');
    }

    public function store(Request $request)
    {
        $roles = Role::create(['name' => $request->input('Nombre')]);
        return redirect()->back()->with('status', 'Rol creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id, Role $roles)
    {
        $roles = Role::find($id);
        $permisos = Permission::all();
        
        $permisosNecesarios = ['Ver Noticias', 'Crear Noticias', 'Editar Noticias', 'Eliminar Noticias', 'Ver V2', 'Crear Productos', 'Editar Productos', 'Eliminar Productos', 'Ver DetallesProductos', 'Crear Detalles', 'Editar Detalles', 'Eliminar Detalles', 'Admin Configuracion'];

        $permisosExistentes = $permisos->pluck('name')->toArray();

        $faltanPermisos = array_diff($permisosNecesarios, $permisosExistentes);

        if (!empty($faltanPermisos)) {
            return redirect()->back()->with('error', 'Debes crear todos los permisos antes de asignarlos a un rol.');
        }
        return view('sistema.user.rolePermiso', compact('roles', 'permisos'));
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $roles = Role::find($id);
        $permisos = Permission::all();

        $permisosNecesarios = ['Ver Noticias', 'Crear Noticias', 'Editar Noticias', 'Eliminar Noticias', 'Ver V2', 'Crear Productos', 'Editar Productos', 'Eliminar Productos', 'Ver DetallesProductos', 'Crear Detalles', 'Editar Detalles', 'Eliminar Detalles', 'Admin Configuracion'];

        $permisosExistentes = $permisos->pluck('name')->toArray();

        $faltanPermisos = array_diff($permisosNecesarios, $permisosExistentes);

        if (!empty($faltanPermisos)) {
            return redirect()->back()->with('error', 'Debes crear todos los permisos antes de asignarlos a un rol.');
        }
        $permisos = $request->permisos;

        $roles->syncPermissions($permisos);

        return redirect()->route('roles.edit', $roles);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
