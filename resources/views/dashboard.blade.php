<x-app-layout>

{{-- carousel --}}
    <div id="animation-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-96 overflow-hidden rounded-lg md:h-screen">

            @foreach ($bannerArray as $bannerItem)
                @php
                    $movieTrendingId = $bannerItem['id'];
                    $bannerImage = "{$imageBaseUrl}/original{$bannerItem['backdrop_path']}";
                @endphp
                <div class="hidden duration-200 ease-linear" data-carousel-item>
                    <img src="{{ $bannerImage }}" class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white text-center">
                        <h1 class="text-5xl font-extrabold tracking-tight leading-none font-serif mb-4">{{ $bannerItem['title'] }}</h1>
                        <p class="text-lg font-normal mb-4">{{ $bannerItem['overview'] }}</p>
                        <button class="mx-auto px-8 py-3 bg-blue-500 text-white rounded-full hover:bg-blue-600 hover:text-gray-100 flex items-center">
                            <svg class="w-6 h-6 fill-current mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M3 22v-20l18 10-18 10z"/>
                            </svg>
                            <a href="movies/{{ $movieTrendingId }}" class="font-semibold text-xl">Lihat Detail</a>
                        </button>
                        
                        
                        
                    </div>
                </div>
            @endforeach
    
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
    
{{-- end carousel --}}
 


<div class="container mx-auto py-12">
    <div class="mt-5 py-10">
        <span class="ml-28 font-inter font-bold text-xl text-white">Top 5 Films</span>
    </div>
    
    <div class="flex overflow-x-auto">
        <!-- Repeat the following block for each item -->
        @foreach ($topMovieArray as $movieItem)

        @php
            $originalDate = $movieItem['release_date'];
            $timestamp = strtotime($originalDate);
            $movieYear = date("Y", $timestamp);

            $movieId = $movieItem['id'];
            $movietitle = $movieItem['title'];
            $movieRating = $movieItem['vote_average']*10;
            $movieImage = "{$imageBaseUrl}/w500{$movieItem['poster_path']}";
        @endphp
            <a href="movies/{{ $movieId }}" class="group block">
                <div class="w-[280px] h-[500px] bg-white drop-shadow-[0_0px_8px_rgba(0,0,0,0.25)] group-hover:drop-shadow-[0_0px_8px_rgba(0,0,0,0.5)] rounded-[40px] p-6 flex flex-col duration-100 mr-4">
                    <div class="overflow-hidden rounded-[40px]">
                        <img class="w-full h-[350px] rounded-[40px] group-hover:scale-125 duration-200" src="{{ $movieImage }}" alt="Movie Poster"/>
                    </div>
    
                    <span class="font-inter font-bold text-2xl mt-4 line-clamp-1 group-hover:line-clamp-none">{{ $movieItem['title'] }}</span>
                    <span class="font-inter text-lg mt-2">{{ $movieYear }}</span>
                    <div class="flex items-center mt-2">
                        <span class="text-yellow-500 mr-1">{{ $movieRating }}%</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500 fill-current" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0z" fill="none"/>
                            <path d="M12 21.35l-1.45-1.32C5.4 14.25 2 11.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 2.78-3.4 5.75-8.55 11.54L12 21.35z"/>
                        </svg>
                    </div>
                    
                </div>
            </a>
        @endforeach
    </div>
    
</div>








<div class="container mx-auto pb-12">
    <div class="mt-5 py-10">
        <span class="ml-28 font-inter font-bold text-xl text-white">Top 5 TV Shows</span>
    </div>
    
    <div class="flex overflow-x-auto">
        <!-- Repeat the following block for each item -->
        @foreach ($topTvArray as $tvItem)

        @php
            $originalDate = $tvItem['first_air_date'];
            $timestamp = strtotime($originalDate);
            $tvYear = date("Y", $timestamp);

            $tvId = $tvItem['id'];
            $tvtitle = $tvItem['name'];
            $tvRating = $tvItem['vote_average']*10;
            $tvImage = "{$imageBaseUrl}/w500{$tvItem['poster_path']}";
        @endphp
            <a href="tv/{{ $tvId }}" class="group block">
                <div class="w-[280px] h-[500px] bg-white drop-shadow-[0_0px_8px_rgba(0,0,0,0.25)] group-hover:drop-shadow-[0_0px_8px_rgba(0,0,0,0.5)] rounded-[40px] p-6 flex flex-col duration-100 mr-4">
                    <div class="overflow-hidden rounded-[40px]">
                        <img class="w-full h-[350px] rounded-[40px] group-hover:scale-125 duration-200" src="{{ $tvImage }}" alt="TV Poster"/>
                    </div>
    
                    <span class="font-inter font-bold text-2xl mt-4 line-clamp-1 group-hover:line-clamp-none">{{ $tvItem['name'] }}</span>
                    <span class="font-inter text-lg mt-2">{{ $tvYear }}</span>
                    <div class="flex items-center mt-2">
                        <span class="text-yellow-500 mr-1">{{ $tvRating }}%</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500 fill-current" viewBox="0 0 24 24">
                            <path d="M0 0h24v24H0z" fill="none"/>
                            <path d="M12 21.35l-1.45-1.32C5.4 14.25 2 11.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 2.78-3.4 5.75-8.55 11.54L12 21.35z"/>
                        </svg>
                    </div>
                    
                </div>
            </a>
        @endforeach
    </div>
    
</div>


</x-app-layout>

<hr class=" border-gray-200 s dark:border-gray-700 " />




    
@include('layouts.footer')