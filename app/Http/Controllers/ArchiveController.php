<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use App\Models\Event;
use Illuminate\View\View;

class ArchiveController extends Controller
{
    public function __invoke(): View
    {
        $archivedArtworks = Artwork::query()
            ->where('status', 'archived')
            ->latest()
            ->get();

        $archivedEvents = Event::query()
            ->where('status', 'archived')
            ->latest('start_date')
            ->get();

        return view('pages.archives', compact('archivedArtworks', 'archivedEvents'));
    }
}
