<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\Skill;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProjects = Project::with('techstacks')->featured()->latest()->take(3)->get();
        $skills = Skill::orderBy('category')->get();

        return view('home', compact('featuredProjects', 'skills'));
    }
}
