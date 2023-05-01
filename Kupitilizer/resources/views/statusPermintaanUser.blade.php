@extends('layouts.app')

@section('content')
<div class="w-full text-center my-5 font-bold text-xl">
    <p>User Request</p>
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
                        User
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataRequest as $item)
                    <tr class="bg-white hover:bg-gray-50 rounded-xl">
                        <th scope="row"
                            class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $item->id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $item->name }}
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
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection