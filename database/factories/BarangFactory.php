<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Barang;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jobs>
 */
class BarangFactory extends Factory
{
    protected $model = Barang::class;
     
    public function definition()
    {
        return [
            'jenis' => $this->faker->name,
            'kondisi' => $this->faker->name,
            'keterangan' => $this->faker->name,
            'kecacatan' => $this->faker->name,
            'jumlah' => $this->faker->numberBetween(1, 100),
            'gambar' => $this->faker->name,
        ];
    }
}
