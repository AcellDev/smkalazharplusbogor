<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Keahlian - SMK Al-Azhar Plus Bogor</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
    </style>
</head>

<body class="bg-slate-50 text-slate-800 antialiased selection:bg-yellow-300 selection:text-green-900 transition-all duration-300 relative flex flex-col min-h-screen">

    <nav class="w-full bg-white/95 backdrop-blur-sm shadow-sm fixed top-0 z-50 border-b border-slate-100" data-aos="fade-down" data-aos-duration="800">
        <div class="container mx-auto px-4 md:px-6 py-3 md:py-4 flex flex-col md:flex-row items-center justify-between max-w-7xl gap-3 md:gap-0">
            
            <div class="w-full md:w-auto flex items-center justify-between md:justify-start md:flex-1">
                <a href="/" class="flex items-center gap-3 group">
                    <img src="{{ asset('images/logo-alza.png') }}" class="h-8 md:h-10 transition-transform duration-300 group-hover:scale-105" alt="Logo">
                    <div>
                        <h1 class="font-extrabold text-green-900 leading-none text-sm md:text-lg tracking-tight">SMK AL-AZHAR</h1>
                        <p class="text-[9px] md:text-[10px] font-bold text-yellow-500 tracking-widest uppercase mt-0.5">Plus Bogor</p>
                    </div>
                </a>
                
                <div class="md:hidden">
                    <a href="https://wa.me/6285210579586" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center w-9 h-9 text-white bg-emerald-800 rounded-full hover:bg-emerald-900 transition-colors shadow-md">
                        <i class="fab fa-whatsapp text-base"></i>
                    </a>
                </div>
            </div>

            <div class="flex justify-center gap-4 md:gap-8 items-center bg-slate-50 px-5 md:px-8 py-2 rounded-full border border-slate-100 shadow-inner w-auto max-w-full overflow-x-auto whitespace-nowrap">
                
                <a href="/" class="text-xs md:text-sm transition-colors {{ request()->is('/') ? 'font-bold text-green-700' : 'font-semibold text-slate-500 hover:text-green-700' }}">Beranda</a>
                
                <a href="/profil" class="text-xs md:text-sm transition-colors {{ request()->is('profil*') ? 'font-bold text-green-700' : 'font-semibold text-slate-500 hover:text-green-700' }}">Profil</a>
                
                <a href="/program" class="text-xs md:text-sm transition-colors {{ request()->is('program*') ? 'font-bold text-green-700' : 'font-semibold text-slate-500 hover:text-green-700' }}">Program Studi</a>
                
                <a href="/galeri" class="text-xs md:text-sm transition-colors {{ request()->is('galeri*') ? 'font-bold text-green-700' : 'font-semibold text-slate-500 hover:text-green-700' }}">Galeri</a>
            
            </div>

            <div class="hidden md:flex md:flex-1 justify-end items-center">
                <a href="https://wa.me/6285210579586" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center px-6 py-2.5 text-sm font-semibold text-white bg-emerald-800 rounded-full hover:bg-emerald-900 transition-colors shadow-md">
                    <i class="fab fa-whatsapp text-lg mr-2"></i> 
                    <span>Hubungi Kami</span>
                </a>
            </div>
            
        </div>
    </nav>

    <main class="flex-grow w-full">
        <section class="relative pt-32 pb-24 lg:pt-40 lg:pb-32 bg-green-950 overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-b from-green-900/70 via-green-900/60 to-green-950/90"></div>
            <div class="absolute top-0 right-0 w-96 h-96 bg-green-400 rounded-full mix-blend-overlay filter blur-3xl opacity-20 animate-pulse"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-yellow-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse" style="animation-delay: 2s;"></div>
            
            <div class="container mx-auto px-6 relative z-10 text-center" data-aos="fade-up" data-aos-duration="1000">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 border border-white/20 text-yellow-400 text-xs font-bold uppercase tracking-widest mb-6 backdrop-blur-sm">
                    Bidang Studi Unggulan
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-white mb-6 tracking-tight">Pilih Program Keahlian <br><span class="text-yellow-400">Sesuai Passionmu</span></h1>
                <p class="text-green-50 text-lg max-w-2xl mx-auto leading-relaxed font-medium drop-shadow">Menggabungkan kurikulum vokasi berbasis industri dengan fasilitas praktik modern untuk mencetak lulusan yang profesional dan kompeten.</p>
            </div>
        </section>

        <section id="daftar-program" class="py-24 bg-dots-white relative border-b border-slate-200 overflow-hidden">
            <div class="container mx-auto px-6 max-w-6xl relative z-10">
                <div class="text-center max-w-2xl mx-auto mb-20" data-aos="fade-up">
                    <h2 class="text-green-700 font-bold uppercase tracking-widest text-sm mb-3 bg-white inline-block px-3 py-1 rounded-lg border border-green-100 shadow-sm">Katalog Jurusan</h2>
                    <h3 class="text-4xl md:text-5xl font-black text-slate-800 tracking-tight bg-white inline-block px-4 py-2 rounded-xl border border-slate-50 shadow-sm">Program Studi Kami</h3>
                </div>

                <div class="flex flex-col gap-28">
                    @forelse($jurusans as $jurusan)
                    <div class="flex flex-col-reverse lg:flex-row gap-12 lg:gap-16 items-center" data-aos="fade-up">
                        
                        <div class="w-full lg:w-7/12 flex flex-col justify-center text-left">
                            <div class="inline-flex items-center gap-2 mb-4">
                                <span class="w-2 h-2 rounded-full bg-green-500"></span>
                                <span class="text-xs font-bold text-slate-500 uppercase tracking-widest">Konsentrasi Keahlian</span>
                            </div>
                            
                            <h4 class="text-3xl lg:text-4xl font-black text-slate-800 mb-6 leading-tight">{{ $jurusan->nama }} <br> <span class="text-green-700 text-2xl">({{ $jurusan->singkatan ?? 'Singkatan' }})</span></h4>
                            
                            <div class="text-slate-600 text-lg leading-relaxed mb-8 font-medium text-justify">
                                {!! $jurusan->deskripsi !!} 
                            </div>

                            <div class="bg-slate-100 rounded-xl p-5 border border-slate-200 shadow-sm">
                                <h5 class="text-sm font-bold text-slate-800 mb-3 uppercase tracking-wider">Fokus Pembelajaran:</h5>
                                <ul class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                    <li class="flex items-start gap-2">
                                        <svg class="w-5 h-5 text-green-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                        <span class="text-sm font-medium text-slate-700">Praktik Laboratorium</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <svg class="w-5 h-5 text-green-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                        <span class="text-sm font-medium text-slate-700">Teaching Factory (TEFA)</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <svg class="w-5 h-5 text-green-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                        <span class="text-sm font-medium text-slate-700">Kewirausahaan Digital</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="w-full lg:w-5/12">
                            <div class="relative rounded-2xl overflow-hidden bg-slate-100 aspect-[4/3] shadow-xl carousel-container" data-carousel="{{ $jurusan->id }}">
                                
                                @php
                                    // Memastikan format JSON dari database terbaca sebagai array
                                    $gambars = is_string($jurusan->gambar) ? json_decode($jurusan->gambar, true) : $jurusan->gambar;
                                @endphp

                                <div class="flex transition-transform duration-700 ease-in-out h-full carousel-inner" id="carousel-inner-{{ $jurusan->id }}">
                                    @if(is_array($gambars) && count($gambars) > 0)
                                        @foreach($gambars as $gambar)
                                            <div class="w-full h-full flex-shrink-0 relative">
                                                <img src="{{ asset('images/jurusan/' . $gambar) }}" class="w-full h-full object-cover" alt="{{ $jurusan->singkatan ?? $jurusan->nama }}">
                                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/40 to-transparent"></div>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="w-full h-full flex-shrink-0 bg-slate-200 flex items-center justify-center relative">
                                            <img src="https://images.unsplash.com/photo-1512758684732-4ff5c9ba59a4?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover grayscale opacity-50">
                                            <span class="absolute z-10 text-slate-500 font-bold bg-white/80 px-4 py-2 rounded-full">Belum Ada Dokumentasi</span>
                                        </div>
                                    @endif
                                </div>

                                <div class="absolute bottom-4 left-0 right-0 flex justify-center gap-2.5 z-20">
                                    @if(is_array($gambars) && count($gambars) > 1)
                                        @foreach($gambars as $i => $gambar)
                                            <button class="w-2.5 h-2.5 rounded-full transition-all duration-300 indicator-{{ $jurusan->id }} {{ $i === 0 ? 'bg-yellow-400 w-6' : 'bg-white/60 hover:bg-white' }}"></button>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>
                    @empty
                    <div class="py-10 text-center max-w-2xl mx-auto" data-aos="fade-up">
                        <p class="text-slate-500 font-bold text-lg">Data Program Studi dari database belum tersedia.</p>
                    </div>
                    @endforelse
                </div>
            </div>
        </section>

        <section class="py-24 bg-dots-green border-y border-green-950 relative overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-green-950/60 to-transparent pointer-events-none"></div>
            <div class="container mx-auto px-6 max-w-6xl relative z-10">
                <div class="text-center max-w-3xl mx-auto mb-20" data-aos="fade-up">
                    <h2 class="text-yellow-400 font-bold uppercase tracking-widest text-sm mb-4">Keunggulan Vokasi</h2>
                    <h3 class="text-4xl md:text-5xl font-black text-white tracking-tight mb-6">Ekosistem Belajar Terpadu</h3>
                    <p class="text-green-50/80 text-lg leading-relaxed font-medium">Infrastruktur pendidikan yang selaras dengan kebutuhan industri global untuk memaksimalkan potensi lulusan kami.</p>
                </div>

                <div class="grid md:grid-cols-2 gap-x-12 gap-y-16">
                    <div data-aos="fade-up" data-aos-delay="100" class="flex gap-5 items-start">
                        <div class="w-14 h-14 shrink-0 bg-yellow-400 text-green-950 rounded-xl flex items-center justify-center shadow-lg mt-1">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-white mb-2">Laboratorium Praktik</h4>
                            <p class="text-green-50/70 leading-relaxed font-medium">Setiap jurusan dilengkapi dengan ruang praktik dan perangkat komputer yang dirancang sesuai lingkungan kerja di perusahaan modern.</p>
                        </div>
                    </div>
                    
                    <div data-aos="fade-up" data-aos-delay="200" class="flex gap-5 items-start">
                        <div class="w-14 h-14 shrink-0 bg-yellow-400 text-green-950 rounded-xl flex items-center justify-center shadow-lg mt-1">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-white mb-2">Teaching Factory (TEFA)</h4>
                            <p class="text-green-50/70 leading-relaxed font-medium">Pembelajaran berbasis produksi nyata, di mana siswa mengerjakan proyek riil (barang/jasa) yang siap dipasarkan ke publik.</p>
                        </div>
                    </div>
                    
                    <div data-aos="fade-up" data-aos-delay="300" class="flex gap-5 items-start">
                        <div class="w-14 h-14 shrink-0 bg-yellow-400 text-green-950 rounded-xl flex items-center justify-center shadow-lg mt-1">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-white mb-2">Sertifikasi BNSP</h4>
                            <p class="text-green-50/70 leading-relaxed font-medium">Seluruh lulusan diwajibkan mengikuti Uji Kompetensi Keahlian (UKK) untuk mendapatkan sertifikat yang diakui secara nasional.</p>
                        </div>
                    </div>
                    
                    <div data-aos="fade-up" data-aos-delay="400" class="flex gap-5 items-start">
                        <div class="w-14 h-14 shrink-0 bg-yellow-400 text-green-950 rounded-xl flex items-center justify-center shadow-lg mt-1">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold text-white mb-2">Bursa Kerja Khusus (BKK)</h4>
                            <p class="text-green-50/70 leading-relaxed font-medium">Sekolah memiliki lembaga khusus yang menjembatani alumni dengan mitra perusahaan (DUDI) untuk mempercepat penyaluran kerja.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-24 bg-dots-white relative overflow-hidden border-t border-slate-200">
            <div class="container mx-auto px-6 relative z-10 max-w-4xl text-center" data-aos="zoom-in" data-aos-duration="800">
                <h2 class="text-4xl md:text-5xl font-black text-slate-800 mb-8 tracking-tight">Siap Meraih Masa Depan <br><span class="text-green-700">Bersama Kami?</span></h2>
                <p class="text-slate-600 mb-10 text-lg font-medium">Pendaftaran Peserta Didik Baru (PPDB) telah dibuka resmi. Bergabunglah sekarang dan jadilah bagian dari generasi unggul.</p>
                <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
                    <a href="https://wa.me/6285210579586" class="w-full sm:w-auto bg-green-700 hover:bg-green-800 text-white font-extrabold py-4 px-10 rounded-full transition-colors shadow-lg">Daftar Sekarang</a>
                    <a href="/profil" class="w-full sm:w-auto bg-white border-2 border-slate-200 text-slate-700 hover:bg-slate-50 hover:border-slate-300 font-bold py-4 px-10 rounded-full transition-colors">Kenali Profil Kami</a>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-green-950 pt-12 pb-6 text-green-50 w-full" data-aos="fade-in" data-aos-duration="1000">
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
                </div>
                
                <div class="md:col-span-2">
                    <h4 class="text-white font-bold mb-4 uppercase tracking-wider text-xs">Navigasi Utama</h4>
                    <ul class="space-y-2 text-xs font-medium text-green-100/80">
                        <li><a href="/profil" class="hover:text-yellow-400 transition-colors">Profil Institusi</a></li>
                        <li><a href="/program" class="text-yellow-400 transition-colors">Program Studi</a></li>
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
    <script>
        AOS.init({ once: true, offset: 50 });

        // Logic Custom Slider 4 Detik Pengganti Swiper
        document.addEventListener('DOMContentLoaded', function () {
            const carousels = document.querySelectorAll('.carousel-container');

            carousels.forEach(carousel => {
                const id = carousel.getAttribute('data-carousel');
                const inner = document.getElementById(`carousel-inner-${id}`);
                
                // Cek kalau inner belum load atau fotonya kosong, skip
                if (!inner || inner.children.length === 0) return;

                const slides = inner.children.length;
                let currentSlide = 0;

                // Ngga perlu slide kalau cuma 1 gambar
                if (slides <= 1) return;

                const indicators = carousel.querySelectorAll(`.indicator-${id}`);

                const goToSlide = (index) => {
                    currentSlide = index;
                    inner.style.transform = `translateX(-${currentSlide * 100}%)`;
                    
                    indicators.forEach((ind, i) => {
                        if (i === currentSlide) {
                            ind.classList.remove('bg-white/60', 'hover:bg-white');
                            ind.classList.add('bg-yellow-400', 'w-6');
                        } else {
                            ind.classList.remove('bg-yellow-400', 'w-6');
                            ind.classList.add('bg-white/60', 'hover:bg-white');
                        }
                    });
                };

                // Auto-Slide setiap 4000ms (4 detik)
                setInterval(() => {
                    let nextSlide = (currentSlide + 1) % slides;
                    goToSlide(nextSlide);
                }, 4000); 
            });
        });
    </script>
</body>
</html>