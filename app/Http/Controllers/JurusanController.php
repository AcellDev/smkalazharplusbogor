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

    // 2. TAMBAH DATA (CREATE SINGLE IMAGE)
   public function store(Request $request)
{
    // 1. Validasi diubah agar mendukung array gambar
    $request->validate([
        'nama' => 'required',
        'singkatan' => 'required',
        'deskripsi' => 'required',
        'gambar' => 'required|array', 
        'gambar.*' => 'image|mimes:jpeg,png,jpg,webp', 
    ]);

    $data = $request->all();

    // 2. Proses upload banyak gambar dengan Looping
    $images = [];
    if ($request->hasFile('gambar')) {
        foreach ($request->file('gambar') as $file) {
            $nama_file = time() . "_" . uniqid() . "." . $file->getClientOriginalExtension();
            $file->move(public_path('images/jurusan'), $nama_file);
            $images[] = $nama_file; // Masukkan nama file ke dalam list array
        }
    }

    // 3. Ubah list array gambar menjadi string JSON agar bisa disimpan di database
    $data['gambar'] = json_encode($images);

    // 4. Simpan ke database (Sesuaikan nama Model kamu, misal: Jurusan)
    \App\Models\Jurusan::create($data); 

    return back()->with('success', 'Program Keahlian berhasil ditambahkan!');
}

    // 3. EDIT DATA (UPDATE SINGLE IMAGE)
   public function update(Request $request, $id)
{
    // 1. Validasi gambar dibuat nullable (karena kalau edit, gak wajib upload gambar baru)
    $request->validate([
        'nama' => 'required',
        'singkatan' => 'required',
        'deskripsi' => 'required',
        'gambar' => 'nullable|array',
        'gambar.*' => 'image|mimes:jpeg,png,jpg,webp',
    ]);

    $jurusan = \App\Models\Jurusan::findOrFail($id);
    $data = $request->all();

    // 2. Jika user mengunggah gambar baru saat proses edit
    if ($request->hasFile('gambar')) {
        
        // Hapus gambar-gambar lama dari folder public agar storage tidak penuh
        $oldImages = json_decode($jurusan->gambar, true);
        if (is_array($oldImages)) {
            foreach ($oldImages as $oldImg) {
                if (file_exists(public_path('images/jurusan/' . $oldImg))) {
                    unlink(public_path('images/jurusan/' . $oldImg));
                }
            }
        } else {
            // Antisipasi jika data lama di database masih berbentuk string biasa
            if ($jurusan->gambar && file_exists(public_path('images/jurusan/' . $jurusan->gambar))) {
                unlink(public_path('images/jurusan/' . $jurusan->gambar));
            }
        }

        // Upload kumpulan gambar baru
        $images = [];
        foreach ($request->file('gambar') as $file) {
            $nama_file = time() . "_" . uniqid() . "." . $file->getClientOriginalExtension();
            $file->move(public_path('images/jurusan'), $nama_file);
            $images[] = $nama_file;
        }
        
        // Ubah array baru menjadi format JSON string
        $data['gambar'] = json_encode($images);
    } else {
        // Jika tidak upload gambar baru, tetap pertahankan data gambar lama
        unset($data['gambar']);
    }

    // 3. Update data di database
    $jurusan->update($data);

    return back()->with('success', 'Program Keahlian berhasil diperbarui!');
}

    // 4. HAPUS DATA (DELETE)
    public function destroy($id)
    {
        $jurusan = Jurusan::findOrFail($id);

        // Hapus file fisik gambar dari folder sebelum menghapus data di database
        if ($jurusan->gambar && File::exists(public_path('images/jurusan/' . $jurusan->gambar))) {
            File::delete(public_path('images/jurusan/' . $jurusan->gambar));
        }

        $jurusan->delete();
        return back()->with('success', 'Program Keahlian berhasil dihapus!');
    }
}