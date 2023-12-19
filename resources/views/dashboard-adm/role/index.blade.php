@extends('dashboard-adm.layouts.main')

@section('content')

<div class="p-10 sm:ml-64 bg-slate-900">
    <div class="p-4 mt-14">
       <div class="grid grid-cols-3 gap-4 mb-4">

        {{-- BREADCRUMB --}}
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
                <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-gray-800">
                <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                </svg>
                Dashboard Admin
                </a>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Role</span>
                </div>
            </li>
            </ol>
        </nav>
        
        <div class="flex items-center justify-center h-20 rounded bg-white-50 dark:bg-white-800">           
        </div>
       </div>

       {{-- TULISAN DASHBOARD ADMIN --}}
       <div class="flex items-center justify-left h-1 mb-4 rounded bg-white-50 dark:bg-white-800">
          <p class="text-lg font-medium text-gray-500 dark:text-gray-400">Role</p>
       </div>

       <div class="grid grid-cols-2 gap-4 mb-4">
         </div>
         <div class="flex items-center justify-center h-48 mb-4 rounded ">
         <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
               <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                     <tr>
                        <th scope="col" class="px-6 py-3">
                           Product name
                        </th>
                        <th scope="col" class="px-6 py-3">
                           Color
                        </th>
                        <th scope="col" class="px-6 py-3">
                           Category
                        </th>
                        <th scope="col" class="px-6 py-3">
                           Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                           Action
                        </th>
                     </tr>
               </thead>
               <tbody>
                     <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                           Apple MacBook Pro 17"
                        </th>
                        <td class="px-6 py-4">
                           Silver
                        </td>
                        <td class="px-6 py-4">
                           Laptop
                        </td>
                        <td class="px-6 py-4">
                           $2999
                        </td>
                        <td class="px-6 py-4">
                           <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                     </tr>
                     <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                           Microsoft Surface Pro
                        </th>
                        <td class="px-6 py-4">
                           White
                        </td>
                        <td class="px-6 py-4">
                           Laptop PC
                        </td>
                        <td class="px-6 py-4">
                           $1999
                        </td>
                        <td class="px-6 py-4">
                           <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                     </tr>
                     <tr class="bg-white dark:bg-gray-800">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                           Magic Mouse 2
                        </th>
                        <td class="px-6 py-4">
                           Black
                        </td>
                        <td class="px-6 py-4">
                           Accessories
                        </td>
                        <td class="px-6 py-4">
                           $99
                        </td>
                        <td class="px-6 py-4">
                           <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                     </tr>
               </tbody>
            </table>
         </div>

         </div>
         <div class="grid grid-cols-2 gap-4">
            <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
               <p class="text-2xl text-gray-400 dark:text-gray-500">
                  <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                  </svg>
               </p>
            </div>
            <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
               <p class="text-2xl text-gray-400 dark:text-gray-500">
                  <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                  </svg>
               </p>
            </div>
            <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
               <p class="text-2xl text-gray-400 dark:text-gray-500">
                  <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                  </svg>
               </p>
            </div>
            <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
               <p class="text-2xl text-gray-400 dark:text-gray-500">
                  <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                  </svg>
               </p>
            </div>
         </div>
      </div>
 </div>

@endsection