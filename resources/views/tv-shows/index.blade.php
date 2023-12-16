@extends('layouts.main')

@section('content')

<div class="dark:bg-gray-900">

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
  


    
    <div class="container mx-auto pb-12">
        <div class="mt-5 py-10">
            <span class="ml-28 font-inter font-bold text-xl text-white">Top 20  TV Shows</span>
        </div>
        <div class="grid grid-cols-5 gap-4">
            <!-- Repeat the following block for each item -->
            <div class="w-full sm:w-auto">
                <a href="tv-shows/id" class="group block">
                    <div class="min-w-[232px] min-h-[428px] bg-white drop-shadow-[0_0px_8px_rgba(0,0,0,0.25)] group-hover:drop-shadow-[0_0px_8px_rgba(0,0,0,0.5)] rounded-[32px] p-5 flex flex-col duration-100">
                        <div class="overflow-hidden rounded-[32px]">
                            <img class="w-full h-[300px] rounded-[32px] group-hover:scale-125 duration-200" src="https://media.sukabumiupdate.com/media/2023/01/04/1672821835_63b53c4bc1823_VqEPLbgVWbEVN2zL24kf.jpg"/>
                        </div>
    
                        <span class="font-inter font-bold text-xl mt-4 line-clamp-1 group-hover:line-clamp-none">Title</span>
                        <span class="font-inter text-sm mt-1">2023</span>
                    </div>
                </a>
            </div>
            <div class="w-full sm:w-auto">
                <a href="tv-shows/id" class="group block">
                    <div class="min-w-[232px] min-h-[428px] bg-white drop-shadow-[0_0px_8px_rgba(0,0,0,0.25)] group-hover:drop-shadow-[0_0px_8px_rgba(0,0,0,0.5)] rounded-[32px] p-5 flex flex-col duration-100">
                        <div class="overflow-hidden rounded-[32px]">
                            <img class="w-full h-[300px] rounded-[32px] group-hover:scale-125 duration-200" src="https://media.sukabumiupdate.com/media/2023/01/04/1672821835_63b53c4bc1823_VqEPLbgVWbEVN2zL24kf.jpg"/>
                        </div>
    
                        <span class="font-inter font-bold text-xl mt-4 line-clamp-1 group-hover:line-clamp-none">Title</span>
                        <span class="font-inter text-sm mt-1">2023</span>
                    </div>
                </a>
            </div>
            <div class="w-full sm:w-auto">
                <a href="tv-shows/id" class="group block">
                    <div class="min-w-[232px] min-h-[428px] bg-white drop-shadow-[0_0px_8px_rgba(0,0,0,0.25)] group-hover:drop-shadow-[0_0px_8px_rgba(0,0,0,0.5)] rounded-[32px] p-5 flex flex-col duration-100">
                        <div class="overflow-hidden rounded-[32px]">
                            <img class="w-full h-[300px] rounded-[32px] group-hover:scale-125 duration-200" src="https://media.sukabumiupdate.com/media/2023/01/04/1672821835_63b53c4bc1823_VqEPLbgVWbEVN2zL24kf.jpg"/>
                        </div>
    
                        <span class="font-inter font-bold text-xl mt-4 line-clamp-1 group-hover:line-clamp-none">Title</span>
                        <span class="font-inter text-sm mt-1">2023</span>
                    </div>
                </a>
            </div>
            <div class="w-full sm:w-auto">
                <a href="tv-shows/id" class="group block">
                    <div class="min-w-[232px] min-h-[428px] bg-white drop-shadow-[0_0px_8px_rgba(0,0,0,0.25)] group-hover:drop-shadow-[0_0px_8px_rgba(0,0,0,0.5)] rounded-[32px] p-5 flex flex-col duration-100">
                        <div class="overflow-hidden rounded-[32px]">
                            <img class="w-full h-[300px] rounded-[32px] group-hover:scale-125 duration-200" src="https://media.sukabumiupdate.com/media/2023/01/04/1672821835_63b53c4bc1823_VqEPLbgVWbEVN2zL24kf.jpg"/>
                        </div>
    
                        <span class="font-inter font-bold text-xl mt-4 line-clamp-1 group-hover:line-clamp-none">Title</span>
                        <span class="font-inter text-sm mt-1">2023</span>
                    </div>
                </a>
            </div>
            <div class="w-full sm:w-auto">
                <a href="tv-shows/id" class="group block">
                    <div class="min-w-[232px] min-h-[428px] bg-white drop-shadow-[0_0px_8px_rgba(0,0,0,0.25)] group-hover:drop-shadow-[0_0px_8px_rgba(0,0,0,0.5)] rounded-[32px] p-5 flex flex-col duration-100">
                        <div class="overflow-hidden rounded-[32px]">
                            <img class="w-full h-[300px] rounded-[32px] group-hover:scale-125 duration-200" src="https://media.sukabumiupdate.com/media/2023/01/04/1672821835_63b53c4bc1823_VqEPLbgVWbEVN2zL24kf.jpg"/>
                        </div>
    
                        <span class="font-inter font-bold text-xl mt-4 line-clamp-1 group-hover:line-clamp-none">Title</span>
                        <span class="font-inter text-sm mt-1">2023</span>
                    </div>
                </a>
            </div>
            <div class="w-full sm:w-auto">
                <a href="tv-shows/id" class="group block">
                    <div class="min-w-[232px] min-h-[428px] bg-white drop-shadow-[0_0px_8px_rgba(0,0,0,0.25)] group-hover:drop-shadow-[0_0px_8px_rgba(0,0,0,0.5)] rounded-[32px] p-5 flex flex-col duration-100">
                        <div class="overflow-hidden rounded-[32px]">
                            <img class="w-full h-[300px] rounded-[32px] group-hover:scale-125 duration-200" src="https://media.sukabumiupdate.com/media/2023/01/04/1672821835_63b53c4bc1823_VqEPLbgVWbEVN2zL24kf.jpg"/>
                        </div>
    
                        <span class="font-inter font-bold text-xl mt-4 line-clamp-1 group-hover:line-clamp-none">Title</span>
                        <span class="font-inter text-sm mt-1">2023</span>
                    </div>
                </a>
            </div>
            <div class="w-full sm:w-auto">
                <a href="tv-shows/id" class="group block">
                    <div class="min-w-[232px] min-h-[428px] bg-white drop-shadow-[0_0px_8px_rgba(0,0,0,0.25)] group-hover:drop-shadow-[0_0px_8px_rgba(0,0,0,0.5)] rounded-[32px] p-5 flex flex-col duration-100">
                        <div class="overflow-hidden rounded-[32px]">
                            <img class="w-full h-[300px] rounded-[32px] group-hover:scale-125 duration-200" src="https://media.sukabumiupdate.com/media/2023/01/04/1672821835_63b53c4bc1823_VqEPLbgVWbEVN2zL24kf.jpg"/>
                        </div>
    
                        <span class="font-inter font-bold text-xl mt-4 line-clamp-1 group-hover:line-clamp-none">Title</span>
                        <span class="font-inter text-sm mt-1">2023</span>
                    </div>
                </a>
            </div>
            <div class="w-full sm:w-auto">
                <a href="tv-shows/id" class="group block">
                    <div class="min-w-[232px] min-h-[428px] bg-white drop-shadow-[0_0px_8px_rgba(0,0,0,0.25)] group-hover:drop-shadow-[0_0px_8px_rgba(0,0,0,0.5)] rounded-[32px] p-5 flex flex-col duration-100">
                        <div class="overflow-hidden rounded-[32px]">
                            <img class="w-full h-[300px] rounded-[32px] group-hover:scale-125 duration-200" src="https://media.sukabumiupdate.com/media/2023/01/04/1672821835_63b53c4bc1823_VqEPLbgVWbEVN2zL24kf.jpg"/>
                        </div>
    
                        <span class="font-inter font-bold text-xl mt-4 line-clamp-1 group-hover:line-clamp-none">Title</span>
                        <span class="font-inter text-sm mt-1">2023</span>
                    </div>
                </a>
            </div>
            <div class="w-full sm:w-auto">
                <a href="tv-shows/id" class="group block">
                    <div class="min-w-[232px] min-h-[428px] bg-white drop-shadow-[0_0px_8px_rgba(0,0,0,0.25)] group-hover:drop-shadow-[0_0px_8px_rgba(0,0,0,0.5)] rounded-[32px] p-5 flex flex-col duration-100">
                        <div class="overflow-hidden rounded-[32px]">
                            <img class="w-full h-[300px] rounded-[32px] group-hover:scale-125 duration-200" src="https://media.sukabumiupdate.com/media/2023/01/04/1672821835_63b53c4bc1823_VqEPLbgVWbEVN2zL24kf.jpg"/>
                        </div>
    
                        <span class="font-inter font-bold text-xl mt-4 line-clamp-1 group-hover:line-clamp-none">Title</span>
                        <span class="font-inter text-sm mt-1">2023</span>
                    </div>
                </a>
            </div>
            <div class="w-full sm:w-auto">
                <a href="tv-shows/id" class="group block">
                    <div class="min-w-[232px] min-h-[428px] bg-white drop-shadow-[0_0px_8px_rgba(0,0,0,0.25)] group-hover:drop-shadow-[0_0px_8px_rgba(0,0,0,0.5)] rounded-[32px] p-5 flex flex-col duration-100">
                        <div class="overflow-hidden rounded-[32px]">
                            <img class="w-full h-[300px] rounded-[32px] group-hover:scale-125 duration-200" src="https://media.sukabumiupdate.com/media/2023/01/04/1672821835_63b53c4bc1823_VqEPLbgVWbEVN2zL24kf.jpg"/>
                        </div>
    
                        <span class="font-inter font-bold text-xl mt-4 line-clamp-1 group-hover:line-clamp-none">Title</span>
                        <span class="font-inter text-sm mt-1">2023</span>
                    </div>
                </a>
            </div>
            <!-- Repeat the above block for each item -->
        </div>
    </div>
    
</div>
<hr class=" border-gray-200 s dark:border-gray-700 " />
 @endsection

