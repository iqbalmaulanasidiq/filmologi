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

<section class="bg-white dark:bg-gray-900  -my-16 "> <!-- Tambahkan kelas margin-top negatif untuk membuat section lebih rapat -->
    <div class="container mx-auto min-h-[500px]"> 
        <p class="text-6xl text-gray-900 dark:text-white pt-10 text-center font-extrabold pb-5">Tentang Kami</p>
        <div class="grid grid-cols-2 gap-2 py-11 ext-lg font-normal text-gray-300 lg:text-xl text-justify">
            <div class="pe-10">
               <p>Selamat datang di FILMOLOGI, platform yang didedikasikan untuk membawa pengalaman sinematik terbaik langsung ke hadapan Anda! Kami adalah penyedia rekomendasi film dan acara televisi yang memahami keunikan setiap pengguna. FILMOLOGI bertujuan untuk memberikan pilihan film dan acara TV yang menarik untuk anda.</p>
            </div>
            <div class="ps-10">
                <p>FILMOLOGI didirikan dengan hasrat untuk menghadirkan kegembiraan melalui dunia sinema. Kami percaya bahwa setiap orang memiliki cerita yang unik dan bahwa dunia film dan TV adalah tempat di mana kita dapat menemukan inspirasi, hiburan, dan kadang-kadang bahkan penemuan yang tak terduga. <br><br>
                Mari bersama-sama menjelajahi dunia hiburan melalui FILMOLOGI dan temukan pengalaman menonton yang sesuai dengan kepribadian Anda! testing</p>
            </div>
        </div>

        
    </div>
    
</section>

<hr class=" border-gray-200 s dark:border-gray-700 " />


@include('layouts.footer')

</body>
</html>
