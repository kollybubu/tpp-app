<?php
    namespace App\Repositories\Role;
    use Spatie\Permission\Models\Role;

class RoleRepository implements RoleRepositoryInterface 
{

    public function index()
    {
        $role = Role::all();

        return $role;
    }
    public function show($id){
        $role = Role::where('id', $id)->first();
        return $role;
    }
}