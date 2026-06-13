<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class JurusanController extends Controller
{
    // Tampilkan halaman Kelola Jurusan di Admin
    public function index()
    {
        $jurusans = Jurusan::latest()->get();
        return view('admin.jurusan', compact('jurusans'));
    }

    // Simpan Jurusan Baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'singkatan' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:2048' // Opsional, maksimal 2MB
        ]);

        $nama_gambar = null;
        if ($request->hasFile('gambar')) {
            $nama_gambar = time() . '_' . $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move(public_path('images/jurusan'), $nama_gambar);
        }

        Jurusan::create([
            'nama' => $request->nama,
            'singkatan' => $request->singkatan,
            'deskripsi' => $request->deskripsi,
            'gambar' => $nama_gambar
        ]);

        return redirect()->back()->with('success', 'Program Keahlian berhasil ditambahkan!');
    }

    // Update Jurusan
    public function update(Request $request, $id)
    {
        $jurusan = Jurusan::findOrFail($id);
        
        $jurusan->nama = $request->nama;
        $jurusan->singkatan = $request->singkatan;
        $jurusan->deskripsi = $request->deskripsi;

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama
            $gambarLama = public_path('images/jurusan/' . $jurusan->gambar);
            if (File::exists($gambarLama) && $jurusan->gambar != '') {
                File::delete($gambarLama);
            }

            // Upload gambar baru
            $nama_gambar = time() . '_' . $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move(public_path('images/jurusan'), $nama_gambar);
            $jurusan->gambar = $nama_gambar;
        }

        $jurusan->save();
        return redirect()->back()->with('success', 'Data Jurusan berhasil diperbarui!');
    }

    // Hapus Jurusan
    public function destroy($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        
        $gambarLama = public_path('images/jurusan/' . $jurusan->gambar);
        if (File::exists($gambarLama) && $jurusan->gambar != '') {
            File::delete($gambarLama);
        }

        $jurusan->delete();
        return redirect()->back()->with('success', 'Jurusan berhasil dihapus!');
    }
}