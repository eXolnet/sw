<?php

namespace App\Http\Controllers;

use App\Domain\Movies\Models\Movie;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class MovieController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Inertia\Response
     */
    public function index(Request $request): Response
    {
        $movies = Movie::query()
            ->get()
            ->map(fn ($movie) => [
                'id' => $movie->id,
                'title' => $movie->title,
                'episode_id' => $movie->episode_id,
                'director' => $movie->director,
                'producer' => $movie->producer,
                'release_date' => $movie->release_date,
                'created' => $movie->created,
                'edited' => $movie->edited,
            ]);

        return Inertia::render('Movies/Index', [
            'search' => $request->input('search'),
            'movies' => [
                'data' => $movies,
            ],
        ]);
    }
}
