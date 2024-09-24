<?php
    namespace App\Repositories\User;

    use App\Models\User;
use App\Repositories\User\UserRepositoryInterface as UserUserRepositoryInterface;

class UserRepository implements UserUserRepositoryInterface 
{
    public function index()
    {
        $product = user::all();

        return $product;
    }
    public function show($id){
        $product = user::where('id', $id)->first();
        return $product;
    }
}