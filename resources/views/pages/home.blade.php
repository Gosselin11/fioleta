@extends('layouts.app')

@section('content')
    <h1>Accueil</h1>

    <h2>Œuvres mises en avant</h2>
    @forelse($featuredArtworks as $artwork)
        <article>
            <h3>{{ $artwork->title }}</h3>
            <p>{{ $artwork->short_description }}</p>
        </article>
    @empty
        <p>Aucune œuvre mise en avant pour le moment.</p>
    @endforelse

    <h2>Événements mis en avant</h2>
    @forelse($featuredEvents as $event)
        <article>
            <h3>{{ $event->title }}</h3>
            <p>{{ $event->excerpt }}</p>
        </article>
    @empty
        <p>Aucun événement mis en avant pour le moment.</p>
    @endforelse
@endsection
