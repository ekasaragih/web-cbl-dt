<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_mahasiswa' => $this->faker->name(),
            'email' => $this->faker->userName . '@kampus.ac.id',
            'pertemuan_ke' => $this->faker->numberBetween(1, 16),
            'deskripsi' => $this->faker->paragraph(2),
            'URL' => 'https://drive.google.com/file/d/' . $this->faker->regexify('[A-Za-z0-9_-]{25,40}'),
            'nilai' => $this->faker->numberBetween(1, 100),
            'created_at' => $this->faker->dateTimeBetween('-1 month', 'now'),
        ];
    }
}
