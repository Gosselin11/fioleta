<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Illuminate\View\View;

class ArtworkController extends Controller
{
    public function index(): View
    {
        $artworks = Artwork::query()
            ->where('status', 'published')
            ->where('is_visible', true)
            ->latest('published_at')
            ->paginate(12);

        return view('pages.artworks.index', compact('artworks'));
    }

    public function show(Artwork $artwork): View
    {
        abort_unless($artwork->status === 'published' && $artwork->is_visible, 404);

        $artwork->load('images');

        return view('pages.artworks.show', compact('artwork'));
    }
}
