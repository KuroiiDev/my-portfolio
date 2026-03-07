<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $projects = Project::with('techstacks')->latest()->get();
        // $techstacks = Techstack::orderBy('name')->get();

        $projects = collect([
            (object) [
                'id' => 1,
                'title' => 'Portfolio Website',
                'description' => 'A responsive portfolio website built with Laravel and Vue.js',
                'image' => null,
                'techstacks' => collect([
                    (object) ['id' => 1, 'name' => 'Laravel'],
                    (object) ['id' => 2, 'name' => 'Vue.js'],
                    (object) ['id' => 3, 'name' => 'Tailwind CSS'],
                ]),
                'github_url' => 'https://github.com/user/portfolio',
                'live_url' => 'https://portfolio.com',
            ],
            (object) [
                'id' => 2,
                'title' => 'E-commerce Platform',
                'description' => 'Full-featured e-commerce application with payment integration',
                'image' => null,
                'techstacks' => collect([
                    (object) ['id' => 1, 'name' => 'Laravel'],
                    (object) ['id' => 4, 'name' => 'React'],
                    (object) ['id' => 5, 'name' => 'Stripe'],
                ]),
                'github_url' => 'https://github.com/user/ecommerce',
                'live_url' => null, // test nullable
            ],
            (object) [
                'id' => 3,
                'title' => 'Task Management App',
                'description' => 'Collaborative task management tool with real-time updates',
                'image' => null,
                'techstacks' => collect([
                    (object) ['id' => 6, 'name' => 'PHP'],
                    (object) ['id' => 2, 'name' => 'Vue.js'],
                    (object) ['id' => 7, 'name' => 'WebSocket'],
                ]),
                'github_url' => null, // test nullable
                'live_url' => 'https://tasks.com',
            ],
        ]);

        $techstacks = collect([
            (object) ['id' => 1, 'name' => 'Laravel'],
            (object) ['id' => 2, 'name' => 'Vue.js'],
            (object) ['id' => 3, 'name' => 'Tailwind CSS'],
            (object) ['id' => 4, 'name' => 'React'],
            (object) ['id' => 5, 'name' => 'Stripe'],
            (object) ['id' => 6, 'name' => 'PHP'],
            (object) ['id' => 7, 'name' => 'WebSocket'],
        ]);

        return view('project', compact('projects', 'techstacks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
