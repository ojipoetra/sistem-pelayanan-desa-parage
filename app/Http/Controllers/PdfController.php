<?php

namespace App\Http\Controllers;

use App\Models\Domisili;
use Illuminate\Http\Request;
use Dompdf\Dompdf;

class PdfController extends Controller
{
    public function cetak($id)
    {
        // $data = Domisili::where('id', $id)->get();
        // $pdf = new Dompdf;
        // $pdf->loadHtml(view('kopsurat.suratdomisili', compact('data'))->render());
        // $pdf->render();
        // return $pdf->stream('domisili.pdf');
    }
}
