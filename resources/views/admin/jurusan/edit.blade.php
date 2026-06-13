<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jurusan - Admin SMK Al-Azhar</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('images/logo-alza.png') }}">
    <style> body { font-family: 'Inter', sans-serif; } </style>
</head>
<body class="bg-slate-50 p-8">

    <div class="max-w-2xl mx-auto">
        <div class="mb-8">
            <h1 class="text-3xl font-extrabold text-slate-800">Edit Jurusan: <span class="text-green-700">{{ $jurusan->singkatan }}</span></h1>
            <p class="text-slate-500 mt-1">Perbarui informasi untuk program keahlian ini.</p>
        </div>

        <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100">
            <form action="/admin/jurusan/{{ $jurusan->id }}/update" method="POST">
                @csrf
                
                <div class="mb-5">
                    <label class="block text-sm font-bold text-slate-700 mb-2">Nama Program Keahlian</label>
                    <input type="text" name="nama" value="{{ $jurusan->nama }}" class="w-full border border-slate-300 rounded-xl p-3 focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition-all" required>
                </div>

                <div class="mb-5">
                    <label class="block text-sm font-bold text-slate-700 mb-2">Singkatan (Misal: DKV)</label>
                    <input type="text" name="singkatan" value="{{ $jurusan->singkatan }}" class="w-full border border-slate-300 rounded-xl p-3 focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition-all uppercase" required>
                </div>

                <div class="mb-8">
                    <label class="block text-sm font-bold text-slate-700 mb-2">Deskripsi Singkat</label>
                    <textarea name="deskripsi" rows="5" class="w-full border border-slate-300 rounded-xl p-3 focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition-all leading-relaxed" required>{{ $jurusan->deskripsi }}</textarea>
                </div>

                <div class="flex items-center gap-4 pt-4 border-t border-slate-100">
                    <button type="submit" class="bg-green-700 hover:bg-green-800 text-white font-bold py-3 px-8 rounded-xl shadow-md transition-all hover:-translate-y-0.5">
                        Simpan Perubahan
                    </button>
                    <a href="/admin/jurusan" class="bg-slate-100 hover:bg-slate-200 text-slate-600 font-bold py-3 px-8 rounded-xl transition-all">
                        Batal
                    </a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>