<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class JurusanController extends Controller
{
    // 1. TAMPIL DATA
    public function index()
    {
        $jurusans = Jurusan::all();
        return view('admin.jurusan.index', compact('jurusans'));
    }

    // 2. TAMBAH DATA (STORE)
    public function store(Request $request)
    {
        // Validasi teks saja, lepaskan pengecekan file ketat dari Laravel agar lolos dari blokir shared hosting
        $request->validate([
            'nama' => 'required',
            'singkatan' => 'required',
            'deskripsi' => 'required',
        ]);

        $data = [
            'nama'      => $request->nama,
            'singkatan' => $request->singkatan,
            'deskripsi' => $request->deskripsi,
        ];

        $images = [];

        // Deteksi input file gambar
        if ($request->hasFile('gambar')) {
            foreach ($request->file('gambar') as $file) {
                if ($file->isValid()) {
                    $ext = strtolower($file->getClientOriginalExtension());
                    if (in_array($ext, ['jpeg', 'png', 'jpg', 'webp', 'svg'])) {
                        // Ambil nama asli atau buat nama unik
                        $nama_file = time() . "_" . uniqid() . "." . $ext;
                        $file->move(public_path('images/jurusan'), $nama_file);
                        $images[] = $nama_file;
                    }
                }
            }
        }

        // Jalur Fallback: Jika gambar kosong, kita set nama file berdasarkan singkatan
        if (empty($images)) {
            $images[] = strtolower($request->singkatan) . '.png';
        }

        // Simpan dalam format JSON string agar serasi dengan pembacaan Blade
        $data['gambar'] = json_encode($images);

        Jurusan::create($data);

        return redirect('/admin/jurusan')->with('success', 'Program Keahlian berhasil ditambahkan!');
    }

    // 3. EDIT DATA (UPDATE) - Menyesuaikan rute POST bawaan JS Modal kamu
    public function update(Request $request, $id)
    {
        $jurusan = Jurusan::findOrFail($id);

        $request->validate([
            'nama' => 'required',
            'singkatan' => 'required',
            'deskripsi' => 'required',
        ]);

        $data = [
            'nama'      => $request->nama,
            'singkatan' => $request->singkatan,
            'deskripsi' => $request->deskripsi,
        ];

        // Jika user mengunggah gambar baru saat edit
        if ($request->hasFile('gambar')) {
            $images = [];
            foreach ($request->file('gambar') as $file) {
                if ($file->isValid()) {
                    $ext = strtolower($file->getClientOriginalExtension());
                    if (in_array($ext, ['jpeg', 'png', 'jpg', 'webp', 'svg'])) {
                        $nama_file = time() . "_" . uniqid() . "." . $ext;
                        $file->move(public_path('images/jurusan'), $nama_file);
                        $images[] = $nama_file;
                    }
                }
            }
            
            if (!empty($images)) {
                // Hapus gambar lama di server jika ada kaitan file fisik lawas
                $oldImages = json_decode($jurusan->gambar, true);
                if (is_array($oldImages)) {
                    foreach ($oldImages as $oldImg) {
                        $oldPath = public_path('images/jurusan/' . $oldImg);
                        if (File::exists($oldPath) && $oldImg != 'default.png') {
                            File::delete($oldPath);
                        }
                    }
                }
                $data['gambar'] = json_encode($images);
            }
        }

        $jurusan->update($data);

        return redirect('/admin/jurusan')->with('success', 'Program Keahlian berhasil diperbarui!');
    }

    // 4. HAPUS DATA (DELETE)
    public function destroy($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        
        // Hapus file fisik gambar di hosting agar tidak memenuhi penyimpanan
        $images = json_decode($jurusan->gambar, true);
        if (is_array($images)) {
            foreach ($images as $img) {
                $path = public_path('images/jurusan/' . $img);
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        }

        $jurusan->delete();

        return redirect('/admin/jurusan')->with('success', 'Program Keahlian berhasil dihapus!');
    }
}