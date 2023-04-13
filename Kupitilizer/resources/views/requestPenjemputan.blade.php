@extends('layouts.app')

@section('content')


<div class="flex justify-center pt-12">
    <div class="flex bg-white justify-center rounded">
      <h1 class="text-center">Form Permintaan Penjemputan</h1>
  </div>
</div>
  <div class="flex justify-center">
  <div class="p-5 w-2/5">
<div>
            <label for="nama" class="pt-8 block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
            <input type="text" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Andi" required>
        </div>
<div>
            <label for="alamat" class="pt-8 block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
            <input type="text" id="alamat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Jalan Manggis no.2" required>
        </div>
<div>
            <label for="nohp" class=" pt-8 block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor HP</label>
            <input type="text" id="nohp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="+62*********" required>
        </div>

  </div>
  <div class="p-5 w-2/5">
    <div>
      <label for="jenis-sampah" class=" pt-8 block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Sampah</label>
  <select id="jenis-sampah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
          <option>Kopi</option>
        </select>

  </div>
  
  <label for="jumlah-sampah" class="pt-8 block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Sampah</label>
<div class="flex">
  
  <input type="text" id="jumlah-sampah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-l-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="1" required">
  <span class="inline-flex flex-end items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-r-lg dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
    kg
  </span>
</div>

<div>
<label for="tanggal" class=" pt-8 block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>

<div class="relative">
  <input type="date" id="date" name="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Andi" required></div>
</div>


<div>
<label for="Waktu" class=" pt-8 block mb-2 text-sm font-medium text-gray-900 dark:text-white">Waktu</label>

</div>
<input type="time" id="time" name="time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Andi" required></div>

</div>
<div class="flex justify-center pt-12 ">
<button type="submit" class="flex justify-center text-white bg-leaf hover:bg-leaf-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-16 py-2.5 text-center dark:bg-leaf-600 dark:hover:bg-leaf-700 dark:focus:ring-blue-800">Submit</button>
</div>

@endsection
