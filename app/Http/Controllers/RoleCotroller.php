<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;
use App\Repositories\Role\RoleRepositoryInterface;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class RoleCotroller extends Controller
{
    private RoleRepositoryInterface $RoleRepository;
    public function __construct(RoleRepositoryInterface $RoleRepository)
    {
        $this->middleware('auth');
        $this->RoleRepository = $RoleRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $role=$this->RoleRepository->index();
        return view('role.index', compact('role'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('role.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=> 'required',
        ]);
        $data=Role::create([
            'name' => $data['name'],
        ]);
        return redirect()->route('role.index');
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
        $role = $this->RoleRepository->show($id);

        $permissions = Permission::all();
        
        return view('role.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $role = $this->RoleRepository->show($id);
        $role->update([
            'name' => $request->name
 
        
        ]);
        $role->permissions()->sync($request['permissions']);
        return redirect()->route('role.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {   
        $role = Role::where('id', $id)->first();

        $role->delete();

        return redirect()->route('role.index');
    }
}
