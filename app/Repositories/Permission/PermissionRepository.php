<?php
    namespace App\Repositories\Permission;
    use Spatie\Permission\Models\Permission;

class PermissionRepository implements PermissionRepositoryInterface 
{

    public function index()
    {
        $Permis = Permission::all();

        return $Permis;
    }
    public function show($id){
        $Permis = Permission::where('id', $id)->first();
        return $Permis;
    }
}