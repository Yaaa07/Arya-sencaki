<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Http\Request;

class testkoneksiController extends Controller
{
    public function testConnection()
        {
            try {
                DB::connection()->getPdo();
                // return "Connected successfully to the database!";
                $resulta = "Connected successfully to the database!";
            } catch (\Exception $e) {
                // return "Could not connect to the database. Error: " . $e->getMessage();
                $resulta = "Could not connect to the database. Error: " . $e->getMessage();
            }
            return view('koneksi', ['resultb' => $resulta]);
        } 
        
}
