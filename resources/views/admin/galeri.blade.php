@extends('layouts.admin')
<link rel="icon" type="image/png" href="{{ asset('images/logo-alza.png') }}">
@section('content')
<div class="mb-10 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
    <div>
        <h2 class="text-3xl font-black text-slate-800 tracking-tight">Kelola Galeri</h2>
        <p class="text-sm text-slate-500 mt-1">Unggah dokumentasi aktivitas, prestasi, dan fasilitas sekolah ke halaman publik.</p>
    </div>
    <div>
        <span class="inline-flex items-center gap-2 bg-white border border-slate-200 text-slate-700 text-xs font-bold px-4 py-2.5 rounded-2xl shadow-sm">
            <span class="w-2 h-2 rounded-full bg-yellow-500"></span> {{ $galeris->count() }} Dokumentasi Aktif
        </span>
    </div>
</div>

@if ($errors->any())
<div class="bg-red-50 border border-red-200 text-red-800 p-4 rounded-2xl mb-8 shadow-sm animate-fadeIn">
    <div class="flex items-center gap-2 mb-2">
        <svg class="w-5 h-5 text-red-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        <span class="text-sm font-bold">Gagal mengunggah foto!</span>
    </div>
    <ul class="list-disc list-inside text-xs font-medium ml-7 space-y-1">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
    
    <div class="lg:col-span-5 xl:col-span-4">
        <div class="bg-white p-6 sm:p-8 rounded-[2rem] shadow-sm border border-slate-200/60 sticky top-28">
            <h3 class="text-lg font-extrabold text-slate-800 mb-6 flex items-center gap-2.5">
                <span class="w-1.5 h-5 bg-green-600 rounded-full"></span>
                Upload Foto Baru
            </h3>
            
            <form action="/admin/galeri/store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="space-y-5">
                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Judul Dokumentasi</label>
                        <input type="text" name="judul" class="w-full border border-slate-200 rounded-2xl p-3.5 bg-slate-50 focus:bg-white focus:ring-2 focus:ring-green-500/20 focus:border-green-600 outline-none transition-all text-sm" required placeholder="Cth: Praktik Perakitan IoT">
                    </div>
                    
                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Kategori Konten</label>
                        <select name="kategori" class="w-full border border-slate-200 rounded-2xl p-3.5 bg-slate-50 focus:bg-white focus:ring-2 focus:ring-green-500/20 focus:border-green-600 outline-none transition-all text-sm cursor-pointer" required>
                            <option value="" disabled selected>Pilih Kategori</option>
                            <option value="Kegiatan">Kegiatan</option>
                            <option value="Fasilitas">Fasilitas</option>
                            <option value="Prestasi">Prestasi</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">File Foto (Rasio Bebas)</label>
                        <input type="file" name="foto" class="w-full border border-slate-200 rounded-2xl p-2.5 bg-slate-50 text-xs file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-bold file:bg-slate-900 file:text-white hover:file:bg-slate-800 transition-all cursor-pointer" accept="image/*" required>
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Keterangan Singkat</label>
                        <textarea name="deskripsi" rows="3" class="w-full border border-slate-200 rounded-2xl p-3.5 bg-slate-50 focus:bg-white focus:ring-2 focus:ring-green-500/20 focus:border-green-600 outline-none transition-all text-sm resize-none" placeholder="Tulis catatan opsional mengenai foto ini..."></textarea>
                    </div>

                    <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-4 rounded-2xl transition-all shadow-md shadow-green-600/10 hover:shadow-lg hover:-translate-y-0.5">
                        Publish ke Galeri
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="lg:col-span-7 xl:col-span-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6">
            @forelse($galeris as $item)
            <div class="bg-white rounded-[2rem] overflow-hidden shadow-sm border border-slate-200/60 hover:shadow-md transition-all duration-300 flex flex-col h-full group">
                
                <div class="h-44 w-full bg-slate-100 overflow-hidden border-b border-slate-100 relative">
                    <img src="{{ asset('images/galeri/' . $item->foto) }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <span class="absolute top-3 left-3 bg-white/95 backdrop-blur-sm border border-slate-200 text-slate-700 text-[9px] font-black uppercase tracking-wider px-2 py-1 rounded-lg shadow-sm">
                        {{ $item->kategori }}
                    </span>
                </div>

                <div class="p-5 flex-grow flex flex-col justify-between">
                    <div class="mb-4">
                        <h4 class="font-extrabold text-slate-800 text-sm leading-snug line-clamp-1 group-hover:text-green-600 transition-colors">{{ $item->judul }}</h4>
                        <p class="text-[11px] text-slate-400 font-medium mt-0.5">{{ $item->created_at->diffForHumans() }}</p>
                    </div>

                    <div class="flex items-center gap-2 pt-3 border-t border-slate-100">
                        <button onclick="openEditGaleriModal({{ $item->id }}, '{{ addslashes($item->judul) }}', '{{ $item->kategori }}', '{{ addslashes($item->deskripsi) }}')" class="flex-1 bg-slate-50 hover:bg-slate-100 text-slate-600 font-bold py-2 rounded-xl text-[11px] transition-colors border border-slate-200/60 text-center">
                            Edit
                        </button>
                        
                        <button type="button" onclick="openHapusGaleriModal({{ $item->id }}, '{{ addslashes($item->judul) }}')" class="flex-1 w-full bg-slate-50 hover:bg-red-50 text-slate-400 hover:text-red-600 font-bold py-2 rounded-xl text-[11px] transition-colors border border-slate-200/60">
                            Hapus
                        </button>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full bg-white border border-dashed border-slate-300 rounded-[2rem] p-12 text-center text-slate-400">
                Belum ada foto yang diunggah ke galeri.
            </div>
            @endforelse
        </div>
    </div>
