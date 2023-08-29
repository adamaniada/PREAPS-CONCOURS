@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<div class="container">
    @if(Route::currentRouteName() === 'welcome')
        <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
            <div class="col-lg-6 px-0">
                <h1 class="display-4 fst-italic">Préparation aux Examens Concours</h1>
                <p class="lead my-3">Préparez-vous pour vos examens avec nos séances interactives de Questions à Choix Multiples (QCM).</p>
                <p class="lead mb-0"><a href="{{ route('categories') }}" class="text-body-emphasis fw-bold">Explorer les Catégories</a></p>
            </div>
        </div>
    @endif

    <div class="row g-5">

        <div class="col-md-8">
            <h3 class="pb-4 mb-4 fst-italic border-bottom">
                Fonctionnalités
            </h3>
            <article class="blog-post">
                <h2 class="display-5 link-body-emphasis mb-1">Fonctionnalité 1</h2>
                <p>Une description concise de la première fonctionnalité clé de votre site.</p>
                <ul>
                    <li>First list item</li>
                    <li>Second list item with a longer description</li>
                    <li>Third list item to close it out</li>
                </ul>

                <h2 class="display-5 link-body-emphasis mb-1">Fonctionnalité 2</h2>
                <p>Une description concise de la deuxième fonctionnalité clé de votre site.</p>
                <ul>
                    <li>First list item</li>
                    <li>Second list item with a longer description</li>
                    <li>Third list item to close it out</li>
                </ul>

                <h2 class="display-5 link-body-emphasis mb-1">Fonctionnalité 3</h2>
                <p>Une description concise de la troisième fonctionnalité clé de votre site..</p>
                <ul>
                    <li>First list item</li>
                    <li>Second list item with a longer description</li>
                    <li>Third list item to close it out</li>
                </ul>
            </article>

            <nav class="blog-pagination" aria-label="Pagination">
                <a class="btn btn-outline-primary rounded-pill" href="#">Older</a>
                <a class="btn btn-outline-secondary rounded-pill disabled" aria-disabled="true">Newer</a>
            </nav>
        </div>

        <div class="col-md-4">
            @include('layouts.include.app.aside.about')

            @include('layouts.include.app.aside.archives')

            @include('layouts.include.app.aside.ailleurs')
        </div>
    </div>
</div>
@endsection
