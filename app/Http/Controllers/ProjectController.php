<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a single project
     */
    public function show($id)
    {
        $project = Project::published()->findOrFail($id);
        
        return view('projects.single', compact('project'));
    }
}