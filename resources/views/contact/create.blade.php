{{-- welcome.blade.php --}}
@extends('layouts.app')

@section('title', 'Formulaire de contact')

@section('content')
<div class="container">
    <div class="row g-5">

        <div class="col-md-8">
            <h2 class="pb-4 mb-4 fst-italic border-bottom">
                Formulaire de contact
            </h2>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <article class="blog-post">
                <div class="card">
                    <div class="card-header">Contactez-Nous</div>
                    <div class="card-body">
                        <p class="card-text">Si vous avez des questions, des suggestions ou si vous avez besoin d'assistance, n'hésitez pas à nous contacter. Remplissez le formulaire ci-dessous et nous vous répondrons dans les plus brefs délais.</p>
                        <form action="{{ route('contact.submit') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Adresse Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Envoyer</button>
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
</div>
@endsection
