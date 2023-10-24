<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\KondisiBarang;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jobs>
 */
class KondisiBarangFactory extends Factory
{
    protected $model = KondisiBarang::class;
     
    public function definition()
    {
        return [
            'kondisi' => $this->faker->name,
        ];
    }
}
