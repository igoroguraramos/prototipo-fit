<?php

namespace App\Http\Controllers;

use App\Models\NutritionPlan;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class NutritionPlanController extends Controller
{
    public function index(): Response
    {
        $plans = NutritionPlan::all();
        return Inertia::render('NutritionPlans/Index', [
            'nutritionPlans' => $plans,
        ]);
    }

    public function create(): Response
    {
        return Inertia::render('NutritionPlans/Create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        NutritionPlan::create($validated);

        return redirect()->route('nutrition-plans.index')->with('success', 'Plano de nutrição criado com sucesso!');
    }

    public function edit(NutritionPlan $nutritionPlan): Response
    {
        return Inertia::render('NutritionPlans/Edit', [
            'nutritionPlan' => $nutritionPlan,
        ]);
    }

    public function update(Request $request, NutritionPlan $nutritionPlan)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $nutritionPlan->update($validated);

        return redirect()->route('nutrition-plans.index')->with('success', 'Plano de nutrição atualizado com sucesso!');
    }

    public function destroy(NutritionPlan $nutritionPlan)
    {
        $nutritionPlan->delete();

        return redirect()->route('nutrition-plans.index')->with('success', 'Plano de nutrição excluído com sucesso!');
    }
}
