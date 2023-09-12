<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Domisili;
use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Str;
// use PDF;
use Dompdf\Dompdf;
use GrahamCampbell\ResultType\Success;
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

        if (Auth::user()->is_admin) {
            $domisili = Domisili::all();
        } else {
            $domisili = Domisili::where('user_id', auth()->user()->id)->get();
        }

        return view('dashboard.domisili', compact('domisili'), ["title" => "Domisili"]);
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
        $request->validate([
            'nama' => 'required|regex:/^[a-zA-Z\s]/',
            'nik' => 'required',
            'tempatlahir' => 'required|regex:/^[a-zA-Z\s]/',
            'tanggallahir' => 'required',
            'jnskelamin' => 'required',
            'kewarganegaraan' => 'required|regex:/^[a-zA-Z\s]/',
            'agama' => 'required|regex:/^[a-zA-Z\s]/',
            'status' => 'required',
            'pekerjaan' => 'required|regex:/^[a-zA-Z\s]/',
            'alamat' => 'required|regex:/^[a-zA-Z0-9\/.\s-]+$/',

        ]);

        $request["nama"] = Str::title($request->nama);
        $request["tempatlahir"] = Str::title($request->tempatlahir);
        $request["kewarganegaraan"] = Str::title($request->kewarganegaraan);
        $request["agama"] = Str::title($request->agama);
        $request["pekerjaan"] = Str::title($request->pekerjaan);
        $request["alamat"] = Str::title($request->alamat);

        $domisili = new Domisili;
        $domisili->user_id = $request->user()->id; // Mengisi nilai user_id dengan id user yang sedang aktif
        $domisili->fill($request->all());
        $domisili->save();


        return redirect('/domisili');
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
        $rules = [
            'nama' => 'required|regex:/^[a-zA-Z\s]/',
            'nik' => 'required',
            'tempatlahir' => 'required|regex:/^[a-zA-Z\s]/',
            'tanggallahir' => 'required',
            'jnskelamin' => 'required',
            'kewarganegaraan' => 'required|regex:/^[a-zA-Z\s]/',
            'agama' => 'required|regex:/^[a-zA-Z\s]/',
            'status' => 'required',
            'pekerjaan' => 'required|regex:/^[a-zA-Z\s]/',
            'alamat' => 'required|regex:/^[a-zA-Z0-9\/.\s-]+$/'
        ];

        $validasiData = $request->validate($rules);

        $validasiData['user_id'] = auth()->user()->id;

        $validasiData["nama"] = Str::title($request->nama);
        $validasiData["tempatlahir"] = Str::title($request->tempatlahir);
        $validasiData["kewarganegaraan"] = Str::title($request->kewarganegaraan);
        $validasiData["agama"] = Str::title($request->agama);
        $validasiData["pekerjaan"] = Str::title($request->pekerjaan);
        $validasiData["alamat"] = Str::title($request->alamat);

        Domisili::where('id', $domisili->id)->update($validasiData);

        return redirect('/domisili')->with('success', 'Data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Domisili  $domisili
     * @return \Illuminate\Http\Response
     */
    public function destroy(Domisili $domisili)
    {
        Domisili::destroy($domisili->id);
        return redirect('/domisili')->with('delete', 'Berhasil di hapus');
    }
}
