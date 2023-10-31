<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi data siswa</title>
    @vite('resources/css/app.css')
</head>
<body class="font-Montserrat">
    <div class=" w-screen h-screen border-2 flex flex-col gap-2">
        <table class="table-auto ">
            <tr class="">
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
                        <tr class="text-center text-xs p-10 hover:bg-lime-200 hover:duration-700">
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
                                <button type="submit" class="bg-red-200 p-1 rounded hover:bg-red-400 hover:duration-700"><img src="/assets/svg/trash-2.svg" alt="delete" class="w-4"></button>
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
</body>
</html>