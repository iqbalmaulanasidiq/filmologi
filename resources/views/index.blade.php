<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/dist/output.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>FILMOLOGI</title>

  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>


<section class="bg-center h-[1200px] bg-no-repeat bg-local bg-[url('https://images.unsplash.com/photo-1505954137021-b6bf5a131a7b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] bg-gray-700 bg-blend-multiply">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
        <img src="{{ asset('/storage/logo.png') }}" alt="logo" width="300" class="mx-auto ">
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Mari bergabung bersama kami dan nikmati fitur fitur menariknya !!.</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            <a href="/login" class="inline-flex  justify-center items-center py-3 px-5 me-10 text-base font-medium text-center text-white rounded-full  bg-opacity-10 border border-white hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                Masuk
            </a>
            <a href="/register" class="inline-flex  justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-full  bg-opacity-10 border border-white hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900 ms-4">
                Daftar
            </a>
        </div>
    </div>
</section>



<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
        <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12 mb-8">
            <a href="#" class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-blue-400 mb-2">
                <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                    <path d="M11 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm8.585 1.189a.994.994 0 0 0-.9-.138l-2.965.983a1 1 0 0 0-.685.949v8a1 1 0 0 0 .675.946l2.965 1.02a1.013 1.013 0 0 0 1.032-.242A1 1 0 0 0 20 12V2a1 1 0 0 0-.415-.811Z"/>
                </svg>
                Tutorial
            </a>
            <h1 class="text-gray-900 dark:text-white text-3xl md:text-5xl font-extrabold mb-2">How to find the most interesting websites for movie and TV show recommendations</h1>
            <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">Movie and TV recommendation websites offer a direct connection to the world of cinematic entertainment, providing inspiration, and unexpected discoveries.</p>
            <a href="#" class="inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                Read more
                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                <a href="#" class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 mb-2">
                    <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path d="M17 11h-2.722L8 17.278a5.512 5.512 0 0 1-.9.722H17a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1ZM6 0H1a1 1 0 0 0-1 1v13.5a3.5 3.5 0 1 0 7 0V1a1 1 0 0 0-1-1ZM3.5 15.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM16.132 4.9 12.6 1.368a1 1 0 0 0-1.414 0L9 3.55v9.9l7.132-7.132a1 1 0 0 0 0-1.418Z"/>
                    </svg>
                    Films
                </a>
                <h2 class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2">Tentang Kami</h2>
                <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-4">Selamat datang di FILMOLOGI, platform yang didedikasikan untuk membawa pengalaman sinematik terbaik langsung ke hadapan Anda! Kami adalah penyedia rekomendasi film dan acara televisi yang memahami keunikan setiap pengguna. FILMOLOGI bertujuan untuk memberikan pilihan film dan acara TV yang menarik untuk anda.</p>
                
            </div>
            <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                <a href="#" class="bg-purple-100 text-purple-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-purple-400 mb-2">
                    <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4 1 8l4 4m10-8 4 4-4 4M11 1 9 15"/>
                    </svg>
                    TV Shows
                </a>
                <h2 class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2">Best films and TV shows recommendations around the web</h2>
                <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-4">FILMOLOGI didirikan dengan hasrat untuk menghadirkan kegembiraan melalui dunia sinema. Kami percaya bahwa setiap orang memiliki cerita yang unik dan bahwa dunia film dan TV adalah tempat di mana kita dapat menemukan inspirasi, hiburan, dan kadang-kadang bahkan penemuan yang tak terduga. <br><br>
                    Mari bersama-sama menjelajahi dunia hiburan melalui FILMOLOGI dan temukan pengalaman menonton yang sesuai dengan kepribadian Anda!</p>
                
            </div>
        </div>
    </div>
</section>


<hr class=" border-gray-200 s dark:border-gray-700 " />


@include('layouts.footer')

</body>
</html>
