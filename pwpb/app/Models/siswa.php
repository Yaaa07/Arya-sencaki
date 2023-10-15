<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $filelabel = ['nama','jenis_kelamin','NIS','tempat_lahir','alamat','no_telp','tanggal-lahir'];
}
