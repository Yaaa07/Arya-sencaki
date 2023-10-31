<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\siswaController;

class siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';


    protected $fillable = ['nama','jenis_kelamin','NIS','tempat_lahir','alamat','no_telp','tanggal_lahir'];
}
