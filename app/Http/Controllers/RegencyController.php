<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Regency;

class RegencyController extends Controller
{
    public function luas()
    {
        $regencies = Regency::all();
        return view('petatematik.luas', compact('regencies'));
    }

    public function populasi()
    {
        $regencies = Regency::all();
        return view('petatematik.populasi', compact('regencies'));
    }

    public function kepadatan()
    {
        $regencies = Regency::all();
        return view('petatematik.kepadatan', compact('regencies'));
    }

    public function ipm()
    {
        $regencies = Regency::all();
        return view('petatematik.ipm', compact('regencies'));
    }

    public function pariwisata()
    {
        $regencies = Regency::all();
        return view('petatematik.pariwisata', compact('regencies'));
    }

    public function pdrb()
    {
        $regencies = Regency::all();
        return view('petatematik.pdrb', compact('regencies'));
    }

    public function pengangguran()
    {
        $regencies = Regency::all();
        return view('petatematik.pengangguran', compact('regencies'));
    }

    public function kemiskinan()
    {
        $regencies = Regency::all();
        return view('petatematik.kemiskinan', compact('regencies'));
    }

    public function kabkota()
    {
        $regencies = Regency::all();
        return view('kabkota.bali', compact('regencies'));
    }

    // public function home()
    // {
    //     $regencies = Regency::all();
    //     return view('welcome', compact('regencies'));
    // }
}
