<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Techstack;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('techstacks')->latest()->get();
        $techstacks = Techstack::orderBy('name')->get();

        return view('project', compact('projects', 'techstacks'));
    }
}

