<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Al-Azhar Plus Bogor - Profesional & Berkarakter</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('images/logo-alza.png') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        
        /* Background Putih dengan Dot Hijau */
        .bg-dots-white { 
            background-color: #ffffff;
            background-image: radial-gradient(rgba(21, 128, 61, 0.12) 2px, transparent 2px); 
            background-size: 32px 32px; 
        }

        /* Background Hijau Gelap dengan Dot Kuning */
        .bg-dots-green { 
            background-color: #14532d; /* green-900 */
            background-image: radial-gradient(rgba(250, 204, 21, 0.15) 2px, transparent 2px); 
            background-size: 32px 32px; 
        }
    </style>
</head>

<body class="bg-slate-50 text-slate-800 antialiased selection:bg-yellow-300 selection:text-green-900">

 @include('layouts.navbar')

    <!-- 2. HERO SECTION -->
    <div class="relative isolate min-h-screen flex flex-col justify-center bg-green-950 overflow-hidden pt-20">
        <img src="{{ asset('images/alza1.jpeg') }}" alt="Gedung Sekolah" class="absolute inset-0 -z-20 h-full w-full object-cover">
        <div class="absolute inset-0 -z-10 bg-gradient-to-b from-green-900/70 via-green-900/60 to-green-950/90"></div>
        <div class="absolute top-1/4 right-0 -z-10 transform-gpu blur-3xl opacity-30" aria-hidden="true">
            <div class="aspect-[1404/767] w-[87.75rem] bg-gradient-to-tr from-green-400 to-yellow-400"></div>
        </div>

        <div class="text-center container mx-auto px-6 max-w-4xl relative z-10 w-full" data-aos="fade-up" data-aos-duration="1000">
            <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                <div class="relative rounded-full px-4 py-1.5 text-sm leading-6 text-white ring-1 ring-white/30 backdrop-blur-sm bg-white/10 shadow-lg flex items-center">
                    <span class="mr-2"> Pendaftaran Peserta Didik Baru Telah Dibuka.</span> 
                    <a href="/pendaftaran" class="font-semibold text-yellow-400 border-l border-white/30 pl-2 ml-1 hover:text-yellow-300 transition-colors">Daftar Sekarang <span aria-hidden="true">→</span></a>
                </div>
            </div>
            
            <h1 class="text-4xl md:text-5xl lg:text-7xl font-extrabold tracking-tight text-white mb-6 drop-shadow-lg leading-tight">
                Selamat Datang di <br><span class="text-yellow-400">SMK Al-Azhar</span> Plus Bogor
            </h1>
            
            <p class="mt-6 text-lg md:text-xl leading-8 text-green-50 max-w-2xl mx-auto font-medium drop-shadow">
                Mengintegrasikan pendidikan vokasi berbasis kompetensi industri modern dengan penanaman nilai Islami yang kokoh untuk membentuk generasi profesional dan berakhlak mulia.
            </p>
            
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="/program" class="rounded-full bg-yellow-400 px-8 py-3.5 text-sm font-bold text-green-950 shadow-lg hover:shadow-xl hover:bg-yellow-300 transition-all transform hover:-translate-y-1">
                    Jelajahi Program
                </a>
                <a href="/profil" class="rounded-full bg-white/20 border border-white/30 px-8 py-3.5 text-sm font-semibold leading-6 text-white hover:bg-white/30 transition-all backdrop-blur-md shadow-lg transform hover:-translate-y-1">
                    Profil Sekolah
                </a>
            </div>
        </div>
    </div>

    <!-- 3. SAMBUTAN KEPALA SEKOLAH -->
    <section class="py-24 bg-dots-white relative border-b border-slate-100 overflow-hidden">
        <div class="absolute right-0 top-0 w-1/3 h-full bg-green-50/70 rounded-l-[5rem] -z-10"></div>
        
        <div class="container mx-auto px-6 max-w-7xl relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="w-full lg:w-2/5" data-aos="fade-right">
                    <div class="bg-white p-3 rounded-2xl shadow-lg border border-slate-100">
                        <img src="images/guru/Bu_Mega.jpg" alt="Kepala Sekolah" class="w-full h-[450px] object-cover rounded-xl grayscale hover:grayscale-0 transition-all duration-700 cursor-pointer">
                    </div>
                </div>
                <div class="w-full lg:w-3/5" data-aos="fade-left">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-1 bg-green-600 rounded-full"></div>
                        <h2 class="text-green-700 font-bold uppercase tracking-widest text-sm bg-white px-3 py-1 rounded-lg shadow-sm border border-green-100">Sambutan Pimpinan</h2>
                    </div>
                    <h3 class="text-4xl md:text-5xl font-black text-slate-800 tracking-tight mb-8">Membangun Karakter, <br>Mencetak Profesional.</h3>
                    <div class="text-slate-600 text-lg leading-relaxed mb-8 space-y-4 font-medium relative">
                        <svg class="absolute -top-6 -left-8 w-16 h-16 text-slate-200 -z-10" fill="currentColor" viewBox="0 0 32 32"><path d="M9.333 13.333c0-3.682 2.985-6.667 6.667-6.667h1.333v2.667h-1.333c-2.209 0-4 1.791-4 4v2.667h5.333v10.667h-10.667v-13.333zM25.333 13.333c0-3.682 2.985-6.667 6.667-6.667h1.333v2.667h-1.333c-2.209 0-4 1.791-4 4v2.667h5.333v10.667h-10.667v-13.333z"></path></svg>
                        <p class="bg-white/90 p-4 rounded-xl shadow-sm border border-slate-100 backdrop-blur-sm">Selamat datang di portal resmi SMK Al-Azhar Plus Bogor. Di era kompetensi global yang bergerak sangat dinamis ini, pemenuhan keahlian vokasi praktis serta integritas moral yang tinggi menjadi kunci utama daya saing lulusan.</p>
                        <p class="bg-white/90 p-4 rounded-xl shadow-sm border border-slate-100 backdrop-blur-sm">Kami berkomitmen kuat untuk tidak hanya mentransfer aspek keterampilan teknologi industri, melainkan juga secara konsisten membina etika kerja akhlakul karimah melalui pembiasaan spiritual harian.</p>
                    </div>
                    <div class="flex items-center gap-4 bg-white p-4 rounded-2xl w-max shadow-sm border border-slate-100">
                        <div class="w-12 h-12 rounded-full bg-slate-200">
                            <img src="images/guru/Bu_Mega.jpg">
                        </div>
                        <div>
                            <h4 class="font-extrabold text-slate-800">Ibu Megawati S.Pd., M.Pd.</h4>
                            <p class="text-sm font-bold text-green-600">Kepala SMK Al-Azhar Plus Bogor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. KEUNGGULAN SEKOLAH (Feature Grid) -->
    <section class="py-24 bg-dots-green border-y border-green-950 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-green-950/60 to-transparent pointer-events-none"></div>

        <div class="container mx-auto px-6 max-w-6xl relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-20" data-aos="fade-up">
                <h2 class="text-yellow-400 font-bold uppercase tracking-widest text-sm mb-4">Nilai Tambah Institusi</h2>
                <h3 class="text-4xl md:text-5xl font-black text-white tracking-tight mb-6">Segala yang Anda butuhkan untuk sukses</h3>
                <p class="text-green-50/80 text-lg leading-relaxed font-medium">
                    Kurikulum unggulan yang dirancang khusus untuk memastikan setiap siswa siap menghadapi ekosistem dunia kerja dengan kapabilitas tinggi dan fondasi moral kokoh.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-x-12 gap-y-16">
                <!-- Poin 1 -->
                <div data-aos="fade-up" data-aos-delay="100" class="flex gap-5 items-start">
                    <div class="w-14 h-14 shrink-0 bg-yellow-400 text-green-950 rounded-xl flex items-center justify-center shadow-lg mt-1">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-white mb-2">Pendidikan Karakter</h4>
                        <p class="text-green-50/70 leading-relaxed font-medium">Menanamkan nilai religius universal guna membentuk profesional muda berakhlakul karimah secara seimbang dan konsisten.</p>
                    </div>
                </div>
                <!-- Poin 2 -->
                <div data-aos="fade-up" data-aos-delay="200" class="flex gap-5 items-start">
                    <div class="w-14 h-14 shrink-0 bg-yellow-400 text-green-950 rounded-xl flex items-center justify-center shadow-lg mt-1">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-white mb-2">Fasilitas Modern</h4>
                        <p class="text-green-50/70 leading-relaxed font-medium">Dilengkapi penyediaan laboratorium komputasi praktis harian yang dikonfigurasikan sesuai standar kebutuhan industri terkini.</p>
                    </div>
                </div>
                <!-- Poin 3 -->
                <div data-aos="fade-up" data-aos-delay="300" class="flex gap-5 items-start">
                    <div class="w-14 h-14 shrink-0 bg-yellow-400 text-green-950 rounded-xl flex items-center justify-center shadow-lg mt-1">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-white mb-2">Link & Match DUDI</h4>
                        <p class="text-green-50/70 leading-relaxed font-medium">Penyelarasan kurikulum ajar bersama Dunia Usaha & Dunia Industri demi mengoptimalkan serapan kerja lulusan pasca sekolah.</p>
                    </div>
                </div>
                <!-- Poin 4 -->
                <div data-aos="fade-up" data-aos-delay="400" class="flex gap-5 items-start">
                    <div class="w-14 h-14 shrink-0 bg-yellow-400 text-green-950 rounded-xl flex items-center justify-center shadow-lg mt-1">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-white mb-2">Pembiasaan Ibadah</h4>
                        <p class="text-green-50/70 leading-relaxed font-medium">Pembiasaan rutinitas ibadah harian terintegrasi di lingkungan sekolah sebagai implementasi penguatan pondasi spiritual siswa.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

 <section class="py-16 md:py-24 bg-dots-white relative overflow-hidden">
    
    <div class="absolute inset-0 bg-gradient-to-b from-white/50 via-transparent to-white/50 pointer-events-none"></div>
    
    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="text-center mb-12" data-aos="fade-up">
            <span class="inline-block py-1 px-3 rounded-lg bg-emerald-100 text-emerald-800 text-[10px] font-black uppercase tracking-widest">
                Bidang Keahlian
            </span>
            <h2 class="text-3xl md:text-4xl font-black text-slate-900 tracking-tight mt-3 mb-2">
                Program Studi Unggulan
            </h2>
            <p class="text-slate-500 text-sm max-w-xl mx-auto leading-relaxed">
                Membentuk generasi kompeten, kreatif, dan siap kerja melalui kurikulum berbasis industri terkini.
            </p>
        </div>

       <div class="space-y-28">
    
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
        <div class="lg:col-span-5 space-y-6">
            <div class="flex items-center space-x-3 text-sm">
                <span class="font-extrabold text-amber-500 tracking-wider">2025–2026</span>
                <span class="h-1 w-1 rounded-full bg-gray-300"></span>
                <span class="font-medium text-emerald-600">Desain Komunikasi Visual</span>
            </div>
            <h3 class="text-3xl lg:text-4xl font-extrabold text-gray-900 tracking-tight">
                DKV
            </h3>
            <p class="text-gray-600 leading-relaxed text-sm lg:text-base">
                Mengembangkan kreativitas dalam menyampaikan pesan visual melalui media digital maupun cetak. Siswa dibekali keahlian ilustrasi, desain grafis, videografi, fotografi, hingga pengelolaan branding digital.
            </p>
            <div class="border-t border-gray-100 pt-6 space-y-3">
                <span class="text-xs font-bold text-gray-400 uppercase tracking-wider block">Fokus Utama:</span>
                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm text-gray-600">
                    <li class="flex items-center space-x-2.5">
                        <span class="flex h-5 w-5 items-center justify-center rounded-full bg-emerald-50 text-emerald-600 font-bold text-xs">✓</span>
                        <span>Praktik Laboratorium</span>
                    </li>
                    <li class="flex items-center space-x-2.5">
                        <span class="flex h-5 w-5 items-center justify-center rounded-full bg-emerald-50 text-emerald-600 font-bold text-xs">✓</span>
                        <span>Teaching Factory</span>
                    </li>
                    <li class="flex items-center space-x-2.5">
                        <span class="flex h-5 w-5 items-center justify-center rounded-full bg-emerald-50 text-emerald-600 font-bold text-xs">✓</span>
                        <span>Kewirausahaan Digital</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="lg:col-span-7">
            <div class="relative group">
                <div class="absolute -inset-2 rounded-2xl bg-gradient-to-r from-emerald-500 to-amber-400 opacity-10 blur-xl group-hover:opacity-20 transition duration-500"></div>
                <div class="relative aspect-[16/10] overflow-hidden rounded-2xl bg-gray-100 shadow-md auto-carousel">
                    <img src="images/alza1.jpeg" alt="DKV Showcase 1" class="carousel-item absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 ease-in-out opacity-100 transform group-hover:scale-105">
                    <img src="images/alza2.jpg" alt="DKV Showcase 2" class="carousel-item absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 ease-in-out opacity-0 transform group-hover:scale-105">
                    <img src="images/alza3.jpg" alt="DKV Showcase 3" class="carousel-item absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 ease-in-out opacity-0 transform group-hover:scale-105">
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
        <div class="lg:col-span-7 order-last lg:order-first">
            <div class="relative group">
                <div class="absolute -inset-2 rounded-2xl bg-gradient-to-r from-amber-400 to-emerald-500 opacity-10 blur-xl group-hover:opacity-20 transition duration-500"></div>
                <div class="relative aspect-[16/10] overflow-hidden rounded-2xl bg-gray-100 shadow-md auto-carousel">
                    <img src="images/alza1.jpeg" alt="OTKP Showcase 1" class="carousel-item absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 ease-in-out opacity-100 transform group-hover:scale-105">
                    <img src="images/alza2.jpg" alt="OTKP Showcase 2" class="carousel-item absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 ease-in-out opacity-0 transform group-hover:scale-105">
                    <img src="images/alza3.jpg" alt="OTKP Showcase 3" class="carousel-item absolute inset-0 w-full h-full object-cover transition-opacity duration-1000 ease-in-out opacity-0 transform group-hover:scale-105">
                </div>
            </div>
        </div>
        <div class="lg:col-span-5 space-y-6">
            <div class="flex items-center space-x-3 text-sm">
                <span class="font-extrabold text-amber-500 tracking-wider">2025–2026</span>
                <span class="h-1 w-1 rounded-full bg-gray-300"></span>
                <span class="font-medium text-emerald-600">Otomatisasi & Tata Kelola Perkantoran</span>
            </div>
            <h3 class="text-3xl lg:text-4xl font-extrabold text-gray-900 tracking-tight">
                Otomatisasi Tata Kelola Perkantoran (adm)
            </h3>
            <p class="text-gray-600 leading-relaxed text-sm lg:text-base">
                Mempelajari manajemen administrasi modern berskala nasional hingga internasional, pengarsipan berbasis cloud/digital, korespondensi bisnis, bisnis online, serta teknik komunikasi pelayanan prima.
            </p>
            <div class="border-t border-gray-100 pt-6 space-y-3">
                <span class="text-xs font-bold text-gray-400 uppercase tracking-wider block">Fokus Utama:</span>
                <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm text-gray-600">
                    <li class="flex items-center space-x-2.5">
                        <span class="flex h-5 w-5 items-center justify-center rounded-full bg-emerald-50 text-emerald-600 font-bold text-xs">✓</span>
                        <span>Simulasi Perkantoran</span>
                    </li>
                    <li class="flex items-center space-x-2.5">
                        <span class="flex h-5 w-5 items-center justify-center rounded-full bg-emerald-50 text-emerald-600 font-bold text-xs">✓</span>
                        <span>Kearsipan Digital</span>
                    </li>
                    <li class="flex items-center space-x-2.5">
                        <span class="flex h-5 w-5 items-center justify-center rounded-full bg-emerald-50 text-emerald-600 font-bold text-xs">✓</span>
                        <span>Administrasi Keuangan</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>

    </div>
