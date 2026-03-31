<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use App\Models\Event;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __invoke(): View
    {
        $featuredArtworks = Artwork::query()
            ->where('status', 'published')
            ->where('is_visible', true)
            ->where('is_featured', true)
            ->latest('published_at')
            ->take(6)
            ->get();

        $featuredEvents = Event::query()
            ->where('status', 'published')
            ->where('is_featured', true)
            ->orderBy('start_date')
            ->take(3)
            ->get();

        return view('pages.home', compact('featuredArtworks', 'featuredEvents'));
    }
}
