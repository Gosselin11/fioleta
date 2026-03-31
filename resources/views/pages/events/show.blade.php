@extends('layouts.app')

@section('content')
    <article>
        <h1>{{ $event->title }}</h1>
        <p>{{ $event->start_date?->format('d/m/Y H:i') }}</p>

        @if($event->location)
            <p>Lieu : {{ $event->location }}</p>
        @endif

        <p>{{ $event->content }}</p>
    </article>
@endsection
