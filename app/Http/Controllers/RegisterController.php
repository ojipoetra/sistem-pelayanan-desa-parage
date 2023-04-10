<?php

namespace App\Http\Controllers;

use App\Models\Register;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('components.formpendaftaran', ['title' => 'register']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi = $request->validate(
            [
                'nama' => 'required',
                'ktp' => 'required|numeric|unique:users',
                'alamat' => 'required',
                'rtrw' => 'required',
                'nohp' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required',
            ]
        );

        // encripsi password 
        // ambil variable validasi isi key dari name = isi dengan method bcrypt(masukan variable validasi['isi key nya'])
        $validasi['password'] = bcrypt($validasi["password"]);

        $user = User::create($validasi);

        event(new Registered($user));

        auth()->login($user);
        // return redirect('/login')->with('success', 'Pendaftaran Berhasil Silahkan Login');

        return redirect()->route('verification.notice')->with('success', 'Akun berhasil di buat, silahkan verifikasi email yang sudah di kirim');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function show(Register $register)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit(Register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy(Register $register)
    {
        //
    }


    // public function verificationmail(Request $request)
    // {
    //     $user = $request->user();

    //     if ($user->hasVerifiedEmail()) {
    //         return redirect('/');
    //     }

    //     $user->sendEmailVerificationNotification();

    //     return back()->with('message', 'Cek email anda');
    // }
}
