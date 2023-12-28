<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dashboard;

class DashboardController extends Controller
{
    public function dashboard()
    {
        // Retrieve configuration values from environment variables
        $baseURL = env('MOVIE_DB_BASE_URL');
        $apiKey = env('MOVIE_DB_API_KEY');
        $imageBaseURL = env('MOVIE_DB_IMAGE_BASE_URL');

        // Set maximum values for items
        $maxBanner = 3;
        $maxMovieItem = 5;
        $maxTvItem = 5;

        // Get data using Dashboard model methods
        $bannerArray = Dashboard::getBannerData($baseURL, $apiKey, $maxBanner, $imageBaseURL);
        $topMovieArray = Dashboard::getTopMovies($baseURL, $apiKey, $maxMovieItem, $imageBaseURL);
        $topTvArray = Dashboard::getTopTv($baseURL, $apiKey, $maxTvItem, $imageBaseURL);

        // Pass data to the view
        return view('dashboard', [
            'baseURL' => $baseURL,
            'imageBaseURL' => $imageBaseURL,
            'apiKey' => $apiKey,
            'bannerArray' => $bannerArray,
            'topMovieArray' => $topMovieArray,
            'topTvArray' => $topTvArray,
        ]);

        
    }
}
