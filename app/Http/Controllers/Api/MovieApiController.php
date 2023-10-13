<?php

namespace App\Http\Controllers\Api;

use App\Domain\Movies\Models\Movie;
use Illuminate\Http\JsonResponse;

class MovieApiController
{
    public function poster(Movie $movie): JsonResponse
    {
        return response()->json(['url' => $movie->poster_url]);
    }
}
