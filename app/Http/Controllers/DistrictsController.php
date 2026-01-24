<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Pastikan nama model sesuai dengan file yang Anda buat (districts dengan 'd' kecil)
use App\Models\districts; 

class DistrictsController extends Controller
{
    public function kecamatan()
    {
        /** * Menggunakan with('regency') untuk memuat data kabupaten (Eager Loading).
         * Ini mencegah error saat view memanggil nama kabupaten.
         */
        $districts = districts::with('regency')->get();

        // Pastikan path view sesuai dengan lokasi file Blade Anda
        return view('kecamatan.bali', compact('districts'));
    }
}