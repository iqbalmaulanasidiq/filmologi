<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;

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





public function films(Request $request)
    {
        $baseURL = env('MOVIE_DB_BASE_URL');
        $imageBaseURL = env('MOVIE_DB_IMAGE_BASE_URL');
        $apiKey = env('MOVIE_DB_API_KEY');
        $MAX_MOVIE_ITEM = 5;
        $minimalVoter = 1000;

        // Ambil parameter dari request, jika ada
        $sortBy = $request->input('sortBy', 'popularity.desc');
        $page = $request->input('page', 1);

        // Ambil data film untuk banner
        $bannerMovieResponse = Http::get($baseURL . '/trending/movie/week?api_key=' . $apiKey)->json()['results'];
        $bannerArrayMovies = collect($bannerMovieResponse)->take($MAX_MOVIE_ITEM);

        // Ambil data film dengan pagination dan sorting
        $movieResponse = Http::get($baseURL . '/discover/movie?api_key=' . $apiKey . '&sort_by=' . $sortBy . '&vote_count.gte=' . $minimalVoter . '&page=' . $page)->json()['results'];
        $movieArray = collect($movieResponse);

        // Membuat objek LengthAwarePaginator
        $perPage = 15; // Jumlah item per halaman
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentItems = $movieArray->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $movieArray = new LengthAwarePaginator($currentItems, $movieArray->count(), $perPage, $currentPage, ['path' => LengthAwarePaginator::resolveCurrentPath()]);

        // Update URL dengan parameter sorting
        $movieArray->withPath(route('films.index', ['sortBy' => $sortBy]));


        return view('films.index', [
            'baseUrl' => $baseURL,
            'imageBaseUrl' => $imageBaseURL,
            'apiKey' => $apiKey,
            'bannerArrayMovies' => $bannerArrayMovies,
            'movieArray' => $movieArray,
            'sortBy' => $sortBy,
            'page' => $page,
            'minimalVoter' => $minimalVoter,
        ]);
    }

    public function tvshows(Request $request){
        $baseURL = env('MOVIE_DB_BASE_URL');    
        $imageBaseURL = env('MOVIE_DB_IMAGE_BASE_URL');
        $apiKey = env('MOVIE_DB_API_KEY');
        $MAX_MOVIE_ITEM = 5;
        $minimalVoter = 1000;

        // Ambil parameter dari request, jika ada
        $sortBy = $request->input('sortBy', 'popularity.desc');
        $page = $request->input('page', 1);

        // Ambil data film untuk banner
        $bannerTVResponse = Http::get($baseURL . '/trending/tv/week?api_key=' . $apiKey)->json()['results'];
        $bannerArrayTV = collect($bannerTVResponse)->take($MAX_MOVIE_ITEM);

        // Ambil data film dengan pagination dan sorting
        // 'https://api.themoviedb.org/3/discover/tv?include_adult=false&include_null_first_air_dates=false&language=en-US&page=1&sort_by=popularity.desc'
       $TVResponse = Http::get($baseURL . '/discover/tv?api_key=' . $apiKey . '&sort_by=' . $sortBy . '&vote_count.gte=' . $minimalVoter . '&page=' . $page)->json()['results'];
        $TVArray = collect($TVResponse);

        // Membuat objek LengthAwarePaginator
        $perPage = 15; // Jumlah item per halaman
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentItems = $TVArray->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $TVArray = new LengthAwarePaginator($currentItems, $TVArray->count(), $perPage, $currentPage, ['path' => LengthAwarePaginator::resolveCurrentPath()]);

        // Update URL dengan parameter sorting
        $TVArray->withPath(route('tv-shows.index', ['sortBy' => $sortBy]));

  

        return view('tv-shows.index', [
            'baseUrl' => $baseURL,
            'imageBaseUrl' => $imageBaseURL,
            'apiKey' => $apiKey,
            'bannerArrayTV' => $bannerArrayTV,
            'TVArray' => $TVArray,
            'sortBy' => $sortBy,
            'page' => $page,
            'minimalVoter' => $minimalVoter,
        ]);
    }



}




