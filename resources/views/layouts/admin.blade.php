<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - SMK Al-Azhar Plus</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('images/logo-alza.png') }}">
    
    <style>
        /* Terapkan font Plus Jakarta Sans */
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        
        /* Pattern khas Al-Azhar */
        .bg-pattern { background-image: radial-gradient(#cbd5e1 1px, transparent 1px); background-size: 24px 24px; }
        .bg-pattern-light { background-image: radial-gradient(rgba(255,255,255,0.2) 1px, transparent 1px); background-size: 24px 24px; }
        
        /* Scrollbar styling */
        ::-webkit-scrollbar { width: 6px; height: 6px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased h-screen flex overflow-hidden selection:bg-yellow-300 selection:text-green-900">

    <aside class="w-[280px] bg-green-900 flex flex-col shadow-2xl shrink-0 z-50 relative overflow-hidden">
        
        <div class="absolute inset-0 bg-pattern-light opacity-30 pointer-events-none"></div>
        <div class="absolute top-0 right-0 w-64 h-64 bg-yellow-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 pointer-events-none -translate-y-1/2 translate-x-1/2"></div>
        
        <div class="h-24 flex items-center gap-3.5 px-8 border-b border-white/10 relative z-10 shrink-0 bg-green-950/30">
            <img src="{{ asset('images/logo-alza.png') }}" class="w-11 h-11 object-contain bg-white rounded-xl shadow-lg border-2 border-yellow-400 shrink-0 p-1" alt="Logo SMK Al-Azhar Plus">
            
            <div class="flex flex-col justify-center">
                <h1 class="font-extrabold text-white tracking-wide text-[15px] leading-tight">Al-Azhar Plus</h1>
                <span class="text-[10px] text-yellow-400 font-bold tracking-widest uppercase mt-0.5">Ruang Admin</span>
            </div>
        </div>

        <div class="flex-1 overflow-y-auto py-6 px-5 space-y-2 relative z-10">
            <p class="px-3 text-[10px] font-bold text-green-200/60 uppercase tracking-widest mb-3">Pusat Kendali</p>

            <a href="/admin/dashboard" class="flex items-center gap-3 px-4 py-3.5 rounded-xl transition-all duration-300 font-bold {{ request()->is('admin/dashboard') ? 'bg-yellow-400 text-green-900 shadow-md hover:bg-yellow-500' : 'text-green-50 hover:bg-green-800 hover:text-white' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                Dashboard
            </a>

            <a href="/admin/galeri" class="flex items-center gap-3 px-4 py-3.5 rounded-xl transition-all duration-300 font-bold {{ request()->is('admin/galeri') ? 'bg-yellow-400 text-green-900 shadow-md hover:bg-yellow-500' : 'text-green-50 hover:bg-green-800 hover:text-white' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                Kelola Galeri
            </a>

            <a href="/admin/jurusan" class="flex items-center gap-3 px-4 py-3.5 rounded-xl transition-all duration-300 font-bold {{ request()->is('admin/jurusan') ? 'bg-yellow-400 text-green-900 shadow-md hover:bg-yellow-500' : 'text-green-50 hover:bg-green-800 hover:text-white' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                Program Keahlian
            </a>

            <a href="/admin/kontak" class="flex items-center gap-3 px-4 py-3.5 rounded-xl transition-all duration-300 font-bold {{ request()->is('admin/kontak') ? 'bg-yellow-400 text-green-900 shadow-md hover:bg-yellow-500' : 'text-green-50 hover:bg-green-800 hover:text-white' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                Info & Kontak
            </a>
        </div>

        <div class="p-5 border-t border-white/10 relative z-10 bg-green-950/30">
            <form action="{{ route('logout') ?? '#' }}" method="POST">
                @csrf
                <button type="submit" class="w-full flex items-center justify-center gap-2 bg-transparent hover:bg-red-500/20 text-green-100 hover:text-red-300 font-bold py-3.5 rounded-xl transition-all border border-green-700/50 hover:border-red-500/50">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                    Logout Sesi
                </button>
            </form>
        </div>
    </aside>

    <main class="flex-1 flex flex-col h-screen overflow-hidden relative bg-slate-50">
        
        <header class="h-20 bg-white border-b-4 border-yellow-400 px-8 flex items-center justify-between z-40 shrink-0 sticky top-0 shadow-sm">
            
            <div class="flex items-center gap-3">
                <div class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></div>
                <h2 class="text-sm font-bold text-slate-500 uppercase tracking-widest hidden md:block">Panel Administrator</h2>
            </div>

            <div class="flex items-center gap-5">
                <a href="/" target="_blank" class="text-xs font-bold text-slate-500 hover:text-green-700 transition-all duration-300 flex items-center gap-2 bg-slate-100 hover:bg-green-50 px-4 py-2 rounded-lg border border-slate-200">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                    Lihat Web Publik
                </a>
                
                <div class="h-6 w-px bg-slate-200"></div>
                
                <div class="flex items-center gap-3">
                    <div class="text-right hidden sm:block">
                        <p class="text-sm font-bold text-slate-800">{{ auth()->user()->name ?? 'Administrator' }}</p>
                    </div>
                    <div class="w-10 h-10 bg-green-900 text-yellow-400 rounded-full flex items-center justify-center font-black text-lg border-2 border-white shadow-md">
                        {{ substr(auth()->user()->name ?? 'A', 0, 1) }}
                    </div>
                </div>
            </div>
        </header>

        <div class="flex-1 overflow-y-auto px-8 py-10 relative">
            <div class="max-w-7xl mx-auto">
                @yield('content')
            </div>
        </div>
    </main>

</body>
</html>