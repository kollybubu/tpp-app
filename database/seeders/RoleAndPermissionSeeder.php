<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin= Role::create(['name' => 'admin']);

        $user = Role::create(['name' => 'user']);

        $dashboard = Permission::create(['name' => 'dashboard']);

        $productlist = Permission::create(['name' => 'productlist']);
        $productcreate = Permission::create(['name' => 'productCreate']);
        $productedit =  Permission::create(['name' => 'productedit']);
        $productdelete = Permission::create(['name' => 'productdelete']);
        
        $admin->givePermissionTo([
            $dashboard,
            $productlist,
            $productcreate,
            $productedit,
            $productdelete,
        ]);
        $user->givePermissionTo([
            $dashboard,
            $productlist,
        ]);
    }
}
