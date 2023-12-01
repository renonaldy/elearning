<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelasx;
use App\Models\Kelasxi;
use App\Models\Kelasxii;
use App\Models\Tambahpelajaran;
use Laravel\Ui\Presets\React;
use Yajra\DataTables\Contracts\DataTable;
use Yajra\DataTables\DataTables;

class KelasxController extends Controller
{
    public function index (Request $request)
    {
        if($request->ajax())
        {
            $data = Kelasx::select('*');
            return DataTables::of($data)->addIndexColumn()->make(true);
        }
        return view('pages.matapelajaran');
    }

    public function matapelajaran ()
    {
        $matapelajaran = Kelasx::all();
        return view('pages.matapelajaran', compact('matapelajaran'));
    }

    public function kelasxii()
    {

        $kelasxii = Kelasxii::all();

        return view('pages.matapelajaran', compact('kelasxii'));
    }


    public function kelasxi (Request $request)
    {
        $kelasxi = Kelasxi::all();

        return view('pages.matapelajaran');
    }

    public function tambahpelajaran (Request $request)
    {
        $tambahpelajaran = Tambahpelajaran::create([
                'nama_pelajaran' => $request->nama_pelajaran,
                'nama_guru' => $request->nama_guru,
        ]);
        return redirect('pages.matapelajaran');
    }



    public function tambahkelasxii (Request $request)
    {
        $tambahkelasxii = Kelasxii::create([
            'nama_pelajaran' => $request->nama_pelajaran,
            'nama_guru' => $request->nama_guru,
        ]);
        return view('pages.matapelajaran');
    }
}
