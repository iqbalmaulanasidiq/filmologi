<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class IndexController extends Controller
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
}
