<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Barang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            @foreach ($barang as $bar)
                <div class="m-5 border-solid border-2 border-black px-2 py-2">
                    <p>
                        ID : {{ $bar->id }} <br>
                        Jenis: {{ $bar->jenis }} <br>
                        Kondisi: {{ $bar->kondisi }} <br>
                        Keterangan: {{ $bar->keterangan }} <br>
                        Kecacatan: {{ $bar->kecacatan }} <br>
                        Jumlah: {{ $bar->jumlah }} <br>
                        Gambar: {{ $bar->gambar }} <br>
                    </p>
                    <div class="flex">
                        <form action="{{ route('formulir.edit') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $bar->id }}">
                            <input type="hidden" name="jenis" value="{{ $bar->jenis }}">
                            <input type="hidden" name="kondisi" value="{{ $bar->kondisi }}">
                            <input type="hidden" name="keterangan" value="{{ $bar->keterangan }}">
                            <input type="hidden" name="kecacatan" value="{{ $bar->kecacatan }}">
                            <input type="hidden" name="jumlah" value="{{ $bar->jumlah }}">
                            <input type="hidden" name="gambar" value="{{ $bar->gambar }}">

                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 mt-1">Edit</button>
                        </form>

                        <form action="{{ route('formulir.delete') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $bar->id }}">
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 mt-1 ml-2">Delete</button>
                        </form>

                    </div>
                    
                </div>
            @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
