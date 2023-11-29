<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    @vite('resources/css/app.css')
</head>

<body>
    <form method="POST" action="{{ route('siswa.update',$siswa->id) }}">
        @csrf
        @method('PUT')
        <div class="w-full h-screen flex justify-center items-center flex-col">
            <div class="flex flex-col w-[640px]  h-[500px] justify-center  bg-white shadow-2xl p-5 gap-2">
                <p class="font-semibold text-3xl">Edit data</p>
                <div class=" flex flex-col gap-2">
                    <label for="nama" class="font-semibold text-lg">Nama:</label>
                    <input type="text" name="nama" id="nama" value="{{ $siswa->nama }}"
                        class="rounded-lg w-full h-8 block p-3 bg-gray-200 ">
                        
                </div>
                <div class=" flex flex-col gap-1">
                    <label for="NIS" class="font-semibold text-lg">NIS:</label>
                    <input type="number" name="NIS" id="NIS" value="{{ $siswa->NIS }}"
                        class=" rounded-lg w-full h-8 block p-3 bg-gray-200">
                        @if ($errors -> has('NIS'))
                            <p class=" text-red-600">{{ ($errors -> first('NIS')) }}</p>
                        @endif
                </div>
                <div class=" flex flex-col gap-1">
                    <label for="tempat_lahir" class="font-semibold text-lg">tempat lahir:</label>
                    <input type="text" name="tempat_lahir" id="tempat_lahir" value="{{ $siswa->tempat_lahir }}"
                        class=" rounded-lg w-full h-8 block p-3 bg-gray-200">
                </div>
                <div class=" flex flex-col gap-1">
                    <label for="alamat" class="font-semibold text-lg">alamat:</label>
                    <input type="text" name="alamat" id="alamat" value="{{ $siswa->alamat }}"
                        class=" rounded-lg w-full h-8 block p-3 bg-gray-200">
                </div>
                <div class=" flex flex-col gap-1">
                    <label for="no_telp" class="font-semibold text-lg">No Telp:</label>
                    <input type="number" name="no_telp" id="no_telp" value="{{ $siswa->no_telp }}"
                        class=" rounded-lg w-full h-8 block p-3 bg-gray-200">
                </div>
                <div class=" flex flex-col gap-1">
                    <label for="tanggal_lahir" class="font-semibold text-lg">Tanggal lahir:</label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}"
                        class=" rounded-lg w-full h-8 block p-3 bg-gray-200">
                </div>
                <div class="flex flex-col gap-1">
                    <p class="font-semibold text-lg">Jenis kelamin :</p>
                    <div class=" flex gap-3  items-center">
                        <select name="jenis_kelamin" class="rounded-lg w-full h-8 block bg-gray-200">
                            <option value="L" {{ $siswa->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki
                            </option>
                            <option value="P" {{ $siswa->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan
                            </option>
                        </select>
                    </div>
                    <div class="flex justify-between mt-3">
                        <button type="submit"
                            class="px-10 py-2 rounded-xl bg-green-700 flex text-xl font-semibold text-white">Masukan</button>
                        <div class="flex items-center gap-2">
                            <a href="{{ route('siswa.index') }}" class="text-green-700 text-xl font-normal">Lihat Data
                                siswa</a>
                            <img src="/assets/svg/eye.svg" alt="" class="">
                        </div>
                    </div>
                </div>
        </div>        
    </form>
        
</body>

</html>