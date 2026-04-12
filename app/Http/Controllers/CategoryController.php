<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'cat_name' => ['required' , 'min:3' , 'max:255'],
            'cat_color' => ['required' , 'min:3' , 'max:255']
        ]);
        
        if(Category::where('cat_name', $request->cat_name)->exists()) {
            return redirect()->back()->withErrors(['cat_name' => 'The category name has already been taken.'])->withInput();
        }

        Category::create($request->all());

        return redirect()->route('categories.index')->with('success', 'Category added successfully');
    }
}

//     /**
//      * Display the specified resource.
//      */
//     public function show(Category $category)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      */
//     public function edit(Category $category)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(Request $request, Category $category)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(Category $category)
//     {
//         //
//     }
// }
