<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use App\Models\ProgressLog;
use Illuminate\Support\Facades\Auth;

class ProgressLogController extends Controller
{
    public function index(): Response
    {
        $userId = Auth::id();

        $logs = ProgressLog::with('training')
            ->where('user_id', $userId)
            ->get();

        return Inertia::render('ProgressLogs/Index', [
            'progressLogs' => $logs,
        ]);
    }
}
