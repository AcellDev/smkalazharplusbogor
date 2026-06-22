@extends('layouts.admin')
<link rel="icon" type="image/png" href="{{ asset('images/logo-alza.png') }}">
@section('content')
<div class="mb-10 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
    <div>
        <h2 class="text-3xl font-black text-slate-800 tracking-tight">Program Keahlian</h2>
        <p class="text-sm text-slate-500 mt-1">Kelola daftar jurusan dan kompetensi keahlian SMK Al-Azhar Plus.</p>
    </div>
    <div>
        <span class="inline-flex items-center gap-2 bg-white border border-slate-200 text-slate-700 text-xs font-bold px-4 py-2.5 rounded-2xl shadow-sm">
            <span class="w-2 h-2 rounded-full bg-blue-500"></span> Total: {{ $jurusans->count() }} Jurusan
        </span>
    </div>
</div>

@if(session('success'))
<div class="bg-emerald-50 border border-emerald-200 text-emerald-800 p-4 rounded-2xl mb-8 shadow-sm flex items-center gap-3 animate-fadeIn">
    <svg class="w-5 h-5 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
    <span class="text-sm font-semibold">{{ session('success') }}</span>
</div>
@endif

@if ($errors->any())
<div class="bg-red-50 border border-red-200 text-red-800 p-4 rounded-2xl mb-8 shadow-sm flex items-start gap-3 animate-fadeIn">
    <svg class="w-5 h-5 text-red-600 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
    <div>
        <span class="text-sm font-bold block mb-1">Gagal menyimpan data! Periksa kesalahan berikut:</span>
        <ul class="list-disc list-inside text-xs font-medium space-y-1">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif

<div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
    
    <div class="lg:col-span-5 xl:col-span-4">
        <div class="bg-white p-6 sm:p-8 rounded-[2rem] shadow-sm border border-slate-200/60 sticky top-28">
            <h3 class="text-lg font-extrabold text-slate-800 mb-6 flex items-center gap-2.5">
                <span class="w-1.5 h-5 bg-green-600 rounded-full"></span>
                Tambah Jurusan
            </h3>
            
            <form action="/admin/jurusan/store" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="space-y-5">
                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Nama Lengkap Jurusan</label>
                        <input type="text" name="nama" class="w-full border border-slate-200 rounded-2xl p-3.5 bg-slate-50 focus:bg-white focus:ring-2 focus:ring-green-500/20 focus:border-green-600 outline-none transition-all text-sm" required placeholder="Cth: Desain Komunikasi Visual">
                    </div>
                    
                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Singkatan / Akronim</label>
                        <input type="text" name="singkatan" class="w-full border border-slate-200 rounded-2xl p-3.5 bg-slate-50 focus:bg-white focus:ring-2 focus:ring-green-500/20 focus:border-green-600 outline-none transition-all text-sm uppercase" required placeholder="Cth: DKV">
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Dokumentasi Gambar <span class="text-[10px] text-slate-400 font-normal">(Ukuran gambar maks. 2MB)</span></label>
                        <input type="file" name="gambar[]" multiple class="w-full border border-slate-200 rounded-2xl p-2.5 bg-slate-50 text-xs file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-bold file:bg-slate-900 file:text-white hover:file:bg-slate-800 transition-all cursor-pointer" accept="image/*">
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Deskripsi Kompetensi</label>
                        <textarea name="deskripsi" rows="4" class="w-full border border-slate-200 rounded-2xl p-3.5 bg-slate-50 focus:bg-white focus:ring-2 focus:ring-green-500/20 focus:border-green-600 outline-none transition-all text-sm resize-none" required placeholder="Jelaskan apa saja yang dipelajari..."></textarea>
                    </div>

                    <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-4 rounded-2xl transition-all shadow-md shadow-green-600/10 hover:shadow-lg hover:-translate-y-0.5">
                        Simpan Jurusan
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="lg:col-span-7 xl:col-span-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            @forelse($jurusans as $item)
            <div class="bg-white rounded-[2rem] p-6 shadow-sm border border-slate-200/60 hover:shadow-md transition-all duration-300 flex flex-col h-full relative group">
                
                <div class="flex gap-4 items-start mb-4">
                    @php
                        $gambarRaw = $item->gambar;
                        $decoded = json_decode($gambarRaw, true);
                        
                        if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
                            $firstGambar = !empty($decoded) ? $decoded[0] : null;
                        } else {
                            $firstGambar = $gambarRaw;
                        }
                    @endphp

                    @if($firstGambar && $firstGambar != 'default.png')
                        <img src="{{ asset('images/jurusan/' . $firstGambar) }}" class="w-14 h-14 rounded-2xl object-cover border border-slate-100 shadow-sm shrink-0" onerror="this.src='{{ asset('images/' . $firstGambar) }}';">
                    @else
                        <div class="w-14 h-14 rounded-2xl bg-slate-50 text-slate-700 flex items-center justify-center font-black text-xl border border-slate-200 shrink-0 shadow-inner uppercase">
                            {{ strtoupper(substr($item->singkatan ?? 'JR', 0, 2)) }}
                        </div>
                    @endif
                    
                    <div>
                        <span class="inline-block px-2 py-0.5 bg-green-50 text-green-700 text-[10px] font-bold rounded-lg border border-green-100 mb-1">{{ $item->singkatan }}</span>
                        <h4 class="font-extrabold text-slate-800 text-base leading-tight group-hover:text-green-600 transition-colors">{{ $item->nama }}</h4>
                    </div>
                </div>
                
                <p class="text-xs text-slate-500 leading-relaxed line-clamp-3 mb-6 flex-grow">
                    {{ $item->deskripsi }}
                </p>
                
                <div class="flex items-center gap-2 pt-4 border-t border-slate-100">
                    <button type="button" onclick="openEditModal({{ $item->id }}, '{{ addslashes($item->nama) }}', '{{ addslashes($item->singkatan) }}', '{{ addslashes($item->deskripsi) }}')" class="flex-1 bg-slate-50 hover:bg-slate-100 text-slate-600 hover:text-slate-800 font-bold py-2.5 rounded-xl text-xs transition-colors border border-slate-200/60 text-center">
                        Edit
                    </button>
                    
                    <button type="button" onclick="openDeleteModal({{ $item->id }}, '{{ addslashes($item->nama) }}')" class="flex-1 bg-slate-50 hover:bg-red-50 text-slate-500 hover:text-red-600 font-bold py-2.5 rounded-xl text-xs transition-colors border border-slate-200/60">
                        Hapus
                    </button>
                </div>
            </div>
            @empty
            <div class="col-span-full bg-white border border-dashed border-slate-300 rounded-[2rem] p-12 text-center text-slate-400">
                Belum ada data program keahlian.
            </div>
            @endforelse
        </div>
    </div>
