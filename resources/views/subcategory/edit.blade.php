@extends('layouts.app')

@section('title', "Formulaire d'edition de sous categories des concours")

@section('content')
<div class="container">
    <div class="row g-5">
        <div class="col-md-8">
            <h2 class="pb-4 mb-4 fst-italic border-bottom">
                Formulaire d'edition de sous categories du : {{ $subcategory->name }}
            </h2>
            <article class="blog-post">
                <form method="POST" action="{{ route('categories.subcategories.update', [$cat_designation, $subcategory->id]) }}">
                    @method('PUT')
                    @csrf
                    {{-- <input type="hidden" name="category_id" value="{{ $subcategory->id }}"> --}}
                    <div class="mb-3">
                        <label for="name">Nom de la categorie</label>
                        <input type="text" name="name" value="{{ $subcategory->name }}" class="form-control @error('name') is-invalid @enderror" placeholder="Nom de la categorie">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="designation">Designation de la categorie</label>
                        <input type="text" name="designation" value="{{ $subcategory->designation }}" class="form-control @error('designation') is-invalid @enderror" placeholder="Designation de la categorie">
                        @error('designation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description">Description de la categorie</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" cols="30" rows="10" placeholder="Ecrire ici">{{ $subcategory->description }}</textarea>
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-outline-success">Mettre a jour</button>
                    </div>
                </form>
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
