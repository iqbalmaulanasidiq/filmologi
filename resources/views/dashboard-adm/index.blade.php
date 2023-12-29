@extends('dashboard-adm.layouts.main')

@section('content')

<div class="p-10 sm:ml-64 bg-slate-900">
    <div class="p-4 mt-14 ">
       <div class="grid grid-cols-3 gap-4 mb-4">

        {{-- BREADCRUMB --}}
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
                <a href="/dashboard-adm" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white-800">
                  <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                     <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                  </svg>
                  Dashboard Admin
                </a>
            </li>
            </ol>           
        </nav>       
      </div>

       
      <p class="max-w-lg text-3xl font-semibold leading-normal text-white">Selamat Datang, Admin!</p>


       {{-- TULISAN DASHBOARD ADMIN --}}
         <div class="flex items-center justify-left h-1 mb-4 mt-10 rounded bg-white-50 dark:bg-white-800">
            <p class="text-lg font-medium text-gray-500 dark:text-gray-400">Dashboard Admin</p>
         </div>
         
         <div class="flex space-x-4 mt-10"> <!-- Use 'space-x-4' to add horizontal spacing between buttons -->
            
            <a href="#" class="block max-w-sm p-6 bg-gradient-to-br from-purple-600 to-blue-500 focus:ring-blue-300 rounded-lg shadow hover:bg-blue-100 active:bg-blue-800 dark:bg-blue-800 dark:border-blue-300 dark:hover:bg-blue-800">            
               <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Jumlah Pengunjung</h5>
               <h5 class="mb-2 text-6xl font-bold tracking-tight text-white">10</h5>            
            </a>
   
            <a href="#" class="block max-w-sm p-6 bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl rounded-lg shadow hover:bg-blue-100 active:bg-blue-800 dark:bg-blue-800 dark:border-blue-300 dark:hover:bg-blue-800">            
               <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Jumlah Suntingan</h5>
               <h5 class="mb-2 text-6xl font-bold tracking-tight text-white">5</h5>
            </a>

            <a href="#" class="block max-w-sm p-6 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl rounded-lg focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 shadow hover:bg-blue-100 active:bg-blue-800 dark:bg-blue-800 dark:border-blue-300 dark:hover:bg-blue-800">            
               <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Total Rating</h5>
               <h5 class="mb-2 text-6xl font-bold tracking-tight text-white">30</h5>             
            </a>
        </div>

       <br> 
       <br>     
       

            </div>

         <div class="grid grid-cols-2 gap-4 mb-4"></div>
            <div class="flex items-center justify-center h-48 mb-4 rounded ">
               <div class="relative overflow-x-auto shadow-md sm:rounded-lg"></div>
            </div>
         </div>
      </div>
 </div>

 
@endsection

