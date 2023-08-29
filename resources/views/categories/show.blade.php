@extends('layouts.app')

@section('title', 'Categories index')

@section('content')
<div class="container">
    <div class="row g-5">
        <div class="col-md-12">
            <h2 class="pb-4 mb-4 fst-italic border-bottom">
                <div class="d-flex justify-content-between">
                    <div>{{ __('Liste des sous concours associés au : ') }} <strong>{{ $category->name }}</strong></div>
                    <div>
                        <a class="btn btn-outline-secondary" href="{{ route('categories.subcategories.create', $category->designation) }}">Ajouter</a>
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
                <table class="table table-sm table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Designation</th>
                            <th scope="col">Description</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subcategories as $subcategory)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $subcategory->name }}</td>
                                <td>{{ $subcategory->designation }}</td>
                                <td>{{ $subcategory->description }}</td>
                                <td class="btn-group">
                                    <a href="{{ route('categories.subcategories.show', [$category->designation, $subcategory->designation]) }}" class="btn btn-sm btn-outline-primary">View</a>
                                    <a href="{{ route('categories.subcategories.edit', [$category->designation, $subcategory->designation]) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                                    <a href="{{ route('categories.subcategories.delete', [$category->designation, $subcategory->id]) }}" class="btn btn-sm btn-outline-danger">Del</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </article>

            <nav class="blog-pagination" aria-label="Pagination">
                {{ $subcategories->links() }}
            </nav>
        </div>
    </div>
</div>
@endsection
