<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    public function store(Request $request){
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'price' => 'required|string|min:0',
            'stock' => 'required|integer|min:0',
            'category' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'name.required' => 'The name field is required.',
            'description.required' => 'The description field is required.',
            'price.required' => 'The price field is required.',
            'stock.required' => 'The stock field is required.',
            'category.required' => 'The category field is required.',
            'image.required' => 'The image field is required.',
        ]);

        $data = new Product;
        $data->name = $request->name;
        $data->description = $request->description;
        $price = str_replace('.', '', $request->price);
        $data->price = (float) $price;
        $data->stock = $request->stock;
        $data->category = $request->category;
        $data->tag = $request->tag;

        $image  = $request->image;
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('products',$imagename);
            $data->image = $imagename;
        }

        $data->save();
        return redirect()->back()->with('success', 'Product added successfully.');
        
    }

}
