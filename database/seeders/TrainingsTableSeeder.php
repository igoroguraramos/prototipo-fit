<?php

namespace Database\Seeders;

use App\Models\Training;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TrainingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Training::insert([
            ['title' => 'Supino Reto', 'description' => 'Exercício para peito', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Supino Inclinado', 'description' => 'Variante para peito superior', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Agachamento', 'description' => 'Exercício para pernas', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Levantamento Terra', 'description' => 'Exercício para costas e pernas', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Rosca Direta', 'description' => 'Exercício para bíceps', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