</div>

<div id="edit_galeri_modal" class="fixed inset-0 bg-slate-900/40 z-[60] hidden items-center justify-center backdrop-blur-sm p-4 transition-opacity duration-300 opacity-0">
    <div id="edit_galeri_content" class="bg-white rounded-[2.5rem] shadow-xl w-full max-w-md overflow-hidden border border-slate-100 transform scale-95 transition-transform duration-300">
        <div class="p-6 border-b border-slate-100 flex justify-between items-center bg-slate-50/50">
            <h3 class="text-lg font-black text-slate-800">Edit Data Galeri</h3>
            <button onclick="closeEditGaleriModal()" class="text-slate-400 hover:text-slate-600 text-xl font-bold">&times;</button>
        </div>
        
        <form id="edit_galeri_form" method="POST" enctype="multipart/form-data" class="p-6 space-y-4">
            @csrf
            <div>
                <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Judul Foto</label>
                <input type="text" id="edit_judul" name="judul" class="w-full border border-slate-200 rounded-2xl p-3 bg-slate-50 focus:bg-white focus:ring-2 focus:ring-green-500/20 outline-none text-sm" required>
            </div>
            
            <div>
                <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Kategori</label>
                <select id="edit_kategori" name="kategori" class="w-full border border-slate-200 rounded-2xl p-3 bg-slate-50 focus:bg-white focus:ring-2 focus:ring-green-500/20 outline-none text-sm cursor-pointer" required>
                    <option value="Kegiatan">Kegiatan</option>
                    <option value="Fasilitas">Fasilitas</option>
                    <option value="Prestasi">Prestasi</option>
                </select>
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Ganti File Foto <span class="text-[10px] text-slate-400 font-normal">(Opsional)</span></label>
                <input type="file" name="foto" class="w-full border border-slate-200 rounded-2xl p-2 bg-slate-50 text-xs file:mr-4 file:py-1.5 file:px-3 file:rounded-xl file:border-0 file:bg-slate-900 file:text-white" accept="image/*">
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Keterangan</label>
                <textarea id="edit_galeri_deskripsi" name="deskripsi" rows="3" class="w-full border border-slate-200 rounded-2xl p-3 bg-slate-50 focus:bg-white focus:ring-2 focus:ring-green-500/20 outline-none text-sm resize-none"></textarea>
            </div>

            <div class="flex justify-end gap-3 pt-4 border-t border-slate-100">
                <button type="button" onclick="closeEditGaleriModal()" class="px-5 py-2.5 bg-slate-100 text-slate-600 font-bold rounded-xl text-xs hover:bg-slate-200">Batal</button>
                <button type="submit" class="px-6 py-2.5 bg-green-600 text-white font-bold rounded-xl text-xs hover:bg-green-700 shadow-md">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</div>

