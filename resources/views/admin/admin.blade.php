<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - SMK Al-Azhar Plus</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('images/logo-alza.png') }}">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8fafc; }
        /* Kustomisasi Scrollbar biar elegan */
        ::-webkit-scrollbar { width: 8px; height: 8px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
    </style>
</head>
<body class="text-slate-800 antialiased flex h-screen overflow-hidden selection:bg-green-200 selection:text-green-900">

    <aside class="w-72 bg-slate-900 text-slate-300 flex flex-col transition-all relative z-50 border-r border-slate-800 shadow-2xl shrink-0">
        <div class="h-20 flex items-center px-8 border-b border-slate-800/60 bg-slate-950/30">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-gradient-to-br from-green-400 to-green-600 rounded-xl flex items-center justify-center shadow-lg shadow-green-500/20 text-white font-black text-xl">
                    A
                </div>
                <div>
                    <h1 class="font-bold text-white tracking-wide text-sm leading-tight">Admin Portal</h1>
                    <p class="text-[10px] text-slate-400 font-semibold tracking-widest uppercase">SMK Al-Azhar Plus</p>
                </div>
            </div>
        </div>

        <div class="flex-1 overflow-y-auto py-6 px-4 space-y-1.5">
            <p class="px-4 text-[11px] font-bold text-slate-500 uppercase tracking-widest mb-3">Menu Utama</p>

            <a href="/admin/dashboard" class="flex items-center gap-3 px-4 py-3.5 rounded-2xl transition-all font-semibold {{ request()->is('admin/dashboard') ? 'bg-green-600 text-white shadow-md shadow-green-900/50' : 'hover:bg-slate-800 hover:text-white' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                Dashboard
            </a>

            <a href="/admin/galeri" class="flex items-center gap-3 px-4 py-3.5 rounded-2xl transition-all font-semibold {{ request()->is('admin/galeri') ? 'bg-green-600 text-white shadow-md shadow-green-900/50' : 'hover:bg-slate-800 hover:text-white' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                Kelola Galeri
            </a>

            <a href="/admin/jurusan" class="flex items-center gap-3 px-4 py-3.5 rounded-2xl transition-all font-semibold {{ request()->is('admin/jurusan') ? 'bg-green-600 text-white shadow-md shadow-green-900/50' : 'hover:bg-slate-800 hover:text-white' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                Program Keahlian
            </a>

            <a href="/admin/kontak" class="flex items-center gap-3 px-4 py-3.5 rounded-2xl transition-all font-semibold {{ request()->is('admin/kontak') ? 'bg-green-600 text-white shadow-md shadow-green-900/50' : 'hover:bg-slate-800 hover:text-white' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                Info & Kontak
            </a>
        </div>

        <div class="p-4 border-t border-slate-800/60 bg-slate-950/30">
            <form action="{{ route('logout') ?? '#' }}" method="POST">
                @csrf
                <button type="submit" class="w-full flex items-center justify-center gap-2 bg-slate-800 hover:bg-red-500 text-slate-300 hover:text-white font-bold py-3.5 rounded-2xl transition-all group">
                    <svg class="w-5 h-5 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                    Keluar Sistem
                </button>
            </form>
        </div>
    </aside>

    <main class="flex-1 flex flex-col h-screen overflow-hidden relative">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-green-400/5 rounded-full blur-3xl pointer-events-none -translate-y-1/2 translate-x-1/2"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-blue-400/5 rounded-full blur-3xl pointer-events-none translate-y-1/2 -translate-x-1/4"></div>

        <header class="h-20 bg-white/70 backdrop-blur-md border-b border-slate-200/60 px-8 flex items-center justify-between z-40 sticky top-0">
            <div>
                <span class="bg-green-100 text-green-700 text-xs font-bold px-3 py-1.5 rounded-full flex items-center gap-2 border border-green-200/50 shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span> Sistem Terhubung
                </span>
            </div>

            <div class="flex items-center gap-5">
                <a href="/" target="_blank" class="text-sm font-bold text-slate-500 hover:text-green-600 transition-colors flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                    Lihat Website
                </a>
                <div class="h-8 w-px bg-slate-200"></div>
                <div class="flex items-center gap-3">
                    <div class="text-right hidden md:block">
                        <p class="text-sm font-extrabold text-slate-800">{{ auth()->user()->name ?? 'Administrator' }}</p>
                        <p class="text-xs text-slate-500 font-medium">Super Admin</p>
                    </div>
                    <div class="w-10 h-10 bg-slate-900 text-white rounded-full flex items-center justify-center font-bold text-lg shadow-md border-2 border-white">
                        {{ substr(auth()->user()->name ?? 'A', 0, 1) }}
                    </div>
                </div>
            </div>
        </header>

        <div class="flex-1 overflow-y-auto p-8 relative z-10">
            <div class="max-w-7xl mx-auto">
                @yield('content')
            </div>
        </div>
    </main>

</body>
</html>