<?php

namespace App\Http\Controllers;

use App\Filters\UserFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request)
    {
        $users = User::all();
        $roles = Role::all();

        return view('sistema.users.index', compact('users', 'roles'));
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
        
    }


    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
