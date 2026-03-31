@extends('layouts.app')

@section('content')
    <h1>Galerie</h1>

    @forelse($artworks as $artwork)
        <article style="margin-bottom: 24px;">
            <h2>
                <a href="{{ route('artworks.show', $artwork) }}">
                    {{ $artwork->title }}
                </a>
            </h2>

            @if($artwork->main_image)
                <img src="{{ asset('storage/' . $artwork->main_image) }}" alt="{{ $artwork->title }}" style="max-width: 250px;">
            @endif

            <p>{{ $artwork->short_description }}</p>

            @if(!is_null($artwork->price))
                <p>{{ number_format($artwork->price, 2, ',', ' ') }} €</p>
            @endif
        </article>
    @empty
        <p>Aucune œuvre publiée pour le moment.</p>
    @endforelse

    {{ $artworks->links() }}
@endsection
