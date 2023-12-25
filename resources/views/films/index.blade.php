@extends('layouts.main')

@section('content')
<div class="dark:bg-gray-900">
{{-- carousel --}}
<div id="animation-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-96 overflow-hidden rounded-lg md:h-screen">

        @foreach ($bannerArrayMovies as $bannerItem)
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



</div>

<hr class=" border-gray-200 s dark:border-gray-700 " />
@endsection

