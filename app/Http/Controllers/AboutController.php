<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Skill;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Certificate;

class AboutController extends Controller
{
    public function index()
    {
        $skills = Skill::orderBy('category')->get()->groupBy('category');
        $educations = Education::orderByDesc('start_year')->get();
        $experiences = Experience::with('projects.techstacks')->orderByDesc('start_date')->get();
        $certificates = Certificate::orderByDesc('issued_date')->get();

        return view('about', compact('skills', 'educations', 'experiences', 'certificates'));
    }
}