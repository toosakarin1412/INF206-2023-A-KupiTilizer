@extends('layouts.dashboardLayout')

@section('breadcrumb')
<li>
    <div class="flex items-center">
        <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        <a href="/<?php echo Auth::user()->role?>" class="ml-1 text-sm font-medium text-gray-700 hover:text-leaf md:ml-2 dark:text-gray-400 dark:hover:text-white">Dashboard</a>
    </div>
</li>
<li>
    <div class="flex items-center">
        <svg aria-hidden="true" class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
        <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-leaf md:ml-2 dark:text-gray-400 dark:hover:text-white">Manage Product</a>
    </div>
</li>
@endsection

@section('content')
    <!-- 
    <p class="text-center text-3xl font-bold m-10">To Be Added Soon</p>
    <img src="{{asset('images/mt.jpeg')}}" class="w-full p-32 pt-0"></img>
    -->
<div class="relative overflow-x-auto shadow-md sm:rounded-lg sm:p-4 text-gray-700 border border-gray-200 bg-gray-50">
    <div class="grid grid-cols-2">
            <!-- find Product -->
            <div class="flex items-center justify-between py-4 px-4 sm:px-auto">
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input type="text" id="table-search-users" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari Product">
                </div>
            </div>

            <!-- button to add product -->
            <div class="py-4 px-4 justify-self-end">
                <button type="button" data-modal-target="tambah-modal" data-modal-toggle="tambah-modal" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-leaf focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-leaf-700">Tambah Product</button>
            </div>
    </div>

