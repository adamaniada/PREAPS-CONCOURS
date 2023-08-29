@extends('layouts.app')

@section('title', 'Categories index')

@section('content')
<div class="container">
    <div class="row g-5">
        <div class="col-md-8">
            <h2 class="pb-4 mb-4 fst-italic border-bottom">
                <div class="d-flex justify-content-between">
                    <div>Listes des categories</div>
                    <div>
                        <a class="btn btn-outline-secondary" href="{{ route('categories.create') }}">Ajouter</a>
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
            <article class="blog-post">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Description</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->description }}</td>
                                <td class="btn-group">
                                    <a href="{{ route('categories.show', $category->designation) }}" class="btn btn-sm btn-outline-primary">View</a>
                                    <a href="{{ route('categories.edit', $category->designation) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                                    <a href="{{ route('categories.delete', $category->designation) }}" class="btn btn-sm btn-outline-danger">Del</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </article>

            <nav class="blog-pagination" aria-label="Pagination">
                {{ $categories->links() }}
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
