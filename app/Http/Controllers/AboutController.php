<?php

namespace App\Http\Controllers;

use App\Data\Skill;
use App\Data\Education;
use App\Data\Experience;
use App\Data\Certificate;

class AboutController extends Controller
{
    public function index()
    {
        $skills = Skill::groupedByCategory();
        $educations = Education::all();
        $experiences = Experience::withProjects();
        $certificates = Certificate::all();

        return view('about', compact('skills', 'educations', 'experiences', 'certificates'));
    }
}