<?php

namespace App\Http\Controllers;

use App\Models\Pengantarnikah;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;
// use Illuminate\Support\Carbon;
use Carbon\Carbon;
use Illuminate\Support\Str;

class PengantarnikahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengantarnikah = Pengantarnikah::all();
        return view('dashboard.listsuratnikah', compact('pengantarnikah'), ["title" => "Pengantar Surat Nikah"]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            // data pemohon yang akan mendaftar 
            'nama_pemohon' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            'nik_pemohon' => 'required',
            'kelamin_pemohon' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            'tempatlahir_pemohon' => 'required',
            'tanggallahir_pemohon' => 'required',
            'kewarganegaraan_pemohon' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            'agama_pemohon' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            'pekerjaan_pemohon' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            'statuspernikahan_pemohon' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            'hasil_status' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            'alamat_pemohon' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',

            // data calon pengantin
            'nama_calon' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            'bintun' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            'nik_calon' => 'required',
            'kelamin_calon' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            'tempatlahir_calon' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            'tanggallahir_calon' => 'required',
            'kewarganegaraan_calon' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            'agama_calon' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            'pekerjaan_calon' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            'alamat_calon' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            'tempat_akad' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',

            // data dari orang tua ayah pemohon
            'nama_ayah' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            'bin' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            'nik_ayah' => 'required',
            'tempatlahir_ayah' => 'required',
            'tanggallahir_ayah' => 'required',
            'kewarganegaraan_ayah' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            'agama_ayah' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            'pekerjaan_ayah' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            'alamat_ayah' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',

            // data dari orang tua ibu pemohon
            'nama_ibu' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            'binti' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            'nik_ibu' => 'required',
            'tempatlahir_ibu' => 'required',
            'tanggallahir_ibu' => 'required',
            'kewarganegaraan_ibu' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            'agama_ibu' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            'pekerjaan_ibu' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            'alamat_ibu' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/'
        ]);

        $validasi["nama_pemohon"] = Str::title($request->nama_pemohon);
        $validasi["tempatlahir_pemohon"] = Str::title($request->tempatlahir_pemohon);
        $validasi["kewarganegaraan_pemohon"] = Str::title($request->kewarganegaraan_pemohon);
        $validasi["agama_pemohon"] = Str::title($request->agama_pemohon);
        $validasi["pekerjaan_pemohon"] = Str::title($request->pekerjaan_pemohon);
        $validasi["statuspernikahan_pemohon"] = Str::title($request->statuspernikahan_pemohon);
        $validasi["alamat_pemohon"] = Str::title($request->alamat_pemohon);
        $validasi["alamat_pemohon"] = Str::title($request->alamat_pemohon);

        $validasi["nama_calon"] = Str::title($request->nama_calon);
        $validasi["bintun"] = Str::title($request->bintun);
        $validasi["tempatlahir_calon"] = Str::title($request->tempatlahir_calon);
        $validasi["kewarganegaraan_calon"] = Str::title($request->kewarganegaraan_calon);
        $validasi["agama_calon"] = Str::title($request->agama_calon);
        $validasi["pekerjaan_calon"] = Str::title($request->pekerjaan_calon);
        $validasi["alamat_calon"] = Str::title($request->alamat_calon);
        $validasi["tempat_akad"] = Str::title($request->tempat_akad);

        $validasi["nama_ayah"] = Str::title($request->nama_ayah);
        $validasi["bin"] = Str::title($request->bin);
        $validasi["tempatlahir_ayah"] = Str::title($request->tempatlahir_ayah);
        $validasi["kewarganegaraan_ayah"] = Str::title($request->kewarganegaraan_ayah);
        $validasi["agama_ayah"] = Str::title($request->agama_ayah);
        $validasi["pekerjaan_ayah"] = Str::title($request->pekerjaan_ayah);
        $validasi["alamat_ayah"] = Str::title($request->alamat_ayah);

        $validasi["nama_ibu"] = Str::title($request->nama_ibu);
        $validasi["binti"] = Str::title($request->binti);
        $validasi["tempatlahir_ibu"] = Str::title($request->tempatlahir_ibu);
        $validasi["kewarganegaraan_ibu"] = Str::title($request->kewarganegaraan_ibu);
        $validasi["agama_ibu"] = Str::title($request->agama_ibu);
        $validasi["pekerjaan_ibu"] = Str::title($request->pekerjaan_ibu);
        $validasi["alamat_ibu"] = Str::title($request->alamat_ibu);



        Pengantarnikah::create($validasi);

        return redirect('/list-surat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pengantarnikah  $pengantarnikah
     * @return \Illuminate\Http\Response
     */
    public function show(Pengantarnikah $pengantarnikah)
    {
        $pdf = app(PDF::class);
        $setPaper = array(0, 0, 210, 330); //array(margin kiri, margin kanan, lebar halaman, tinggi halaman)
        // variable setpaper gunanya untuk mengatur ukuran kertas sedangkan 
        // array(0 -> margin kiri, 0 -> margin kanan, 595 -> lebar halaman, 935 -> tinggi halaman)
        $pdf = $pdf->loadview('kopsurat.suratpengantarnikah', compact('pengantarnikah',), ["title" => "FORMULIR PENGANTAR NIKAH"])->setPaper($setPaper, 'portrait');
        set_time_limit(300);

        return $pdf->stream('surat-pengantar-nikah.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengantarnikah  $pengantarnikah
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengantarnikah $pengantarnikah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengantarnikah  $pengantarnikah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengantarnikah $pengantarnikah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengantarnikah  $pengantarnikah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengantarnikah $pengantarnikah)
    {
        //
    }
}
