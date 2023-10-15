<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>NIS</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>No. Tlp</th>
        </tr>
    </thead>
    <tbody>
    @if ($siswa !== null)
    @foreach ($siswa as $data)
    <tr>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->nis }}</td>
            <td>{{ $data->jenis_kelamin }}</td>
            <td>{{ $data->tempat_lahir }}</td>
            <td>{{ $data->tanggal_lahir }}</td>
            <td>{{ $data->alamat }}</td>
            <td>{{ $data->no_tlp }}</td>
        </tr>
    @endforeach
@endif
    </tbody>
</table>

</body>
</html>