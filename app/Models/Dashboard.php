<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Dashboard extends Model
{
    use HasFactory;

    public static function getBannerData($baseURL, $apiKey, $maxBanner, $imageBaseURL)
    {
        $bannerResponse = Http::get($baseURL . '/trending/movie/week?api_key=' . $apiKey)->json()['results'];
        $bannerArray = [];

        if ($bannerResponse) {
            foreach ($bannerResponse as $item) {
                // Add the image base URL to each item
                $item['image_url'] = $imageBaseURL . $item['poster_path'];
                array_push($bannerArray, $item);
                if (count($bannerArray) == $maxBanner) {
                    break;
                }
            }
        }

        return $bannerArray;
    }

    public static function getTopMovies($baseURL, $apiKey, $maxMovieItem, $imageBaseURL)
    {
        $topMovieResponse = Http::get($baseURL . '/movie/top_rated?api_key=' . $apiKey)->json()['results'];
        $topMovieArray = [];

        if ($topMovieResponse) {
            foreach ($topMovieResponse as $item) {
                // Add the image base URL to each item
                $item['image_url'] = $imageBaseURL . $item['poster_path'];
                array_push($topMovieArray, $item);
                if (count($topMovieArray) == $maxMovieItem) {
                    break;
                }
            }
        }

        return $topMovieArray;
    }

    public static function getTopTv($baseURL, $apiKey, $maxTvItem, $imageBaseURL)
    {
        $topTvResponse = Http::get($baseURL . '/tv/top_rated?api_key=' . $apiKey)->json()['results'];
        $topTvArray = [];

        if ($topTvResponse) {
            foreach ($topTvResponse as $item) {
                // Add the image base URL to each item
                $item['image_url'] = $imageBaseURL . $item['poster_path'];
                array_push($topTvArray, $item);
                if (count($topTvArray) == $maxTvItem) {
                    break;
                }
            }
        }

        return $topTvArray;
    }


    
    
}
