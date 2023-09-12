<?php

namespace App\Http\Controllers;

use App\Models\Domisili;
use App\Models\Pengantarnikah;
use App\Models\Sktmsekolah;
use App\Models\Sku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // jika yang login sebagai admin maka tampilkan semua jumlah inputan yang di
        // masukan oleh user dan admin
        // $userId = Auth::id();
        if (Auth::user()->is_admin) {
            $totalDomisili = Domisili::count();
            $totalPengantarNikah = Pengantarnikah::count();
            $totalSktmSekolah = Sktmsekolah::count();
            $totalSku = Sku::count();
        } else {
            // jika yang loginya sebagai user maka tampilkan data sesuai id user yang login
            $totalDomisili = Domisili::where('user_id', auth()->user()->id)->get()->count();
            $totalPengantarNikah = Pengantarnikah::where('user_id', auth()->user()->id)->get()->count();
            $totalSktmSekolah = Sktmsekolah::where('user_id', auth()->user()->id)->get()->count();
            $totalSku = Sku::where('user_id', auth()->user()->id)->get()->count();
        }
        return view('dashboard/dashboard', compact('totalDomisili', 'totalPengantarNikah', 'totalSktmSekolah', 'totalSku'), ["title" => "Dashboard"]);
    }
}
