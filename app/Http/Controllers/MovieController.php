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
        // Hit API banner
        $bannerResponse = Http::get($baseURL . 'trending/movie/week?api_key=' ,[ 'api_key' => $apiKey]);
        // Prepare variable
        $bannerArray = [];

        // Check if the response is successful and content is not null
        if ($bannerResponse->successful() && !is_null($bannerResponse->object())) {
            $resultArray = $bannerResponse->object()->results;

            // Check if 'results' property exists and is not null
            if (isset($resultArray) && !is_null($resultArray)) {
                foreach ($resultArray as $item) {
                    array_push($bannerArray, $item);

                    if (count($bannerArray) == 1) {
                        break;
                    }
                }
            }
        }

        return view('index', [
            'baseURL' => $baseURL,
            'imageBaseURL' => $imageBaseURL,
            'apiKey' => $apiKey,
            'banner' => $bannerArray,
        ]);
    }
}
