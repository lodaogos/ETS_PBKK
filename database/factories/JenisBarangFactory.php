<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\JenisBarang;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jobs>
 */
class JenisBarangFactory extends Factory
{
    protected $model = JenisBarang::class;
     
    public function definition()
    {
        return [
            'jenis' => $this->faker->name,
        ];
    }
}
