<?php

namespace App\Http\Controllers;

use App\Models\Domisili;
use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Str;
// use PDF;
use Dompdf\Dompdf;
use Illuminate\Http\Request;

class DomisiliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $domisili = Domisili::all();
        return view('dashboard.detail', compact('domisili'), ["title" => "Detail"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('formulirSurat.formdomisili', ["title" => "Form Domisili"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'nama' => 'required|regex:/^[a-zA-Z\s]/',
            'nik' => 'required',
            'tempatlahir' => 'required|regex:/^[a-zA-Z\s]/',
            'tanggallahir' => 'required',
            'jnskelamin' => 'required',
            'kewarganegaraan' => 'required|regex:/^[a-zA-Z\s]/',
            'agama' => 'required|regex:/^[a-zA-Z\s]/',
            'status' => 'required',
            'pekerjaan' => 'required|regex:/^[a-zA-Z\s]/',
            'alamat' => 'required|regex:/^[a-zA-Z\s]/'
        ]);

        $validasi["nama"] = Str::title($request->nama);
        $validasi["tempatlahir"] = Str::title($request->tempatlahir);
        $validasi["kewarganegaraan"] = Str::title($request->kewarganegaraan);
        $validasi["agama"] = Str::title($request->agama);
        $validasi["pekerjaan"] = Str::title($request->pekerjaan);
        $validasi["alamat"] = Str::title($request->alamat);


        Domisili::create($validasi);

        return redirect('/list-surat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Domisili  $domisili
     * @return \Illuminate\Http\Response
     */
    public function show(Domisili $domisili)
    {
        return view('kopsurat.suratdomisili', compact('domisili'), ["title" => "Domisili"]);
    }

    public function cetak(Domisili $domisili)
    {
        $pdf = app(PDF::class);
        $pdf = $pdf->loadview('kopsurat.pdf', compact('domisili',), ["title" => "SURAT KETERANGAN DOMISILI"]);
        set_time_limit(300);

        return $pdf->stream('domisili.pdf');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Domisili  $domisili
     * @return \Illuminate\Http\Response
     */
    public function edit(Domisili $domisili)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Domisili  $domisili
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Domisili $domisili)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Domisili  $domisili
     * @return \Illuminate\Http\Response
     */
    public function destroy(Domisili $domisili)
    {
        //
    }
}
