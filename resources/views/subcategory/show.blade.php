@extends('layouts.app')

@section('title', 'Categories index')

@section('content')
<div class="container">
    <div class="row g-5">
        <div class="col-md-12">
            <h2 class="pb-4 mb-4 fst-italic border-bottom">
                <div class="d-flex justify-content-between">
                    <div>{{ __('Liste des questions associées aux concours des : ') }} <strong>{{ $subcategory->name }}</strong></div>
                    <div>
                        <a class="btn btn-outline-secondary" href="{{ route('categories.subcategories.questions.create', [$cat_designation, $subcategory->designation]) }}">Ajouter</a>
                    </div>
                </div>
            </h2>
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif
            <article class="blog-post table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" rowspan="2">#</th>
                            <th scope="col" rowspan="2" class="text-center">Question</th>
                            <th scope="col" colspan="4" class="text-center">Answers</th>
                            <th scope="col" rowspan="2" class="text-center">Correct Answer</th>
                            <th scope="col" rowspan="2" class="text-center">Difficulty</th>
                            <th scope="col" rowspan="2" class="text-center">Actions</th>
                        </tr>
                        <tr>
                            <th scope="col">A</th>
                            <th scope="col">B</th>
                            <th scope="col">C</th>
                            <th scope="col">D</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($questions as $question)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $question->question_text }}</td>
                                <td>{{ $question->answer_text_a }}</td>
                                <td>{{ $question->answer_text_b }}</td>
                                <td>{{ $question->answer_text_c }}</td>
                                <td>{{ $question->answer_text_c }}</td>
                                <td class="text-success">{{ $question->correct_answer }}</td>
                                <td>{{ $question->difficulty }}</td>
                                <td class="btn-group">
                                    <a href="{{ route('categories.subcategories.questions.edit', [$cat_designation, $subcategory->designation, $question->id]) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                                    <a href="{{ route('categories.subcategories.questions.destroy', [$cat_designation, $subcategory->designation, $question->id]) }}" class="btn btn-sm btn-outline-danger">Del</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </article>

            <nav class="blog-pagination" aria-label="Pagination">
                {{ $questions->links() }}
            </nav>
        </div>
    </div>
</div>
@endsection
