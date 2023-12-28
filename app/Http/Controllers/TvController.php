<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tv;

class TvController extends Controller
{
    public function tvshows(Request $request)
    {
        $baseURL = env('MOVIE_DB_BASE_URL');
        $imageBaseURL = env('MOVIE_DB_IMAGE_BASE_URL');
        $apiKey = env('MOVIE_DB_API_KEY');
        $perPage = 15;
        $minimalVoter = 1000;

        // Get parameters from the request, if any
        $sortBy = $request->input('sortBy', 'popularity.desc');
        $page = $request->input('page', 1);

        // Call the Tv model to get banner and paginated TV shows
        $tvData = Tv::getTVShows($baseURL, $apiKey, $sortBy, $page, $perPage, $minimalVoter);

        return view('tv-shows.index', [
            'baseUrl' => $baseURL,
            'imageBaseUrl' => $imageBaseURL,
            'apiKey' => $apiKey,
            'bannerArrayTV' => $tvData['bannerArrayTV'],
            'TVArray' => $tvData['TVArray'],
            'sortBy' => $sortBy,
            'page' => $page,
            'minimalVoter' => $minimalVoter,
        ]);
    }
}