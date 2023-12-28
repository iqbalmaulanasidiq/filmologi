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
        
        <div class="flex items-center justify-center h-20 rounded bg-white-50 dark:bg-white-800">           
        </div>

        
       </div>

       {{-- TULISAN DASHBOARD ADMIN --}}
         <div class="flex items-center justify-left h-1 mb-4 rounded bg-white-50 dark:bg-white-800">
            <p class="text-lg font-medium text-gray-500 dark:text-gray-400">Dashboard Admin</p>
         </div>
         
         <div class="flex space-x-4 mt-5"> <!-- Use 'space-x-4' to add horizontal spacing between buttons -->
            
            <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">            
               <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-700 dark:text-gray-400">Jumlah Pengunjung</h5>
               <svg class="w-10 h-10 text-gray-700 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                  <path d="M16 0H4a2 2 0 0 0-2 2v1H1a1 1 0 0 0 0 2h1v2H1a1 1 0 0 0 0 2h1v2H1a1 1 0 0 0 0 2h1v2H1a1 1 0 0 0 0 2h1v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4.5a3 3 0 1 1 0 6 3 3 0 0 1 0-6ZM13.929 17H7.071a.5.5 0 0 1-.5-.5 3.935 3.935 0 1 1 7.858 0 .5.5 0 0 1-.5.5Z"/>
              </svg>              
            </a>
   
        
            <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">            
               <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-700 dark:text-gray-400">Statistik Pengunjung</h5>
               <svg class="w-10 h-10 text-gray-700 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1v14h16m0-9-3-2-3 5-3-2-3 4"/>
                </svg> 
                          
            </a>

            <a href="#" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
               <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-700 dark:text-gray-400">Noteworthy technology acquisitions 2021</h5>
               <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </a>
        </div>

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

