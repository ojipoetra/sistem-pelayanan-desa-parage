<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Categori;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::with('categori')->latest()->get();

        return view('components.beranda', ['title' => 'Berta Post', 'beritas' => $berita]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categori = Categori::all();
        return view('dashboard.berita.buatberita', ['title' => 'Buat Berita'], compact('categori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'image' => 'image|file|max:1024',
            'categori_id' => 'required',
            'body' => 'required',
        ]);

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('post-images');
        }
        $validateData['title'] = Str::title($request->title);
        //['user_id'] -> adalah nama fild yang terdapat di table user
        $validateData['user_id'] = auth()->user()->id;
        //['excerpt'] -> adalah nama fild yang terdapat di table post
        //kemudian kita buat limit panjang stringnya 200
        $validateData['excerpt'] = Str::limit($request->body, 300);

        Berita::create($validateData);

        return redirect('/')->with('success', 'New Post Has Been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        $categoriAll = Categori::all();
        $categoripilih = $berita->categori_id;
        $allBerita = Berita::where('categori_id', $categoripilih)->get();
        // $allBerita = Berita::with('categori')->where('categori_id', $berita->categori_id)->get();
        return view('components.berita', ['title' => 'Baca Berita', 'berita' => $berita, 'allBerita' => $allBerita], compact('categoriAll'));
    }

    // public function showCategoriById($slug)
    // {
    //     $categori = Categori::where('slug', $slug)->get();
    //     return view('components.categori', ['title' => 'Kategori Berita', 'categori' => $categori]);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $berita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita)
    {
        //
    }

    public function cekslug(Request $request)
    {
        $slug = SlugService::createSlug(Berita::class, 'slug', $request->title);
        // dd($slug);
        return response()->json(['slug' => $slug]);
    }
}
