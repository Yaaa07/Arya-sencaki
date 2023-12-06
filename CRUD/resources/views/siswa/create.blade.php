<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memasukan data siswa</title>
    @vite('resources/css/app.css')
</head>
<body class="font-Montserrat">
@include('sweetalert::alert')

    <form method="POST" action="{{ route('siswa.store') }}" id="myForm">
    @csrf
        <div class="w-full h-screen flex justify-center items-center ">
                <div class="flex flex-col w-[640px]  h-[300px] justify-center p-5 gap-3">
                    <p class="font-semibold text-3xl">masukan data siswa</p>
                    <div class=" flex flex-col gap-2">
                        <label for="nama" class="font-semibold text-lg">Nama:</label>
                        <input type="text" placeholder="Masukan nama siswa" name="nama" id="nama" class=" rounded-lg w-full h-5 block p-3 bg-gray-200 ">
                    </div>
                    <div class=" flex flex-col gap-1">
                        <label for="NIS" class="font-semibold text-lg">NIS:</label>
                        <input type="number" placeholder="Masukan NIS siswa" name="NIS" id="NIS" class=" rounded-lg w-full h-5 block p-3 bg-gray-200">
                        @if ($errors -> has('NIS'))
                            <p class=" text-red-600">{{ ($errors -> first('NIS')) }}</p>
                        @endif
                    </div>
                    <div class=" flex flex-col gap-1">
                        <label for="tempat_lahir" class="font-semibold text-lg">tempat lahir:</label>
                        <input type="text" placeholder="Masukan tempat lahir siswa" name="tempat_lahir" id="tempat_lahir" class=" rounded-lg w-full h-5 block p-3 bg-gray-200">
                        @if ($errors -> has('NIS'))
                            <p class=" text-red-600">{{ ($errors -> first('tempat_lahir')) }}</p>
                        @endif
                    </div>
                    <div class=" flex flex-col gap-1">
                        <label for="alamat" class="font-semibold text-lg">alamat:</label>
                        <input type="text" placeholder="Masukan alamat siswa" name="alamat" id="alamat" class=" rounded-lg w-full h-5 block p-3 bg-gray-200">
                        @if ($errors -> has('NIS'))
                            <p class=" text-red-600">{{ ($errors -> first('alamat')) }}</p>
                        @endif
                    </div>
                    <div class=" flex flex-col gap-1">
                        <label for="no_telp" class="font-semibold text-lg">No Telp:</label>
                        <input type="number" placeholder="Masukan No telepon siswa" name="no_telp" id="no_telp" class=" rounded-lg w-full h-5 block p-3 bg-gray-200">
                        @if ($errors -> has('NIS'))
                            <p class=" text-red-600">{{ ($errors -> first('no_telp')) }}</p>
                        @endif
                    </div>
                    <div class=" flex flex-col gap-1">
                        <label for="tanggal_lahir" class="font-semibold text-lg">Tanggal lahir:</label>
                        <input type="date"  name="tanggal_lahir" id="tanggal_lahir" class=" rounded-lg w-full h-5 block p-3 bg-gray-200">
                        @if ($errors -> has('NIS'))
                            <p class=" text-red-600">{{ ($errors -> first('tanggal_lahir')) }}</p>
                        @endif
                    </div>
                    <div class="flex flex-col gap-1" >
                        <p class="font-semibold text-lg">Jenis kelamin :</p>
                        <div class=" flex gap-3  items-center">
                            <select name="jenis_kelamin" class="rounded-lg w-full h-5 block bg-gray-200">
                                <option value="Jenis Kelamin" class="hidden">Masukan jenis kelamin siswa</option>
                                <option value="L" @if(old('jenis_kelamin') == 'Laki-laki') selected @endif>Laki-laki</option>
                                <option value="P" @if(old('jenis_kelamin') == 'Perempuan') selected @endif>Perempuan</option>
                            </select>
                        </div>
                        @if ($errors -> has('NIS'))
                            <p class=" text-red-600">{{ ($errors -> first('jenis_kelamin')) }}</p>
                        @endif
                    </div>
                    <div class="  flex items-center justify-between w-full mt-3">
                    <button type="button" onclick="openConfirmationDelete(); return false;" class="px-10 py-2 rounded-xl bg-green-700 flex text-xl font-semibold text-white">Masukan</button>
                    <div class="flex items-center gap-2">
                        <a href="{{ route('siswa.index') }}" class="text-green-700 text-xl font-normal">Lihat Data siswa</a>
                        <img src="/assets/svg/eye.svg" alt="" class="">
                    </div>
                    </div>
                </div>
        </div>
    </form>
    <div id="confirmationDelete" class="hidden fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-50 flex items-center justify-center">
        <div class="bg-white p-9 rounded-md">
            <p class="text-xl font-medium mb-8">Apakah anda yakin ingin menambahkan data tersebut ?</p>
            <div class="mt-4 flex justify-end">
                <button onclick="submitForm()" class="bg-green-700 text-black hover:bg-green-950 hover:text-white font-semibold py-2 px-4 rounded-md mr-2 hover:duration-700 ">iyah</button>
                <button onclick="closeConfirmationDelete()" class="bg-white hover:bg-green-700 text-black font-semibold py-2 px-4 border-2 border-green-200 rounded-md hover:duration-700">Batal</button>
            </div>
        </div>
    </div>
    <script>
        let id = 0;

        function openConfirmationDelete(data) {
            id = data
        document.getElementById('confirmationDelete').classList.remove('hidden');
        }

        function closeConfirmationDelete() {
            document.getElementById('confirmationDelete').classList.add('hidden');
        }
        function submitForm() {
            document.getElementById('myForm').submit();
            closeConfirmationModal();
        }
    </script>
</body>
</html>