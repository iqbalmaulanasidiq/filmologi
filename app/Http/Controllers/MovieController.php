<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $baseURL = env('MOVIE_DB_BASE_URL');
        $imageBaseURL = env('MOVIE_DB_IMAGE_BASE_URL');
        $apiKey = env('MOVIE_DB_API_KEY');

        // Call the Movie model to get banner movies
        $bannerArrayMovies = Movie::getTrendingMovies($baseURL, $apiKey, 5);

        return view('index', [
            'baseUrl' => $baseURL,
            'imageBaseURL' => $imageBaseURL,
            'apiKey' => $apiKey,
            'bannerArrayMovies' => $bannerArrayMovies,
        ]);
    }

    public function films(Request $request)
    {
        $baseURL = env('MOVIE_DB_BASE_URL');
        $imageBaseURL = env('MOVIE_DB_IMAGE_BASE_URL');
        $apiKey = env('MOVIE_DB_API_KEY');
        $MAX_MOVIE_ITEM = 5;
        $minimalVoter = 1000;
        $perPage = 15;

        // Get parameters from the request, if any
        $sortBy = $request->input('sortBy', 'popularity.desc');
        $page = $request->input('page', 1);

        // Call the Movie model to get banner and paginated movies
        $movieData = Movie::getMovies($baseURL, $apiKey, $sortBy, $page, $perPage, $minimalVoter);

        return view('films.index', [
            'baseUrl' => $baseURL,
            'imageBaseUrl' => $imageBaseURL,
            'apiKey' => $apiKey,
            'bannerArrayMovies' => $movieData['bannerArrayMovies'],
            'movieArray' => $movieData['movieArray'],
            'sortBy' => $sortBy,
            'page' => $page,
            'minimalVoter' => $minimalVoter,
        ]);
    }
}
