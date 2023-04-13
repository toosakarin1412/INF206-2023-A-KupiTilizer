@extends('layouts.dashboardLayout')

@section('breadcrumb')
<li>
    <div class="flex items-center">
        <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        <a href="/<?php echo Auth::user()->role?>" class="ml-1 text-sm font-medium text-gray-700 hover:text-leaf md:ml-2 dark:text-gray-400 dark:hover:text-white">Dashboard</a>
    </div>
</li>
@endsection

@section('content')
<div class="p-4 border border-gray-200 rounded-lg bg-gray-50">


        <div class="grid md:grid-cols-6 grid-cols-1 gap-4 mb-4">
            <!-- Penjemputan -->

            <div class="md:col-span-3 border-gray-200 rounded-lg bg-white p-5 border hover:border-leaf">
                <a href="/<?php echo Auth::user()->role?>/requestjemput">
                    <p class="font-bold w-full">Request Penjemputan</p>        
                    <div class="md:flex flex-wrap justify-between gap-2 rounded mt-5 text-left">
                        <div class="flex-grow rounded p-3 bg-green-200 border border-gray-200 shadow-lg mt-3 md:mt-0">
                            <span class="text-left pt-2 font-bold">Accepted</span>
                            <p class="text-left py-5 font-bold text-xl">100</p>
                            <div class="flex gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                                </svg>
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="flex-grow rounded p-3 bg-red-200 border border-gray-200 shadow-lg mt-3 md:mt-0">
                            <span class="text-left pt-2 font-bold">Declined</span>
                            <p class="text-left py-5 font-bold text-xl">100</p>
                            <div class="flex gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                                </svg>
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="flex-grow rounded p-3 bg-yellow-200 border border-gray-200 shadow-lg mt-3 md:mt-0">
                            <span class="text-left pt-2 font-bold">Waiting</span>
                            <p class="text-left py-5 font-bold text-xl">100</p>
                            <div class="flex gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6L9 12.75l4.286-4.286a11.948 11.948 0 014.306 6.43l.776 2.898m0 0l3.182-5.511m-3.182 5.51l-5.511-3.181" />
                                </svg>
                                <span>20%</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Penjualan -->
            <div class="md:col-span-3 border-gray-200 rounded-lg bg-white p-5 border hover:border-leaf">
                <a href="/<?php echo Auth::user()->role?>/pembelian">
                    <p class="font-bold">Request Pembelian</p>        
                    <div class="md:flex flex-wrap justify-between gap-2 rounded mt-5 text-left">
                        <div class="flex-grow rounded p-3 bg-green-200 border border-gray-200 shadow-lg mt-3 md:mt-0">
                            <span class="text-left pt-2 font-bold">Accepted</span>
                            <p class="text-left py-5 font-bold text-xl">100</p>
                            <div class="flex gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                                </svg>
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="flex-grow rounded p-3 bg-red-200 border border-gray-200 shadow-lg mt-3 md:mt-0">
                            <span class="text-left pt-2 font-bold">Declined</span>
                            <p class="text-left py-5 font-bold text-xl">100</p>
                            <div class="flex gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18L9 11.25l4.306 4.307a11.95 11.95 0 015.814-5.519l2.74-1.22m0 0l-5.94-2.28m5.94 2.28l-2.28 5.941" />
                                </svg>
                                <span>20%</span>
                            </div>
                        </div>
                        <div class="flex-grow rounded p-3 bg-yellow-200 border border-gray-200 shadow-lg mt-3 md:mt-0">
                            <span class="text-left pt-2 font-bold">Waiting</span>
                            <p class="text-left py-5 font-bold text-xl">100</p>
                            <div class="flex gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6L9 12.75l4.286-4.286a11.948 11.948 0 014.306 6.43l.776 2.898m0 0l3.182-5.511m-3.182 5.51l-5.511-3.181" />
                                </svg>
                                <span>20%</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Product -->
            <div class="md:col-span-4 border-gray-200 rounded-lg bg-white p-5 border hover:border-leaf">
                <a href="/<?php echo Auth::user()->role?>/pembelian">
                    <p class="font-bold">Penjualan Produk</p>            
                    <div class="relative overflow-x-auto mt-5">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Product name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Sold
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Base Price
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Total
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Pupuk Organik
                                    </th>
                                    <td class="px-6 py-4">
                                        234
                                    </td>
                                    <td class="px-6 py-4">
                                        Pupuk
                                    </td>
                                    <td class="px-6 py-4">
                                        $2999
                                    </td>
                                </tr>
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Pupuk Kandang
                                    </th>
                                    <td class="px-6 py-4">
                                        123
                                    </td>
                                    <td class="px-6 py-4">
                                        Pupuk
                                    </td>
                                    <td class="px-6 py-4">
                                        $1999
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-gray-800">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Media Tanam
                                    </th>
                                    <td class="px-6 py-4">
                                        100
                                    </td>
                                    <td class="px-6 py-4">
                                        Accessories
                                    </td>
                                    <td class="px-6 py-4">
                                        $99
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-gray-800">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Sabun
                                    </th>
                                    <td class="px-6 py-4">
                                        96
                                    </td>
                                    <td class="px-6 py-4">
                                        Accessories
                                    </td>
                                    <td class="px-6 py-4">
                                        $99
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </a>
            </div>

            <!-- History -->
            <div class="md:col-span-2 border-gray-200 rounded-lg bg-white p-5 border hover:border-leaf">
                <p class="font-bold">History</p>
                <ol class="relative border-l border-gray-200 mt-2">                  
                    <li class="mb-10 ml-4">
                        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">04 September 2023 13:56:10</time>
                        <h3 class="text-sm font-semibold text-gray-900 dark:text-white">Manager Rin1412</h3>
                        <p class="mb-4 text-sm font-normal text-gray-500 dark:text-gray-400">Accept Request #75863</p>
                    </li>
                    <li class="mb-10 ml-4">
                        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">28 July 2023 13:56:10</time>
                        <h3 class="text-sm font-semibold text-gray-900 dark:text-white">Admin Rin1412</h3>
                        <p class="mb-4 text-sm font-normal text-gray-500 dark:text-gray-400">Decline Request #65748</p>
                    </li>
                    <li class="mb-10 ml-4">
                        <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700"></div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">06 June 2023 13:56:10</time>
                        <h3 class="text-sm font-semibold text-gray-900 dark:text-white">Manager Rin1412</h3>
                        <p class="mb-4 text-sm font-normal text-gray-500 dark:text-gray-400">Accept Request #92826</p>
                    </li>
                </ol>
            </div>
        </div>

</div>
@endsection