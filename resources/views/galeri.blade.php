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

   @include('layouts.navbar')

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
                        <a href="https://www.instagram.com/al.azharplus/" class="w-8 h-8 rounded-full bg-green-900/80 flex items-center justify-center hover:bg-yellow-400 hover:text-green-950 transition-colors text-green-100">
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
                        <li><a href="https://wa.me/6281318690627" class="hover:text-yellow-400 transition-colors"> Info & Pendaftaran</a></li>
                    </ul>
                </div>

                <!-- Waktu Operasional -->
                <div class="md:col-span-3">
                    <h4 class="text-white font-bold mb-4 uppercase tracking-wider text-xs">Waktu Operasional</h4>
                    <ul class="space-y-3 text-xs font-medium text-green-100/80">
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-yellow-400"></span> Senin - Jumat: 07.00 - 14.00 WIB
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
                            <span class="leading-relaxed">+62 813-1869-0627</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-green-900/50 pt-6 flex justify-between items-center gap-4 text-xs font-medium text-green-100/60">
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