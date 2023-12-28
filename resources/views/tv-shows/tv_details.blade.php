<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <title>FILMOLOGI</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-gray-900">
</div>
<div class="w-full h-screen flex flex-row items-center justify-center relative">

    @php
        $backdropPath = "{$imageBaseURL}/original{$tvData['backdrop_path']}";
    @endphp

    <img src="{{ $backdropPath }}" alt="" class="w-full h-screen absolute object-cover lg:object-fill opacity-50">
    @php
    $backdropPath = "{$imageBaseURL}/original{$tvData['backdrop_path']}";
    @endphp

<img src="{{ $backdropPath }}" alt="" class="w-full h-screen absolute object-cover lg:object-fill">
<div class="w-full h-screen absolute bg-black bg-opacity-80 z-10"></div>

    @if ($tvData)
        @php
            $original_date = $tvData['first_air_date'];
            $timestamp = strtotime($original_date);
            $year = date("Y", $timestamp);
            $rating = (int)($tvData['vote_average'] * 10);
            $title = $tvData['name'];

            $tagline = isset($tvData['overview']) ? $tvData['overview'] : $tvData['tagline'];

            $duration = '';
            if (isset($tvData['episode_run_time'])) {
                $runtime = $tvData['episode_run_time'][0];
                $duration = $runtime . "m / episode" ;
            }

            $circumference = 2 * M_PI * 32;
            $progress = $circumference - ($rating / 100) * $circumference;

            $trailerID = '';
            if (isset($tvData['videos']['results'])) {
               foreach ($tvData['videos']['results'] as $item) {
                   if(strtolower($item['type']) == 'trailer') {
                       $trailerID = $item['key'];
                       break;
                   }
               }
            }
        @endphp
    @endif
    <!-- button kembali -->
    <a href="#" class="absolute top-4 right-4 text-white font-inter font-bold text-md rounded-2xl py-2 px-2 w-fit z-10"
       onclick="goBack()">
        <svg width="32" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
            <path
                d="M11.354 4.646a.5.5 0 0 1 0 .708L8.707 8l2.647 2.646a.5.5 0 1 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 .708-.708L8 7.293l2.646-2.647a.5.5 0 0 1 .708 0z"/>
        </svg>
    </a>
    <!-- button kembali -->

    <!-- content section -->
<div class="w-full max-w-screen-xl h-screen z-10 flex flex-col justify-center mx-auto px-8">

    <!-- Movie information -->
    <div class="flex flex-row items-center mb-8">
        <div class="w-3/4 pr-8">
            <span class="font-quicksand font-bold text-6xl mt-4 max-w-3xl text-white">{{ $title }}</span>
            <span class="font-inter italic text-2xl mt-4 text-white max-w-3xl line-clamp-5">{{ $tagline }}</span>
            <div class="flex flex-row mt-4 items-center">
                <div class="w-20 h-20 rounded-full flex items-center justify-center me-4"
                     style="background: #00304D">
                    <svg class="-rotate-90 w-20 h-20">
                        <circle
                            style="color: #004F90"
                            stroke-width="8"
                            stroke="currentColor"
                            fill="transparent"
                            r="32"
                            cx="40"
                            cy="40"
                        />
                        <circle
                            style="color: #6FCF97"
                            stroke-width="8"
                            stroke="currentColor"
                            fill="transparent"
                            stroke-linecap="round"
                            r="32"
                            cx="40"
                            cy="40"
                            stroke-dasharray="{{ $circumference }}"
                            stroke-dashoffset="{{ $progress }}"
                        />
                    </svg>
                    <span class="absolute font-quicksand font-bold text-xl text-white">{{ $rating }}%</span>
                </div>
                <div class="flex flex-row">
                    <span class="font-quicksand font-bold text-2xl text-white rounded-md border border-white p-2 me-4">{{ $year }}</span>
                    <span class="font-quicksand font-bold text-2xl text-white rounded-md border border-white p-2 me-4">{{ $duration }}</span>
                </div>
            </div>

            @if ($trailerID)
                
            
            <!-- button play -->
            <div class="flex flex-row items-center mt-4">
                <button
                    class="bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 text-white font-quicksand font-bold text-xl rounded-2xl py-5 px-7 me-4 w-fit"
                    onclick="showTrailer(true)">
                    <div class="flex items-center">
                        <svg width="24px" height="24px" viewBox="0 0 12 12" version="1.1"
                             xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Dribbble-Light-Preview" transform="translate(-65.000000, -3803.000000)"
                                   fill="#FFFFFF">
                                    <g id="icons" transform="translate(56.000000, 160.000000)">
                                        <path
                                            d="M18.074,3650.7335 L12.308,3654.6315 C10.903,3655.5815 9,3654.5835 9,3652.8985 L9,3645.1015 C9,3643.4155 10.903,3642.4185 12.308,3643.3685 L18.074,3647.2665 C19.306,3648.0995 19.306,3649.9005 18.074,3650.7335"
                                            id="play-[#1000]"></path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <span class="ml-2">Play Trailer</span>
                    </div>
                </button>
            </div>
        </div>

        @endif

        <!-- Movie Poster Card -->
        <div class="w-1/2">
            <div class="bg-white p-4 rounded-md shadow-md">
                <img src="{{ $imageBaseURL }}/w500{{ $tvData['poster_path'] }}" alt="Movie Poster"
                     class="w-full h-auto rounded-md">
            </div>
        </div>
    </div>
    <!-- Movie information -->

</div>
<!-- content section -->

{{-- trailer section --}}
<div class="absolute z-10 w-full h-screen p-20 bg-black flex flex-col" id="trailerWrapper">
    {{-- button kembali --}}
    <a href="#" class="absolute top-4 right-4 text-white font-inter font-bold text-md rounded-2xl py-2 px-2 w-fit z-10"
    onclick="showTrailer(false)">
    <svg width="32" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
        <path
            d="M11.354 4.646a.5.5 0 0 1 0 .708L8.707 8l2.647 2.646a.5.5 0 1 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 .708-.708L8 7.293l2.646-2.647a.5.5 0 0 1 .708 0z"/>
    </svg>
    </a>
    <!-- button kembali -->

    <iframe id="youtubeVideo" class="w-full h-screen" src="https://www.youtube.com/embed/{{ $trailerID }}?enablejsapi=1" title="{{ $tvData['name'] }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

</div>


{{-- section comment --}}




<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script>

        // ketika tombol kembali di klik maka akan kembali ke halaman awal
        function goBack() {
            window.history.back();
        }

        //sembunyikan trailer wrapper dan munculkeun ketika button play di klik
        $('#trailerWrapper').hide();

        function showTrailer(isVisible){
            if(isVisible){
                $('#trailerWrapper').fadeIn();
                $('#youtubeVideo').get(0).playVideo();
            }else{
                //stop youtube video
               $('#youtubeVideo')[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
               //hide trailer wrapper
                $('#trailerWrapper').hide();

            }
        }
        
        
        
    </script>

</div>

</body>
</html>
