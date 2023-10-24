<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang;
use App\Models\JenisBarang;
use App\Models\KondisiBarang;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        KondisiBarang::factory()->create([
            'kondisi' => 'baik',
        ]);
        KondisiBarang::factory()->create([
            'kondisi' => 'layak',
        ]);
        KondisiBarang::factory()->create([
            'kondisi' => 'rusak',
        ]);

        JenisBarang::factory()->create([
            'jenis' => 'pakaian',
        ]);
        JenisBarang::factory()->create([
            'jenis' => 'handphone',
        ]);
        JenisBarang::factory()->create([
            'jenis' => 'buku',
        ]);


        Barang::factory(5)->create();
    }
}
