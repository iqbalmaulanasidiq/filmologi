<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    public function index()
    {
        $baseURL = env('MOVIE_DB_BASE_URL');
        $imageBaseURL = env('MOVIE_DB_IMAGE_BASE_URL');
        $apiKey = env('MOVIE_DB_API_KEY');

        // Hit API untuk mendapatkan film yang sedang tren (trending)
        $bannerResponse = Http::get($baseURL . '/trending/movie/week?api_key=' . $apiKey)->json()['results'];

        // Persiapkan variabel untuk banner film
        $bannerHome = [];

        // Periksa respons API
        if ($bannerResponse) {
            // Looping data dari respons API
            foreach ($bannerResponse as $key => $value) {
                // Periksa jika poster path tidak null dan poster berorientasi lanskap
                if ($value['poster_path'] != null && $value['backdrop_path'] != null) {
                    // Tambahkan data ke array
                    array_push($bannerHome, $value);
                }
            }
        }

        return view('index', [
            'baseUrl' => $baseURL,
            'imageBaseUrl' => $imageBaseURL,
            'apiKey' => $apiKey,
            'bannerHome' => $bannerHome,
        ]);
    }

public function dashboard()
{
    $baseURL = env('MOVIE_DB_BASE_URL');
    $imageBaseURL = env('MOVIE_DB_IMAGE_BASE_URL');
    $apiKey = env('MOVIE_DB_API_KEY');
    $MAX_BANNER = 3;
    $MAX_MOVIE_ITEM = 5;
    $MAX_TV_ITEM = 5;

    // Mengakses API untuk mendapatkan film yang sedang tren (trending)
    $bannerResponse = Http::get($baseURL . '/trending/movie/week?api_key=' . $apiKey)->json()['results'];

    // Persiapkan variabel untuk banner film
    $bannerArray = [];

    // Periksa respons API
    if ($bannerResponse) {
        // Looping data dari respons API
        foreach ($bannerResponse as $item) {
            // Tambahkan data ke dalam array
            array_push($bannerArray, $item);
            if (count($bannerArray) == $MAX_BANNER) {
                break;
            }
        }
    }

    //hit top 10 movies
    $topMovieResponse = Http::get($baseURL . '/movie/top_rated?api_key=' . $apiKey)->json()['results'];

    // Persiapkan variabel untuk top movies
    $topMovieArray = [];

    // Periksa respons API
    if ($topMovieResponse) {
        // Looping data dari respons API
        foreach ($topMovieResponse as $item) {
            // Tambahkan data ke dalam array
            array_push($topMovieArray, $item);
            if (count($topMovieArray) == $MAX_MOVIE_ITEM) {
                break;
            }
        }
    }


    //hit top 5 tv
    $topTvResponse = Http::get($baseURL . '/tv/top_rated?api_key=' . $apiKey)->json()['results'];

    // Persiapkan variabel untuk top tv
    $topTvArray = [];

    // Periksa respons API
    if ($topTvResponse) {
        // Looping data dari respons API
        foreach ($topTvResponse as $item) {
            // Tambahkan data ke dalam array
            array_push($topTvArray, $item);
            if (count($topTvArray) == $MAX_TV_ITEM) {
                break;
            }
        }
    }

    return view('dashboard', [
        'baseUrl' => $baseURL,
        'imageBaseUrl' => $imageBaseURL,
        'apiKey' => $apiKey,
        'bannerArray' => $bannerArray,
        'topMovieArray' => $topMovieArray,
        'topTvArray' => $topTvArray,
    ]);

   
}





public function films()
{
    $baseURL = env('MOVIE_DB_BASE_URL');
    $imageBaseURL = env('MOVIE_DB_IMAGE_BASE_URL');
    $apiKey = env('MOVIE_DB_API_KEY');
    $MAX_MOVIE_ITEM = 5;
    $soryBy = 'popularity.desc';
    $page = 1;
    $minimalVoter = 100;
   
    // Mengakses API untuk mendapatkan film yang sedang tren (trending)
    $bannerMovieResponse = Http::get($baseURL . '/trending/movie/week?api_key=' . $apiKey)->json()['results'];

    // Persiapkan variabel untuk banner film
    $bannerArrayMovies = [];

    // Periksa respons API
    if ($bannerMovieResponse) {
        // Looping data dari respons API
        foreach ($bannerMovieResponse as $item) {
            // Tambahkan data ke dalam array
            array_push($bannerArrayMovies, $item);
            if (count($bannerArrayMovies) == $MAX_MOVIE_ITEM) {
                break;
            }
        }
    }



    // $movieResponse = Http::get($baseURL . '/discover/movie?api_key=' . $apiKey . '&sort_by=' . $soryBy . 'vote_count.gte' . $minimalVoter . '&page=' . $page )->json()['results'];

    $movieResponse = Http::get($baseURL . '/discover/movie?api_key=' . $apiKey . '&sort_by=' . $soryBy . '&vote_count.gte=' . $minimalVoter . '&page=' . $page )->json()['results'];

    // Persiapkan variabel untuk top movies
    $movieArray = [];

    // Periksa respons API
    if ($movieResponse) {
        // Looping data dari respons API
        foreach ($movieResponse as $item) {
            // Tambahkan data ke dalam array
            array_push($movieArray, $item);
            
        }
    }

    return view('films.index', [
        'baseUrl' => $baseURL,
        'imageBaseUrl' => $imageBaseURL,
        'apiKey' => $apiKey,
        'bannerArrayMovies' => $bannerArrayMovies, 
        'movieArray' => $movieArray,
        'soryBy' => $soryBy,
        'page' => $page,
        'minimalVoter' => $minimalVoter,
    ]);
}


}




