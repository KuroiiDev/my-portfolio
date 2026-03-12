<?php

namespace App\Http\Controllers;

use App\Data\Project;
use App\Data\Skill;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProjects = Project::featured();
        $skills           = Skill::all();

        return view('home', compact('featuredProjects', 'skills'));
    }
}