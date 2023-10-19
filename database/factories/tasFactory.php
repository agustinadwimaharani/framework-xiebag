<?php

namespace Database\Factories;

use App\Models\kategori;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\tas>
 */
class tasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'merk' => fake()->randomElement(['Selvia', 'Lulaby', 'Luvy', "Sherina", 'Xavier', "Yolaby"]),
            'warna' => fake()->randomElement(['Putih', 'Hitam', 'Abu-abu', "Pink", 'Ungu', "Coklat"]),
            'deskripsi' => fake()->randomElement(['Sempurnakan tampilanmu dengan tas ini!
            Cocok untuk dipadankan dengan berbagai macam look favoritmu!', 'Tampil gaya dengan mengenakan tas ini! Memiliki
            model yang trendi. Cocok untuk dipadankan dengan tampilan favoritmu sehari-hari!']),
            'stok' => fake()->randomDigit(),
            'harga' => fake()->randomElement(['250000', '1000000', '670000', "2500000", '4500000']),
            'kategori_id' => kategori::all()->random()->id,
        ];
    }
}
