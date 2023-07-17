<?php

namespace App\Http\Controllers;

use App\Models\ProductSuggest;
use Illuminate\Http\Request;

class ProductSuggestController extends Controller
{
    public function index()
    {
        $products = ProductSuggest::all();
        return view('productSuggest.index', compact('products'));
    }

    public function create()
    {
        return view('productSuggest.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'amount' => 'required',
            'money' => 'required',
            'department' => 'required',
            'status' => 'required',
            'purchase_date' => 'required',
            'delivery_date' => 'required',
            'person_delivery_id' => 'required',
            'depreciation_rate' => 'required'
        ]);
        $productSuggest = new ProductSuggest();
        $productSuggest->name = $request->name;
        $productSuggest->amount = $request->amount;
        $productSuggest->money = $request->money;
        $productSuggest->department = $request->department;
        $productSuggest->status = $request->status;
        $productSuggest->purchase_date = $request->purchase_date;
        $productSuggest->delivery_date = $request->delivery_date;
        $productSuggest->person_delivery_id = $request->person_delivery_id;
        $productSuggest->depreciation_rate = $request->depreciation_rate;
        $productSuggest->save();

        return redirect()->route('productSuggest.index')->with('success', 'Suggest created success');
    }

    public function show(ProductSuggest $product)
    {
        return view('productSuggest.show', compact('product'));
    }

    public function edit(ProductSuggest $product)
    {
        return view('productSuggest.edit', compact('product'));
    }

    public function update(Request $request, ProductSuggest $productSuggest)
    {
        $request->validate([
            'name' => 'required',
            'amount' => 'required',
            'money' => 'required',
            'department' => 'required',
            'status' => 'required',
            'purchase_date' => 'required',
            'delivery_date' => 'required',
            'person_delivery_id' => 'required',
            'depreciation_rate' => 'required'
        ]);
        $productSuggest->name = $request->name;
        $productSuggest->amount = $request->amount;
        $productSuggest->money = $request->money;
        $productSuggest->department = $request->department;
        $productSuggest->status = $request->status;
        $productSuggest->purchase_date = $request->purchase_date;
        $productSuggest->delivery_date = $request->delivery_date;
        $productSuggest->person_delivery_id = $request->person_delivery_id;
        $productSuggest->depreciation_rate = $request->depreciation_rate;
        $productSuggest->save();
        return redirect()->route('productSuggests.index')->with('success', 'Product updated success');
    }

    public function destroy(ProductSuggest $productSuggest)
    {
        $productSuggest->delete();
        return redirect()->route('productSuggests.index')->with('success', 'Product deleted success');
    }
}
