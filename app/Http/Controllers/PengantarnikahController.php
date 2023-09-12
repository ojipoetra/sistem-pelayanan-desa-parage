<?php

namespace App\Http\Controllers;

use App\Models\Pengantarnikah;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;
// use Illuminate\Support\Carbon;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
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
        if (Auth::user()->is_admin) {
            $pengantarnikah = Pengantarnikah::all();
        } else {
            $pengantarnikah = Pengantarnikah::where('user_id', auth()->user()->id)->get();
        }
        return view('dashboard.listsuratnikah', compact('pengantarnikah'), ["title" => "Surat Pengantar KUA"]);
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
        $request->validate([
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
            // 'nama_ayah' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            // 'bin' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            // 'nik_ayah' => 'required',
            // 'tempatlahir_ayah' => 'required',
            // 'tanggallahir_ayah' => 'required',
            // 'kewarganegaraan_ayah' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            // 'agama_ayah' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            // 'pekerjaan_ayah' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            // 'alamat_ayah' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',

            // data dari orang tua ibu pemohon
            // 'nama_ibu' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            // 'binti' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            // 'nik_ibu' => 'required',
            // 'tempatlahir_ibu' => 'required',
            // 'tanggallahir_ibu' => 'required',
            // 'kewarganegaraan_ibu' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            // 'agama_ibu' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            // 'pekerjaan_ibu' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            // 'alamat_ibu' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/'
        ]);

        $request["nama_pemohon"] = Str::title($request->nama_pemohon);
        $request["tempatlahir_pemohon"] = Str::title($request->tempatlahir_pemohon);
        $request["kewarganegaraan_pemohon"] = Str::title($request->kewarganegaraan_pemohon);
        $request["agama_pemohon"] = Str::title($request->agama_pemohon);
        $request["pekerjaan_pemohon"] = Str::title($request->pekerjaan_pemohon);
        $request["statuspernikahan_pemohon"] = Str::title($request->statuspernikahan_pemohon);
        $request["alamat_pemohon"] = Str::title($request->alamat_pemohon);
        $request["alamat_pemohon"] = Str::title($request->alamat_pemohon);

        $request["nama_calon"] = Str::title($request->nama_calon);
        $request["bintun"] = Str::title($request->bintun);
        $request["tempatlahir_calon"] = Str::title($request->tempatlahir_calon);
        $request["kewarganegaraan_calon"] = Str::title($request->kewarganegaraan_calon);
        $request["agama_calon"] = Str::title($request->agama_calon);
        $request["pekerjaan_calon"] = Str::title($request->pekerjaan_calon);
        $request["alamat_calon"] = Str::title($request->alamat_calon);
        $request["tempat_akad"] = Str::title($request->tempat_akad);

        $request["nama_ayah"] = Str::title($request->nama_ayah);
        $request["bin"] = Str::title($request->bin);
        $request["tempatlahir_ayah"] = Str::title($request->tempatlahir_ayah);
        $request["kewarganegaraan_ayah"] = Str::title($request->kewarganegaraan_ayah);
        $request["agama_ayah"] = Str::title($request->agama_ayah);
        $request["pekerjaan_ayah"] = Str::title($request->pekerjaan_ayah);
        $request["alamat_ayah"] = Str::title($request->alamat_ayah);

        $request["nama_ibu"] = Str::title($request->nama_ibu);
        $request["binti"] = Str::title($request->binti);
        $request["tempatlahir_ibu"] = Str::title($request->tempatlahir_ibu);
        $request["kewarganegaraan_ibu"] = Str::title($request->kewarganegaraan_ibu);
        $request["agama_ibu"] = Str::title($request->agama_ibu);
        $request["pekerjaan_ibu"] = Str::title($request->pekerjaan_ibu);
        $request["alamat_ibu"] = Str::title($request->alamat_ibu);



        $pengantarnikah = new Pengantarnikah;
        $pengantarnikah->user_id = $request->user()->id; // Mengisi nilai user_id dengan id user yang sedang aktif
        $pengantarnikah->fill($request->all());
        $pengantarnikah->save();
        // Pengantarnikah::create($validasi);

        return redirect('/list-pengantar-nikah')->with('success', 'Data berhasil di tambah!');
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
        $validasi = [
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
            // 'nama_ayah' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            // 'bin' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            // 'nik_ayah' => 'required',
            // 'tempatlahir_ayah' => 'required',
            // 'tanggallahir_ayah' => 'required',
            // 'kewarganegaraan_ayah' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            // 'agama_ayah' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            // 'pekerjaan_ayah' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            // 'alamat_ayah' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',

            // data dari orang tua ibu pemohon
            // 'nama_ibu' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            // 'binti' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            // 'nik_ibu' => 'required',
            // 'tempatlahir_ibu' => 'required',
            // 'tanggallahir_ibu' => 'required',
            // 'kewarganegaraan_ibu' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            // 'agama_ibu' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            // 'pekerjaan_ibu' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/',
            // 'alamat_ibu' => 'required|regex:/^[a-zA-Z0-9\s.\-\/]+$/'
        ];

        $validasiData = $request->validate($validasi);
        $validasiData['user_id'] = auth()->user()->id;
        $validasiData["nama_pemohon"] = Str::title($request->nama_pemohon);
        $validasiData["tempatlahir_pemohon"] = Str::title($request->tempatlahir_pemohon);
        $validasiData["kewarganegaraan_pemohon"] = Str::title($request->kewarganegaraan_pemohon);
        $validasiData["agama_pemohon"] = Str::title($request->agama_pemohon);
        $validasiData["pekerjaan_pemohon"] = Str::title($request->pekerjaan_pemohon);
        $validasiData["statuspernikahan_pemohon"] = Str::title($request->statuspernikahan_pemohon);
        $validasiData["alamat_pemohon"] = Str::title($request->alamat_pemohon);
        $validasiData["alamat_pemohon"] = Str::title($request->alamat_pemohon);

        $validasiData["nama_calon"] = Str::title($request->nama_calon);
        $validasiData["bintun"] = Str::title($request->bintun);
        $validasiData["tempatlahir_calon"] = Str::title($request->tempatlahir_calon);
        $validasiData["kewarganegaraan_calon"] = Str::title($request->kewarganegaraan_calon);
        $validasiData["agama_calon"] = Str::title($request->agama_calon);
        $validasiData["pekerjaan_calon"] = Str::title($request->pekerjaan_calon);
        $validasiData["alamat_calon"] = Str::title($request->alamat_calon);
        $validasiData["tempat_akad"] = Str::title($request->tempat_akad);

        $validasiData["nama_ayah"] = Str::title($request->nama_ayah);
        $validasiData["bin"] = Str::title($request->bin);
        $validasiData["tempatlahir_ayah"] = Str::title($request->tempatlahir_ayah);
        $validasiData["kewarganegaraan_ayah"] = Str::title($request->kewarganegaraan_ayah);
        $validasiData["agama_ayah"] = Str::title($request->agama_ayah);
        $validasiData["pekerjaan_ayah"] = Str::title($request->pekerjaan_ayah);
        $validasiData["alamat_ayah"] = Str::title($request->alamat_ayah);

        $validasiData["nama_ibu"] = Str::title($request->nama_ibu);
        $validasiData["binti"] = Str::title($request->binti);
        $validasiData["tempatlahir_ibu"] = Str::title($request->tempatlahir_ibu);
        $validasiData["kewarganegaraan_ibu"] = Str::title($request->kewarganegaraan_ibu);
        $validasiData["agama_ibu"] = Str::title($request->agama_ibu);
        $validasiData["pekerjaan_ibu"] = Str::title($request->pekerjaan_ibu);
        $validasiData["alamat_ibu"] = Str::title($request->alamat_ibu);

        Pengantarnikah::where('id', $pengantarnikah->id)->update($validasiData);

        return redirect('/list-pengantar-nikah')->with('success', 'Data berhasil di ubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengantarnikah  $pengantarnikah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengantarnikah $pengantarnikah)
    {
        Pengantarnikah::destroy($pengantarnikah->id);
        return redirect('/list-pengantar-nikah')->with('success', 'Berhasil di hapus');
    }
}