</div>

<div id="edit_modal" class="fixed inset-0 bg-slate-900/60 z-[60] hidden flex items-center justify-center backdrop-blur-sm p-4 opacity-0 transition-opacity duration-300">
    <div class="bg-white rounded-[2.5rem] shadow-xl w-full max-w-md overflow-hidden border border-slate-100 transform scale-95 transition-transform duration-300" id="edit_modal_panel">
        <div class="p-6 border-b border-slate-100 flex justify-between items-center bg-slate-50/50">
            <h3 class="text-lg font-black text-slate-800">Edit Program Keahlian</h3>
            <button onclick="closeEditModal()" class="text-slate-400 hover:text-slate-600 text-xl font-bold">&times;</button>
        </div>
        
        <form id="edit_form" method="POST" enctype="multipart/form-data" class="p-6 space-y-4">
            @csrf
            @method('PUT') <div>
                <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Nama Jurusan</label>
                <input type="text" id="edit_nama" name="nama" class="w-full border border-slate-200 rounded-2xl p-3 bg-slate-50 focus:bg-white focus:ring-2 focus:ring-green-500/20 outline-none text-sm" required>
            </div>
            
            <div>
                <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Singkatan</label>
                <input type="text" id="edit_singkatan" name="singkatan" class="w-full border border-slate-200 rounded-2xl p-3 bg-slate-50 focus:bg-white focus:ring-2 focus:ring-green-500/20 outline-none text-sm uppercase" required>
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Ganti Gambar <span class="text-[10px] text-slate-400 font-normal">(Opsional, Bisa Banyak)</span></label>
                <input type="file" name="gambar[]" multiple class="w-full border border-slate-200 rounded-2xl p-2 bg-slate-50 text-xs file:mr-4 file:py-1.5 file:px-3 file:rounded-xl file:border-0 file:bg-slate-900 file:text-white" accept="image/*">
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Deskripsi</label>
                <textarea id="edit_deskripsi" name="deskripsi" rows="3" class="w-full border border-slate-200 rounded-2xl p-3 bg-slate-50 focus:bg-white focus:ring-2 focus:ring-green-500/20 outline-none text-sm resize-none"></textarea>
            </div>

            <div class="flex justify-end gap-3 pt-4 border-t border-slate-100">
                <button type="button" onclick="closeEditModal()" class="px-5 py-2.5 bg-slate-100 text-slate-600 font-bold rounded-xl text-xs hover:bg-slate-200 transition-colors">Batal</button>
                <button type="submit" class="px-6 py-2.5 bg-green-600 text-white font-bold rounded-xl text-xs hover:bg-green-700 shadow-md transition-all">Simpan</button>
            </div>
        </form>
    </div>
