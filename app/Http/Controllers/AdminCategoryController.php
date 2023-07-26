<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.categories.index', [
            'title' => 'Categories',
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.categories.create', [
            'title' => 'Form Create Categories'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'slug' => 'required|unique:categories'
        ]);

        Category::create($validatedData);
        return redirect('dashboard/categories')->with('success', 'New category has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        return view('dashboard.categories.show', [
            'title' => 'Category ' . $category->name,
            'category' => $category
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {
        return view('dashboard.categories.edit', [
            'title' => 'Edit Category',
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category)
    {
        $rules = [
            'name' => 'required|max:255',
        ];

        if ($request->slug != $category->slug) {
            $rules['slug'] = 'required|unique:categories';
        }

        $validatedData = $request->validate($rules);
        Category::where('id', $category->id)->update($validatedData);
        return redirect('dashboard/categories')->with('success', 'Category has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        Category::destroy($category->id);
        return redirect('/dashboard/categories')->with('delete', 'Category has been deleted!');
    }
    
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Category::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
