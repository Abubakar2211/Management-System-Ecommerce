<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with(['roles:id,name', 'roles.permissions:id,name', 'permissions:id,name'])
            ->cursorPaginate(5, ['id', 'name', 'email']);
        $roles = Role::get(['id', 'name']);
        $permissions = Permission::get(['id', 'name']);
        return response()->json(['user' => $users, 'roles' => $roles, 'permissions', $permissions]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'max:255'],
            'password_confirmation' => ['required', 'string', 'max:255', 'same:password'],
        ]);
        $user = User::create($validate);
        return response()->json(['message' => "$user->name User Create Successfully."]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,User $user)
    {
        $validate = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'max:255'],
            'password_confirmation' => ['required', 'string', 'max:255', 'same:password'],
        ]);
        $user->update($validate);
        return response()->json(['message' => "$user->name User Create Successfully."]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
