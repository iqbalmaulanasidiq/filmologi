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
  <div class="flex">
    @include('dashboard-adm.layouts.navbar')


    @include('dashboard-adm.layouts.header') 

    @include('dashboard-adm.layouts.sidebar')

    <div class="flex-1">
      @yield('content')
    </div>
  </div>


@include('dashboard-adm.layouts.footer')


<script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
</body>
</html>