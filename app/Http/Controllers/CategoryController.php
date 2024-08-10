<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function store(Request $request){
        
        $request->validate([
            'category' => 'required|string|max:255',
        ]);

        Category::create($request->all());

        return redirect()->back()->with('success', 'Category product added successfully.');
}

}
