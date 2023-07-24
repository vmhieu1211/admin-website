<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:product-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:product-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $products = Product::All();
        // foreach($products as $product){
        //     dd($product->user);
        // }
        return view('products.index', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function create()

    {
        return view('products.create');
    }

    public function store(Request $request)
    {
       
        $request->validate(
            [
                'name' => 'required',
                'detail' => 'required',
            ]
        );
        // dd($request);
        $user = Auth::user();
        $product = new Product();
        $product->name = $request->name;
        $product->detail = $request->detail;
        $product->images = $request->images;
        $product->author = $user->id;


        // dd($product);
        $product->save();
        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }



    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            // 'images' => 'image|mimes:jpeg,png,jpg,gif'
        ]);
        $product->name = $request->name;
        $product->detail = $request->detail;
        $product->images = $request->images;
        $product->save();

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully');
    }

    // public function search(Request $request)
    // {
    //     $fromDate   = $request->from_date;
    //     $toDate     = $request->to_date;
    //     $name       = $request->name;
    //     $detail    = $request->detail;

    //     $products = DB::table('products')
    //         ->whereBetween('created_at', [$fromDate, $toDate])
    //         ->where(function ($query) use ($name, $detail) {
    //             $query->where('name', 'like', '%' . $name . '%')
    //                 ->orWhere('detail', 'like', '%' . $detail . '%');
    //         })
    //         ->paginate(10);
    //     return view('products.index', compact('products'));
    // }
}
