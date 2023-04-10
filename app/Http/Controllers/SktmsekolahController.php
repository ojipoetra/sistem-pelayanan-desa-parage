<?php

namespace App\Http\Controllers;

use App\Models\Sktmsekolah;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;

class SktmsekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sktmsekolah = Sktmsekolah::all();
        return view('dashboard.listsktmsekolah', compact('sktmsekolah'), ["title" => "SKTM Sekolah"]);
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
            'nama_siswa' => 'required|regex:/^[a-zA-Z\s]/',
            'tempatlahir_siswa' => 'required|regex:/^[a-zA-Z\s]/',
            'tanggallahir_siswa' => 'required',
            'jenis_kelamin_siswa' => 'required',
            'agama' => 'required|regex:/^[a-zA-Z\s]/',
            'kewarganegaraan_siswa' => 'required|regex:/^[a-zA-Z\s]/',
            'pekerjaan_siswa' => 'required|regex:/^[a-zA-Z\s]/',
            'alamat_siswa' => 'required|regex:/^[a-zA-Z\s]/',
            // data orang tua -> ayah
            'nama_ayah' => 'required|regex:/^[a-zA-Z\s]/',
            'tempatlahir_ayah' => 'required|regex:/^[a-zA-Z\s]/',
            'tanggallahir_ayah' => 'required',
            'agama_ayah' => 'required|regex:/^[a-zA-Z\s]/',
            'pekerjaan_ayah' => 'required|regex:/^[a-zA-Z\s]/',
            'alamat_ayah' => 'required|regex:/^[a-zA-Z\s]/',
            // data orang tua -> ibu
            'nama_ibu' => 'required|regex:/^[a-zA-Z\s]/',
            'tempatlahir_ibu' => 'required|regex:/^[a-zA-Z\s]/',
            'tanggallahir_ibu' => 'required',
            'agama_ibu' => 'required|regex:/^[a-zA-Z\s]/',
            'pekerjaan_ibu' => 'required|regex:/^[a-zA-Z\s]/',
            'alamat_ibu' => 'required|regex:/^[a-zA-Z\s]/',
        ]);

        Sktmsekolah::create($validasi);

        return redirect('/list-surat')->with('success', 'data berhasil di input');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sktmsekolah  $sktmsekolah
     * @return \Illuminate\Http\Response
     */
    public function show(Sktmsekolah $sktmsekolah)
    {
        $pdf = app(PDF::class);
        $setPaper = array(0, 0, 595, 935); //array(margin kiri, margin kanan, lebar halaman, tinggi halaman)
        // variable setpaper gunanya untuk mengatur ukuran kertas sedangkan 
        // array(0 -> margin kiri, 0 -> margin kanan, 595 -> lebar halaman, 935 -> tinggi halaman)
        $pdf = $pdf->loadview('kopsurat.sktmsekolah', compact('sktmsekolah',), ["title" => "SURAT KETERANGAN TIDAK MAMPU"])->setPaper($setPaper, 'portrait');
        set_time_limit(300);

        return $pdf->stream('sktmsekolah.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sktmsekolah  $sktmsekolah
     * @return \Illuminate\Http\Response
     */
    public function edit(Sktmsekolah $sktmsekolah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sktmsekolah  $sktmsekolah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sktmsekolah $sktmsekolah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sktmsekolah  $sktmsekolah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sktmsekolah $sktmsekolah)
    {
        //
    }
}
