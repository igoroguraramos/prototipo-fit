<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use App\Models\Training;
use Illuminate\Http\Request;

class TrainingController extends Controller
{

    public function index(): Response
    {
        $trainings = Training::all();
        return Inertia::render('Trainings/Index', [
            'trainings' => $trainings,
        ]);
    }

    public function create(): Response
    {
        return Inertia::render('Trainings/Create');
    }

    public function edit(Training $training): Response
    {
        return Inertia::render('Trainings/Edit', [
            'training' => $training,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Training::create($validated);

        return redirect()->route('trainings.index')->with('success', 'Training criado com sucesso!');
    }

    public function update(Request $request, Training $training)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $training->update($validated);

        return redirect()->route('trainings.index')->with('success', 'Training atualizado com sucesso!');
    }

    public function destroy(Training $training)
    {
        $training->delete();

        return redirect()->route('trainings.index')->with('success', 'Training excluído com sucesso!');
    }
}