<div class="grid grid-cols-2 md:grid-cols-4 gap-4">
    <div class = "relative overflow-x-auto shadow-md sm:rounded-lg sm:p-4 text-gray-700 border border-gray-200 bg-gray-50">
        <img class="scale-75 h-auto max-w-6/12 justify-item-center rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="productimg">
        <h1 class = "text-center font-bold text-3xl">Judul Product</h1>
        <p class = "font-semibold text-xl text-right my-6 mt-7">Rp.30.000,00</p>       
        <p class = "font-semibold text-left my-6">Deskripsi</p> 
        <p class = "text-left">
            Etiam consequat sem ullamcorper,
            euismod metus sit amet, tristique justo.
            Vestibulum mattis, nisi ut.
        </p>
        <div class="flex items-end justify-end space-x-2  ">
            <a href="" target="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="mt-2 ml-auto h-8 w-8" id="pencil">
                    <path stroke-linecap="round" stroke-linejoin="round" 
                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10">
                    </path>
                </svg>
        </a>
            <a href="" target="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="mt-2 mr-1 h-8 w-8" id="trash">
                    <path stroke-linecap="round" stroke-linejoin="round"
                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" >
                    </path>
                </svg>
            </a>
        </div>
    </div>
    <div class = "relative overflow-x-auto shadow-md sm:rounded-lg sm:p-4 text-gray-700 border border-gray-200 bg-gray-50">
        <img class="scale-75 h-auto max-w-6/12 justify-item-center rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="productimg">
        <h1 class = "text-center font-bold text-3xl">Judul Product</h1>
        <p class = "font-semibold text-xl text-right my-6 mt-7">Rp.30.000,00</p>       
        <p class = "font-semibold text-left my-6">Deskripsi</p> 
        <p class = "text-left">
            Etiam consequat sem ullamcorper,
            euismod metus sit amet, tristique justo.
            Vestibulum mattis, nisi ut.
        </p>
        <div class="flex items-end justify-end space-x-2  ">
            <a href="" target="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="mt-2 ml-auto h-8 w-8" id="pencil">
                    <path stroke-linecap="round" stroke-linejoin="round" 
                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10">
                    </path>
                </svg>
        </a>
            <a href="" target="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="mt-2 mr-1 h-8 w-8" id="trash">
                    <path stroke-linecap="round" stroke-linejoin="round"
                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" >
                    </path>
                </svg>
            </a>
        </div>
    </div>
    <div class = "relative overflow-x-auto shadow-md sm:rounded-lg sm:p-4 text-gray-700 border border-gray-200 bg-gray-50">
        <img class="scale-75 h-auto max-w-6/12 justify-item-center rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="productimg">
        <h1 class = "text-center font-bold text-3xl">Judul Product</h1>
        <p class = "font-semibold text-xl text-right my-6 mt-7">Rp.30.000,00</p>       
        <p class = "font-semibold text-left my-6">Deskripsi</p> 
        <p class = "text-left">
            Etiam consequat sem ullamcorper,
            euismod metus sit amet, tristique justo.
            Vestibulum mattis, nisi ut.
        </p>
        <div class="flex items-end justify-end space-x-2  ">
            <a href="" target="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="mt-2 ml-auto h-8 w-8" id="pencil">
                    <path stroke-linecap="round" stroke-linejoin="round" 
                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10">
                    </path>
                </svg>
        </a>
            <a href="" target="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="mt-2 mr-1 h-8 w-8" id="trash">
                    <path stroke-linecap="round" stroke-linejoin="round"
                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" >
                    </path>
                </svg>
            </a>
        </div>
    </div>
    <div class = "relative overflow-x-auto shadow-md sm:rounded-lg sm:p-4 text-gray-700 border border-gray-200 bg-gray-50">
        <img class="scale-75 h-auto max-w-6/12 justify-item-center rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="productimg">
        <h1 class = "text-center font-bold text-3xl">Judul Product</h1>
        <p class = "font-semibold text-xl text-right my-6 mt-7">Rp.30.000,00</p>       
        <p class = "font-semibold text-left my-6">Deskripsi</p> 
        <p class = "text-left">
            Etiam consequat sem ullamcorper,
            euismod metus sit amet, tristique justo.
            Vestibulum mattis, nisi ut.
        </p>
        <div class="flex items-end justify-end space-x-2  ">
            <a href="" target="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="mt-2 ml-auto h-8 w-8" id="pencil">
                    <path stroke-linecap="round" stroke-linejoin="round" 
                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10">
                    </path>
                </svg>
        </a>
            <a href="" target="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="mt-2 mr-1 h-8 w-8" id="trash">
                    <path stroke-linecap="round" stroke-linejoin="round"
                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" >
                    </path>
                </svg>
            </a>
        </div>
    </div>
    <div class = "relative overflow-x-auto shadow-md sm:rounded-lg sm:p-4 text-gray-700 border border-gray-200 bg-gray-50">
        <img class="scale-75 h-auto max-w-6/12 justify-item-center rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="productimg">
        <h1 class = "text-center font-bold text-3xl">Judul Product</h1>
        <p class = "font-semibold text-xl text-right my-6 mt-7">Rp.30.000,00</p>       
        <p class = "font-semibold text-left my-6">Deskripsi</p> 
        <p class = "text-left">
            Etiam consequat sem ullamcorper,
            euismod metus sit amet, tristique justo.
            Vestibulum mattis, nisi ut.
        </p>
        <div class="flex items-end justify-end space-x-2  ">
            <a href="" target="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="mt-2 ml-auto h-8 w-8" id="pencil">
                    <path stroke-linecap="round" stroke-linejoin="round" 
                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10">
                    </path>
                </svg>
        </a>
            <a href="" target="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="mt-2 mr-1 h-8 w-8" id="trash">
                    <path stroke-linecap="round" stroke-linejoin="round"
                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" >
                    </path>
                </svg>
            </a>
        </div>
    </div>
    <div class = "relative overflow-x-auto shadow-md sm:rounded-lg sm:p-4 text-gray-700 border border-gray-200 bg-gray-50">
        <img class="scale-75 h-auto max-w-6/12 justify-item-center rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="productimg">
        <h1 class = "text-center font-bold text-3xl">Judul Product</h1>
        <p class = "font-semibold text-xl text-right my-6 mt-7">Rp.30.000,00</p>       
        <p class = "font-semibold text-left my-6">Deskripsi</p> 
        <p class = "text-left">
            Etiam consequat sem ullamcorper,
            euismod metus sit amet, tristique justo.
            Vestibulum mattis, nisi ut.
        </p>
        <div class="flex items-end justify-end space-x-2  ">
            <a href="" target="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="mt-2 ml-auto h-8 w-8" id="pencil">
                    <path stroke-linecap="round" stroke-linejoin="round" 
                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10">
                    </path>
                </svg>
        </a>
            <a href="" target="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="mt-2 mr-1 h-8 w-8" id="trash">
                    <path stroke-linecap="round" stroke-linejoin="round"
                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" >
                    </path>
                </svg>
            </a>
        </div>
    </div>
    <div class = "relative overflow-x-auto shadow-md sm:rounded-lg sm:p-4 text-gray-700 border border-gray-200 bg-gray-50">
        <img class="scale-75 h-auto max-w-6/12 justify-item-center rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="productimg">
        <h1 class = "text-center font-bold text-3xl">Judul Product</h1>
        <p class = "font-semibold text-xl text-right my-6 mt-7">Rp.30.000,00</p>       
        <p class = "font-semibold text-left my-6">Deskripsi</p> 
        <p class = "text-left">
            Etiam consequat sem ullamcorper,
            euismod metus sit amet, tristique justo.
            Vestibulum mattis, nisi ut.
        </p>
        <div class="flex items-end justify-end space-x-2  ">
            <a href="" target="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="mt-2 ml-auto h-8 w-8" id="pencil">
                    <path stroke-linecap="round" stroke-linejoin="round" 
                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10">
                    </path>
                </svg>
        </a>
            <a href="" target="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="mt-2 mr-1 h-8 w-8" id="trash">
                    <path stroke-linecap="round" stroke-linejoin="round"
                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" >
                    </path>
                </svg>
            </a>
        </div>
    </div>
    <div class = "relative overflow-x-auto shadow-md sm:rounded-lg sm:p-4 text-gray-700 border border-gray-200 bg-gray-50">
        <img class="scale-75 h-auto max-w-6/12 justify-item-center rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="productimg">
        <h1 class = "text-center font-bold text-3xl">Judul Product</h1>
        <p class = "font-semibold text-xl text-right my-6 mt-7">Rp.30.000,00</p>       
        <p class = "font-semibold text-left my-6">Deskripsi</p> 
        <p class = "text-left">
            Etiam consequat sem ullamcorper,
            euismod metus sit amet, tristique justo.
            Vestibulum mattis, nisi ut.
        </p>
        <div class="flex items-end justify-end space-x-2  ">
            <a href="" target="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="mt-2 ml-auto h-8 w-8" id="pencil">
                    <path stroke-linecap="round" stroke-linejoin="round" 
                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10">
                    </path>
                </svg>
        </a>
            <a href="" target="">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="mt-2 mr-1 h-8 w-8" id="trash">
                    <path stroke-linecap="round" stroke-linejoin="round"
                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" >
                    </path>
                </svg>
            </a>
        </div>
    </div>
</div>

</div>
@endsection