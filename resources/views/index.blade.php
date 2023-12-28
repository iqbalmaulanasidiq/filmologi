<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/dist/output.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
  <title>FILMOLOGI</title>

  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>

@php
    $bannerImage = "{$imageBaseUrl}/original{$bannerHome[0]['backdrop_path']}";
@endphp

<section class="bg-center md:h-screen bg-cover bg-no-repeat bg-local bg-gray-700 bg-blend-multiply relative overflow-hidden">
    <img src="{{ $bannerImage }}" alt="Background Image" class="absolute inset-0 w-full h-full object-cover" />
    <div class="absolute inset-0 bg-black bg-opacity-40"></div>
    <div class="container mx-auto text-center relative py-24 lg:py-56">
        <img src="{{ asset('/storage/logo.png') }}" alt="logo" width="300" class="mx-auto mb-8">
        <p class="mb-8 text-lg text-gray-300 lg:text-xl sm:px-6 lg:px-12 leading-relaxed">Mari bergabung bersama kami dan nikmati fitur-fitur menariknya!</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            <a href="{{ route('login') }}" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900 me-5">
                Masuk
                <svg class="w-6 h-6 ms-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 12C20 7.58172 16.4183 4 12 4M12 20C14.5264 20 16.7792 18.8289 18.2454 17" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M4 12H14M14 12L11 9M14 12L11 15" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
            <a href="{{ route('register') }}" class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                Daftar
                <svg class="w-6 h-6 ms-2" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.016 28q0 0.832 0.576 1.44t1.408 0.576h14.016v-0.352q-1.792-0.608-2.912-2.176t-1.088-3.488q0-2.016 1.184-3.584t3.072-2.112q0.384-1.216 1.216-2.176t2.016-1.504q0.512-1.376 0.512-2.624v-1.984q0-3.328-2.368-5.664t-5.632-2.336-5.664 2.336-2.336 5.664v1.984q0 2.112 1.024 3.904t2.784 2.912q-1.504 0.544-2.912 1.504t-2.496 2.144-1.76 2.624-0.64 2.912zM18.016 24q0 0.832 0.576 1.44t1.408 0.576h2.016v1.984q0 0.864 0.576 1.44t1.408 0.576 1.408-0.576 0.608-1.44v-1.984h1.984q0.832 0 1.408-0.576t0.608-1.44-0.608-1.408-1.408-0.576h-1.984v-2.016q0-0.832-0.608-1.408t-1.408-0.576-1.408 0.576-0.576 1.408v2.016h-2.016q-0.832 0-1.408 0.576t-0.576 1.408z" fill="white"></path>
                </svg>
                
            </a> 
        </div>
        
    </div>
</section>






