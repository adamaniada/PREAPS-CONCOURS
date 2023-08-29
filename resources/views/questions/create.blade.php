@extends('layouts.app')

@section('title', "Formulaire de creation des questions")

@section('content')
<div class="container">
    <div class="row g-5">
        <div class="col-md-8">
            <h2 class="pb-4 mb-4 fst-italic border-bottom">
                Formulaire d'ajout de questions au concours de <span class="text-info strong">{{ $subcategory->name }}</span>
            </h2>
            <article class="blog-post">
                <div class="card border rounded overflow-hidden mb-4 shadow-sm">
                    <div class="card-body">
                        <form method="POST" action="{{ route('categories.subcategories.questions.store', [$cat_designation, $subcategory->designation]) }}">
                            @csrf
                            <div class="mb-3">
                                <label for="question_text">Question du test QCM</label>
                                <textarea class="form-control @error('question_text') is-invalid @enderror" name="question_text" id="question_text" cols="30" rows="5" placeholder="Ecrire ici"></textarea>
                                @error('question_text')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="answer_text_a">Reponse A du test QCM</label>
                                <input type="text" name="answer_text_a" class="form-control @error('answer_text_a') is-invalid @enderror" placeholder="Reponse A du test QCM">
                                @error('answer_text_a')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="answer_text_b">Reponse B du test QCM</label>
                                <input type="text" name="answer_text_b" class="form-control @error('answer_text_b') is-invalid @enderror" placeholder="Reponse B du test QCM">
                                @error('answer_text_b')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="answer_text_c">Reponse C du test QCM</label>
                                <input type="text" name="answer_text_c" class="form-control @error('answer_text_c') is-invalid @enderror" placeholder="Reponse C du test QCM">
                                @error('answer_text_c')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="answer_text_d">Reponse D du test QCM</label>
                                <input type="text" name="answer_text_d" class="form-control @error('answer_text_d') is-invalid @enderror" placeholder="Reponse D du test QCM">
                                @error('answer_text_d')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="correct_answer">Bonne reponse</label>
                                <select name="correct_answer" class="form-select @error('correct_answer') is-invalid @enderror">
                                    <option selected>Open select this menu</option>
                                    <option value="a">Answer A</option>
                                    <option value="b">Answer B</option>
                                    <option value="c">Answer C</option>
                                    <option value="d">Answer D</option>
                                </select>
                                @error('correct_answer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-outline-success">Ajouter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </article>
        </div>
        <div class="col-md-4">
            @include('layouts.include.app.aside.about')

            @include('layouts.include.app.aside.archives')

            @include('layouts.include.app.aside.ailleurs')
        </div>
    </div>
</div>
@endsection
