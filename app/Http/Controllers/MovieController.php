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
        $bannerResponse = Http::get($baseURL . 'trending/movie/week?',[
            'api_key' => $apiKey,
        ]);
        // Prepare variable
        $bannerArray = [];

        //check if response is success
        if($bannerResponse->successful()){
            //cek data is null or not
                
           
        }


        return view('index', [
            'baseURL' => $baseURL,
            'imageBaseURL' => $imageBaseURL,
            'apiKey' => $apiKey,
            'banner' => $bannerArray,
        ]);
    }
}
