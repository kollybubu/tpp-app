<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Repositories\Product\ProductRepositoryInterface;

class ProductController extends Controller
{
    private ProductRepositoryInterface $productRepository;
    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->middleware('auth');
        $this->productRepository = $productRepository;
    }

    public function index()
    {
       $products = $this->productRepository->index();
      

        return view('Product.index', compact('products'));
    }

    public function create()
    {
        $category=Category::all();
        return view('Product.create', compact('category'));

    }

    public function store(Request $request)
    {
        // dd(request()->hasFile('product_image'));
        // $data = $request->validated();

        // $data['status'] = $request->has('status') ? true : false;

        if ($request->hasFile('product_image')) {
         
            $imageName = time() . '.' . $request->product_image->extension();

            $request->product_image->move(public_path('product_image'), $imageName);

        }
 

        Product::create([
            'name' => $request->name,
            "description" =>  $request->description,
            "price" =>$request->price,
            "category_id" =>$request->category_id,
            "product_image" => $imageName,
        ]);

        return redirect()->route('product.index');
    }

    public function edit($id)
{
    $product = $this->productRepository->show($id);

    $category = Category::all();
    return view('Product.edit', compact('product', 'category'));
}

    public function update(Request $request,$id)
    {
        
        $product = $this->productRepository->show($id);
        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'status' => $request->status == 'on' ? 1 : 0,
            'category_id' => $request->category_id,
 
        
        ]);

        return redirect()->route('product.index');
    }

    public function delete($id)
    {
        $product = Product::where('id', $id)->first();

        $product->delete();

        return redirect()->route('product.index');
    }
}
