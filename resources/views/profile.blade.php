<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - SMK Al-Azhar Plus Bogor</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="icon" type="image/png" href="{{ asset('images/logo-alza.png') }}">
    <style> 
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        
        .bg-dots-white { 
            background-color: #ffffff;
            background-image: radial-gradient(rgba(21, 128, 61, 0.12) 2px, transparent 2px); 
            background-size: 32px 32px; 
        }
        .bg-dots-green { 
            background-color: #14532d; 
            background-image: radial-gradient(rgba(250, 204, 21, 0.15) 2px, transparent 2px); 
            background-size: 32px 32px; 
        }

        :root { --swiper-theme-color: #facc15; }
        .swiper-pagination-bullet { background: #facc15; opacity: 0.5; }
        .swiper-pagination-bullet-active { opacity: 1; }
    
        @keyframes marquee {
            0% { transform: translateX(0%); }
            100% { transform: translateX(-100%); }
        }

        .animate-marquee {
            animation: marquee 35s linear infinite;
        }

        .group:hover .animate-marquee {
            animation-play-state: paused;
        }

        .mask-gradient {
            mask-image: linear-gradient(to right, transparent, white 15%, white 85%, transparent);
            -webkit-mask-image: linear-gradient(to right, transparent, white 15%, white 85%, transparent);
        }

    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-yellow-300 selection:text-green-900">

    <nav class="w-full bg-white/95 backdrop-blur-sm shadow-sm fixed top-0 z-50 border-b border-slate-100" data-aos="fade-down" data-aos-duration="800">
        <div class="container mx-auto px-6 py-4 flex items-center justify-between max-w-7xl">
            <div class="flex-1 flex justify-start">
                <a href="/" class="flex items-center gap-3 group">
                    <img src="{{ asset('images/logo-alza.png') }}" class="h-10 transition-transform group-hover:scale-105" alt="Logo" onerror="this.style.display='none'">
                    <div class="hidden sm:block">
                        <h1 class="font-extrabold text-green-900 leading-none text-lg tracking-tight">SMK AL-AZHAR</h1>
                        <p class="text-[10px] font-bold text-yellow-500 tracking-widest uppercase mt-0.5">Plus Bogor</p>
                    </div>
                </a>
            </div>

            <div class="hidden md:flex justify-center gap-8 items-center bg-slate-50 px-8 py-2.5 rounded-full border border-slate-100 shadow-inner">
                <a href="/" class="text-sm font-semibold text-slate-500 hover:text-green-700 transition-colors">Beranda</a>
                <a href="/profil" class="text-sm font-bold text-green-700">Profil</a>
                <a href="/program" class="text-sm font-semibold text-slate-500 hover:text-green-700 transition-colors">Program Studi</a>
                <a href="/galeri" class="text-sm font-semibold text-slate-500 hover:text-green-700 transition-colors">Galeri</a>
            </div>

            <div class="flex-1 flex justify-end gap-4 items-center">
                @auth
                    <a href="/admin/dashboard" class="bg-green-900 text-white px-6 py-2.5 rounded-full text-sm font-bold hover:bg-green-800 transition-colors shadow-md">Dashboard</a>
                @else
                    <a href="https://wa.me/6285210579586" target="_blank" class="hidden lg:flex items-center gap-2 text-sm font-bold text-green-800 hover:text-green-600 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                        Hubungi Kami
                    </a>
                @endauth
            </div>
        </div>
    </nav>

    <section class="relative pt-32 pb-24 lg:pt-40 lg:pb-32 bg-green-950 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-green-900/70 via-green-900/60 to-green-950/90"></div>
        <div class="absolute top-0 right-0 w-96 h-96 bg-green-400 rounded-full mix-blend-overlay filter blur-3xl opacity-20 animate-pulse"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-yellow-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse" style="animation-delay: 2s;"></div>
        
        <div class="container mx-auto px-6 relative z-10 text-center" data-aos="fade-up" data-aos-duration="1000">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 border border-white/20 text-yellow-400 text-xs font-bold uppercase tracking-widest mb-6 backdrop-blur-sm">
                Kenali Kami Lebih Dekat
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 tracking-tight">Profil Institusi</h1>
            <p class="text-green-50 text-lg max-w-2xl mx-auto leading-relaxed font-medium drop-shadow">Menyelami sejarah, identitas, dan nilai-nilai luhur yang menjadi pondasi utama pendidikan vokasi di SMK Al-Azhar Plus Bogor.</p>
        </div>
    </section>

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
                        <h2 class="text-green-700 font-bold uppercase tracking-widest text-sm bg-white px-3 py-1 rounded-lg shadow-sm border border-green-100">Pesan Pimpinan</h2>
                    </div>
                    <h3 class="text-4xl md:text-5xl font-black text-slate-800 tracking-tight mb-8">Membangun Karakter, <br>Mencetak Profesional.</h3>
                    <div class="text-slate-600 text-lg leading-relaxed mb-8 space-y-4 font-medium relative">
                        <svg class="absolute -top-6 -left-8 w-16 h-16 text-slate-200 -z-10" fill="currentColor" viewBox="0 0 32 32"><path d="M9.333 13.333c0-3.682 2.985-6.667 6.667-6.667h1.333v2.667h-1.333c-2.209 0-4 1.791-4 4v2.667h5.333v10.667h-10.667v-13.333zM25.333 13.333c0-3.682 2.985-6.667 6.667-6.667h1.333v2.667h-1.333c-2.209 0-4 1.791-4 4v2.667h5.333v10.667h-10.667v-13.333z"></path></svg>
                        
                        <p class="bg-white/90 p-4 rounded-xl shadow-sm border border-slate-100 backdrop-blur-sm italic text-slate-700">"Pendidikan adalah senjata paling ampuh yang dapat Anda gunakan untuk mengubah dunia. Di SMK Al-Azhar Plus, kami tidak hanya membekali siswa dengan teknologi mutakhir, tetapi juga dengan benteng iman dan taqwa."</p>
                        <p class="bg-white/90 p-4 rounded-xl shadow-sm border border-slate-100 backdrop-blur-sm">Selamat datang di portal resmi SMK Al-Azhar Plus Bogor. Kami berkomitmen penuh untuk terus meningkatkan kualitas pendidikan, memfasilitasi minat bakat siswa, serta menjalin kerja sama erat dengan dunia industri agar lulusan kami siap kerja dan mandiri.</p>
                    </div>
                    <div class="flex items-center gap-4 bg-white p-4 rounded-2xl w-max shadow-sm border border-slate-100">
                        <div class="w-12 h-12 rounded-full bg-slate-200"></div>
                        <div>
                            <h4 class="font-extrabold text-slate-800">Nama Kepala Sekolah, M.Pd.</h4>
                            <p class="text-sm font-bold text-green-600">Kepala SMK Al-Azhar Plus Bogor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-dots-green border-y border-green-950 relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-green-950/80 to-transparent pointer-events-none"></div>

        <div class="container mx-auto px-6 max-w-7xl relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="w-full lg:w-1/2" data-aos="fade-right">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-1 bg-yellow-400 rounded-full"></div>
                        <h2 class="text-yellow-400 font-bold uppercase tracking-widest text-sm">Sejarah Institusi</h2>
                    </div>
                    <h3 class="text-4xl md:text-5xl font-black text-white tracking-tight mb-8">Jejak Langkah <br>SMK Al-Azhar Plus</h3>
                    
                    <div class="text-green-50/80 text-lg leading-relaxed font-medium space-y-6 text-justify">
                        <p>SMK Al-Azhar Plus Bogor didirikan dengan semangat untuk menghadirkan lembaga pendidikan menengah kejuruan yang tidak sekadar berorientasi pada pencapaian akademis dan keahlian teknis semata, namun juga menitikberatkan pada pembangunan fondasi moral yang sejalan dengan nilai-nilai Islam.</p>
                        <p>Seiring berjalannya waktu, sekolah ini terus berkembang pesat dalam hal fasilitas, kualitas pengajar, dan pembaruan kurikulum agar selalu relevan dengan tuntutan zaman dan industri. Hingga kini, kami telah meluluskan ribuan alumni yang sukses berkarya di berbagai bidang profesional maupun menjadi wirausahawan mandiri.</p>
                    </div>
                </div>

                <div class="w-full lg:w-1/2" data-aos="fade-left">
                    <div class="swiper sejarahSwiper rounded-3xl shadow-2xl w-full h-[400px] md:h-[450px]">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="images/alza1.jpeg" class="object-cover w-full h-full" alt="Gedung Sejarah Sekolah">
                            </div>
                            <div class="swiper-slide">
                                <img src="/images/kegiatan/aula.jpg" class="object-cover w-full h-full" alt="Fasilitas Lab">
                            </div>
                            <div class="swiper-slide">
                                <img src="/images/alza2.jpg" class="object-cover w-full h-full" alt="Kegiatan Siswa">
                            </div>
                        </div>
                        <div class="swiper-pagination pb-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-dots-white relative border-b border-slate-200">
        <div class="container mx-auto px-6 max-w-6xl relative z-10">
            <div class="text-center max-w-2xl mx-auto mb-20" data-aos="fade-up">
                <h2 class="text-green-700 font-bold uppercase tracking-widest text-sm mb-3 bg-white inline-block px-3 py-1 rounded-lg border border-green-100 shadow-sm">Tujuan Utama Kami</h2>
                <h3 class="text-4xl md:text-5xl font-black text-slate-800 tracking-tight bg-white inline-block px-4 py-2 rounded-xl border border-slate-50 shadow-sm">Visi & Misi Sekolah</h3>
            </div>

            <div class="grid md:grid-cols-2 gap-x-12 gap-y-16">
                
                <div data-aos="fade-up" data-aos-delay="100" class="md:col-span-2 bg-gradient-to-br from-green-800 to-green-950 p-10 md:p-14 rounded-[2rem] shadow-xl text-white relative overflow-hidden">
                    <div class="absolute -right-10 -top-10 opacity-10">
                        <svg class="w-64 h-64 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    </div>
                    
                    <div class="flex items-center gap-4 mb-6 relative z-10">
                        <div class="w-14 h-14 bg-yellow-400 text-green-950 rounded-2xl flex items-center justify-center shrink-0 shadow-lg">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                        </div>
                        <h4 class="text-3xl font-extrabold text-yellow-400">Visi Kami</h4>
                    </div>
                    <p class="text-green-50 text-xl md:text-2xl leading-relaxed font-semibold italic relative z-10">
                        "Terwujudnya SMK Al Azhar plus Bogor sebagai pusat pendidikan dan pelatihan yang amanah, mampu mencetak tenaga kerja beriman, profesional, unggul, kompetitif dan berakhlak mulia di tingkat regional dan nasional"
                    </p>
                </div>

                <div data-aos="fade-up" data-aos-delay="200" class="flex gap-5 items-start">
                    <div class="w-14 h-14 shrink-0 bg-green-50 text-green-700 rounded-xl flex items-center justify-center border border-green-200 mt-1 shadow-sm">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-slate-800 mb-2">Pembelajaran Relevan</h4>
                        <p class="text-slate-600 leading-relaxed font-medium">Menyiapkan pendidikan yang tepat dan sesuai dengan tantangan zaman serta mampu mengantarkan generasi baru menjuru titik optimal dalam kehidupan.</p>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="300" class="flex gap-5 items-start">
                    <div class="w-14 h-14 shrink-0 bg-green-50 text-green-700 rounded-xl flex items-center justify-center border border-green-200 mt-1 shadow-sm">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-slate-800 mb-2">Karakter Islami</h4>
                        <p class="text-slate-600 leading-relaxed font-medium">Menjadikan Al-Quran dan As-Sunah sebagai acuan dasar dari seluruh program penyelenggaraan pendidikan untuk menghasilkan insan yang berkualitas dan berkarakter.</p>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="400" class="flex gap-5 items-start">
                    <div class="w-14 h-14 shrink-0 bg-green-50 text-green-700 rounded-xl flex items-center justify-center border border-green-200 mt-1 shadow-sm">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-slate-800 mb-2">Kompetensi Pendidik</h4>
                        <p class="text-slate-600 leading-relaxed font-medium">Membekali keterampilan dalam bidang Desain Komunikasi Visual dan manajemen perkantoran yang berwawasan profesional produktif dan mandiri sehingga mampu menyesuaikan diri dengan tuntutan dunia usaha/dunia industri..</p>
                    </div>
                </div>

                <div data-aos="fade-up" data-aos-delay="500" class="flex gap-5 items-start">
                    <div class="w-14 h-14 shrink-0 bg-green-50 text-green-700 rounded-xl flex items-center justify-center border border-green-200 mt-1 shadow-sm">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold text-slate-800 mb-2">Jiwa Wirausaha</h4>
                        <p class="text-slate-600 leading-relaxed font-medium">Membentuk tenaga kerja tingkat menengah yang berdisiplin bertanggung jawab kreatif dan inovatif bidang bidang industri dan kewirausahaan.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-16 bg-dots-green relative overflow-hidden">
        <div class="absolute inset-0 bg-green-950/80 pointer-events-none"></div>

        <div class="container mx-auto px-6 max-w-7xl relative z-10">
            <div class="grid lg:grid-cols-12 gap-16 lg:gap-12 items-center">
                
                <div class="lg:col-span-5" data-aos="fade-right">
                    <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-6 tracking-tight">Tenaga Pendidik <br> & Kependidikan</h2>
                    <p class="text-green-50/70 text-lg leading-relaxed font-medium max-w-md">
                        Kami didukung oleh barisan pengajar profesional, tersertifikasi, dan berdedikasi tinggi yang siap membimbing siswa-siswi meraih prestasi terbaik mereka.
                    </p>
                </div>

                <div class="lg:col-span-7 h-[250px]" data-aos="fade-left">
                    <div class="swiper teacherVerticalSwiper h-full w-full">
                        <div class="swiper-wrapper">
                            
                            <div class="swiper-slide flex flex-col justify-center">
                                <div class="grid sm:grid-cols-2 gap-x-8 gap-y-10">
                                    <div class="flex items-center gap-5">
                                        <img src="images/guru/bu_aida.jpg" class="w-16 h-16 rounded-full object-cover border-2 border-green-800" alt="Guru">
                                        <div>
                                            <h4 class="text-white font-bold text-lg">Aida Rahma, S.Si</h4>
                                            <p class="text-green-400 text-sm font-medium">Guru Matematika</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-5">
                                        <img src="images/guru/pak_ilham.jpg" class="w-16 h-16 rounded-full object-cover border-2 border-green-800" alt="Guru">
                                        <div>
                                            <h4 class="text-white font-bold text-lg">Muhammad Ilham Azhari, S.Pd., M.Pd</h4>
                                            <p class="text-green-400 text-sm font-medium">Guru Bahasa Inggris</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-5">
                                        <img src="images/guru/pak_gugah.jpg" class="w-16 h-16 rounded-full object-cover border-2 border-green-800" alt="Guru">
                                        <div>
                                            <h4 class="text-white font-bold text-lg">Gugah Gumbira, S.Kom</h4>
                                            <p class="text-green-400 text-sm font-medium">Guru DKV & Kewirausahaan</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-5">
                                        <img src="images/guru/bu_anna.jpg" class="w-16 h-16 rounded-full object-cover border-2 border-green-800" alt="Guru">
                                        <div>
                                            <h4 class="text-white font-bold text-lg">Muzzayanah, S.Th.I</h4>
                                            <p class="text-green-400 text-sm font-medium">Guru Tahfidz & Tahsin</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide flex flex-col justify-center">
                                <div class="grid sm:grid-cols-2 gap-x-8 gap-y-10">
                                    <div class="flex items-center gap-5">
                                        <img src="images/guru/pak_wahyu.jpg" class="w-16 h-16 rounded-full object-cover border-2 border-green-800" alt="Guru">
                                        <div>
                                            <h4 class="text-white font-bold text-lg">Wahyu Darmawan, S.M</h4>
                                            <p class="text-green-400 text-sm font-medium">Guru PJOK & MPLB</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-5">
                                        <img src="images/guru/bu_baeti.jpg" class="w-16 h-16 rounded-full object-cover border-2 border-green-800" alt="Guru">
                                        <div>
                                            <h4 class="text-white font-bold text-lg">Baeti Sehaeni, S.Pd.I</h4>
                                            <p class="text-green-400 text-sm font-medium">Guru PABP</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-5">
                                        <img src="images/guru/kak_ranti.jpg" class="w-16 h-16 rounded-full object-cover border-2 border-green-800" alt="Guru">
                                        <div>
                                            <h4 class="text-white font-bold text-lg">Ranti Gusmawati </h4>
                                            <p class="text-green-400 text-sm font-medium">Guru IPAS & Seni Budaya</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-5">
                                        <img src="images/guru/kak_feby.jpg" class="w-16 h-16 rounded-full object-cover border-2 border-green-800" alt="Guru">
                                        <div>
                                            <h4 class="text-white font-bold text-lg">Feby Aulia Ayundita</h4>
                                            <p class="text-green-400 text-sm font-medium">Guru MPLB</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <div class="swiper-slide flex flex-col justify-center">
                                <div class="grid sm:grid-cols-2 gap-x-8 gap-y-10">
                                    <div class="flex items-center gap-5">
                                        <img src="images/guru/bu_dede.jpg" class="w-16 h-16 rounded-full object-cover border-2 border-green-800" alt="Guru">
                                        <div>
                                            <h4 class="text-white font-bold text-lg">Dede Maryati, S.Pd</h4>
                                            <p class="text-green-400 text-sm font-medium">Kepala Program MPLB & Guru MPLB</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-5">
                                        <img src="images/guru/bu_elies.jpg" class="w-16 h-16 rounded-full object-cover border-2 border-green-800" alt="Guru">
                                        <div>
                                            <h4 class="text-white font-bold text-lg">Elies Lustiana</h4>
                                            <p class="text-green-400 text-sm font-medium">Wakasek Humas, Guru Bahasa Sunda & Tata Boga</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-5">
                                        <img src="images/guru/bu_mar.jpg" class="w-16 h-16 rounded-full object-cover border-2 border-green-800" alt="Guru">
                                        <div>
                                            <h4 class="text-white font-bold text-lg">Siti Mardiah, S.Kom</h4>
                                            <p class="text-green-400 text-sm font-medium">Wakasek Kurikulum, Kepala Program DKV & Guru DKV</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center gap-5">
                                        <img src="images/guru/pak_dani.png" class="w-16 h-16 rounded-full object-cover border-2 border-green-800" alt="Guru">
                                        <div>
                                            <h4 class="text-white font-bold text-lg">Ahmad Hamdani, S.Pd</h4>
                                            <p class="text-green-400 text-sm font-medium">Al-Qur'ar hadits & Bahasa Inggris</p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

   <section class="py-24 bg-slate-50 border-t border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        
        <div class="text-center mb-16">
            <h2 class="text-3xl font-black text-gray-900 tracking-tight sm:text-4xl mb-4">
                Mitra Industri & Institusi
            </h2>
            <p class="text-base lg:text-lg text-gray-500 max-w-2xl mx-auto leading-relaxed">
                SMK Al-Azhar Plus Bogor bekerja sama dengan 14 institusi terpercaya untuk menyelaraskan kurikulum dengan standar dunia kerja.
            </p>
        </div>

        <div class="flex flex-wrap justify-center gap-4 sm:gap-6">
            
            <div class="w-[45%] sm:w-40 md:w-48 aspect-[3/2] bg-white rounded-2xl border border-gray-100 shadow-sm flex items-center justify-center p-6 hover:shadow-xl hover:border-emerald-200 hover:-translate-y-1 transition-all duration-300 group cursor-pointer">
                <img src="{{ asset('images/mitra/bogor.jpg') }}" alt="Mitra 1" 
                     class="max-w-full max-h-full object-contain grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-300">
            </div>

            <div class="w-[45%] sm:w-40 md:w-48 aspect-[3/2] bg-white rounded-2xl border border-gray-100 shadow-sm flex items-center justify-center p-6 hover:shadow-xl hover:border-emerald-200 hover:-translate-y-1 transition-all duration-300 group cursor-pointer">
                <img src="{{ asset('images/mitra/dinaslingkungan.jpg') }}" alt="Mitra 2" 
                     class="max-w-full max-h-full object-contain grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-300">
            </div>

            <div class="w-[45%] sm:w-40 md:w-48 aspect-[3/2] bg-white rounded-2xl border border-gray-100 shadow-sm flex items-center justify-center p-6 hover:shadow-xl hover:border-emerald-200 hover:-translate-y-1 transition-all duration-300 group cursor-pointer">
                <img src="{{ asset('images/mitra/satya.jpg') }}" alt="Mitra 3" 
                     class="max-w-full max-h-full object-contain grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-300">
            </div>

            <div class="w-[45%] sm:w-40 md:w-48 aspect-[3/2] bg-white rounded-2xl border border-gray-100 shadow-sm flex items-center justify-center p-6 hover:shadow-xl hover:border-emerald-200 hover:-translate-y-1 transition-all duration-300 group cursor-pointer">
                <img src="{{ asset('images/mitra/sayaga.png') }}" alt="Mitra 4" 
                     class="max-w-full max-h-full object-contain grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-300">
            </div>

            <div class="w-[45%] sm:w-40 md:w-48 aspect-[3/2] bg-white rounded-2xl border border-gray-100 shadow-sm flex items-center justify-center p-6 hover:shadow-xl hover:border-emerald-200 hover:-translate-y-1 transition-all duration-300 group cursor-pointer">
                <img src="{{ asset('images/mitra/satya.jpg') }}" alt="Mitra 5" 
                     class="max-w-full max-h-full object-contain grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-300">
            </div>

            <div class="w-[45%] sm:w-40 md:w-48 aspect-[3/2] bg-white rounded-2xl border border-gray-100 shadow-sm flex items-center justify-center p-6 hover:shadow-xl hover:border-emerald-200 hover:-translate-y-1 transition-all duration-300 group cursor-pointer">
                <img src="{{ asset('images/mitra/brin.png') }}" alt="Mitra 6" 
                     class="max-w-full max-h-full object-contain grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-300">
            </div>

            <div class="w-[45%] sm:w-40 md:w-48 aspect-[3/2] bg-white rounded-2xl border border-gray-100 shadow-sm flex items-center justify-center p-6 hover:shadow-xl hover:border-emerald-200 hover:-translate-y-1 transition-all duration-300 group cursor-pointer">
                <img src="{{ asset('images/mitra/ipb.png') }}" alt="Mitra 7" 
                     class="max-w-full max-h-full object-contain grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-300">
            </div>

            <div class="w-[45%] sm:w-40 md:w-48 aspect-[3/2] bg-white rounded-2xl border border-gray-100 shadow-sm flex items-center justify-center p-6 hover:shadow-xl hover:border-emerald-200 hover:-translate-y-1 transition-all duration-300 group cursor-pointer">
                <img src="{{ asset('images/mitra/ibik.png') }}" alt="Mitra 8" 
                     class="max-w-full max-h-full object-contain grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-300">
            </div>

            <div class="w-[45%] sm:w-40 md:w-48 aspect-[3/2] bg-white rounded-2xl border border-gray-100 shadow-sm flex items-center justify-center p-6 hover:shadow-xl hover:border-emerald-200 hover:-translate-y-1 transition-all duration-300 group cursor-pointer">
                <img src="{{ asset('images/mitra/unbin.png') }}" alt="Mitra 9" 
                     class="max-w-full max-h-full object-contain grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-300">
            </div>

            <div class="w-[45%] sm:w-40 md:w-48 aspect-[3/2] bg-white rounded-2xl border border-gray-100 shadow-sm flex items-center justify-center p-6 hover:shadow-xl hover:border-emerald-200 hover:-translate-y-1 transition-all duration-300 group cursor-pointer">
                <img src="{{ asset('images/mitra/biru kuning.jpg') }}" alt="Mitra 10" 
                     class="max-w-full max-h-full object-contain grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-300">
            </div>

            <div class="w-[45%] sm:w-40 md:w-48 aspect-[3/2] bg-white rounded-2xl border border-gray-100 shadow-sm flex items-center justify-center p-6 hover:shadow-xl hover:border-emerald-200 hover:-translate-y-1 transition-all duration-300 group cursor-pointer">
                <img src="{{ asset('images/mitra/pg.png') }}" alt="Mitra 11" 
                     class="max-w-full max-h-full object-contain grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-300">
            </div>

            <div class="w-[45%] sm:w-40 md:w-48 aspect-[3/2] bg-white rounded-2xl border border-gray-100 shadow-sm flex items-center justify-center p-6 hover:shadow-xl hover:border-emerald-200 hover:-translate-y-1 transition-all duration-300 group cursor-pointer">
                <img src="{{ asset('images/mitra/fabercastel.png') }}" alt="Mitra 12" 
                     class="max-w-full max-h-full object-contain grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-300">
            </div>

            <div class="w-[45%] sm:w-40 md:w-48 aspect-[3/2] bg-white rounded-2xl border border-gray-100 shadow-sm flex items-center justify-center p-6 hover:shadow-xl hover:border-emerald-200 hover:-translate-y-1 transition-all duration-300 group cursor-pointer">
                <img src="{{ asset('images/mitra/mbg.png') }}" alt="Mitra 13" 
                     class="max-w-full max-h-full object-contain grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-300">
            </div>

            <div class="w-[45%] sm:w-40 md:w-48 aspect-[3/2] bg-white rounded-2xl border border-gray-100 shadow-sm flex items-center justify-center p-6 hover:shadow-xl hover:border-emerald-200 hover:-translate-y-1 transition-all duration-300 group cursor-pointer">
                <img src="{{ asset('images/mitra/mekaar.webp') }}" alt="Mitra 14" 
                     class="max-w-full max-h-full object-contain grayscale opacity-60 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-300">
            </div>
            
        </div>

    </div>
</section>

    <footer class="bg-green-950 pt-12 pb-6 text-green-50" data-aos="fade-in" data-aos-duration="1000">
        <div class="container mx-auto px-6 max-w-7xl">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8 mb-8">
                
                <div class="md:col-span-4">
                    <div class="flex items-center gap-3 mb-4">
                        <img src="{{ asset('images/logo-alza.png') }}" class="h-8 bg-white p-1 rounded" alt="Logo SMK Al-Azhar" onerror="this.style.display='none'">
                        <div>
                            <h3 class="text-white font-bold leading-none">SMK Al-Azhar</h3>
                            <p class="text-[9px] text-yellow-400 font-bold tracking-widest uppercase mt-0.5">Plus Bogor</p>
                        </div>
                    </div>
                    <p class="text-xs leading-relaxed font-medium text-green-100/70 mb-5">Mencetak generasi bangsa yang unggul dalam ilmu pengetahuan dan teknologi (IPTEK), serta teguh dalam iman dan taqwa (IMTAQ).</p>
                    
                    <div class="flex gap-3">
                        <a href="#" class="w-8 h-8 rounded-full bg-green-900/80 flex items-center justify-center hover:bg-yellow-400 hover:text-green-950 transition-colors text-green-100">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                        </a>
                        <a href="#" class="w-8 h-8 rounded-full bg-green-900/80 flex items-center justify-center hover:bg-yellow-400 hover:text-green-950 transition-colors text-green-100">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                        </a>
                    </div>
                </div>
                
                <div class="md:col-span-2">
                    <h4 class="text-white font-bold mb-4 uppercase tracking-wider text-xs">Navigasi Utama</h4>
                    <ul class="space-y-2 text-xs font-medium text-green-100/80">
                        <li><a href="/profil" class="text-yellow-400 transition-colors">Profil Institusi</a></li>
                        <li><a href="/program" class="hover:text-yellow-400 transition-colors">Program Studi</a></li>
                        <li><a href="/galeri" class="hover:text-yellow-400 transition-colors">Galeri Dokumentasi</a></li>
                    </ul>
                </div>

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
            
            <div class="border-t border-green-900/50 pt-6 flex justify-between items-center text-xs font-medium text-green-100/60">
                <p>&copy; 2026 SMK Al-Azhar Plus Bogor. Hak cipta dilindungi.</p>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        AOS.init({ once: true, offset: 50 });
        
        var sejarahSwiper = new Swiper(".sejarahSwiper", {
            loop: true,
            effect: "fade",
            autoplay: {
                delay: 5000, 
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });

        var teacherSwiper = new Swiper(".teacherVerticalSwiper", {
            direction: "vertical",
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 5000, 
                disableOnInteraction: false,
            },
            speed: 1000, 
            allowTouchMove: false 
        });
    </script>
</body>
</html>