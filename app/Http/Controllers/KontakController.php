<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;

class KontakController extends Controller
{
    public function edit()
    {
        $kontak = Kontak::first();
        return view('admin.kontak', compact('kontak'));
    }

   public function update(Request $request)
    {
        // 1. SATPAM VALIDASI (Ini yang bikin sistem kamu kebal dari data kosong)
        $request->validate([
            'alamat' => 'required',
            'email' => 'required',
            'telepon' => 'required', // Ini yang tadi bikin error!
            'whatsapp' => 'required',
            'instagram' => 'required',
        ]);

        // 2. PROSES UPDATE
        $kontak = Kontak::first();
        
        $kontak->update([
            'alamat' => $request->alamat,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'whatsapp' => $request->whatsapp,
            'instagram' => $request->instagram,
            'maps_iframe' => $request->maps_iframe,
        ]);

        return back()->with('success', 'Data kontak berhasil diperbarui!');
    }
}