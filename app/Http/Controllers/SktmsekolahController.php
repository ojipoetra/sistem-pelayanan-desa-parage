<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Sktmsekolah;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SktmsekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->is_admin) {
            $sktmsekolah = Sktmsekolah::all();
        } else {
            $sktmsekolah = Sktmsekolah::where('user_id', auth()->user()->id)->get();
        }
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
        $request->validate([
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


        $request["nama_siswa"] = Str::title($request->nama_siswa);
        $request["tempatlahir_siswa"] = Str::title($request->tempatlahir_siswa);
        $request["tanggallahir_siswa"] = Str::title($request->tanggallahir_siswa);
        $request["jenis_kelamin_siswa"] = Str::title($request->jenis_kelamin_siswa);
        $request["agama"] = Str::title($request->agama);
        $request["kewarganegaraan_siswa"] = Str::title($request->kewarganegaraan_siswa);
        $request["pekerjaan_siswa"] = Str::title($request->pekerjaan_siswa);
        $request["alamat_siswa"] = Str::title($request->alamat_siswa);
        $request["nama_ayah"] = Str::title($request->nama_ayah);
        $request["tempatlahir_ayah"] = Str::title($request->tempatlahir_ayah);
        $request["tanggallahir_ayah"] = Str::title($request->tanggallahir_ayah);
        $request["agama_ayah"] = Str::title($request->agama_ayah);
        $request["pekerjaan_ayah"] = Str::title($request->pekerjaan_ayah);
        $request["alamat_ayah"] = Str::title($request->alamat_ayah);
        $request["nama_ibu"] = Str::title($request->nama_ibu);
        $request["tempatlahir_ibu"] = Str::title($request->tempatlahir_ibu);
        $request["tanggallahir_ibu"] = Str::title($request->tanggallahir_ibu);
        $request["agama_ibu"] = Str::title($request->agama_ibu);
        $request["pekerjaan_ibu"] = Str::title($request->pekerjaan_ibu);
        $request["alamat_ibu"] = Str::title($request->alamat_ibu);

        $sktmsekolah = new Sktmsekolah;
        $sktmsekolah->user_id = $request->user()->id; // Mengisi nilai user_id dengan id user yang sedang aktif
        $sktmsekolah->fill($request->all());

        $sktmsekolah->save();

        return redirect('/list-surat-sktm-sekolah')->with('success', 'data berhasil di input');
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
        $ruls =  [
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
        ];

        $validasiData = $request->validate($ruls);
        $validasiData['user_id'] = auth()->user()->id;
        $validasiData["nama_siswa"] = Str::title($request->nama_siswa);
        $validasiData["tempatlahir_siswa"] = Str::title($request->tempatlahir_siswa);
        $validasiData["tanggallahir_siswa"] = Str::title($request->tanggallahir_siswa);
        $validasiData["jenis_kelamin_siswa"] = Str::title($request->jenis_kelamin_siswa);
        $validasiData["agama"] = Str::title($request->agama);
        $validasiData["kewarganegaraan_siswa"] = Str::title($request->kewarganegaraan_siswa);
        $validasiData["pekerjaan_siswa"] = Str::title($request->pekerjaan_siswa);
        $validasiData["alamat_siswa"] = Str::title($request->alamat_siswa);
        $validasiData["nama_ayah"] = Str::title($request->nama_ayah);
        $validasiData["tempatlahir_ayah"] = Str::title($request->tempatlahir_ayah);
        $validasiData["tanggallahir_ayah"] = Str::title($request->tanggallahir_ayah);
        $validasiData["agama_ayah"] = Str::title($request->agama_ayah);
        $validasiData["pekerjaan_ayah"] = Str::title($request->pekerjaan_ayah);
        $validasiData["alamat_ayah"] = Str::title($request->alamat_ayah);
        $validasiData["nama_ibu"] = Str::title($request->nama_ibu);
        $validasiData["tempatlahir_ibu"] = Str::title($request->tempatlahir_ibu);
        $validasiData["tanggallahir_ibu"] = Str::title($request->tanggallahir_ibu);
        $validasiData["agama_ibu"] = Str::title($request->agama_ibu);
        $validasiData["pekerjaan_ibu"] = Str::title($request->pekerjaan_ibu);
        $validasiData["alamat_ibu"] = Str::title($request->alamat_ibu);

        // Sktmsekolah::where('id', $sktmsekolah->id)->update($validasiData);

        Sktmsekolah::where('id', $sktmsekolah->id)->update($validasiData);



        return redirect('/list-surat-sktm-sekolah')->with('success', 'Data berhasil di ubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sktmsekolah  $sktmsekolah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sktmsekolah $sktmsekolah)
    {
        Sktmsekolah::destroy($sktmsekolah->id);
        return redirect('/list-surat-sktm-sekolah')->with('delete', 'Berhasil di hapus');
    }
}
