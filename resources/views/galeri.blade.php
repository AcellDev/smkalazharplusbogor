<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri - SMK Al-Azhar Plus Bogor</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('images/logo-alza.png') }}">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        
        /* Pola Dot Pattern premium */
        .bg-dots-slate { 
            background-color: #f8fafc;
            background-image: radial-gradient(#cbd5e1 1px, transparent 1px); 
            background-size: 32px 32px; 
        }
        
        .hide-scrollbar::-webkit-scrollbar { display: none; }
        .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        
        /* Animasi Filter & Modal */
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-up { animation: fadeUp 0.6s ease-out forwards; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased selection:bg-emerald-300 selection:text-emerald-900">

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

    <section class="relative pt-40 pb-32 bg-emerald-950 overflow-hidden">
       <div class="absolute inset-0 bg-gradient-to-b from-green-900/70 via-green-900/60 to-green-950/90"></div>
            <div class="absolute top-0 right-0 w-96 h-96 bg-green-400 rounded-full mix-blend-overlay filter blur-3xl opacity-20 animate-pulse"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-yellow-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse" style="animation-delay: 2s;"></div>
        
        <div class="absolute inset-0 -z-20">
            @php $berandaData = \App\Models\Beranda::first(); @endphp
            <img src="{{ $berandaData && $berandaData->foto ? asset('images/beranda/' . $berandaData->foto) : asset('images/galeri/alza1.jpeg') }}" alt="Hero Background" class="w-full h-full object-cover opacity-30 grayscale mix-blend-luminosity">
        </div>

        <div class="container mx-auto px-6 relative z-10 text-center max-w-4xl">
            <span class="inline-block py-1.5 px-4 rounded-full bg-emerald-800/50 border border-emerald-400/30 text-amber-400 text-xs font-bold tracking-widest uppercase mb-6 backdrop-blur-sm">
                Rekam Jejak & Dokumentasi
            </span>
            <h1 class="text-4xl md:text-6xl font-black text-white mb-6 tracking-tight leading-tight">
                Galeri <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-200 to-amber-500">Momen & Karya</span>
            </h1>
            <p class="text-emerald-100/80 text-lg md:text-xl leading-relaxed font-medium">
                Setiap potret menceritakan dedikasi, kreativitas, dan semangat belajar di SMK Al-Azhar Plus Bogor.
            </p>
        </div>
    </section>

   <section class="py-20 bg-dots-slate relative z-20 -mt-8 rounded-t-[3rem] shadow-[0_-20px_40px_-15px_rgba(0,0,0,0.1)]">
        <div class="container mx-auto px-6 max-w-7xl">
            
            <div class="flex justify-center mb-16">
                <div class="inline-flex p-1.5 bg-white rounded-full shadow-sm border border-slate-200 overflow-x-auto hide-scrollbar">
                    <button onclick="filterGaleri(this, 'semua')" class="filter-btn px-6 py-2.5 bg-emerald-700 text-white font-bold text-sm rounded-full shadow-md transition-all whitespace-nowrap">Semua Momen</button>
                    <button onclick="filterGaleri(this, 'Kegiatan')" class="filter-btn px-6 py-2.5 bg-transparent text-slate-500 hover:text-emerald-700 font-bold text-sm rounded-full transition-all whitespace-nowrap">Kegiatan</button>
                    <button onclick="filterGaleri(this, 'Fasilitas')" class="filter-btn px-6 py-2.5 bg-transparent text-slate-500 hover:text-emerald-700 font-bold text-sm rounded-full transition-all whitespace-nowrap">Fasilitas</button>
                    <button onclick="filterGaleri(this, 'Prestasi')" class="filter-btn px-6 py-2.5 bg-transparent text-slate-500 hover:text-emerald-700 font-bold text-sm rounded-full transition-all whitespace-nowrap">Prestasi</button>
                </div>
            </div>

            @if($galeris->isEmpty())
                <div class="text-center py-20 w-full flex flex-col items-center justify-center">
                    <div class="w-24 h-24 bg-slate-200 rounded-full flex items-center justify-center mb-4 shadow-inner">
                        <svg class="w-10 h-10 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <p class="text-slate-500 font-bold text-lg">Belum ada foto di galeri saat ini.</p>
                </div>
            @else
                <div class="columns-1 sm:columns-2 lg:columns-3 gap-6 space-y-6" id="galeri-container">
                    @foreach($galeris as $item)
                    <div class="item-galeri break-inside-avoid relative group cursor-pointer rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-500 bg-slate-200" 
                         data-kategori="{{ $item->kategori }}" 
                         onclick="bukaModal('{{ asset('images/galeri/' . $item->foto) }}', '{{ addslashes($item->judul) }}', '{{ $item->kategori }}', '{{ addslashes($item->deskripsi) }}')">
                        
                        <img src="{{ asset('images/galeri/' . $item->foto) }}" class="w-full h-auto object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out" alt="{{ $item->judul }}">
                        
                        <div class="absolute inset-0 bg-gradient-to-t from-emerald-950 via-emerald-900/40 to-transparent opacity-0 group-hover:opacity-90 transition-opacity duration-300"></div>
                        
                        <div class="absolute bottom-0 left-0 p-6 w-full translate-y-4 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-300">
                            <span class="inline-block px-3 py-1 bg-amber-400 text-emerald-950 font-black text-[10px] uppercase tracking-widest rounded-lg mb-2">
                                {{ $item->kategori }}
                            </span>
                            <h4 class="text-xl font-bold text-white leading-tight">{{ $item->judul }}</h4>
                        </div>
                    </div>
                    @endforeach
                </div>
            @endif
            
        </div>
    </section>

    <section class="py-24 bg-emerald-50 border-t border-emerald-100 relative overflow-hidden">
        <div class="absolute inset-0 opacity-[0.03]" style="background-image: radial-gradient(#166534 1px, transparent 1px); background-size: 24px 24px;"></div>
        
        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                
                <div class="lg:col-span-7">
                    <div class="relative group">
                        <div class="absolute -inset-2 rounded-2xl bg-gradient-to-r from-emerald-500 to-amber-400 opacity-10 blur-xl group-hover:opacity-20 transition duration-500"></div>
                        <div class="relative aspect-[16/10] overflow-hidden rounded-2xl bg-white shadow-md">
                            <img src="images/alza1.jpeg" alt="Visual Dokumentasi" class="w-full h-full object-cover transition-transform duration-700 ease-out transform group-hover:scale-105">
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-5 space-y-6">
                    <span class="inline-block px-3 py-1 text-[10px] font-bold text-emerald-700 uppercase tracking-widest bg-emerald-100/60 rounded-xl border border-emerald-200">
                        Lebih Dari Sekadar Gambar
                    </span>
                    
                    <h3 class="text-3xl lg:text-4xl font-black text-slate-900 tracking-tight leading-snug">
                        Di Balik Setiap Potret, Ada Proses Belajar yang Hebat.
                    </h3>
                    
                    <p class="text-slate-600 leading-relaxed font-medium">
                        Semua momen, karya, dan fasilitas yang kamu lihat di atas merupakan bukti nyata dari lingkungan belajar yang aktif, kreatif, dan produktif. <span class="font-bold text-emerald-700">Passion</span> siswalah yang mengukir cerita di sini.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row flex-wrap items-center gap-4 pt-6 mt-12 border-t border-slate-200">
                        <a href="/program" class="w-full sm:w-auto px-8 py-3.5 bg-emerald-700 text-white font-bold rounded-full text-sm hover:bg-emerald-800 hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300 text-center">
                            Lihat Program Studi
                        </a>
                        <a href="/profil" class="w-full sm:w-auto px-8 py-3.5 bg-white text-emerald-800 border-2 border-emerald-700 font-bold rounded-full text-sm hover:bg-emerald-50 hover:shadow-lg hover:-translate-y-0.5 transition-all duration-300 flex items-center justify-center gap-2">
                            Pelajari Profil Sekolah
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-emerald-950 pt-16 pb-8 text-emerald-50 border-t border-emerald-900">
        <div class="container mx-auto px-6 max-w-7xl">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-12 mb-12">
                <div class="md:col-span-4">
                    <div class="flex items-center gap-3 mb-6">
                        <img src="{{ asset('images/logo-alza.png') }}" class="h-10 bg-white p-1 rounded-lg" alt="Logo SMK Al-Azhar">
                        <div>
                            <h3 class="text-white font-black leading-none text-lg tracking-tight">SMK Al-Azhar</h3>
                            <p class="text-[10px] text-amber-400 font-bold tracking-widest uppercase mt-1">Plus Bogor</p>
                        </div>
                    </div>
                    <p class="text-sm leading-relaxed font-medium text-emerald-100/70 mb-6">Mencetak generasi bangsa yang unggul dalam ilmu pengetahuan dan teknologi (IPTEK), serta teguh dalam iman dan taqwa (IMTAQ).</p>
                </div>
                
                <div class="md:col-span-2">
                    <h4 class="text-white font-bold mb-6 uppercase tracking-widest text-xs">Navigasi</h4>
                    <ul class="space-y-3 text-sm font-medium text-emerald-100/80">
                        <li><a href="/profil" class="hover:text-amber-400 transition-colors">Profil Institusi</a></li>
                        <li><a href="/program" class="hover:text-amber-400 transition-colors">Program Studi</a></li>
                        <li><a href="/galeri" class="hover:text-amber-400 transition-colors">Galeri Dokumentasi</a></li>
                    </ul>
                </div>

                <div class="md:col-span-3">
                    <h4 class="text-white font-bold mb-6 uppercase tracking-widest text-xs">Operasional</h4>
                    <ul class="space-y-4 text-sm font-medium text-emerald-100/80">
                        <li class="flex items-center gap-3">
                            <span class="w-2 h-2 rounded-full bg-amber-400"></span> Senin - Jumat: 07.00 - 15.00
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="w-2 h-2 rounded-full bg-slate-500"></span> Sabtu - Minggu: Libur
                        </li>
                    </ul>
                </div>

                <div class="md:col-span-3">
                    <h4 class="text-white font-bold mb-6 uppercase tracking-widest text-xs">Kontak Kami</h4>
                    <ul class="space-y-4 text-sm font-medium text-emerald-100/80">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-amber-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <span class="leading-relaxed">Jl. Letjen Ibrahim Adjie No.219, Bogor Bar., Bogor</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-emerald-900/50 pt-8 flex justify-between items-center gap-4 text-xs font-medium text-emerald-100/50">
                <p>&copy; 2026 SMK Al-Azhar Plus Bogor. Hak cipta dilindungi.</p>
            </div>
        </div>
    </footer>

    <div id="modalGaleri" class="fixed inset-0 z-[100] hidden flex items-center justify-center p-4 sm:p-6 opacity-0 transition-opacity duration-300">
        <div class="absolute inset-0 bg-slate-900/90 backdrop-blur-md cursor-pointer" onclick="tutupModal()"></div>
        
        <div id="modalContent" class="relative w-full max-w-5xl bg-white rounded-3xl shadow-2xl overflow-hidden flex flex-col md:flex-row z-10 transform scale-95 transition-all duration-300 max-h-[90vh]">
            
            <button onclick="tutupModal()" class="absolute top-4 right-4 z-20 w-10 h-10 bg-black/50 hover:bg-black/70 text-white rounded-full flex items-center justify-center transition-colors backdrop-blur-sm border border-white/20">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>

            <div class="w-full md:w-[60%] h-64 md:h-auto bg-slate-100 relative flex items-center justify-center">
                <img id="modalImg" src="" alt="Foto Galeri" class="max-w-full max-h-full object-contain">
            </div>

            <div class="w-full md:w-[40%] p-8 md:p-10 flex flex-col justify-center overflow-y-auto bg-white">
                <span id="modalKategori" class="inline-block px-3 py-1 bg-emerald-100 text-emerald-800 font-bold text-[10px] uppercase tracking-widest rounded-lg mb-4 w-max border border-emerald-200"></span>
                <h2 id="modalJudul" class="text-2xl md:text-3xl font-black text-slate-900 mb-4 leading-tight tracking-tight"></h2>
                
                <div class="w-10 h-1 bg-amber-400 rounded-full mb-6"></div>
                
                <p id="modalDeskripsi" class="text-slate-600 text-sm md:text-base leading-relaxed font-medium whitespace-pre-line"></p>
            </div>
        </div>
    </div>

    <script>
    // SCRIPT FILTER
    window.filterGaleri = function(btnAktif, kategori) {
        console.log("Fungsi jalan nih! Kategori:", kategori); // Buat ngecek di console nanti
        
        try {
            let items = document.querySelectorAll('.item-galeri');
            
            // 1. Sortir gambar
            items.forEach(item => {
                if (kategori === 'semua' || item.dataset.kategori === kategori) {
                    item.style.display = 'block';
                    item.classList.remove('animate-fade-up');
                    void item.offsetWidth; // Pancing browser buat ngulang animasi
                    item.classList.add('animate-fade-up');
                } else {
                    item.style.display = 'none';
                }
            });

            // 2. Reset warna semua tombol
            let buttons = document.querySelectorAll('.filter-btn');
            buttons.forEach(btn => {
                btn.classList.remove('bg-emerald-700', 'text-white', 'shadow-md');
                btn.classList.add('bg-transparent', 'text-slate-500');
            });
            
            // 3. Ijoin tombol yang baru diklik
            btnAktif.classList.remove('bg-transparent', 'text-slate-500');
            btnAktif.classList.add('bg-emerald-700', 'text-white', 'shadow-md');
            
        } catch (error) {
            console.error("Waduh, ada yang nyangkut:", error);
        }
    };

    // SCRIPT MODAL (Ikut diglobalin biar aman)
    const modal = document.getElementById('modalGaleri');
    const modalContent = document.getElementById('modalContent');
    const body = document.body;

    window.bukaModal = function(fotoSrc, judul, kategori, deskripsi) {
        document.getElementById('modalImg').src = fotoSrc;
        document.getElementById('modalJudul').innerText = judul;
        document.getElementById('modalKategori').innerText = kategori;
        
        const descEl = document.getElementById('modalDeskripsi');
        descEl.innerText = deskripsi ? deskripsi : "Tidak ada detail tambahan untuk dokumentasi ini.";
        
        modal.classList.remove('hidden');
        setTimeout(() => {
            modal.classList.remove('opacity-0');
            modalContent.classList.remove('scale-95');
            modalContent.classList.add('scale-100');
        }, 10);
        
        body.style.overflow = 'hidden';
    };

    window.tutupModal = function() {
        modal.classList.add('opacity-0');
        modalContent.classList.remove('scale-100');
        modalContent.classList.add('scale-95');
        
        setTimeout(() => {
            modal.classList.add('hidden');
            body.style.overflow = 'auto';
        }, 300);
    };
</script>
</body>
</html>