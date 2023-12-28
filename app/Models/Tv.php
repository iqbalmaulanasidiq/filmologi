<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;
use Illuminate\Pagination\LengthAwarePaginator;

class Tv
{
    public static function getBannerTVShows($baseURL, $apiKey, $maxTvItem)
    {
        $bannerTVResponse = Http::get($baseURL . '/trending/tv/week?api_key=' . $apiKey)->json()['results'];
        $bannerArrayTV = collect($bannerTVResponse)->take($maxTvItem);

        return $bannerArrayTV;
    }

    public static function getTVShows($baseURL, $apiKey, $sortBy, $page, $perPage, $minimalVoter)
    {
        // Get data for banner TV shows
        $bannerArrayTV = self::getBannerTVShows($baseURL, $apiKey, 5);

        // Get data for paginated and sorted TV shows
        $TVResponse = Http::get($baseURL . '/discover/tv?api_key=' . $apiKey . '&sort_by=' . $sortBy . '&vote_count.gte=' . $minimalVoter . '&page=' . $page)->json()['results'];
        $TVArray = collect($TVResponse);

        // Create LengthAwarePaginator
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentItems = $TVArray->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $TVArray = new LengthAwarePaginator($currentItems, $TVArray->count(), $perPage, $currentPage, ['path' => LengthAwarePaginator::resolveCurrentPath()]);

        // Update URL with sorting parameter
        $TVArray->withPath(route('tv-shows.index', ['sortBy' => $sortBy]));

        return [
            'bannerArrayTV' => $bannerArrayTV,
            'TVArray' => $TVArray,
        ];
    }
}