<section class="bg-white dark:bg-gray-900">
    <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
        <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12 mb-5 anime-fade-up ">
            
            <h1 class="text-gray-900 dark:text-white text-3xl md:text-5xl font-extrabold mb-4">Tentang Kami</h1>
            <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">Selamat datang di FILMOLOGI, platform yang didedikasikan untuk membawa pengalaman sinematik terbaik langsung ke hadapan Anda! Kami adalah penyedia rekomendasi film dan acara televisi yang memahami keunikan setiap pengguna. FILMOLOGI bertujuan untuk memberikan pilihan film dan acara TV yang menarik untuk anda.
                <br><br>
                FILMOLOGI didirikan dengan hasrat untuk menghadirkan kegembiraan melalui dunia sinema. Kami percaya bahwa setiap orang memiliki cerita yang unik dan bahwa dunia film dan TV adalah tempat di mana kita dapat menemukan inspirasi, hiburan, dan kadang-kadang bahkan penemuan yang tak terduga. <br><br>
                    Mari bersama-sama menjelajahi dunia hiburan melalui FILMOLOGI dan temukan pengalaman menonton yang sesuai dengan kepribadian Anda!</p>
            </p>
            
        </div>
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12 anime-slide-in">
                <a href="#" class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 mb-2">
                    <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                        <path d="M17 11h-2.722L8 17.278a5.512 5.512 0 0 1-.9.722H17a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1ZM6 0H1a1 1 0 0 0-1 1v13.5a3.5 3.5 0 1 0 7 0V1a1 1 0 0 0-1-1ZM3.5 15.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM16.132 4.9 12.6 1.368a1 1 0 0 0-1.414 0L9 3.55v9.9l7.132-7.132a1 1 0 0 0 0-1.418Z"/>
                    </svg>
                    Films
                </a>
                <h2 class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2 ">Rekomendasi Film?</h2>
                <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-4">kami dengan senang hati memberikan rekomendasi terkini untuk film-film terbaik dan paling tren setiap minggunya. Jelajahi daftar kami untuk menemukan karya-karya sinematik terbaru yang patut Anda saksikan, lengkap dengan rating yang bisa Anda gunakan sebagai panduan kualitas. Nikmati pengalaman pratinjau yang memikat dengan menyaksikan trailer resmi setiap film. Dengan dukungan ulasan dan penilaian kami, kami berusaha memberikan pandangan holistik untuk membantu Anda membuat pilihan yang tepat dan memuaskan hasrat sinematis Anda.</p>
                
            </div>

            <div class="ps-10">
                
            <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12 anime-scale-in">
                <a href="#" class="bg-purple-100 text-purple-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-purple-400 mb-2">
                    <svg class="w-2.5 h-2.5 me-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 4 1 8l4 4m10-8 4 4-4 4M11 1 9 15"/>
                    </svg>
                    TV Shows
                </a>
                <h2 class="text-gray-900 dark:text-white text-3xl font-extrabold mb-2">Rekomendasi TV Shows?</h2>
                <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-4">Dengan antusias memberikan rekomendasi mingguan untuk acara TV terbaik dan paling populer saat ini. Jelajahi daftar kami yang diperbarui setiap minggu untuk menemukan seri-seri terbaru yang wajib Anda saksikan, lengkap dengan peringkat untuk membantu Anda menilai kualitasnya. Saksikan cuplikan eksklusif dari setiap episode melalui trailer resmi, sehingga Anda dapat merasakan atmosfernya sebelum memulai penontonan. Dengan ulasan dan penilaian kami, kami berkomitmen memberikan wawasan komprehensif untuk memandu Anda dalam memilih acara TV yang sesuai dengan preferensi Anda dan membuat pengalaman menonton Anda lebih memuaskan.</p>
                

            </div>
        </div>
    </div>
</section>


<hr class=" border-gray-200 s dark:border-gray-700 " />


@include('layouts.footer')
<script>
    document.addEventListener('DOMContentLoaded', function () {
      // Anime.js animation for elements in the second section
      anime({
        targets: '.anime-fade-in',
        opacity: [0, 1],
        duration: 2000,
        easing: 'easeInOutQuad',
        delay: anime.stagger(100),
        autoplay: true, // Add this line to ensure the animation starts automatically
      });
      // Anime.js animation for elements in the third section
    anime({
      targets: '.anime-slide-in',
      translateX: [-500, 0],
      opacity: [0, 1],
      duration: 2000,
      easing: 'easeInOutQuad',
      delay: anime.stagger(100),
      autoplay: true, // Add this line to ensure the animation starts automatically
    });

    // Anime.js animation for elements in the fourth section
    anime({
      targets: '.anime-scale-in',
      scale: [0, 1],
      opacity: [0, 1],
      duration: 2000,
      easing: 'easeInOutQuad',
      delay: anime.stagger(100),
      autoplay: true, // Add this line to ensure the animation starts automatically
    });

    // Anime.js animation for elements in the fifth section
    anime({
      targets: '.anime-fade-up',
      translateY: [200, 0],
      opacity: [0, 1],
      duration: 2000,
      easing: 'easeInOutQuad',
      delay: anime.stagger(100),
      autoplay: true, // Add this line to ensure the animation starts automatically
    });

    });

    
  </script>
</body>
</html>
