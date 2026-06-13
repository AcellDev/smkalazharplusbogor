<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;
use App\Models\Jurusan;
use App\Models\Visitor;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // 1. Hitung total data Galeri dan Jurusan
        $totalGaleri = Galeri::count();
        $totalJurusan = Jurusan::count();

        // 2. Hitung total hits (Berapa kali total halaman beranda dibuka dari awal)
        $totalHits = Visitor::count();

        // 3. Hitung pengunjung unik hari ini (Berdasarkan IP Address unik pada tanggal hari ini)
        $today = Carbon::today()->toDateString();
        $pengunjungHariIni = Visitor::where('visit_date', $today)
                                    ->distinct('ip_address')
                                    ->count();

        // Lempar semua data real ke view dashboard
        return view('admin.dashboard', compact(
            'totalGaleri',
            'totalJurusan',
            'totalHits',
            'pengunjungHariIni'
        ));
    }
}