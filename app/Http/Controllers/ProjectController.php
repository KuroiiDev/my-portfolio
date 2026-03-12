<?php

namespace App\Http\Controllers;

use App\Data\Project;
use App\Data\Techstack;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::withTechstacks();
        $techstacks = Techstack::all();

        return view('project', compact('projects', 'techstacks'));
    }
}