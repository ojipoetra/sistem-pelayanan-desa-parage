<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Categori;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use GuzzleHttp\Promise\Create;
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
        return view('components.beranda', ['title' => 'Berta post', 'beritas' => $berita]);
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
        $validateData['title'] = Str::words($request->title, 14);
        //['user_id'] -> adalah nama fild yang terdapat di table user
        $validateData['user_id'] = auth()->user()->id;
        //['excerpt'] -> adalah nama fild yang terdapat di table post
        //kemudian kita buat limit panjang stringnya 200
        $validateData['excerpt'] = Str::limit($request->body, 300);

        Berita::create($validateData);


        // Berita::create([
        //     'user_id' => auth()->user()->id,
        //     'categori_id' => $request->categori_id,
        //     'title' => $request->title,
        //     'slug' => Str::slug($request->title),
        //     'excerpt' => Str::limit($request->body, 100),
        //     'body' => $request->body
        // ]);



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
        $categoripilih = $berita->categori_id;
        $allBerita = Berita::where('categori_id', $categoripilih)->get();
        return view('components.berita', ['title' => 'Baca Berita', 'berita' => $berita, 'allBerita' => $allBerita]);
    }

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
