<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Question;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $cat_designation)
    {
        $category = Category::where('designation', '=', $cat_designation)->first();

        return view('subcategory.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $cat_designation)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'description' => 'required',
            'category_id' => 'required',
        ]);

        $subcategory = new Subcategory();
        $subcategory->name = $validateData['name'];
        $subcategory->designation = $validateData['designation'];
        $subcategory->description = $validateData['description'];
        $subcategory->category_id = $validateData['category_id'];

        $subcategory->save();

        return redirect()->route('categories.show', $cat_designation)->with('success', 'Subcategory created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $cat_designation, string $subcategory_designation)
    {
        $subcategory = Subcategory::where('designation', $subcategory_designation)->firstOrFail();
        $questions = Question::where('subcategory_id', $subcategory->id)->paginate(10);

        // dd( $questions);

        return view('subcategory.show', compact('subcategory', 'questions', 'cat_designation'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $cat_designation, string $subcategory_id)
    {
        $subcategory = Subcategory::find($subcategory_id);

        return view('subcategory.edit', compact('subcategory', 'cat_designation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $cat_designation, string $subcategory_id)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'description' => 'required',
        ]);

        $subcategory = Subcategory::find($subcategory_id);
        $subcategory->name = $validateData['name'];
        $subcategory->designation = $validateData['designation'];
        $subcategory->description = $validateData['description'];

        $subcategory->update();

        return redirect()->route('categories.show', $cat_designation)->with('success', 'Subcategory update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $cat_designation, string $subcategory_id)
    {
        Subcategory::find($subcategory_id)->delete();

        return redirect()->route('categories.show', $cat_designation)->with('success', 'Subcategory delete successfully.');
    }
}
