<?php

namespace App\Http\Controllers;

use App\Repositories\Permission\PermissionRepositoryInterface;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    private PermissionRepositoryInterface $permissionrepository;
    public function __construct(PermissionRepositoryInterface $permissionrepository)
    {
        $this->middleware('auth');
        $this->permissionrepository = $permissionrepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $permission=$this->permissionrepository->index();
        return view('permission.index', compact('permission'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('permission.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=> 'required',
        ]);
        $data=Permission::create([
            'name' => $data['name'],
        ]);
        return redirect()->route('permission.index');
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
        $permission = $this->permissionrepository->show($id);

        
        return view('permission.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $permission = $this->permissionrepository->show($id);
        $permission->update([
            'name' => $request->name
 
        
        ]);

        return redirect()->route('permission.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $permission = Permission::where('id', $id)->first();

        $permission->delete();

        return redirect()->route('permission.index');
    }
}
