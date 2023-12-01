<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;
// use PDF

class MateriController extends Controller
{
    public function showForm()
    {
        return view('pages.materi');
    }

    public function generatePdf(Request $request)
    {
        $data = $request->all();
        $pdf = PDF::loadView('pdf.form', compact('data'));
    }

    public function cetakmateri()
    {
        $materi = Materi::all();

        $pdf = app('dompdf.wrapper')->loadView('tambahmateri.form', compact('materi'));
        // $pdf = PDF::loadView('cetakmateri', ['materi' => $materi]);
        return $pdf->download('Materi.pdf');
    }
}
