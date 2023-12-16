@extends('layouts.main');

@section('content')

<div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/docs/images/carousel/carousel-1.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/docs/images/carousel/carousel-2.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/docs/images/carousel/carousel-3.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/docs/images/carousel/carousel-4.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/docs/images/carousel/carousel-5.svg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
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


<div class="container mx-auto min-h-[500px] bg-dark">
    <div class="mt-12">
        <span class="ml-28 font-inter font-bold text-xl">Top 20  Films</span>
    </div>
    <div class="w-auto flex flex-row overflow-x-auto pl-4 pt-6  pb-10 float-left wrap">
            <a href="tv-shows/id" class="group">
                <div class="min-w-[232px] min-h-[428px] bg-white drop-shadow-[0_0px_8px_rgba(0,0,0,0.25)] group-hover:drop-shadow-[0_0px_8px_rgba(0,0,0,0.5)] rounded-[32px] p-5 flex flex-col duration-100 ">
                    <div class="overflow-hidden rounded-[32px]">
                        <img class="w-full h-[300px] rounded-[32px] group-hover:scale-125 duration-200" src="https://media.sukabumiupdate.com/media/2023/01/04/1672821835_63b53c4bc1823_VqEPLbgVWbEVN2zL24kf.jpg"/>
                    </div>

                        <span class="font-inter font-bold text-xl mt-4 line-clamp-1 group-hover:line-clamp-none">Title</span>
                        <span class="font-inter text-sm mt-1">2023</span>

                </div>
        </div>

        <div class="w-auto flex flex-row overflow-x-auto pl-4 pt-6  pb-10 float-left wrap">
            <a href="tv-shows/id" class="group">
                <div class="min-w-[232px] min-h-[428px] bg-white drop-shadow-[0_0px_8px_rgba(0,0,0,0.25)] group-hover:drop-shadow-[0_0px_8px_rgba(0,0,0,0.5)] rounded-[32px] p-5 flex flex-col duration-100 ">
                <div class="overflow-hidden rounded-[32px]">
                    <img class="w-full h-[300px] rounded-[32px] group-hover:scale-125 duration-200" src="https://awsimages.detik.net.id/community/media/visual/2022/09/30/miracle-in-cell-no7.jpeg?w=600&q=90"/>
                </div>

                        <span class="font-inter font-bold text-xl mt-4 line-clamp-1 group-hover:line-clamp-none">Title</span>
                        <span class="font-inter text-sm mt-1">2023</span>

                </div>
        </div>

        <div class="w-auto flex flex-row overflow-x-auto pl-4 pt-6  pb-10 float-left wrap">
            <a href="tv-shows/id" class="group">
                <div class="min-w-[232px] min-h-[428px] bg-white drop-shadow-[0_0px_8px_rgba(0,0,0,0.25)] group-hover:drop-shadow-[0_0px_8px_rgba(0,0,0,0.5)] rounded-[32px] p-5 flex flex-col  duration-100 ">
                    <div class="overflow-hidden rounded-[32px]">
                        <img class="w-full h-[300px] rounded-[32px] group-hover:scale-125 duration-200" src="https://magelangekspres.disway.id/upload/2f4945d5e488a5138a422b46f58e4f1c.jpeg"/>
                    </div>

                        <span class="font-inter font-bold text-xl mt-4 line-clamp-1 group-hover:line-clamp-none">Title</span>
                        <span class="font-inter text-sm mt-1">2023</span>

                </div>
        </div>

        <div class="w-auto flex flex-row overflow-x-auto pl-4 pt-6  pb-10 float-left wrap">
            <a href="tv-shows/id" class="group">
                <div class="min-w-[232px] min-h-[428px] bg-white drop-shadow-[0_0px_8px_rgba(0,0,0,0.25)] group-hover:drop-shadow-[0_0px_8px_rgba(0,0,0,0.5)] rounded-[32px] p-5 flex flex-col duration-100 ">
                    <div class="overflow-hidden rounded-[32px]">
                        <img class="w-full h-[300px] rounded-[32px] group-hover:scale-125 duration-200" src="https://www.megatrust.co.id/wp-content/uploads/2022/03/IMG-20220326-WA0001-800x1001.jpg"/>
                    </div>

                        <span class="font-inter font-bold text-xl mt-4 line-clamp-1 group-hover:line-clamp-none">Title</span>
                        <span class="font-inter text-sm mt-1">2023</span>

                    </div>
        </div>

        <div class="w-auto flex flex-row overflow-x-auto pl-4 pt-6  pb-10 float-left wrap">
            <a href="tv-shows/id" class="group">
                <div class="min-w-[232px] min-h-[428px] bg-white drop-shadow-[0_0px_8px_rgba(0,0,0,0.25)] group-hover:drop-shadow-[0_0px_8px_rgba(0,0,0,0.5)] rounded-[32px] p-5 flex flex-col duration-100 ">
                    <div class="overflow-hidden rounded-[32px]">
                        <img class="w-full h-[300px] rounded-[32px] group-hover:scale-125 duration-200" src="https://img.herstory.co.id/articles/archive_20230608/rekomendasi-film-20230608-164101.jpg"/>
                    </div>

                        <span class="font-inter font-bold text-xl mt-4 line-clamp-1 group-hover:line-clamp-none">Title</span>
                        <span class="font-inter text-sm mt-1">2023</span>

                    </div>
        </div>

        <div class="w-auto flex flex-row overflow-x-auto pl-4 pt-6  pb-10 float-left wrap">
            <a href="tv-shows/id" class="group">
                <div class="min-w-[232px] min-h-[428px] bg-white drop-shadow-[0_0px_8px_rgba(0,0,0,0.25)] group-hover:drop-shadow-[0_0px_8px_rgba(0,0,0,0.5)] rounded-[32px] p-5 flex flex-col duration-100 ">
                    <div class="overflow-hidden rounded-[32px]">
                        <img class="w-full h-[300px] rounded-[32px] group-hover:scale-125 duration-200" src="https://via.placeholder.com/200x300"/>
                    </div>

                        <span class="font-inter font-bold text-xl mt-4 line-clamp-1 group-hover:line-clamp-none">Title</span>
                        <span class="font-inter text-sm mt-1">2023</span>

                </div>
        </div>

        <div class="w-auto flex flex-row overflow-x-auto pl-4 pt-6  pb-10 float-left wrap">
            <a href="tv-shows/id" class="group">
                <div class="min-w-[232px] min-h-[428px] bg-white drop-shadow-[0_0px_8px_rgba(0,0,0,0.25)] group-hover:drop-shadow-[0_0px_8px_rgba(0,0,0,0.5)] rounded-[32px] p-5 flex flex-col duration-100 ">
                    <div class="overflow-hidden rounded-[32px]">
                        <img class="w-full h-[300px] rounded-[32px] group-hover:scale-125 duration-200" src="https://via.placeholder.com/200x300"/>
                    </div>

                         <span class="font-inter font-bold text-xl mt-4 line-clamp-1 group-hover:line-clamp-none">Title</span>
                         <span class="font-inter text-sm mt-1">2023</span>

                </div>
        </div>

        <div class="w-auto flex flex-row overflow-x-auto pl-4 pt-6  pb-10 float-left wrap">
            <a href="tv-shows/id" class="group">
                <div class="min-w-[232px] min-h-[428px] bg-white drop-shadow-[0_0px_8px_rgba(0,0,0,0.25)] group-hover:drop-shadow-[0_0px_8px_rgba(0,0,0,0.5)] rounded-[32px] p-5 flex flex-col duration-100 ">
                    <div class="overflow-hidden rounded-[32px]">
                        <img class="w-full h-[300px] rounded-[32px] group-hover:scale-125 duration-200" src="https://via.placeholder.com/200x300"/>
                    </div>

                        <span class="font-inter font-bold text-xl mt-4 line-clamp-1 group-hover:line-clamp-none">Title</span>
                        <span class="font-inter text-sm mt-1">2023</span>

                </div>
        </div>

        <div class="w-auto flex flex-row overflow-x-auto pl-4 pt-6  pb-10 float-left wrap">
            <a href="tv-shows/id" class="group">
                <div class="min-w-[232px] min-h-[428px] bg-white drop-shadow-[0_0px_8px_rgba(0,0,0,0.25)] group-hover:drop-shadow-[0_0px_8px_rgba(0,0,0,0.5)] rounded-[32px] p-5 flex flex-col duration-100 ">
                    <div class="overflow-hidden rounded-[32px]">
                        <img class="w-full h-[300px] rounded-[32px] group-hover:scale-125 duration-200" src="https://via.placeholder.com/200x300"/>
                    </div>

                        <span class="font-inter font-bold text-xl mt-4 line-clamp-1 group-hover:line-clamp-none">Title</span>
                        <span class="font-inter text-sm mt-1">2023</span>

                </div>
        </div>

        <div class="w-auto flex flex-row overflow-x-auto pl-4 pt-6  pb-10 float-left wrap">
            <a href="tv-shows/id" class="group">
                <div class="min-w-[232px] min-h-[428px] bg-white drop-shadow-[0_0px_8px_rgba(0,0,0,0.25)] group-hover:drop-shadow-[0_0px_8px_rgba(0,0,0,0.5)] rounded-[32px] p-5 flex flex-col duration-100 ">
                    <div class="overflow-hidden rounded-[32px]">
                        <img class="w-full h-[300px] rounded-[32px] group-hover:scale-125 duration-200" src="https://via.placeholder.com/200x300"/>
                    </div>

                        <span class="font-inter font-bold text-xl mt-4 line-clamp-1 group-hover:line-clamp-none">Title</span>
                        <span class="font-inter text-sm mt-1">2023</span>

                </div>
        </div>

        <div class="w-auto flex flex-row overflow-x-auto pl-4 pt-6  pb-10 float-left wrap">
            <a href="tv-shows/id" class="group">
                <div class="min-w-[232px] min-h-[428px] bg-white drop-shadow-[0_0px_8px_rgba(0,0,0,0.25)] group-hover:drop-shadow-[0_0px_8px_rgba(0,0,0,0.5)] rounded-[32px] p-5 flex flex-col duration-100 ">
                    <div class="overflow-hidden rounded-[32px]">
                        <img class="w-full h-[300px] rounded-[32px] group-hover:scale-125 duration-200" src="https://via.placeholder.com/200x300"/>
                    </div>

                        <span class="font-inter font-bold text-xl mt-4 line-clamp-1 group-hover:line-clamp-none">Title</span>
                        <span class="font-inter text-sm mt-1">2023</span>

                 </div>
        </div>

        <div class="w-auto flex flex-row overflow-x-auto pl-4 pt-6  pb-10 float-left wrap">
            <a href="tv-shows/id" class="group">
                <div class="min-w-[232px] min-h-[428px] bg-white drop-shadow-[0_0px_8px_rgba(0,0,0,0.25)] group-hover:drop-shadow-[0_0px_8px_rgba(0,0,0,0.5)] rounded-[32px] p-5 flex flex-col duration-100 ">
                    <div class="overflow-hidden rounded-[32px]">
                        <img class="w-full h-[300px] rounded-[32px] group-hover:scale-125 duration-200" src="https://via.placeholder.com/200x300"/>
                    </div>

                        <span class="font-inter font-bold text-xl mt-4 line-clamp-1 group-hover:line-clamp-none">Title</span>
                        <span class="font-inter text-sm mt-1">2023</span>

                    </div>
        </div>

        <div class="w-auto flex flex-row overflow-x-auto pl-4 pt-6  pb-10 float-left wrap">
            <a href="tv-shows/id" class="group">
                <div class="min-w-[232px] min-h-[428px] bg-white drop-shadow-[0_0px_8px_rgba(0,0,0,0.25)] group-hover:drop-shadow-[0_0px_8px_rgba(0,0,0,0.5)] rounded-[32px] p-5 flex flex-col duration-100 ">
                     <div class="overflow-hidden rounded-[32px]">
                        <img class="w-full h-[300px] rounded-[32px] group-hover:scale-125 duration-200" src="https://via.placeholder.com/200x300"/>
                    </div>

                        <span class="font-inter font-bold text-xl mt-4 line-clamp-1 group-hover:line-clamp-none">Title</span>
                        <span class="font-inter text-sm mt-1">2023</span>

                </div>
        </div>

        <div class="w-auto flex flex-row overflow-x-auto pl-4 pt-6  pb-10 float-left wrap">
            <a href="tv-shows/id" class="group">
                <div class="min-w-[232px] min-h-[428px] bg-white drop-shadow-[0_0px_8px_rgba(0,0,0,0.25)] group-hover:drop-shadow-[0_0px_8px_rgba(0,0,0,0.5)] rounded-[32px] p-5 flex flex-col duration-100 ">
                    <div class="overflow-hidden rounded-[32px]">
                        <img class="w-full h-[300px] rounded-[32px] group-hover:scale-125 duration-200" src="https://via.placeholder.com/200x300"/>
                   </div>

                        <span class="font-inter font-bold text-xl mt-4 line-clamp-1 group-hover:line-clamp-none">Title</span>
                        <span class="font-inter text-sm mt-1">2023</span>

                </div>
        </div>

        <div class="w-auto flex flex-row overflow-x-auto pl-4 pt-6  pb-10 float-left wrap">
            <a href="tv-shows/id" class="group">
                <div class="min-w-[232px] min-h-[428px] bg-white drop-shadow-[0_0px_8px_rgba(0,0,0,0.25)] group-hover:drop-shadow-[0_0px_8px_rgba(0,0,0,0.5)] rounded-[32px] p-5 flex flex-col duration-100 ">
                    <div class="overflow-hidden rounded-[32px]">
                        <img class="w-full h-[300px] rounded-[32px] group-hover:scale-125 duration-200" src="https://via.placeholder.com/200x300"/>
                    </div>

                        <span class="font-inter font-bold text-xl mt-4 line-clamp-1 group-hover:line-clamp-none">Title</span>
                        <span class="font-inter text-sm mt-1">2023</span>

                </div>
        </div>

        <div class="w-auto flex flex-row overflow-x-auto pl-4 pt-6  pb-10 float-left wrap">
            <a href="tv-shows/id" class="group">
                <div class="min-w-[232px] min-h-[428px] bg-white drop-shadow-[0_0px_8px_rgba(0,0,0,0.25)] group-hover:drop-shadow-[0_0px_8px_rgba(0,0,0,0.5)] rounded-[32px] p-5 flex flex-col duration-100 ">
                    <div class="overflow-hidden rounded-[32px]">
                         <img class="w-full h-[300px] rounded-[32px] group-hover:scale-125 duration-200" src="https://via.placeholder.com/200x300"/>
                    </div>

                        <span class="font-inter font-bold text-xl mt-4 line-clamp-1 group-hover:line-clamp-none">Title</span>
                        <span class="font-inter text-sm mt-1">2023</span>

                </div>
        </div>

        <div class="w-auto flex flex-row overflow-x-auto pl-4 pt-6  pb-10 float-left wrap">
            <a href="tv-shows/id" class="group">
                <div class="min-w-[232px] min-h-[428px] bg-white drop-shadow-[0_0px_8px_rgba(0,0,0,0.25)] group-hover:drop-shadow-[0_0px_8px_rgba(0,0,0,0.5)] rounded-[32px] p-5 flex flex-col duration-100 ">
                    <div class="overflow-hidden rounded-[32px]">
                        <img class="w-full h-[300px] rounded-[32px] group-hover:scale-125 duration-200" src="https://via.placeholder.com/200x300"/>
                    </div>

                        <span class="font-inter font-bold text-xl mt-4 line-clamp-1 group-hover:line-clamp-none">Title</span>
                        <span class="font-inter text-sm mt-1">2023</span>

                </div>
        </div>

        <div class="w-auto flex flex-row overflow-x-auto pl-4 pt-6  pb-10 float-left wrap">
            <a href="tv-shows/id" class="group">
                <div class="min-w-[232px] min-h-[428px] bg-white drop-shadow-[0_0px_8px_rgba(0,0,0,0.25)] group-hover:drop-shadow-[0_0px_8px_rgba(0,0,0,0.5)] rounded-[32px] p-5 flex flex-col duration-100 ">
                    <div class="overflow-hidden rounded-[32px]">
                        <img class="w-full h-[300px] rounded-[32px] group-hover:scale-125 duration-200" src="https://via.placeholder.com/200x300"/>
                    </div>

                        <span class="font-inter font-bold text-xl mt-4 line-clamp-1 group-hover:line-clamp-none">Title</span>
                        <span class="font-inter text-sm mt-1">2023</span>

                </div>
        </div>

        <div class="w-auto flex flex-row overflow-x-auto pl-4 pt-6  pb-10 float-left wrap">
            <a href="tv-shows/id" class="group">
                <div class="min-w-[232px] min-h-[428px] bg-white drop-shadow-[0_0px_8px_rgba(0,0,0,0.25)] group-hover:drop-shadow-[0_0px_8px_rgba(0,0,0,0.5)] rounded-[32px] p-5 flex flex-col duration-100 ">
                    <div class="overflow-hidden rounded-[32px]">
                        <img class="w-full h-[300px] rounded-[32px] group-hover:scale-125 duration-200" src="https://via.placeholder.com/200x300"/>
                    </div>

                        <span class="font-inter font-bold text-xl mt-4 line-clamp-1 group-hover:line-clamp-none">Title</span>
                        <span class="font-inter text-sm mt-1">2023</span>

                </div>
        </div>

        <div class="w-auto flex flex-row overflow-x-auto pl-4 pt-3  pb-10 float-left wrap">
            <a href="tv-shows/id" class="group">
                <div class="min-w-[232px] min-h-[428px] bg-white drop-shadow-[0_0px_8px_rgba(0,0,0,0.25)] group-hover:drop-shadow-[0_0px_8px_rgba(0,0,0,0.5)] rounded-[32px] p-5 flex flex-col duration-100 ">
                    <div class="overflow-hidden rounded-[32px]">
                         <img class="w-full h-[300px] rounded-[32px] group-hover:scale-125 duration-200" src="https://via.placeholder.com/200x300"/>
                    </div>

                        <span class="font-inter font-bold text-xl mt-4 line-clamp-1 group-hover:line-clamp-none">Title</span>
                        <span class="font-inter text-sm mt-1">2023</span>

                </div>
        </div>

    </div>
 @endsection

