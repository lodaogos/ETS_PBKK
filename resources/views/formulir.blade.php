<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Formulir') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <form action="/formulir" method="POST" class="col-5 border p-4 mx-auto">
                @csrf
                <div class="font-semibold text-l text-gray-800 leading-tight">
                    <label for="name"><h4>Jenis:</h4></label>
                    <select class="form-control" name="jenis">
                    @foreach ($jenisBarang as $value)
                            <option value="{{ $value->jenis }}">
                                {{ $value->jenis }}
                            </option>
                    @endforeach
                    </select>
                </div>
                <div class="font-semibold text-l text-gray-800 leading-tight mt-5">
                    <label for="email"><h4>Kondisi:</h4></label>
                    <select class="form-control" name="kondisi">
                    @foreach ($kondisiBarang as $value)
                            <option value="{{ $value->kondisi }}">
                                {{ $value->kondisi }}
                            </option>
                    @endforeach
                    </select>
                </div>
                <div class="font-semibold text-l text-gray-800 leading-tight mt-5">
                    <label for="pass"><h4>Keterangan:</h4></label>
                    <input type="text" name="keterangan" class="form-control">
                </div>
                <div class="font-semibold text-l text-gray-800 leading-tight mt-5">
                    <label for="pass"><h4>Kecacatan:</h4></label>
                    <input type="text" name="kecacatan" class="form-control">
                </div>
                <div class="font-semibold text-l text-gray-800 leading-tight mt-5">
                    <label for="pass"><h4>Jumlah:</h4></label>
                    <input type="text" name="jumlah" class="form-control">
                </div>
                <div class="font-semibold text-l text-gray-800 leading-tight mt-5">
                    <label for="pass"><h4>Gambar:</h4></label>
                    <!-- <input type="text" name="gambar" class="form-control"> -->

                    <input type="file" class="form-control" name="gambar" required|max:2048|mimes:jpeg,png,jpg>
                </div>
                <input type="submit" class="btn bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 mt-2">              
            </form>
            </div>
        </div>
    </div>
</x-app-layout>
