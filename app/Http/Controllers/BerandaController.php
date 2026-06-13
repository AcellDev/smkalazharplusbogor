<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beranda;
use App\Models\Jurusan;
use App\Models\Kontak;
use App\Models\Visitor;
use Carbon\Carbon; // <--- GANTI INI: Dari 'carbon' jadi 'Carbon'

class BerandaController extends Controller
{
    // 1. Menampilkan halaman depan (Publik)
    public function index()
    {
        // Mencatat kunjungan setiap ada yang akses halaman utama
        // firstOrCreate memastikan IP yang sama di hari yang sama tidak dihitung ganda
        Visitor::firstOrCreate([
            'ip_address' => request()->ip(),
            'visit_date' => Carbon::today()->toDateString(),
        ]);

        $data = Beranda::first();
        $jurusans = Jurusan::all();
        $kontak = Kontak::first(); 

        return view('beranda', compact('data', 'jurusans', 'kontak'));
    }

    // 2. Menampilkan halaman form edit Beranda di Admin
    public function edit()
    {
        $data = Beranda::first();
        return view('admin.beranda', compact('data'));
    }

    // 3. Memproses penyimpanan data dari form Admin
    public function update(Request $request)
    {
        $beranda = Beranda::first(); 

        $data = [
            'judul'     => $request->judul ?? $beranda->judul,
            'sub_judul' => $request->sub_judul ?? $beranda->sub_judul,
            'deskripsi' => $request->deskripsi ?? $beranda->deskripsi,
        ];

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path('images/beranda'), $nama_file);
            
            $data['foto'] = $nama_file; 
        }

        $beranda->update($data);

        return back()->with('success', 'Beranda & Foto berhasil diperbarui!');
    }
}