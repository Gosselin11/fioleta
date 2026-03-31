@extends('layouts.app')

@section('content')
    <h1>Événements</h1>

    @forelse($events as $event)
        <article style="margin-bottom: 24px;">
            <h2>
                <a href="{{ route('events.show', $event) }}">
                    {{ $event->title }}
                </a>
            </h2>

            <p>{{ $event->excerpt }}</p>
            <p>{{ $event->start_date?->format('d/m/Y H:i') }}</p>
        </article>
    @empty
        <p>Aucun événement publié.</p>
    @endforelse

    {{ $events->links() }}
@endsection
