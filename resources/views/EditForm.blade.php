<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Barang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="m-5 border-solid border-2 border-black px-2 py-2 flex-row">
                    <form method="POST" action="{{ route('formulir.update') }}">
                        @csrf

                        <input type="hidden" name="id" value="{{ $request->id }}">
                        <label for="position">Jenis:</label>
                        <input type="text" name="jenis" value="{{ $request->jenis }}"> <br><br>

                        <label for="company">Kondisi:</label>
                        <input type="text" name="kondisi" value="{{ $request->kondisi }}"><br><br>

                        <label for="salary">Keterangan:</label>
                        <input type="text" name="keterangan" value="{{ $request->keterangan }}"><br><br>

                        <label for="salary">Kecacatan:</label>
                        <input type="text" name="kecacatan" value="{{ $request->kecacatan }}"><br><br>

                        <label for="salary">Jumlah:</label>
                        <input type="text" name="jumlah" value="{{ $request->jumlah }}"><br><br>

                        <label for="salary">Gambar:</label>
                        <input type="text" name="gambar" value="{{ $request->gambar }}"><br><br>

                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 mt-1" type="submit">Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
