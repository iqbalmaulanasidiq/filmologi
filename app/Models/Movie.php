<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;

class Movie
{
    public static function getBannerMovies($baseURL, $apiKey, $maxMovieItem)
    {
        $bannerMovieResponse = Http::get($baseURL . '/trending/movie/week?api_key=' . $apiKey)->json()['results'];
        $bannerArrayMovies = collect($bannerMovieResponse)->take($maxMovieItem);

        return $bannerArrayMovies;
    }

    public static function getMovies($baseURL, $apiKey, $sortBy, $page, $perPage, $minimalVoter)
    {
        // Get data for banner movies
        $bannerArrayMovies = self::getBannerMovies($baseURL, $apiKey, 5);

        // Get data for paginated and sorted movies
        $movieResponse = Http::get($baseURL . '/discover/movie?api_key=' . $apiKey . '&sort_by=' . $sortBy . '&vote_count.gte=' . $minimalVoter . '&page=' . $page)->json()['results'];
        $movieArray = collect($movieResponse);

        // Create LengthAwarePaginator
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentItems = $movieArray->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $movieArray = new LengthAwarePaginator($currentItems, $movieArray->count(), $perPage, $currentPage, ['path' => LengthAwarePaginator::resolveCurrentPath()]);

        // Update URL with sorting parameter
        $movieArray->withPath(route('films.index', ['sortBy' => $sortBy]));

        return [
            'bannerArrayMovies' => $bannerArrayMovies,
            'movieArray' => $movieArray,
        ];
    }

    public static function getTrendingMovies($baseURL, $apiKey, $maxMovieItem)
    {
        $bannerResponse = Http::get($baseURL . '/trending/movie/week?api_key=' . $apiKey)->json()['results'];
        $bannerHome = [];

        if ($bannerResponse) {
            foreach ($bannerResponse as $value) {
                if ($value['poster_path'] != null && $value['backdrop_path'] != null) {
                    array_push($bannerHome, $value);
                    if (count($bannerHome) == $maxMovieItem) {
                        break;
                    }
                }
            }
        }

        return $bannerHome;
    }
}
