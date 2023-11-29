<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;
Use Alert;


class siswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = siswa::all();
        return view ('siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            "nama" => "required|min:4",
            "NIS" => "required|numeric|unique:siswa",
            "tempat_lahir" => "required",
            "alamat" => "required",
            "no_telp" => "required|numeric",
            "tanggal_lahir" => "required|date",
            "jenis_kelamin" => "required|in:P,L",
        ],[
            "nama.required" => "Silahkan isi dengan benar",
            "NIS.required" => "Silahkan isi nis dengan benar ",
            "NIS.unique" => "NIS sudah digunakan!",
            "tempat_lahir.required" => "Masukan tempat lahir anda",
            "alamat.required" => "Silahkan isi alamat anda",
            "no_telp.required" => "Tolong isi no telepon anda dengan benar",
            "tanggal_lahir.rerquired" => "Isi tanggal lahir anda dengan benar",
            "jenis_kelamin.required" => "Masukan jenis kelamin anda"
        ]);
        Siswa::create($request->all());
        Alert::success('Data berhasil di tambahkan', 'Success Message');
        // toast('data berhasil di tambahkan', 'succes')->position('top')->timerProgressBar();
        return redirect()->route('siswa.index');
        
        
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.edit',compact('siswa'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id){
        
        
        // $request->validate(Siswa::$rules);
        
        $valindasi = $request->validate([
            "nama" => "required",
            "NIS" => "required|unique:siswa,NIS,".$id,
            "jenis_kelamin" => "required|in:P,L",
            "tempat_lahir" => "required",
            "tanggal_lahir" => "required|date",
            "alamat" => "required",
            "no_telp" => "required|numeric",
        ],[
            "nama.required" => "Tolong isi nama anda",
            "NIS.required" => "Isi NIS anda dan usahakan jangan sama",
            "NIS.unique" => "Isi NIS anda dan usahakan jangan sama",
            "tempat_lahir.required" => "Tolong isi tempat lahir anda",
            "alamat.required" => "Alamat anda harus di isi dengan jelas",
            "no_telp.required" => "no hp anda harus di isi"
        ]);
        Siswa::find($id)->update($request->all());
        Alert::success('Data berhasil di edit', 'Success Message');
        return redirect()->route('siswa.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $siswa = Siswa::findOrFail($id);
        Alert::success('Data berhasil di hapus', 'Success Message');
        $siswa->delete();
        return redirect()->route('siswa.index');
    }
}
