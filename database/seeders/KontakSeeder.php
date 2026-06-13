<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kontak;

class KontakSeeder extends Seeder
{
    public function run(): void
    {
        // Hapus data lama biar nggak dobel
        Kontak::truncate();

        Kontak::create([
            'alamat' => 'Al Azhar Plus, CQ96+VQ7, Jl. Letjen Ibrahim Adjie No.219, RT.06/RW.03, Sindangbarang, Kec. Bogor Bar., Kota Bogor, Jawa Barat 16117',
            'email' => 'info@smkalazharplus.sch.id',
            'telepon' => '(0251) 123456',
            'whatsapp' => '081234567890',
            'instagram' => '@smkalazharplus',
            'maps_iframe' => 'https://maps.google.com/maps?q=Al%20Azhar%20Plus,%20Jl.%20Letjen%20Ibrahim%20Adjie%20No.219,%20Bogor&t=&z=16&ie=UTF8&iwloc=&output=embed'
        ]);
    }
}