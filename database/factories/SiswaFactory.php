<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'kelas_id' => mt_rand(1, 3),
            'jurusan_id' => mt_rand(1, 3)
        ];
    }
}
