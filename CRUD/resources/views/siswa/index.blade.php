<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi data siswa</title>
    @vite('resources/css/app.css')
</head>
<body class="font-Montserrat">
    @include('sweetalert::alert')
    <div class=" w-screen h-screen border-2 flex flex-col gap-2">
        <table class="table-auto ">
            <tr class=" bg-lime-300">
                <th class="px-4 py-5">No</th>
                <th class="px-4">Nama</th>
                <th class="px-4">NIS</th>
                <th class="px-4">jenis kelamin</th>
                <th class="px-4">Tempat lahir</th>
                <th class="px-4">Tanggal lahir</th>
                <th class="px-4">Alamat</th>
                <th class="px-4">No Telpon</th>
                <th colspan="2" class="px-4">Action</th>
            </tr>

            @php
                        $i = 1;
                    @endphp
                        @foreach($siswa as $data)
                        <tr class="text-center text-sm cursor-pointer hover:bg-lime-200 hover:duration-500">
                            <td class="font-medium py-3">
                                {{ $i }}
                                @php
                                    $i++;
                                @endphp
                            </td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->NIS }}</td>
                            <td>{{ $data->jenis_kelamin }}</td>
                            <td>{{ $data->tempat_lahir }}</td>
                            <td>{{ $data->tanggal_lahir }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>{{ $data->no_telp }}</td>
                            <td>
                                <form method="POST" action="{{ route('siswa.destroy', $data->id) }}" id="myForm{{ $data->id }}">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="bg-red-200 p-1 rounded hover:bg-red-400 hover:duration-700" onclick="openConfirmationDelete({{ $data->id }}); return false;"><img src="/assets/svg/trash-2.svg" alt="delete" class="w-4"></button>
                            </form>
                        </td>
                            <td>
                                <a href="{{ route('siswa.edit', $data->id) }}">
                                    <button class="bg-blue-200 p-1 rounded hover:bg-blue-400 hover:duration-700">
                                        <img src="/assets/svg/edit-2.svg" alt="" class="w-4">
                                    </button>
                                </a>
                            </td>
                        </tr>
                        @endforeach
        </table>
        <div class="flex justify-center gap-3">
            <a href="{{route('siswa.create')}}" class="text-green-700 text-xl font-normal">Tambah data siswa</a>
            <img src="/assets/svg/plus.svg" alt="">
        </div>
    </div>

    <div id="confirmationDelete" class="hidden fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-50 flex items-center justify-center">
        <div class="bg-white p-9 rounded-md">
            <p class="text-xl font-medium mb-8">Apakah anda yakin ingin menghapus data tersebut?</p>
            <div class="mt-4 flex justify-end">
                <button onclick="submitForm()" class="bg-green-700 text-black hover:bg-green-950 hover:text-white font-semibold py-2 px-4 rounded-md mr-2 hover:duration-700 ">Hapus Data</button>
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
            document.getElementById(`myForm${id}`).submit();
            closeConfirmationModal();
        }
    </script>
</body>
</html>
