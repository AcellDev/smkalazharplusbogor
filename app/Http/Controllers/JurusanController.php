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

    // 2. TAMBAH DATA (GAMBAR DIBUAT OPSIONAL UTK BYPASS HOSTING)
    public function store(Request $request)
{
    // 1. Validasi teksnya saja. Pengecekan file kita lepas dari Laravel biar gak di-blok server
    $request->validate([
        'nama' => 'required',
        'singkatan' => 'required',
        'deskripsi' => 'required',
    ]);

    // 2. Ambil data teks
    $data = [
        'nama'      => $request->nama,
        'singkatan' => $request->singkatan,
        'deskripsi' => $request->deskripsi,
    ];

    $images = [];

    // 3. Langsung eksekusi pemindahan file fisik tanpa babak belu validasi strict
    if ($request->hasFile('gambar')) {
        foreach ($request->file('gambar') as $file) {
            // Ambil ekstensi asli file (contoh: png, jpg)
            $ext = strtolower($file->getClientOriginalExtension());
            
            // Filter manual formatnya biar aman
            if (in_array($ext, ['jpeg', 'png', 'jpg', 'webp'])) {
                // Bikin nama unik
                $nama_file = time() . "_" . uniqid() . "." . $ext;
                
                // LANGSUNG dipaksa pindah ke folder public/images/jurusan
                $file->move(public_path('images/jurusan'), $nama_file);
                
                // Masukkan nama file ke array
                $images[] = $nama_file;
            }
        }
    }

    // Antisipasi kalau beneran gak milih gambar sama sekali
    if (empty($images)) {
        $images[] = 'default.png';
    }

    // 4. Convert ke JSON string dan simpan
    $data['gambar'] = json_encode($images);
    \App\Models\Jurusan::create($data); 

    return back()->with('success', 'Program Keahlian berhasil ditambahkan dengan Gambar!');
}

    // 3. EDIT DATA
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'singkatan' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'nullable|array',
        ]);

        $jurusan = \App\Models\Jurusan::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $oldImages = json_decode($jurusan->gambar, true);
            if (is_array($oldImages)) {
                foreach ($oldImages as $oldImg) {
                    if (file_exists(public_path('images/jurusan/' . $oldImg))) {
                        unlink(public_path('images/jurusan/' . $oldImg));
                    }
                }
            }

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

    // 4. HAPUS DATA
    public function destroy($id)
    {
        $jurusan = Jurusan::findOrFail($id);

        $oldImages = json_decode($jurusan->gambar, true);
        if (is_array($oldImages)) {
            foreach ($oldImages as $oldImg) {
                if (File::exists(public_path('images/jurusan/' . $oldImg))) {
                    File::delete(public_path('images/jurusan/' . $oldImg));
                }
            }
        }

        $jurusan->delete();
        return back()->with('success', 'Program Keahlian berhasil dihapus!');
    }
}