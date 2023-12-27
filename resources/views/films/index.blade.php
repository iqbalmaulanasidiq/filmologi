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

{{-- <div class="container mx-auto py-12 px-12">
    <div class="relative w-full">
                
        <form>   
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search..." required>
                <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </form>

    </div>
</div> --}}

    {{-- content --}}
<div class="container mx-auto px-4 py-16">
    
    <!-- Tabs Section -->
    <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 px-5 py-5" >
        <div class="flex justify-between items-center mb-4">
            <div class="flex items-center space-x-4">
                <span class="font-inter font-bold text-xl text-white">
                    Sort
                </span>

                {{-- <div class="relative">
                    <select class="block appearance-none bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-800 dark:border-gray-700 dark:text-gray-300 dark:focus:shadow-outline-gray" wire:model="sortBy" id="sort-by(this)" onchange="changeSort" >
                        <option value="popularity.desc">Popularity Descending</option>
                        <option value="popularity.asc">Popularity Ascending</option>
                        <option value="release_date.desc">Release Date Descending</option>
                        <option value="release_date.asc">Release Date Ascending</option>
                        <option value="vote_average.desc">Top Rated Descending</option>
                        <option value="vote_average.asc">Top Rated Ascending</option>

                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 dark:text-gray-300">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        </svg>
                    </div>
                </div> --}}
                <div class="relative">
                    <select class="block appearance-none bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-800 dark:border-gray-700 dark:text-gray-300 dark:focus:shadow-outline-gray" wire:model="sortBy" id="sort-by(this)" onchange="changeSort(this)">
                        <option value="popularity.desc" @if($sortBy === 'popularity.desc') selected @endif>Popularity Descending</option>
                        <option value="popularity.asc" @if($sortBy === 'popularity.asc') selected @endif>Popularity Ascending</option>
                        <option value="release_date.desc" @if($sortBy === 'release_date.desc') selected @endif>Realese Date Descending</option>
                        <option value="release_date.asc" @if($sortBy === 'release_date.asc') selected @endif>Realese Date Ascending</option>
                        <option value="vote_average.asc" @if($sortBy === 'vote_average.asc') selected @endif>Vote Average Ascending</option>
                        <option value="vote_average.desc" @if($sortBy === 'vote_average.desc') selected @endif>Vote Average Descending</option>
                        <!-- Tambahkan opsi sorting lainnya sesuai kebutuhan -->
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 dark:text-gray-300">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        </svg>
                    </div>
                </div>
                
            </div>
        </div>
         {{-- start card --}}
            <div class="flex flex-wrap items-stretch overflow-hidden -mx-4 mt-4 pt-10" id="dataWrapper">
                @foreach ($movieArray as $movieItems)
                    @php
                        $original_date = $movieItems['release_date'];
                        $timestamp = strtotime($original_date);

                        $movieYear = date("Y", $timestamp);
                        $movieId = $movieItems['id'];
                        $movieTitle = $movieItems['title'];
                        $movieRating = $movieItems['vote_average'] * 10;
                        $movieImage = "{$imageBaseUrl}/w500{$movieItems['poster_path']}";
                    @endphp

                    <a href="movies/{{ $movieId }}" class="group block w-full md:w-[50%] lg:w-[33.33%] xl:w-[25%] 2xl:w-[20%] mb-4 px-4 text-white">
                        <div class="h-[500px] dark:bg-gray-900 drop-shadow-[0_0px_8px_rgba(0,0,0,0.25)] group-hover:drop-shadow-[0_0px_8px_rgba(0,0,0,0.5)] rounded-[40px] p-6 flex flex-col duration-100">
                            <div class="overflow-hidden rounded-[40px] mb-4">
                                <img class="w-full h-[350px] rounded-[40px] group-hover:scale-125 duration-200" src="{{ $movieImage }}" alt="Movie Poster"/>
                            </div>

                            <span class="font-inter font-bold text-2xl mt-4 line-clamp-1 group-hover:line-clamp-none">{{ $movieTitle }}</span>
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
        {{-- end card --}}

        {{-- pagination --}}

        <div class="container mx-auto py-10">
            {{ $movieArray->links() }}
        </div>

        {{-- end pagination --}}




    </div>
    <!-- End Tabs Section -->
    
</div>
{{-- end content --}}





    <hr class=" border-gray-200 s dark:border-gray-700 " />
</div>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    function changeSort(component) {
        if (component.value) {
            // Perbarui URL dengan parameter sorting baru
            window.location.href = '{{ route("films.index") }}?sortBy=' + component.value;
        }
    }
</script>



@endsection
