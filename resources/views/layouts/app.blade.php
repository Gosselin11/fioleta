<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Fioleta' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <nav style="padding: 20px; display: flex; gap: 20px;">
            <a href="{{ route('home') }}">Accueil</a>
            <a href="{{ route('artworks.index') }}">Galerie</a>
            <a href="{{ route('about') }}">À propos</a>
            <a href="{{ route('events.index') }}">Événements</a>
            <a href="{{ route('archives.index') }}">Archives</a>
            @auth
                <a href="{{ route('dashboard') }}">Dashboard</a>
            @endauth
        </nav>
    </header>

    <main style="padding: 20px;">
        @yield('content')
    </main>
</body>
</html>
