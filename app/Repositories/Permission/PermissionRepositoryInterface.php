<?php

namespace App\Repositories\Permission;
interface PermissionRepositoryInterface
{
    public function index();

    public function show($id);
}