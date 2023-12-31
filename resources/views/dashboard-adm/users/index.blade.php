@extends('dashboard-adm.layouts.main')

@section('content')

<div class="p-10 sm:ml-64 bg-slate-900">
    <div class="p-4 mt-20">
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
            <li aria-current="page">
                <div class="flex items-center">
                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Users</span>
                </div>
            </li>
            </ol>
        </nav>
        
        <div class="flex items-center justify-center h-20 rounded bg-white-50 dark:bg-white-800">           
        </div>
       </div>

       {{-- TULISAN DASHBOARD ADMIN --}}
       <div class="flex items-center justify-left h-1 mb-4 rounded bg-white-50 dark:bg-white-800">
          <p class="text-lg font-medium text-gray-500 dark:text-gray-400">Users</p>
       </div>

        <div class="w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b border-gray-200 rounded-t-lg bg-gray-50 dark:border-gray-700 dark:text-gray-400 dark:bg-gray-800" id="defaultTab" data-tabs-toggle="#defaultTabContent" role="tablist">
                <li class="me-2">
                    <button id="about-tab" data-tabs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="true" class="inline-block p-4 text-blue-600 rounded-ss-lg hover:bg-gray-100 dark:bg-gray-800 dark:hover:bg-gray-700 dark:text-blue-500">Users</button>
                </li>
            </ul>
            <div id="defaultTabContent">
                <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="about" role="tabpanel" aria-labelledby="about-tab">
                    <h2 class="mb-3 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">Tabel Users</h2>      
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Foto Profil
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Nama
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Username
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Email
                                        </th>
                                        {{-- <th scope="col" class="px-6 py-3">
                                            Role
                                        </th> --}}
                                        <th scope="col" class="px-6 py-3">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <img class="w-20 h-20 rounded-full" src="/storage/v.jpg" alt="foto vina">
                                        </th>
                                        <td class="px-6 py-4">
                                            Vina Nur Fauziah
                                        </td>
                                        <td class="px-6 py-4">
                                            vinanurfauziah
                                        </td>
                                        <td class="px-6 py-4">
                                            vina@gmail.com
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <img class="w-20 h-20 rounded-full" src="/storage/e.jpeg" alt="foto emil">
                                        </th>
                                        <td class="px-6 py-4">
                                            Emilia Faradila
                                        </td>
                                        <td class="px-6 py-4">
                                            emiliafaradila
                                        </td>
                                        <td class="px-6 py-4">
                                            emil@gmail.com
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        </td>
                                    </tr>
                                    <tr class="bg-white dark:bg-gray-800">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <img class="w-20 h-20 rounded-full" src="/storage/i.jpeg" alt="foto iqbal">
                                        </th>
                                        <td class="px-6 py-4">
                                            Iqbal Maulana
                                        </td>
                                        <td class="px-6 py-4">
                                            iqbalmaulana
                                        </td>
                                        <td class="px-6 py-4">
                                            iqbal@gmail.com
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        </td>
                                    </tr>
                                    <tr class="bg-white dark:bg-gray-800">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            <img class="w-20 h-20 rounded-full" src="/storage/y.jpeg" alt="foto yudha">
                                        </th>
                                        <td class="px-6 py-4">
                                            Yudha Yudhistira
                                        </td>
                                        <td class="px-6 py-4">
                                            yudhayudhistira
                                        </td>
                                        <td class="px-6 py-4">
                                            yudha@gmail.com
                                        </td>
                                        <td class="px-6 py-4">
                                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    
                </div>
                <div class="hidden p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="services" role="tabpanel" aria-labelledby="services-tab">
                    
                </div>

            </div>
        </div>


         <div class="flex items-center justify-center h-20 rounded bg-white-50 dark:bg-white-800">           
        </div>

        <div class="flex items-center justify-center h-20 rounded bg-white-50 dark:bg-white-800">           
        </div>
         
      </div>
 </div>

@endsection


<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>

<script>
    // Add this script at the end of your Blade file or in a separate JS file.

document.addEventListener('DOMContentLoaded', function () {
    const modalButtons = document.querySelectorAll('[data-modal-toggle]');
    modalButtons.forEach(button => {
        button.addEventListener('click', function () {
            const targetModalId = this.getAttribute('data-modal-target');
            const targetModal = document.getElementById(targetModalId);

            // Toggle modal visibility
            targetModal.classList.toggle('hidden');
        });
    });

    // Add similar logic for form submission.
});



</script>





