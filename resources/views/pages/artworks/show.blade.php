@extends('layouts.app')

@section('content')
    <article>
        <h1>{{ $artwork->title }}</h1>

        @if($artwork->main_image)
            <img src="{{ asset('storage/' . $artwork->main_image) }}" alt="{{ $artwork->title }}" style="max-width: 400px;">
        @endif

        <p>{{ $artwork->description }}</p>

        @if(!is_null($artwork->price))
            <p>Prix : {{ number_format($artwork->price, 2, ',', ' ') }} €</p>
        @endif

        <ul>
            @if($artwork->dimensions)
                <li>Dimensions : {{ $artwork->dimensions }}</li>
            @endif

            @if($artwork->medium)
                <li>Technique : {{ $artwork->medium }}</li>
            @endif

            @if($artwork->year_created)
                <li>Année : {{ $artwork->year_created }}</li>
            @endif
        </ul>
    </article>
@endsection
