<div class="px-5">
<div class="flex flex-wrap items-stretch overflow-hidden -mx-4 mt-4 pt-10">
    @if(isset($movieData['results']) && count($movieData['results']) > 0)
        @foreach($movieData['results'] as $movieItem)
            @php
                $original_date = $movieItem['release_date'];
                $timestamp = strtotime($original_date);

                $movieYear = date("Y", $timestamp);
                $movieId = $movieItem['id'];
                $movieTitle = $movieItem['title'];
                $movieRating = $movieItem['vote_average'] * 10;
                $movieImage = "{$imageBaseURL}/w500{$movieItem['poster_path']}";
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
    @else
        <p class="text-white">No results found</p>
    @endif
</div>
</div>
