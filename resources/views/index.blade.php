@extends('components.layout')

@section('title', 'Home')

@section('content')
    <div class="container mx-auto px-4 py-12">
        <!-- Hero Section -->
        <section class="mb-20">
            <h1 class="text-5xl font-bold mb-4">Welcome to My Portfolio</h1>
            <p class="text-xl text-gray-600 mb-8">Full-stack developer crafting beautiful web experiences</p>
            <button class="bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700">Get Started</button>
        </section>

        <!-- Featured Projects -->
        <section class="mb-20">
            <h2 class="text-4xl font-bold mb-12">Featured Projects</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach(['E-Commerce Platform', 'Task Manager App', 'Analytics Dashboard'] as $project)
                    <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition">
                        <h3 class="text-2xl font-bold mb-3">{{ $project }}</h3>
                        <p class="text-gray-600 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="text-blue-600 hover:text-blue-800 font-semibold">View Project →</a>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Skills Section -->
        <section class="mb-20">
            <h2 class="text-4xl font-bold mb-12">Skills & Technologies</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                @foreach(['Laravel', 'Vue.js', 'React', 'PHP', 'JavaScript', 'Tailwind CSS', 'MySQL', 'Git'] as $skill)
                    <div class="bg-blue-50 rounded-lg p-4 text-center">
                        <p class="font-semibold text-gray-800">{{ $skill }}</p>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- About Section -->
        <section class="mb-20 bg-gray-50 rounded-lg p-12">
            <h2 class="text-4xl font-bold mb-6">About Me</h2>
            <p class="text-lg text-gray-700 mb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p class="text-lg text-gray-700">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </section>

        <!-- Contact Section -->
        <section class="mb-20">
            <h2 class="text-4xl font-bold mb-8">Let's Connect</h2>
            <div class="flex gap-6">
                <a href="#" class="text-blue-600 hover:text-blue-800 text-lg font-semibold">GitHub</a>
                <a href="#" class="text-blue-600 hover:text-blue-800 text-lg font-semibold">LinkedIn</a>
                <a href="#" class="text-blue-600 hover:text-blue-800 text-lg font-semibold">Twitter</a>
            </div>
        </section>
    </div>
@endsection