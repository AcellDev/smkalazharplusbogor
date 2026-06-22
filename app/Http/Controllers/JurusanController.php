<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class JurusanController extends Controller
{
    // 1. TAMPILKAN DATA
    public function index()
    {
        $jurusans = Jurusan::latest()->get();
        return view('admin.jurusan.index', compact('jurusans')); 
    }

    // 2. TAMBAH DATA (CREATE MULTIPLE IMAGES)
    public function store(Request $request)
    {
        // PERBAIKAN VALIDASI: Menghindari pengecekan mimes strict yang sering gagal di hosting tertentu
        $request->validate([
            'nama' => 'required',
            'singkatan' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|array', 
            'gambar.*' => 'max:2048', // Batasi maksimal 2MB per file agar tidak melampaui limit PHP hosting
        ]);

        $data = $request->all();

        $images = [];
        if ($request->hasFile('gambar')) {
            foreach ($request->file('gambar') as $file) {
                // Validasi ekstensi manual yang aman di hosting
                $ext = strtolower($file->getClientOriginalExtension());
                if (in_array($ext, ['jpeg', 'png', 'jpg', 'webp'])) {
                    $nama_file = time() . "_" . uniqid() . "." . $ext;
                    $file->move(public_path('images/jurusan'), $nama_file);
                    $images[] = $nama_file;
                } else {
                    return back()->withErrors(['gambar' => 'Format file harus berupa jpeg, png, jpg, atau webp.']);
                }
            }
        }

        $data['gambar'] = json_encode($images);

        \App\Models\Jurusan::create($data); 

        return back()->with('success', 'Program Keahlian berhasil ditambahkan!');
    }

    // 3. EDIT DATA (UPDATE MULTIPLE IMAGES)
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'singkatan' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'nullable|array',
            'gambar.*' => 'max:2048',
        ]);

        $jurusan = \App\Models\Jurusan::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('gambar')) {
            
            // Hapus gambar-gambar lama dari folder public
            $oldImages = json_decode($jurusan->gambar, true);
            if (is_array($oldImages)) {
                foreach ($oldImages as $oldImg) {
                    if (file_exists(public_path('images/jurusan/' . $oldImg))) {
                        unlink(public_path('images/jurusan/' . $oldImg));
                    }
                }
            } else {
                if ($jurusan->gambar && file_exists(public_path('images/jurusan/' . $jurusan->gambar))) {
                    unlink(public_path('images/jurusan/' . $jurusan->gambar));
                }
            }

            // Upload kumpulan gambar baru
            $images = [];
            foreach ($request->file('gambar') as $file) {
                $ext = strtolower($file->getClientOriginalExtension());
                if (in_array($ext, ['jpeg', 'png', 'jpg', 'webp'])) {
                    $nama_file = time() . "_" . uniqid() . "." . $ext;
                    $file->move(public_path('images/jurusan'), $nama_file);
                    $images[] = $nama_file;
                }
            }
            
            $data['gambar'] = json_encode($images);
        } else {
            unset($data['gambar']);
        }

        $jurusan->update($data);

        return back()->with('success', 'Program Keahlian berhasil diperbarui!');
    }

    // 4. HAPUS DATA (DELETE)
    public function destroy($id)
    {
        $jurusan = Jurusan::findOrFail($id);

        // PERBAIKAN: Menghapus banyak file gambar dari format JSON string saat data dihancurkan
        $oldImages = json_decode($jurusan->gambar, true);
        if (is_array($oldImages)) {
            foreach ($oldImages as $oldImg) {
                if (File::exists(public_path('images/jurusan/' . $oldImg))) {
                    File::delete(public_path('images/jurusan/' . $oldImg));
                }
            }
        } else {
            if ($jurusan->gambar && File::exists(public_path('images/jurusan/' . $jurusan->gambar))) {
                File::delete(public_path('images/jurusan/' . $jurusan->gambar));
            }
        }

        $jurusan->delete();
        return back()->with('success', 'Program Keahlian berhasil dihapus!');
    }
}