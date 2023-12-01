<?php

namespace App\Http\Controllers;

use App\Models\Kelasxi;
use Illuminate\Http\Request;

class KelasxiController extends Controller
{

    // public function index (Request $request)
    // {
    //     $kelasxi = Kelasxi::all();
    // }

    public function tambahkelasxi (Request $request)
    {
        $tambahkelasxi = Kelasxi::create([
            'nama_pelajaran' => $request->nama_pelajaran,
            'nama_guru' => $request->nama_guru,
        ]);
        return view('pages.matapelajaran');
    }

}
