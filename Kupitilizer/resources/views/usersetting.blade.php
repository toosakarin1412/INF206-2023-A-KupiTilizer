@extends('layouts.app')

@section('content')
<div class="w-full text-center my-5 font-bold text-xl">
    <p>Setting</p>
</div>

<div class="m-10 py-5 shadow-2xl border-2 border-gray rounded-xl p-5">
    <form class='px-4' method="post" action="/setting/update">
        @csrf
        <div>
            <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-semibold">Nama</div>
                <div class="px-4 py-2">
                    <input name="name" type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md"
                        value="{{ Auth::user()->name }}">
                </div>
            </div>
            <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-semibold">Jenis Kelamin</div>
                <div class="px-4 py-2">
                    <input name="jeniskelamin" type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md"
                        value="{{ Auth::user()->jeniskelamin }}">
                </div>
            </div>
            <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-semibold">Nomor HP</div>
                <div class="px-4 py-2">
                    <input name="hp" type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md"
                        value="{{ Auth::user()->hp }}">
                </div>
            </div>
            <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-semibold">Alamat</div>
                <div class="px-4 py-2">
                    <input name="alamat" type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md"
                        value="{{ Auth::user()->alamat }}">
                </div>
            </div>
            <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-semibold">Email</div>
                <div class="px-4 py-2">
                    <input name="email" type="text" class="w-full px-4 py-2 border border-gray-300 rounded-md"
                        value="{{ Auth::user()->email }}">
                </div>
            </div>
            <div class="grid grid-cols-2">
                <div class="px-4 py-2 font-semibold">Birthday</div>
                <div class="px-4 py-2">
                    <input name="ulang_tahun" type="date" class="w-full px-4 py-2 border border-gray-300 rounded-md">
                </div>
            </div>
        </div>
        <div>
            <!-- Edit button -->
            <div class="flex justify-end">
                <button type="submit"
                    class="text-white bg-leaf font-medium rounded-lg text-sm px-5 py-2.5 mx-4 text-center">Edit</button>
            </div>
        </div>
    </form>
</div>
@endsection