</div>

<div id="delete_modal" class="fixed inset-0 bg-slate-900/60 z-[70] hidden flex items-center justify-center backdrop-blur-sm p-4 opacity-0 transition-opacity duration-300">
    <div class="bg-white rounded-[2rem] shadow-2xl w-full max-w-sm overflow-hidden border border-slate-100 transform scale-95 transition-transform duration-300" id="delete_modal_panel">
        
        <div class="p-6 text-center pt-8">
            <div class="w-16 h-16 bg-red-100 text-red-500 rounded-full flex items-center justify-center mx-auto mb-4 border-4 border-red-50">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
            </div>
            
            <h3 class="text-xl font-black text-slate-800 mb-2">Hapus Jurusan?</h3>
            <p class="text-sm text-slate-500 mb-2">Anda yakin ingin menghapus program keahlian <br><span id="delete_jurusan_name" class="font-bold text-red-500"></span>?</p>
            <p class="text-xs text-slate-400">Tindakan ini tidak dapat dibatalkan.</p>
        </div>
        
        <div class="p-4 bg-slate-50 border-t border-slate-100 flex gap-3">
            <button type="button" onclick="closeDeleteModal()" class="flex-1 px-4 py-3 bg-white border border-slate-200 text-slate-600 font-bold rounded-xl text-sm hover:bg-slate-100 transition-colors">Batal</button>
            
            <form id="delete_form" method="POST" class="flex-1">
                @csrf @method('DELETE')
                <button type="submit" class="w-full px-4 py-3 bg-red-500 text-white font-bold rounded-xl text-sm hover:bg-red-600 shadow-md shadow-red-500/20 transition-all">Ya, Hapus!</button>
            </form>
        </div>
    </div>
</div>

<script>
function openEditModal(id, nama, singkatan, deskripsi) {
    // Menyesuaikan action URL agar menembak rute update dengan benar
    document.getElementById('edit_form').action = '/admin/jurusan/' + id + '/update';
    document.getElementById('edit_nama').value = nama;
    document.getElementById('edit_singkatan').value = singkatan;
    document.getElementById('edit_deskripsi').value = deskripsi;
    
    const modal = document.getElementById('edit_modal');
    const panel = document.getElementById('edit_modal_panel');
    
    modal.classList.remove('hidden');
    setTimeout(() => {
        modal.classList.remove('opacity-0');
        panel.classList.remove('scale-95');
    }, 10);
}

function closeEditModal() {
    const modal = document.getElementById('edit_modal');
    const panel = document.getElementById('edit_modal_panel');
    
    modal.classList.add('opacity-0');
    panel.classList.add('scale-95');
    setTimeout(() => {
        modal.classList.add('hidden');
    }, 300);
}

function openDeleteModal(id, namaJurusan) {
    const modal = document.getElementById('delete_modal');
    const panel = document.getElementById('delete_modal_panel');
    
    document.getElementById('delete_form').action = '/admin/jurusan/delete/' + id;
    document.getElementById('delete_jurusan_name').innerText = namaJurusan;
    
    modal.classList.remove('hidden');
    setTimeout(() => {
        modal.classList.remove('opacity-0');
        panel.classList.remove('scale-95');
    }, 10);
}

function closeDeleteModal() {
    const modal = document.getElementById('delete_modal');
    const panel = document.getElementById('delete_modal_panel');
    
    modal.classList.add('opacity-0');
    panel.classList.add('scale-95');
    setTimeout(() => {
        modal.classList.add('hidden');
    }, 300);
}
</script>
@endsection