<div id="hapus_galeri_modal" class="fixed inset-0 bg-slate-900/40 z-[60] hidden items-center justify-center backdrop-blur-sm p-4 transition-opacity duration-300 opacity-0">
    <div id="hapus_galeri_content" class="bg-white rounded-[2.5rem] shadow-xl w-full max-w-sm overflow-hidden border border-slate-100 p-8 text-center transform scale-95 transition-transform duration-300">
        
        <div class="w-16 h-16 bg-red-50 text-red-500 rounded-full flex items-center justify-center mx-auto mb-5 border-4 border-red-50/50">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
        </div>
        
        <h3 class="text-xl font-black text-slate-800 mb-2">Hapus Galeri?</h3>
        <p class="text-xs text-slate-500 mb-6 leading-relaxed">
            Anda yakin ingin menghapus foto <br> <span id="hapus_judul" class="font-bold text-red-500"></span>?<br>
            Tindakan ini tidak dapat dibatalkan.
        </p>

        <div class="flex justify-center gap-3">
            <button type="button" onclick="closeHapusGaleriModal()" class="w-full px-5 py-3 bg-white text-slate-600 font-bold border border-slate-200 rounded-xl text-xs hover:bg-slate-50 transition-colors">Batal</button>
            
            <form id="form_hapus_galeri" method="POST" class="w-full">
                @csrf
                @method('DELETE')
                <button type="submit" class="w-full px-5 py-3 bg-red-500 text-white font-bold rounded-xl text-xs hover:bg-red-600 shadow-md shadow-red-500/20 transition-all">Ya, Hapus!</button>
            </form>
        </div>
    </div>
</div>

<script>
    // FUNGSI ANIMASI EDIT
    function openEditGaleriModal(id, judul, kategori, deskripsi) {
        document.getElementById('edit_galeri_form').action = '/admin/galeri/update/' + id;
        document.getElementById('edit_judul').value = judul;
        document.getElementById('edit_kategori').value = kategori;
        document.getElementById('edit_galeri_deskripsi').value = deskripsi;
        
        const modal = document.getElementById('edit_galeri_modal');
        const content = document.getElementById('edit_galeri_content');
        
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        
        // Trigger transisi smooth masuk
        setTimeout(() => {
            modal.classList.remove('opacity-0');
            content.classList.remove('scale-95');
        }, 10);
    }

    function closeEditGaleriModal() {
        const modal = document.getElementById('edit_galeri_modal');
        const content = document.getElementById('edit_galeri_content');
        
        // Trigger transisi smooth keluar
        modal.classList.add('opacity-0');
        content.classList.add('scale-95');
        
        setTimeout(() => {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }, 300);
    }

    // FUNGSI ANIMASI HAPUS
    function openHapusGaleriModal(id, judul) {
        document.getElementById('form_hapus_galeri').action = '/admin/galeri/delete/' + id;
        document.getElementById('hapus_judul').innerText = judul;
        
        const modal = document.getElementById('hapus_galeri_modal');
        const content = document.getElementById('hapus_galeri_content');
        
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        
        // Trigger transisi smooth masuk
        setTimeout(() => {
            modal.classList.remove('opacity-0');
            content.classList.remove('scale-95');
        }, 10);
    }

    function closeHapusGaleriModal() {
        const modal = document.getElementById('hapus_galeri_modal');
        const content = document.getElementById('hapus_galeri_content');
        
        // Trigger transisi smooth keluar
        modal.classList.add('opacity-0');
        content.classList.add('scale-95');
        
        setTimeout(() => {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }, 300);
    }
</script>
@endsection