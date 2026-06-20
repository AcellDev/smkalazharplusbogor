<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    // Tampilan untuk Publik
    public function index() {
        $galeris = Galeri::latest()->get();
        return view('galeri', compact('galeris'));
    }

    // Tampilan List di Admin
    public function adminIndex() {
        $galeris = Galeri::latest()->get();
        return view('admin.galeri', compact('galeris'));
    }

    // Simpan Foto Baru
    public function store(Request $request) {
        $request->validate([
            'judul' => 'required',
            'kategori' => 'required',
            'foto' => 'required|image|mimes:jpg,png,jpeg'
        ]);

        $file = $request->file('foto');
        $nama_foto = time() . "_" . $file->getClientOriginalName();
        $file->move(public_path('images/galeri'), $nama_foto);

        Galeri::create([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'foto' => $nama_foto
        ]);

        return back()->with('success', 'Foto galeri berhasil ditambahkan!');
    }

    // Hapus Foto
    public function destroy($id) {
        $galeri = Galeri::findOrFail($id);
        unlink(public_path('images/galeri/' . $galeri->foto)); // Hapus file fisik
        $galeri->delete();
        return back()->with('success', 'Foto berhasil dihapus!');
    }
    public function update(Request $request, $id)
    {
        // 1. Cari data galeri berdasarkan ID
        $galeri = \App\Models\Galeri::findOrFail($id);

        // 2. Siapkan data yang mau di-update
        $data = [
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
        ];

        // 3. Cek apakah user upload foto baru
        if ($request->hasFile('foto')) {
            // Hapus foto lama dari folder jika ada
            if (\Illuminate\Support\Facades\File::exists(public_path('images/galeri/' . $galeri->foto))) {
                \Illuminate\Support\Facades\File::delete(public_path('images/galeri/' . $galeri->foto));
            }

            // Upload foto baru
            $file = $request->file('foto');
            $nama_file = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path('images/galeri'), $nama_file);
            
            // Masukkan nama file baru ke array data
            $data['foto'] = $nama_file;
        }

        // 4. Update data ke database
        $galeri->update($data);

        // 5. Kembalikan ke halaman sebelumnya dengan pesan sukses
        return back()->with('success', 'Data galeri berhasil diperbarui!');
    }
}