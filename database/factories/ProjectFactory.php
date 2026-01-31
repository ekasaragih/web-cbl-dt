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
            // Generate nama mahasiswa atau nama kelompok acak
            'nama_mahasiswa' => $this->faker->randomElement(['Kelompok ', 'Mahasiswa ']) . $this->faker->name(),
            
            // Pertemuan 1 sampai 16
            'pertemuan_ke' => $this->faker->numberBetween(1, 16),
            
            // Deskripsi paragraf pendek
            'deskripsi' => $this->faker->paragraph(2),
            
            // Dummy file path (ini hanya string, file aslinya tidak benar-benar ada)
            // Nanti di view akan mengarah ke: storage/dummy-file.pdf
            'file_path' => 'dummy-file.pdf', 
            
            // Biar urutan latest() terlihat bedanya
            'created_at' => $this->faker->dateTimeBetween('-1 month', 'now'),
        ];
    }
}
