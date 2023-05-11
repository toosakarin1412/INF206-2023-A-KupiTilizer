@extends('layouts.app')

@section('content')
    <div class="m-10 md:mx-20 py-5">
        <div class="flex justify-end mb-5">
            <div>
                <a href="/keranjang" class="flex p-3 border border-gray-200 rounded-xl shadow-lg hover:bg-gray-100">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-7 h-7">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>
                    <p class="ml-2 text-xl">Keranjang</p>
                </a>
            </div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        @foreach($product as $item)
                <div
                    class="relative shadow-md sm:rounded-lg p-4 text-gray-700 border border-gray-200 bg-gray-50">
                    <img class="h-auto max-w-6/12 justify-item-center rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="productimg">
                    <h1 class="text-center font-bold md:text-xl my-2">{{ $item->nama_product }}</h1>
                    <p class="font-semibold md:text-xl text-right my-6 mt-7">Rp.{{ $item->harga }}</p>
                    <p class="font-semibold text-left my-6">Deskripsi</p>
                    <p class="text-left h-28 overflow-x-auto">
                        {{ $item->deskripsi }}
                    </p>
                </div>
        @endforeach
        </div>
    </div>
@endsection