</section>

    <!-- 6. GOOGLE MAPS & LOKASI (Feature Grid Style Sesuai Request) -->
    <section id="lokasi" class="py-24 bg-dots-green border-t border-green-800 overflow-hidden relative">
        <div class="absolute top-0 left-0 w-full h-full bg-green-950/20 pointer-events-none"></div>

        <div class="container mx-auto px-6 max-w-7xl relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                
                <div data-aos="fade-right" data-aos-duration="1000">
                    <h2 class="text-yellow-400 font-bold uppercase tracking-widest text-sm mb-3">Kunjungi Kami</h2>
                    <h3 class="text-4xl font-black text-white tracking-tight mb-6">Lokasi & Kontak Sekolah</h3>
                    <p class="text-green-50/80 mb-12 leading-relaxed font-medium">
                        Temukan rute tercepat menuju kampus kami atau hubungi nomor layanan informasi resmi tertera di bawah untuk konsultasi pendaftaran.
                    </p>

                    <!-- Diubah jadi style Feature Grid transparan seperti Nilai Tambah -->
                    <div class="space-y-8">
                        <div class="flex gap-5 items-start">
                            <div class="w-14 h-14 shrink-0 bg-yellow-400 text-green-950 rounded-xl flex items-center justify-center shadow-lg mt-1">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-white mb-2">Alamat Lengkap</h4>
                                <p class="text-green-50/70 leading-relaxed font-medium">Al Azhar Plus, Jl. Letjen Ibrahim Adjie No.219, RT.06/RW.03, Sindangbarang, Kec. Bogor Bar., Kota Bogor, Jawa Barat 16117</p>
                            </div>
                        </div>

                        <div class="flex gap-5 items-start">
                            <div class="w-14 h-14 shrink-0 bg-yellow-400 text-green-950 rounded-xl flex items-center justify-center shadow-lg mt-1">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-xl font-bold text-white mb-2">Telepon & WhatsApp</h4>
                                <p class="text-green-50/70 leading-relaxed font-medium">+62 852-1057-9586</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-aos="fade-left" data-aos-duration="1000" class="w-full h-[450px] bg-green-900/40 p-2 backdrop-blur-sm rounded-[2.5rem] border border-white/10 shadow-2xl">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.351239611369!2d106.7644265!3d-6.5919421!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c450bebc2127%3A0xbc70f44391696dfa!2sSMK%20Al%20Azhar%20Plus%20Bogor!5e0!3m2!1sid!2sid!4v1710000000000!5m2!1sid!2sid" 
                        class="w-full h-full border-0 rounded-[2rem]" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

            </div>
        </div>
    </section>

    <!-- 7. CALL TO ACTION (Link Pendaftaran Siap Dipakai Nanti) -->
    <section class="py-24 bg-dots-white relative border-b border-slate-200">
        <div class="container mx-auto px-6 max-w-7xl text-center" data-aos="fade-up">
            <h2 class="text-green-700 font-bold uppercase tracking-widest text-sm mb-3">Nilai-Nilai Dasar</h2>
            <h3 class="text-4xl font-black text-slate-800 tracking-tight mb-16">Budaya Sekolah Kami</h3>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 lg:gap-12">
                <div class="flex flex-col items-center">
                    <div class="w-20 h-20 bg-green-50 text-green-700 rounded-full flex items-center justify-center mb-5 shadow-sm border border-green-100">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    </div>
                    <h4 class="text-xl font-bold text-slate-800 mb-2">Religius</h4>
                    <p class="text-sm text-slate-500 font-medium leading-relaxed">Mengedepankan nilai-nilai keagamaan dalam setiap aktivitas.</p>
                </div>
                
                <div class="flex flex-col items-center">
                    <div class="w-20 h-20 bg-green-50 text-green-700 rounded-full flex items-center justify-center mb-5 shadow-sm border border-green-100">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h4 class="text-xl font-bold text-slate-800 mb-2">Disiplin</h4>
                    <p class="text-sm text-slate-500 font-medium leading-relaxed">Taat pada aturan dan menghargai waktu dalam proses belajar.</p>
                </div>

                <div class="flex flex-col items-center">
                    <div class="w-20 h-20 bg-green-50 text-green-700 rounded-full flex items-center justify-center mb-5 shadow-sm border border-green-100">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h4 class="text-xl font-bold text-slate-800 mb-2">Inovatif</h4>
                    <p class="text-sm text-slate-500 font-medium leading-relaxed">Terus berkembang dan beradaptasi dengan kemajuan teknologi.</p>
                </div>

                <div class="flex flex-col items-center">
                    <div class="w-20 h-20 bg-green-50 text-green-700 rounded-full flex items-center justify-center mb-5 shadow-sm border border-green-100">
                        <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <h4 class="text-xl font-bold text-slate-800 mb-2">Kompeten</h4>
                    <p class="text-sm text-slate-500 font-medium leading-relaxed">Mencetak lulusan yang siap bersaing di dunia industri sesungguhnya.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. FOOTER COMPACT (Ada Sosmed + Jam Operasional) -->
    <footer class="bg-green-950 pt-12 pb-6 text-green-50" data-aos="fade-in" data-aos-duration="1000">
        <div class="container mx-auto px-6 max-w-7xl">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 mb-8">
                
                <!-- Brand & Deskripsi -->
                <div class="md:col-span-4">
                    <div class="flex items-center gap-3 mb-4">
                        <img src="{{ asset('images/logo-alza.png') }}" class="h-8 bg-white p-1 rounded" alt="Logo SMK Al-Azhar">
                        <div>
                            <h3 class="text-white font-bold leading-none">SMK Al-Azhar</h3>
                            <p class="text-[9px] text-yellow-400 font-bold tracking-widest uppercase mt-0.5">Plus Bogor</p>
                        </div>
                    </div>
                    <p class="text-xs leading-relaxed font-medium text-green-100/70 mb-6">Mencetak generasi bangsa yang unggul dalam ilmu pengetahuan dan teknologi (IPTEK), serta teguh dalam iman dan taqwa (IMTAQ).</p>
                    
                    <!-- Sosial Media Tautan -->
                    <div class="flex gap-3">
                        <a href="#" class="w-8 h-8 rounded-full bg-green-900/80 flex items-center justify-center hover:bg-yellow-400 hover:text-green-950 transition-colors text-green-100">
                            <!-- Facebook Icon -->
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                        </a>
                        <a href="#" class="w-8 h-8 rounded-full bg-green-900/80 flex items-center justify-center hover:bg-yellow-400 hover:text-green-950 transition-colors text-green-100">
                            <!-- Instagram Icon -->
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                        </a>
                    </div>
                </div>
                
                <!-- Navigasi -->
                <div class="md:col-span-2">
                    <h4 class="text-white font-bold mb-4 uppercase tracking-wider text-xs">Navigasi Utama</h4>
                    <ul class="space-y-2 text-xs font-medium text-green-100/80">
                        <li><a href="/profil" class="hover:text-yellow-400 transition-colors">Profil Institusi</a></li>
                        <li><a href="/program" class="hover:text-yellow-400 transition-colors">Program Studi</a></li>
                        <li><a href="/galeri" class="hover:text-yellow-400 transition-colors">Galeri Dokumentasi</a></li>
                    </ul>
                </div>

                <!-- Waktu Operasional -->
                <div class="md:col-span-3">
                    <h4 class="text-white font-bold mb-4 uppercase tracking-wider text-xs">Waktu Operasional</h4>
                    <ul class="space-y-3 text-xs font-medium text-green-100/80">
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-yellow-400"></span> Senin - Jumat: 07.00 - 15.00 WIB
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-slate-500"></span> Sabtu - Minggu: Libur / Tutup
                        </li>
                    </ul>
                </div>

                <!-- Kontak -->
                <div class="md:col-span-3">
                    <h4 class="text-white font-bold mb-4 uppercase tracking-wider text-xs">Informasi Kontak</h4>
                    <ul class="space-y-3 text-xs font-medium text-green-100/80">
                        <li class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-yellow-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span class="leading-relaxed">Jl. Letjen Ibrahim Adjie No.219, Sindangbarang, Kec. Bogor Bar., Kota Bogor, Jawa Barat 16117</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-4 h-4 text-yellow-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            <span class="leading-relaxed">+62 852-1057-9586</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-green-900/50 pt-6 flex justify-between items-center gap-4 text-xs font-medium text-green-100/60">
                <p>&copy; 2026 SMK Al-Azhar Plus Bogor. Hak cipta dilindungi.</p>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ once: true, offset: 50 });
        document.addEventListener('DOMContentLoaded', function() {
    const carousels = document.querySelectorAll('.auto-carousel');

    carousels.forEach(carousel => {
        const items = carousel.querySelectorAll('.carousel-item');
        let currentIndex = 0;

        if (items.length > 1) {
            setInterval(() => {
                items[currentIndex].classList.remove('opacity-100');
                items[currentIndex].classList.add('opacity-0');

                currentIndex = (currentIndex + 1) % items.length;

                items[currentIndex].classList.remove('opacity-0');
                items[currentIndex].classList.add('opacity-100');
            }, 3000); 
        }
    });
});
    </script>
</body>
</html>