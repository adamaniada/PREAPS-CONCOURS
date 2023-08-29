<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class QuestionController extends Controller
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
    public function create(string $cat_designation, string $subcategory_designation)
    {
        $subcategory = Subcategory::where('designation', '=', $subcategory_designation)->first();
        return view('questions.create', compact('cat_designation' ,'subcategory'));
    }

    /**
    * Store a newly created resource in storage.
    */
    public function store(Request $request, string $cat_designation, string $subcategory_designation)
    {
        $validatedData = $request->validate([
            'question_text' => 'required',
            'answer_text_a' => 'required',
            'answer_text_b' => 'required',
            'answer_text_c' => 'required',
            'answer_text_d' => 'required',
            'correct_answer' => 'required|in:a,b,c,d',
        ]);
        
        $question = new Question();
        $question->subcategory_id = Subcategory::where('designation', '=', $subcategory_designation)->first()->id;
        $question->question_text = $validatedData['question_text'];
        $question->answer_text_a = $validatedData['answer_text_a'];
        $question->answer_text_b = $validatedData['answer_text_b'];
        $question->answer_text_c = $validatedData['answer_text_c'];
        $question->answer_text_d = $validatedData['answer_text_d'];
        $question->correct_answer = $validatedData['correct_answer'];
        $question->save();

        return redirect()->route('categories.subcategories.show', [$cat_designation, $subcategory_designation])->with('success', 'Question create successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $cat_designation, string $subcategory_designation, string $quest_id)
    {
        $question = Question::find($quest_id);
        $subcategory = Subcategory::where('designation', '=', $subcategory_designation)->first();

        return view('questions.edit', compact('subcategory' ,'question', 'cat_designation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $cat_designation, string $subcategory_designation, string $quest_id)
    {
        $validatedData = $request->validate([
            'question_text' => 'required',
            'answer_text_a' => 'required',
            'answer_text_b' => 'required',
            'answer_text_c' => 'required',
            'answer_text_d' => 'required',
            'correct_answer' => 'required|in:a,b,c,d',
        ]);

        $question = Question::find($quest_id);
        $question->subcategory_id = Subcategory::where('designation', '=', $subcategory_designation)->first()->id;
        $question->question_text = $validatedData['question_text'];
        $question->answer_text_a = $validatedData['answer_text_a'];
        $question->answer_text_b = $validatedData['answer_text_b'];
        $question->answer_text_c = $validatedData['answer_text_c'];
        $question->answer_text_d = $validatedData['answer_text_d'];
        $question->correct_answer = $validatedData['correct_answer'];
        $question->update();

        return redirect()->route('categories.subcategories.show', [$cat_designation, $subcategory_designation])->with('success', 'Question update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $cat_designation, string $subcategory_designation, string $quest_id)
    {
        Question::find($quest_id)->delete();

        return redirect()->route('categories.subcategories.show', [$cat_designation, $subcategory_designation])->with('success', 'Question delete successfully.');
    }
}
