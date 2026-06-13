<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - SMK Al-Azhar Plus Bogor</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('images/logo-alza.png') }}">
    <style> body { font-family: 'Plus Jakarta Sans', sans-serif; } </style>
</head>
<body class="bg-white min-h-screen antialiased text-slate-800">

    <div class="flex min-h-screen">

        <!-- SISI KIRI: Visual Selaras dengan Beranda -->
        <div class="hidden lg:flex lg:w-[55%] relative flex-col justify-start overflow-hidden p-12 xl:p-16 pt-20">
            
            <img src="{{ asset('images/alza1.jpeg') }}" class="absolute inset-0 w-full h-full object-cover" alt="Gedung SMK Al-Azhar">
            <div class="absolute inset-0 bg-gradient-to-br from-green-950/95 via-green-900/85 to-yellow-700/40"></div>

            <!-- LOGO SISI KIRI -->
            <div class="relative z-10 flex items-center gap-3 mb-12">
                <img src="{{ asset('images/logo-alza.png') }}" class="h-12 w-auto" alt="Logo SMK Al-Azhar" onerror="this.style.display='none'">
                <div class="flex flex-col">
                    <span class="text-white font-extrabold text-lg tracking-wide leading-tight">SMK AL-AZHAR</span>
                    <span class="text-yellow-400 font-extrabold text-sm tracking-widest leading-tight">PLUS BOGOR</span>
                </div>
            </div>

            <div class="relative z-10 max-w-lg">
                <h1 class="text-4xl xl:text-5xl font-extrabold text-white mb-4 leading-tight tracking-tight">
                    Kelola Sistem Sekolah dengan <br> <span class="text-yellow-400">Lebih Cerdas.</span>
                </h1>
                <p class="text-green-50 text-base leading-relaxed mb-10 opacity-90">
                    Portal akses terintegrasi khusus bagi tenaga pendidik dan administrator SMK Al-Azhar Plus Bogor.
                </p>
                
                <div class="inline-flex items-center gap-4 bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-4 pr-6">
                    <div class="bg-green-500/20 p-2.5 rounded-lg text-yellow-400">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <div>
                        <h3 class="text-white font-semibold text-sm">Sistem Terenkripsi & Aman</h3>
                        <p class="text-green-100 text-xs mt-0.5">Akses data dilindungi penuh</p>
                    </div>
                </div>
            </div>
            
        </div>

        <!-- SISI KANAN: Form Login -->
        <div class="w-full lg:w-[45%] flex flex-col relative bg-white">
            
            <div class="absolute top-8 right-8 sm:top-10 sm:right-12">
                <a href="/" class="flex items-center gap-2 text-sm font-semibold text-slate-400 hover:text-slate-700 transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Kembali
                </a>
            </div>

            <div class="flex-1 flex flex-col justify-center px-8 sm:px-14 md:px-20 xl:px-24">
                
                <div class="mb-10">
                    <!-- LOGO SISI KANAN -->
                    <div class="flex items-center gap-3 mb-10">
                        <img src="{{ asset('images/logo-alza.png') }}" class="h-12 w-auto" alt="Logo SMK Al-Azhar" onerror="this.style.display='none'">
                        <div class="flex flex-col">
                            <span class="text-slate-900 font-extrabold text-lg tracking-wide leading-tight">SMK AL-AZHAR</span>
                            <span class="text-yellow-500 font-extrabold text-sm tracking-widest leading-tight">PLUS BOGOR</span>
                        </div>
                    </div>

                    <h2 class="text-3xl font-bold text-slate-900 mb-2">Masuk ke Akun</h2>
                    <p class="text-slate-500 text-sm font-medium">Silakan isi detail Anda untuk mengakses dasbor admin.</p>
                </div>

                @if($errors->any())
                    <div class="bg-red-50 text-red-600 p-4 rounded-xl text-sm mb-6 font-medium border border-red-100">
                        {{ $errors->first() }}
                    </div>
                @endif

                <form action="/admin/login" method="POST" class="space-y-5">
                    @csrf
                    
                    <div>
                        <label for="email" class="block text-sm font-semibold text-slate-700 mb-1.5">Email</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required 
                            class="w-full px-4 py-3.5 rounded-xl border border-slate-200 bg-slate-50 focus:bg-white focus:ring-2 focus:ring-green-600 focus:border-green-600 outline-none transition-colors text-sm font-medium" 
                            placeholder="admin@alazhar.test">
                    </div>

                    <div>
                        <div class="flex items-center justify-between mb-1.5">
                            <label for="password" class="block text-sm font-semibold text-slate-700">Kata Sandi</label>
                            <a href="#" class="text-xs font-semibold text-green-600 hover:text-green-700 transition-colors">Lupa Sandi?</a>
                        </div>
                        <input id="password" type="password" name="password" required 
                            class="w-full px-4 py-3.5 rounded-xl border border-slate-200 bg-slate-50 focus:bg-white focus:ring-2 focus:ring-green-600 focus:border-green-600 outline-none transition-colors text-sm font-medium" 
                            placeholder="••••••••">
                    </div>

                    <div class="pt-4">
                        <button type="submit" 
                            class="w-full bg-green-700 hover:bg-green-800 text-white font-semibold py-3.5 rounded-xl transition-all shadow-sm active:scale-[0.98] text-sm">
                            Masuk Dasbor
                        </button>
                    </div>
                </form>

            </div>

            <div class="py-6 px-8 sm:px-12 flex justify-between items-center text-xs font-medium text-slate-400">
                <p>&copy; 2026 SMK Al-Azhar Plus.</p>
                <p>v.2.0.0</p>
            </div>

        </div>

    </div>

</body>
</html>