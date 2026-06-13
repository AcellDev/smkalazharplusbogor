@extends('layouts.admin')
<link rel="icon" type="image/png" href="{{ asset('images/logo-alza.png') }}">
@section('content')
<div class="mb-10 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
    <div>
        <h2 class="text-3xl font-black text-slate-800 tracking-tight">Info & Kontak</h2>
        <p class="text-sm text-slate-500 mt-1">Kelola alamat, saluran komunikasi, dan lokasi maps sekolah.</p>
    </div>
    <div>
        <span class="inline-flex items-center gap-2 bg-white border border-slate-200 text-slate-700 text-xs font-bold px-4 py-2.5 rounded-2xl shadow-sm">
            <span class="w-2 h-2 rounded-full bg-yellow-400 animate-pulse"></span> Data Publik
        </span>
    </div>
</div>

@if(session('success'))
<div class="bg-emerald-50 border border-emerald-200 text-emerald-800 p-4 rounded-2xl mb-8 shadow-sm flex items-center gap-3 animate-fadeIn">
    <svg class="w-5 h-5 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
    <span class="text-sm font-semibold">{{ session('success') }}</span>
</div>
@endif

<form action="/admin/kontak/update" method="POST">
    @csrf
    
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
        
        <div class="lg:col-span-7 space-y-8">
            <div class="bg-white p-6 sm:p-8 rounded-[2rem] shadow-sm border border-slate-200/60 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-green-50 rounded-bl-[4rem] -z-0"></div>
                
                <h3 class="text-lg font-extrabold text-slate-800 mb-6 flex items-center gap-2.5 relative z-10">
                    <span class="w-1.5 h-5 bg-green-600 rounded-full"></span>
                    Saluran Komunikasi Utama
                </h3>
                
                <div class="space-y-6 relative z-10">
                    
                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Alamat Lengkap Sekolah</label>
                        <textarea name="alamat" rows="3" class="w-full border border-slate-200 rounded-2xl p-3.5 bg-slate-50 focus:bg-white focus:ring-2 focus:ring-green-500/20 focus:border-green-600 outline-none transition-all text-sm resize-none" placeholder="Masukkan alamat lengkap dengan RT/RW dan Kode Pos..." required>{{ $kontak->alamat ?? '' }}</textarea>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Email Resmi</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                </div>
                                <input type="email" name="email" value="{{ $kontak->email ?? '' }}" class="w-full border border-slate-200 rounded-2xl pl-11 pr-3.5 py-3.5 bg-slate-50 focus:bg-white focus:ring-2 focus:ring-green-500/20 focus:border-green-600 outline-none transition-all text-sm font-medium text-slate-700" placeholder="info@sekolah.sch.id" required>
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Username Instagram</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400 font-bold">
                                    @
                                </div>
                                <input type="text" name="instagram" value="{{ $kontak->instagram ?? '' }}" class="w-full border border-slate-200 rounded-2xl pl-9 pr-3.5 py-3.5 bg-slate-50 focus:bg-white focus:ring-2 focus:ring-green-500/20 focus:border-green-600 outline-none transition-all text-sm font-medium text-slate-700" placeholder="smkalazharplus" required>
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Telepon Kantor</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                </div>
                                <input type="text" name="telepon" value="{{ $kontak->telepon ?? '' }}" class="w-full border border-slate-200 rounded-2xl pl-11 pr-3.5 py-3.5 bg-slate-50 focus:bg-white focus:ring-2 focus:ring-green-500/20 focus:border-green-600 outline-none transition-all text-sm font-medium text-slate-700" placeholder="(0251) 123456" required>
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">WhatsApp (CS/PPDB)</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                                </div>
                                <input type="text" name="whatsapp" value="{{ $kontak->whatsapp ?? '' }}" class="w-full border border-slate-200 rounded-2xl pl-11 pr-3.5 py-3.5 bg-slate-50 focus:bg-white focus:ring-2 focus:ring-green-500/20 focus:border-green-600 outline-none transition-all text-sm font-bold text-green-700" placeholder="081234567890" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="lg:col-span-5 space-y-8">
            <div class="bg-white p-6 sm:p-8 rounded-[2rem] shadow-sm border border-slate-200/60 flex flex-col h-full">
                <h3 class="text-lg font-extrabold text-slate-800 mb-6 flex items-center gap-2.5">
                    <span class="w-1.5 h-5 bg-yellow-400 rounded-full"></span>
                    Integrasi Google Maps
                </h3>
                
                <div class="flex-grow flex flex-col space-y-6">
                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Link Iframe Peta</label>
                        <textarea name="maps_iframe" rows="3" class="w-full border border-slate-200 rounded-2xl p-3.5 bg-slate-50 focus:bg-white focus:ring-2 focus:ring-green-500/20 focus:border-green-600 outline-none transition-all text-sm resize-none font-mono text-[11px]" placeholder="<iframe src='https://www.google.com/maps/embed?...'></iframe>">{{ $kontak->maps_iframe ?? '' }}</textarea>
                        <p class="text-[10px] text-slate-400 mt-2 font-medium">*Buka Google Maps > Share > Embed a map > Copy HTML.</p>
                    </div>

                    <div class="flex-grow flex flex-col">
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-2">Preview Lokasi</label>
                        <div class="w-full flex-grow min-h-[200px] rounded-2xl border-4 border-slate-100 bg-slate-50 overflow-hidden relative shadow-inner">
                            @if(isset($kontak->maps_iframe) && $kontak->maps_iframe != '')
                                <div class="w-full h-full [&>iframe]:w-full [&>iframe]:h-full [&>iframe]:border-0">
                                    {!! $kontak->maps_iframe !!}
                                </div>
                            @else
                                <div class="absolute inset-0 flex flex-col items-center justify-center text-slate-400 p-6 text-center">
                                    <svg class="w-10 h-10 mb-2 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path></svg>
                                    <span class="text-xs font-bold">Preview Maps Kosong</span>
                                    <span class="text-[10px] mt-1">Masukkan iframe di atas untuk melihat preview.</span>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="lg:col-span-12">
            <div class="bg-white p-6 sm:p-8 rounded-[2rem] shadow-sm border border-slate-200/60 flex flex-col sm:flex-row items-center justify-between gap-4">
                <div>
                    <h4 class="text-slate-800 font-bold text-lg">Perbarui Info Kontak</h4>
                    <p class="text-slate-500 text-sm">Pastikan nomor WhatsApp dan Email sudah aktif untuk layanan PPDB.</p>
                </div>
                <button type="submit" class="w-full sm:w-auto bg-green-600 hover:bg-green-700 text-white font-extrabold px-10 py-4 rounded-2xl transition-all shadow-md shadow-green-600/10 active:scale-95">
                    Simpan Data Kontak
                </button>
            </div>
        </div>

    </div>
</form>
@endsection