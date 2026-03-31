@extends('layouts.app')

@section('content')
    <h1>Archives</h1>

    <h2>Œuvres archivées</h2>
    @forelse($archivedArtworks as $artwork)
        <p>{{ $artwork->title }}</p>
    @empty
        <p>Aucune œuvre archivée.</p>
    @endforelse

    <h2>Événements archivés</h2>
    @forelse($archivedEvents as $event)
        <p>{{ $event->title }}</p>
    @empty
        <p>Aucun événement archivé.</p>
    @endforelse
@endsection
