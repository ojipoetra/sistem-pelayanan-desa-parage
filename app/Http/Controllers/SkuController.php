<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Barryvdh\DomPDF\PDF;

use App\Models\Sku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->is_admin) {
            $sku = Sku::all();
        } else {
            $sku = Sku::where('user_id', auth()->user()->id)->get();
        }

        return view('dashboard.sku', compact('sku'), ["title" => "SKU"]);
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
            'nama_pemohon' => 'required|regex:/^[a-zA-Z\s]/',
            'nik_pemohon' => 'required|regex:/^[0-9]/',
            'tempatlahir_pemohon' => 'required|regex:/^[a-zA-Z\s]/',
            'tanggallahir_pemohon' => 'required',
            'kelamin_pemohon' => 'required',
            'agama_pemohon' => 'required|regex:/^[a-zA-Z\s]/',
            'pekerjaan_pemohon' => 'required|regex:/^[a-zA-Z\s]/',
            'kewarganegaraan_pemohon' => 'required|regex:/^[a-zA-Z\s]/',
            'alamat_pemohon' => 'required|regex:/^[a-zA-Z0-9\/.\s-]+$/',
            'jenis_usaha' => 'required|regex:/^[a-zA-Z\s]/',
        ]);

        $request["nama_pemohon"] = Str::title($request->nama_pemohon);
        $request["tempatlahir_pemohon"] = Str::title($request->tempatlahir_pemohon);
        $request["tanggallahir_pemohon"] = Str::title($request->tanggallahir_pemohon);
        $request["kelamin_pemohon"] = Str::title($request->kelamin_pemohon);
        $request["agama_pemohon"] = Str::title($request->agama_pemohon);
        $request["pekerjaan_pemohon"] = Str::title($request->pekerjaan_pemohon);
        $request["kewarganegaraan_pemohon"] = Str::title($request->kewarganegaraan_pemohon);
        $request["alamat_pemohon"] = Str::title($request->alamat_pemohon);
        $request["jenis_usaha"] = Str::title($request->jenis_usaha);

        $suratsku = new Sku;
        $suratsku->user_id = $request->user()->id; // Mengisi nilai user_id dengan id user yang sedang aktif
        $suratsku->fill($request->all());
        $suratsku->save();

        return redirect('/suratsku');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sku  $sku
     * @return \Illuminate\Http\Response
     */
    public function show(Sku $sku)
    {
        $pdf = app(PDF::class);
        $pdf = $pdf->loadview('kopsurat.skupdf', compact('sku',), ["title" => "SURAT KETERANGAN USAHA"]);
        set_time_limit(300);
        return $pdf->stream('sku.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sku  $sku
     * @return \Illuminate\Http\Response
     */
    public function edit(Sku $sku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sku  $sku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sku $sku)
    {
        $rules = [
            'nama_pemohon' => 'required|regex:/^[a-zA-Z\s]/',
            'nik_pemohon' => 'required|regex:/^[0-9]/',
            'tempatlahir_pemohon' => 'required|regex:/^[a-zA-Z\s]/',
            'tanggallahir_pemohon' => 'required',
            'kelamin_pemohon' => 'required',
            'agama_pemohon' => 'required|regex:/^[a-zA-Z\s]/',
            'pekerjaan_pemohon' => 'required|regex:/^[a-zA-Z\s]/',
            'kewarganegaraan_pemohon' => 'required|regex:/^[a-zA-Z\s]/',
            'alamat_pemohon' => 'required|regex:/^[a-zA-Z0-9\/.\s-]+$/',
            'jenis_usaha' => 'required|regex:/^[a-zA-Z\s]/',
        ];

        $validasiData = $request->validate($rules);
        $validasiData['user_id'] = auth()->user()->id;

        $validasiData["nama_pemohon"] = Str::title($request->nama_pemohon);
        $validasiData["tempatlahir_pemohon"] = Str::title($request->tempatlahir_pemohon);
        $validasiData["tanggallahir_pemohon"] = Str::title($request->tanggallahir_pemohon);
        $validasiData["kelamin_pemohon"] = Str::title($request->kelamin_pemohon);
        $validasiData["agama_pemohon"] = Str::title($request->agama_pemohon);
        $validasiData["pekerjaan_pemohon"] = Str::title($request->pekerjaan_pemohon);
        $validasiData["kewarganegaraan_pemohon"] = Str::title($request->kewarganegaraan_pemohon);
        $validasiData["alamat_pemohon"] = Str::title($request->alamat_pemohon);
        $validasiData["jenis_usaha"] = Str::title($request->jenis_usaha);

        Sku::where('id', $sku->id)->update($validasiData);

        return redirect('/suratsku')->with('success', 'Data berhasil di ubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sku  $sku
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sku $sku)
    {
        Sku::destroy($sku->id);
        return redirect('/suratsku')->with('delete', 'Data berhasil di hapus!');
    }
}
