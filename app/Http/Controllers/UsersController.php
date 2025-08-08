<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Services\DataTable;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('menubar.users', compact('users'));        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layout.addNewUsers');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // melakukan validasi data
        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email',
            'role' => 'required|numeric',
            'password' => 'required|max:100',
            'status' => 'required|max:100',

        ],
        [
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'role.required' => 'Role wajib diisi',
            'status.required' => 'Status wajib dipilih',
            'password.required' => 'Password wajib diisi'
        ]);

        DB::table('users')->insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>$request->role,
            'status'=>$request->status,
            'password'=>Hash::make($request->password),
        ]);
        
        return redirect()->route('users.index');
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
    public function edit(User $id)
    {
        return view('layout.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validasi data
        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email',
            'role' => 'required|numeric',
            'password' => 'required|max:100',
            'status' => 'required|max:100',

        ],
        [
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'role.required' => 'Role wajib diisi',
            'status.required' => 'Status wajib dipilih',
            'password.required' => 'Password wajib diisi'
        ]);

        DB::table('users')->insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>$request->role,
            'status'=>$request->status,
            'password'=>Hash::make($request->password),
        ]);
                
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $id)
    {
        $id->delete();
    
        return redirect()->route('users.index')
                ->with('message','Data user berhasil di hapus');
    }
}
