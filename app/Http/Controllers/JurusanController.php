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
        // Validasi teks saja yang wajib, gambar dibuat nullable agar server hosting tidak crash
        $request->validate([
            'nama' => 'required',
            'singkatan' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'nullable|array', 
        ]);

        $data = $request->all();
        $images = [];

        if ($request->hasFile('gambar')) {
            foreach ($request->file('gambar') as $file) {
                $ext = strtolower($file->getClientOriginalExtension());
                if (in_array($ext, ['jpeg', 'png', 'jpg', 'webp'])) {
                    $nama_file = time() . "_" . uniqid() . "." . $ext;
                    $file->move(public_path('images/jurusan'), $nama_file);
                    $images[] = $nama_file;
                }
            }
        }

        // JIKA SERVER HOSTING GAGAL/KOSONG, KITA BERI NAMA DEFAULT BERDASARKAN SINGKATAN JURUSAN
        if (empty($images)) {
            $images[] = strtolower($request->singkatan) . '.png';
        }

        $data['gambar'] = json_encode($images);

        \App\Models\Jurusan::create($data); 

        return back()->with('success', 'Program Keahlian berhasil ditambahkan!');
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