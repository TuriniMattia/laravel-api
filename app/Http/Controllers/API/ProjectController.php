<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $results = Project::with('technologies', 'type')->paginate();
        return response()->json([
            'results' => $results
        ]);
    }
}
