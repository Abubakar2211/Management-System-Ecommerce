<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Cache;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with(['roles:id,name','roles.permissions:id,name','permissions:id,name'])
                           ->cursorPaginate(5,['id', 'name', 'email']);
        $roles = Role::get(['id', 'name']);
        $permissions = Permission::get(['id', 'name']);
        return view('user.index', compact('users', 'roles', 'permissions'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function demo(){
        // Cache::put('email','Abubakar192005@gmail.com',$second=10);
        // Cache::put('state','Abubakar',now()->addSeconds(10));
        // Cache::remember('state',5,function(){
        //     return "baig";
        // });
        // dd(Cache::add('money',5,10));
        // Cache::forever('product', 'Laptop');
        // $product = Cache::get('product');
        // dd($product);
        // if(Cache::has('product')){
        //     dd('Yes');  
        // }
        // Cache::forget('product');
        // dd(Cache::get('product'));
        Cache::flush();
        // $value = Cache::rememberForever('shirt', function () {
        //     return 10;
        // });
        // dd($value);
    }
}
