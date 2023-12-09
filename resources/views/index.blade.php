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


<section class="bg-center h-[750px] bg-no-repeat bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg')] bg-gray-700 bg-blend-multiply">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Filmologi</h1>
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Mari bergabung bersama kami dan nikmati fitur fitur menariknya !!.</p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
            <a href="/login" class="inline-flex  justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                Login
            </a>
            <a href="/register" class="inline-flex  justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900 ms-4">
                Register
            </a>
        </div>
    </div>
</section>

<section class="bg-white dark:bg-gray-900  -my-16 "> <!-- Tambahkan kelas margin-top negatif untuk membuat section lebih rapat -->
    <div class="container mx-auto h-[500px]"> 
        <p class="text-6xl text-gray-900 dark:text-white pt-10 text-center font-extrabold">About Us</p>

        
        
    </div>
    
</section>

<hr class=" border-gray-200 s dark:border-gray-700 " />


@include('layouts.footer')

</body>
</html>
