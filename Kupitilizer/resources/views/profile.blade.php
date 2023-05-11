@extends('layouts.app')

@section('content')
    <div class="w-full text-center my-5 font-bold text-xl">
        <p>User Profile</p>
    </div>

    <div class="m-10 py-5 shadow-2xl border-2 border-gray rounded-xl p-5">
        <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
            <span clas="text-green-500">
                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
            </span>
            <span class="tracking-wide">About</span>
        </div>
        <div class="text-gray-700">
            <div class="grid md:grid-cols-2 text-sm">
                <div class="grid grid-cols-2">
                    <div class="px-4 py-2 font-semibold">Nama</div>
                    <div class="px-4 py-2">{{Auth::user()->name}}</div>
                </div>
                <div class="grid grid-cols-2">
                    <div class="px-4 py-2 font-semibold">Jenis Kelamin</div>
                    <div class="px-4 py-2">-</div>
                </div>
                <div class="grid grid-cols-2">
                    <div class="px-4 py-2 font-semibold">Nomor HP</div>
                    <div class="px-4 py-2">-</div>
                </div>
                <div class="grid grid-cols-2">
                    <div class="px-4 py-2 font-semibold">Alamat</div>
                    <div class="px-4 py-2">-</div>
                </div>
                <div class="grid grid-cols-2">
                    <div class="px-4 py-2 font-semibold">Email</div>
                    <div class="px-4 py-2">
                        <a class="text-blue-800" href="mailto:jane@example.com">{{Auth::user()->email}}</a>
                    </div>
                </div>
                <div class="grid grid-cols-2">
                    <div class="px-4 py-2 font-semibold">Birthday</div>
                    <div class="px-4 py-2">-</div>
                </div>
            </div>
        </div>
    </div>

    <div class="relative m-10 py-5 shadow-2xl border-2 border-gray rounded-xl p-5 overflow-x-auto ">
        <div>
            <p class="font-bold mb-5">History Request Penjemputan</p>
        </div>
        <table class="w-full text-sm text-left text-gray-500 ">
            <thead class="text-xs text-gray-700 bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        IDPenjemputan
                    </th>
                    <th scope="col" class="px-6 py-3 w-1/4">
                        Total Sampah
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Kurir
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataRequest as $item)
                    <tr class="bg-white hover:bg-gray-50 rounded-xl">
                        <td scope="row"
                            class="flex items-center px-6 py-4 text-gray-900 font-bold whitespace-nowrap dark:text-white">
                            {{ $item->id }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item->name }}
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center">
                                @if ($item->status == 'waiting' || $item->status == 'process')
                                    <div class="h-2.5 w-2.5 rounded-full bg-yellow-400 mr-2"></div>
                                @else
                                    <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div>
                                @endif
                                <span class="capitalize">{{ $item->status }}</span>
                            </div>
                        </td>
                        <td>{{$item->kurir_id}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="relative m-10 py-5 shadow-2xl border-2 border-gray rounded-xl p-5 overflow-x-auto">
        <div>
            <p class="font-bold mb-5">History Request Pembelian</p>
        </div>
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">IDPembelian</th>
                    <th scope="col" class="px-6 py-3">Status</th>
                    <th scope="col" class="px-6 py-3">Jumlah Total</th>
                    <th scope="col" class="px-6 py-3">Tanggal Permintaan</th>
                    <th scope="col" class="px-6 py-3">
                        Kurir
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($beli as $item)
                <tr class="bg-white hover:bg-gray-50 rounded-xl">
                    <td scope="row"
                        class="flex items-center px-6 py-4 text-gray-900 font-bold whitespace-nowrap dark:text-white">
                        {{ $item->id }}
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-center">
                            @if ($item->status == 'waiting')
                                <div class="h-2.5 w-2.5 rounded-full bg-yellow-400 mr-2"></div>
                            @elseif($item->status == 'accepted')
                                <div class="h-2.5 w-2.5 rounded-full bg-green-400 mr-2"></div>
                            @else
                                <div class="h-2.5 w-2.5 rounded-full bg-red-400 mr-2"></div>
                            @endif
                            <span class="capitalize">{{ $item->status }}</span>
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        Rp {{ $item->total_belanja }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $item->created_at }}
                    </td>
                    <td>{{$item->kurir_id}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    
@endsection
