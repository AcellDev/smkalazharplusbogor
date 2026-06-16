@extends('layouts.admin')

@section('content')
<div class="relative bg-green-900 rounded-[2rem] p-8 sm:p-10 mb-8 overflow-hidden shadow-lg border-b-4 border-yellow-400 flex flex-col md:flex-row items-center justify-between gap-8">
    <div class="absolute inset-0 bg-pattern-light opacity-20 pointer-events-none"></div>
    <div class="absolute right-0 top-0 w-64 h-64 bg-yellow-400 rounded-full mix-blend-overlay filter blur-3xl opacity-20 -translate-y-1/2 translate-x-1/4 pointer-events-none"></div>
    
    <div class="relative z-10">
        <span class="inline-block py-1 px-3 rounded-lg bg-yellow-400 text-green-900 text-[10px] font-black uppercase tracking-widest mb-3 shadow-sm">
            Sistem Terpusat
        </span>
        <h2 class="text-3xl sm:text-4xl font-black text-white tracking-tight mb-2">
            Assalamualaikum, {{ auth()->user()->name ?? 'Administrator' }}
        </h2>
        <p class="text-green-100 text-sm max-w-lg leading-relaxed">
            Selamat datang di pusat kendali website SMK Al-Azhar Plus Bogor. Pantau statistik dan kelola konten sekolah dengan mudah.
        </p>
    </div>
    
    <div class="relative z-10 w-full md:w-auto">
        <div class="bg-black/20 backdrop-blur-sm border border-white/10 rounded-2xl p-5 flex items-center gap-6">
            <div>
                <p class="text-green-200 text-[10px] font-bold uppercase tracking-widest mb-1">Status Server</p>
                <div class="flex items-center gap-2">
                    <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 shadow-[0_0_10px_rgba(52,211,153,0.8)] animate-pulse"></span>
                    <span class="text-white font-bold text-sm">Online</span>
                </div>
            </div>
            <div class="h-10 w-px bg-white/10"></div>
            <div>
                <p class="text-green-200 text-[10px] font-bold uppercase tracking-widest mb-1">Tanggal</p>
                <span class="text-white font-bold text-sm">{{ date('d M Y') }}</span>
            </div>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    
    <div class="bg-white p-6 rounded-[1.5rem] shadow-sm border border-slate-200 flex flex-col justify-center relative overflow-hidden group hover:-translate-y-1 hover:border-green-700 transition-all duration-300">
        <div class="absolute right-0 top-0 w-2 h-full bg-green-700"></div>
        <div class="relative z-10 flex items-center justify-between mb-4">
            <div class="w-12 h-12 rounded-xl bg-green-50 text-green-700 flex items-center justify-center group-hover:bg-green-700 group-hover:text-white transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
            </div>
        </div>
        <div class="relative z-10">
            <h4 class="text-3xl font-black text-slate-800">{{ $pengunjungHariIni }}</h4>
            <p class="text-[11px] font-bold text-slate-400 mt-1 uppercase tracking-wider">Pengunjung Hari Ini</p>
        </div>
    </div>

    <div class="bg-white p-6 rounded-[1.5rem] shadow-sm border border-slate-200 flex flex-col justify-center relative overflow-hidden group hover:-translate-y-1 hover:border-yellow-400 transition-all duration-300">
        <div class="absolute right-0 top-0 w-2 h-full bg-yellow-400"></div>
        <div class="relative z-10 flex items-center justify-between mb-4">
            <div class="w-12 h-12 rounded-xl bg-yellow-50 text-yellow-600 flex items-center justify-center group-hover:bg-yellow-400 group-hover:text-green-900 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
            </div>
        </div>
        <div class="relative z-10">
            <h4 class="text-3xl font-black text-slate-800">{{ $totalHits }}</h4>
            <p class="text-[11px] font-bold text-slate-400 mt-1 uppercase tracking-wider">Total Hits Website</p>
        </div>
    </div>

    <div class="bg-white p-6 rounded-[1.5rem] shadow-sm border border-slate-200 flex flex-col justify-center relative overflow-hidden group hover:-translate-y-1 hover:border-green-700 transition-all duration-300">
        <div class="absolute right-0 top-0 w-2 h-full bg-green-700"></div>
        <div class="relative z-10 flex items-center justify-between mb-4">
            <div class="w-12 h-12 rounded-xl bg-green-50 text-green-700 flex items-center justify-center group-hover:bg-green-700 group-hover:text-white transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            </div>
        </div>
        <div class="relative z-10">
            <h4 class="text-3xl font-black text-slate-800">{{ $totalGaleri }}</h4>
            <p class="text-[11px] font-bold text-slate-400 mt-1 uppercase tracking-wider">Total Foto Galeri</p>
        </div>
    </div>

    <div class="bg-white p-6 rounded-[1.5rem] shadow-sm border border-slate-200 flex flex-col justify-center relative overflow-hidden group hover:-translate-y-1 hover:border-yellow-400 transition-all duration-300">
        <div class="absolute right-0 top-0 w-2 h-full bg-yellow-400"></div>
        <div class="relative z-10 flex items-center justify-between mb-4">
            <div class="w-12 h-12 rounded-xl bg-yellow-50 text-yellow-600 flex items-center justify-center group-hover:bg-yellow-400 group-hover:text-green-900 transition-colors">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
            </div>
        </div>
        <div class="relative z-10">
            <h4 class="text-3xl font-black text-slate-800">{{ $totalJurusan }}</h4>
            <p class="text-[11px] font-bold text-slate-400 mt-1 uppercase tracking-wider">Program Keahlian</p>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    
    <div class="lg:col-span-2 bg-white rounded-[1.5rem] shadow-sm border border-slate-200 overflow-hidden flex flex-col">
        <div class="p-6 border-b border-slate-100 flex justify-between items-center bg-slate-50/50">
            <div>
                <h3 class="text-lg font-black text-green-900">Unggahan Galeri Terbaru</h3>
            </div>
            <a href="/admin/galeri" class="text-xs font-bold bg-white text-green-700 hover:bg-green-700 hover:text-white px-4 py-2 rounded-lg border border-green-700 transition-all">Lihat Semua</a>
        </div>
        <div class="p-4 flex-1">
            @php $recentGaleris = \App\Models\Galeri::latest()->take(3)->get(); @endphp

            @if($recentGaleris->count() > 0)
                <div class="flex flex-col gap-2">
                    @foreach($recentGaleris as $item)
                    <div class="flex items-center gap-4 p-3 rounded-xl hover:bg-slate-50 transition-colors group border border-transparent hover:border-slate-100">
                        <div class="w-14 h-14 rounded-lg overflow-hidden shrink-0 shadow-sm border border-slate-200">
                            <img src="{{ asset('images/galeri/' . $item->foto) }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="flex-1">
                            <h4 class="font-bold text-slate-800 text-sm line-clamp-1">{{ $item->judul }}</h4>
                            <div class="flex items-center gap-2 mt-1.5">
                                <span class="px-2 py-0.5 bg-yellow-100 text-yellow-800 border border-yellow-200 text-[9px] font-black uppercase rounded tracking-wider">{{ $item->kategori }}</span>
                                <span class="text-[10px] text-slate-400 font-medium">{{ $item->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @else
                <div class="h-full flex flex-col items-center justify-center py-10 text-slate-400 italic">
                    <svg class="w-10 h-10 mb-2 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    Belum ada foto.
                </div>
            @endif
        </div>
    </div>

    <div class="lg:col-span-1 bg-white rounded-[1.5rem] shadow-sm border border-slate-200 p-6 flex flex-col">
        <h3 class="text-lg font-black text-green-900 mb-6">Akses Cepat</h3>
        
        <div class="grid grid-cols-2 gap-3 flex-1">
            <a href="/admin/galeri" class="flex flex-col items-center justify-center p-4 rounded-xl bg-slate-50 hover:bg-green-900 hover:text-white group transition-all text-center border border-slate-200 hover:border-green-900">
                <div class="w-10 h-10 rounded-lg bg-white text-green-700 flex items-center justify-center shadow-sm mb-2 group-hover:scale-110 transition-transform">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                </div>
                <span class="font-bold text-[11px] text-slate-600 group-hover:text-yellow-400 transition-colors">Tambah Foto</span>
            </a>

            <a href="/admin/jurusan" class="flex flex-col items-center justify-center p-4 rounded-xl bg-slate-50 hover:bg-green-900 hover:text-white group transition-all text-center border border-slate-200 hover:border-green-900">
                <div class="w-10 h-10 rounded-lg bg-white text-green-700 flex items-center justify-center shadow-sm mb-2 group-hover:scale-110 transition-transform">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                </div>
                <span class="font-bold text-[11px] text-slate-600 group-hover:text-yellow-400 transition-colors">Edit Jurusan</span>
            </a>
        </div>
    </div>
</div>
@endsection