<?php

namespace Database\Seeders;

use App\Models\NutritionPlan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NutritionPlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NutritionPlan::insert([
            [
                'name' => 'Plano Hipercalórico',
                'description' => 'Plano alimentar focado em ganho de massa muscular.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Plano Low Carb',
                'description' => 'Plano para redução de gordura corporal.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
