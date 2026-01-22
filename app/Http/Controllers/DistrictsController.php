<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Districts;

class DistrictsController extends Controller
{
    public function kecamatan()
    {
        $districts = Districts::all();
        return view('kecamatan.bali', compact('districts'));
    }
}
