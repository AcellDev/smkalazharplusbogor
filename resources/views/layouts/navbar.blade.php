<!-- NAV ATAS (Desktop Rapi & Proporsional, Mobile Minimalis) -->
<nav class="w-full bg-white shadow-sm fixed top-0 left-0 right-0 z-50 border-b border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 md:py-4 flex items-center justify-between">
        
        <!-- Area Logo (Kiri) - Ukuran Diperbesar Sesuai Gambar -->
        <div class="flex items-center flex-shrink-0">
            <a href="/" class="flex items-center gap-4 group">
                <div class="w-16 h-16 md:w-20 md:h-20 flex items-center justify-center overflow-hidden">
                    <img src="{{ asset('images/logo-alza.png') }}" class="w-full h-full object-contain transition-transform duration-300 group-hover:scale-105" alt="Logo SMK">
                </div>
                <div>
                    <h1 class="font-black text-green-900 leading-none text-base md:text-xl tracking-tight">SMK AL-AZHAR</h1>
                    <p class="text-[10px] md:text-xs font-bold text-yellow-500 tracking-widest uppercase mt-1">Plus Bogor</p>
                </div>
            </a>
        </div>

        <!-- Menu Navigasi Tengah (Khusus Desktop) -->
        <div class="hidden md:flex items-center justify-center gap-8 bg-slate-50 px-8 py-2.5 rounded-full border border-slate-100 shadow-inner">
            <a href="/" class="text-sm transition-colors {{ request()->is('/') ? 'font-bold text-green-700' : 'font-semibold text-slate-500 hover:text-green-700' }}">Beranda</a>
            <a href="/profil" class="text-sm transition-colors {{ request()->is('profil*') ? 'font-bold text-green-700' : 'font-semibold text-slate-500 hover:text-green-700' }}">Profil</a>
            <a href="/program" class="text-sm transition-colors {{ request()->is('program*') ? 'font-bold text-green-700' : 'font-semibold text-slate-500 hover:text-green-700' }}">Program Studi</a>
            <a href="/galeri" class="text-sm transition-colors {{ request()->is('galeri*') ? 'font-bold text-green-700' : 'font-semibold text-slate-500 hover:text-green-700' }}">Galeri</a>
        </div>

        <!-- Tombol WhatsApp Kanan (Bukan Bulatan Aneh Lagi) -->
        <div class="flex items-center flex-shrink-0">
            <!-- Versi Desktop (Tombol Panjang) -->
            <a href="https://wa.me/6285210579586" target="_blank" rel="noopener noreferrer" class="hidden md:inline-flex items-center justify-center px-6 py-2.5 text-sm font-bold text-white bg-emerald-800 rounded-full hover:bg-emerald-900 transition-colors shadow-md gap-2">
                <i class="fab fa-whatsapp text-lg"></i> 
                <span>Hubungi Kami</span>
            </a>
            
            <!-- Versi Mobile (Bulat Ringkas Khusus Layar HP) -->
            <a href="https://wa.me/6285210579586" target="_blank" rel="noopener noreferrer" class="inline-flex md:hidden items-center justify-center w-10 h-10 text-white bg-emerald-800 rounded-full hover:bg-emerald-900 transition-colors shadow-md">
                <i class="fab fa-whatsapp text-lg"></i>
            </a>
        </div>
        
    </div>
</nav>

<!-- BOTTOM NAVIGATION (Khusus Mobile - Ukuran Icon & Tulisan Diperbesar) -->
<div class="block md:hidden fixed bottom-5 left-4 right-4 z-50 bg-white/95 backdrop-blur-md rounded-2xl shadow-xl border border-slate-100 px-4 py-3">
    <div class="flex justify-around items-center w-full">
        <a href="/" class="flex flex-col items-center gap-1 {{ request()->is('/') ? 'text-green-700' : 'text-slate-400' }}">
            <i class="fas fa-home text-xl"></i>
            <span class="text-[11px] font-bold">Beranda</span>
        </a>
        <a href="/profil" class="flex flex-col items-center gap-1 {{ request()->is('profil*') ? 'text-green-700' : 'text-slate-400' }}">
            <i class="fas fa-user-graduate text-xl"></i>
            <span class="text-[11px] font-bold">Profil</span>
        </a>
        <a href="/program" class="flex flex-col items-center gap-1 {{ request()->is('program*') ? 'text-green-700' : 'text-slate-400' }}">
            <i class="fas fa-book-open text-xl"></i>
            <span class="text-[11px] font-bold">Prodi</span>
        </a>
        <a href="/galeri" class="flex flex-col items-center gap-1 {{ request()->is('galeri*') ? 'text-green-700' : 'text-slate-400' }}">
            <i class="fas fa-images text-xl"></i>
            <span class="text-[11px] font-bold">Galeri</span>
        </a>
    </div>
</div>