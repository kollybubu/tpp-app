<?php
namespace App\Repositories\Category;
use App\Models\Category;
use App\Repositories\Category\CategoryRepositoryInterface;


class CategoryRepository implements CategoryRepositoryInterface
{
    public function index()
    {
        $Category = Category::all();

        return $Category;
    }
    public function show($id){
        $Category = Category::where('id', $id)->first();
        return $Category;
    }
}