<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::paginate(10);

        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'description' => 'required',
        ]);

        $categorie = new Category();
        $categorie->name = $validateData['name'];
        $categorie->designation = $validateData['designation'];
        $categorie->description = $validateData['description'];
        $categorie->save();

        return redirect()->route('categories')->with('success', 'Categorie created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $designation)
    {
        $id = Category::where('designation', '=', $designation)->first()->id;
        $category = Category::findOrFail($id);
        $subcategories = Category::join('subcategories', 'subcategories.category_id', 'categories.id')
                            ->where('subcategories.category_id', '=', $id)->paginate(10);

        // dd($subcategories);

        return view('categories.show',compact('category', 'subcategories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $designation)
    {
        $category = Category::find(Category::where('designation', '=', $designation)->firstOrFail()->id);

        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $cat_id)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $category = Category::find($cat_id);
        $category->name = $validateData['name'];
        $category->description = $validateData['description'];
        $category->update();

        return redirect()->route('categories')->with('success', 'Categorie update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $designation)
    {
        $category = Category::where('designation', '=', $designation)->firstOrFail();
        Category::findOrFail($category->id)->delete();

        return redirect()->route('categories')->with('success', 'Categorie delete successfully.');
    }
}
