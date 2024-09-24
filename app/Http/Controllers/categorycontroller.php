<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Repositories\Category\CategoryRepositoryInterface;


class categorycontroller extends Controller
{
    private CategoryRepositoryInterface $CategoryRepository;
    public function __construct(CategoryRepositoryInterface $CategoryRepository)
    {
        $this->middleware('auth');
        $this->CategoryRepository = $CategoryRepository;
    }
    public function index(){
        $categories = $this->CategoryRepository->index();

        return view('category.index', compact('categories'));


    }
    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        category::create([
            'name' => $request->name,
        ]);

        return redirect()->route('category.index');
    }
    public function edit($id)
    {
        $category = $this->CategoryRepository->show($id);
    
        return view('category.edit', compact('category'));
    }
    
        public function update(Request $request,$id)
        {
            $category = $this->CategoryRepository->show($id);
            $category->update([
                'name' => $request->name
     
            
            ]);
    
            return redirect()->route('category.index');
        }
    
        public function delete($id)
        {
            $category = category::where('id', $id)->first();
    
            $category->delete();
    
            return redirect()->route('category.index');
        }
}
