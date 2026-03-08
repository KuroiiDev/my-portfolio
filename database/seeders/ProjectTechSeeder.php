<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Techstack;
use App\Models\Experience;
use App\Models\Project;

class ProjectTechSeeder extends Seeder
{
    public function run(): void
    {
        // ─── Techstacks ──────────────────────────────────────
        $techstacks = [
            // Backend
            ['name' => 'Laravel', 'category' => 'Backend'],
            ['name' => 'PHP', 'category' => 'Backend'],
            // Mobile
            ['name' => 'Flutter', 'category' => 'Mobile'],
            ['name' => 'Dart', 'category' => 'Mobile'],
            // Frontend
            ['name' => 'JavaScript', 'category' => 'Frontend'],
            ['name' => 'CSS', 'category' => 'Frontend'],
            ['name' => 'HTML', 'category' => 'Frontend'],
            ['name' => 'Tailwind CSS', 'category' => 'Frontend'],
            ['name' => 'Bootstrap', 'category' => 'Frontend'],
            ['name' => 'Ajax', 'category' => 'Frontend'],
            // Tools
            ['name' => 'Vercel', 'category' => 'Tools'],
        ];

        $ts = [];
        foreach ($techstacks as $t) {
            $ts[$t['name']] = Techstack::create([...$t, 'icon' => null]);
        }

        // ─── Experience IDs ──────────────────────────────────
        $berkah = Experience::where('company', 'PT. Berkah')->first();
        $aba = Experience::where('company', 'PT. Aba Robotika')->first();

        // ─── Projects ────────────────────────────────────────

        $encryptour = Project::create([
            'experience_id' => null,
            'title' => 'Encryptour',
            'description' => 'A web profile and student database for the 2024 batch of Computer Engineering at Diponegoro University. Features student profiles, biodata, and batch information.',
            'image' => 'encryptour.png',
            'github_url' => null,
            'live_url' => 'https://encryptour-web.vercel.app/',
            'is_featured' => true,
        ]);
        $encryptour->techstacks()->attach([
            $ts['Laravel']->id,
            $ts['Tailwind CSS']->id,
            $ts['PHP']->id,
            $ts['JavaScript']->id,
            $ts['CSS']->id,
            $ts['Vercel']->id,
        ]);

        $berkahApp = Project::create([
            'experience_id' => $berkah?->id,
            'title' => 'Berkah App',
            'description' => 'A full stack web management system covering raw material management, financial tracking, project & tender management, timeline, and versioning.',
            'image' => 'berkah-app.png',
            'github_url' => null,
            'live_url' => null,
            'is_featured' => true,
        ]);
        $berkahApp->techstacks()->attach([
            $ts['PHP']->id,
            $ts['CSS']->id,
            $ts['JavaScript']->id,
            $ts['Ajax']->id,
        ]);

        $snc = Project::create([
            'experience_id' => $aba?->id,
            'title' => 'SNC Mobile',
            'description' => 'A mobile application for monitoring automated excavator statistics in real-time. Consumes a provided API and displays operational reports recorded twice per second.',
            'image' => null,
            'github_url' => null,
            'live_url' => null,
            'is_featured' => false,
        ]);
        $snc->techstacks()->attach([
            $ts['Flutter']->id,
            $ts['Dart']->id,
        ]);

        $warnet = Project::create([
            'experience_id' => null,
            'title' => 'Warnet.Ku',
            'description' => 'A web-based internet cafe management simulation with live data updates. Simulates billing, session tracking, and real-time data refresh.',
            'image' => null,
            'github_url' => 'https://github.com/KuroiiDev/TA_PRODGAS_MAITSAM-KADZIM_21120124140161_Warnet.Ku.git',
            'live_url' => null,
            'is_featured' => false,
        ]);
        $warnet->techstacks()->attach([
            $ts['PHP']->id,
            $ts['CSS']->id,
            $ts['JavaScript']->id,
            $ts['Bootstrap']->id,
            $ts['Ajax']->id,
        ]);

        $nazanin = Project::create([
            'experience_id' => null,
            'title' => 'Nazanin App',
            'description' => 'A raw material and batik motif management system developed for Nazanin Batik Factory. Handles inventory tracking and motif cataloging.',
            'image' => null,
            'github_url' => 'https://github.com/KuroiiDev/nazanin.git',
            'live_url' => null,
            'is_featured' => false,
        ]);
        $nazanin->techstacks()->attach([
            $ts['Laravel']->id,
            $ts['Bootstrap']->id,
            $ts['PHP']->id,
            $ts['JavaScript']->id,
            $ts['CSS']->id,
        ]);

        $infernal = Project::create([
            'experience_id' => null,
            'title' => 'Infernal Web',
            'description' => 'A static website for a motor club named Infernal. Built as a certificate assignment, showcasing front-end fundamentals.',
            'image' => 'infernal-web.png',
            'github_url' => 'https://github.com/KuroiiDev/InfernalWeb.git',
            'live_url' => null,
            'is_featured' => false,
        ]);
        $infernal->techstacks()->attach([
            $ts['HTML']->id,
            $ts['CSS']->id,
            $ts['JavaScript']->id,
        ]);

        $cepuDoc = Project::create([
            'experience_id' => null,
            'title' => 'Cepu-Doc',
            'description' => 'A mobile application for online doctor consultation and complaint reporting, developed as a vocational school project.',
            'image' => null,
            'github_url' => 'https://github.com/KuroiiDev/Cepu-Doc.git',
            'live_url' => null,
            'is_featured' => false,
        ]);
        $cepuDoc->techstacks()->attach([
            $ts['Flutter']->id,
            $ts['Dart']->id,
        ]);

        $geeksUser = Project::create([
            'experience_id' => null,
            'title' => 'Geeks User',
            'description' => 'A mobile book borrowing system for users, developed as a vocational school final project. Allows users to browse, borrow, and return books online.',
            'image' => 'geeks-user.png',
            'github_url' => 'https://github.com/KuroiiDev/geeks_forUser.git',
            'live_url' => null,
            'is_featured' => true,
        ]);
        $geeksUser->techstacks()->attach([
            $ts['Flutter']->id,
            $ts['Dart']->id,
        ]);

        $geeksAdmin = Project::create([
            'experience_id' => null,
            'title' => 'Geeks Admin',
            'description' => 'A mobile book borrowing management system for administrators, developed as a vocational school final project. Handles book catalog, user management, and borrowing records.',
            'image' => 'geeks-admin.png',
            'github_url' => 'https://github.com/KuroiiDev/geeks_forAdmin.git',
            'live_url' => null,
            'is_featured' => false,
        ]);
        $geeksAdmin->techstacks()->attach([
            $ts['Flutter']->id,
            $ts['Dart']->id,
        ]);

        $geeksApi = Project::create([
            'experience_id' => null,
            'title' => 'Geeks API',
            'description' => 'A RESTful API backend for the Geeks online book borrowing system, developed as a vocational school final project. Powers both the user and admin mobile apps.',
            'image' => 'geeks-api.png',
            'github_url' => 'https://github.com/KuroiiDev/geeks_database.git',
            'live_url' => null,
            'is_featured' => false,
        ]);
        $geeksApi->techstacks()->attach([
            $ts['Laravel']->id,
            $ts['Bootstrap']->id,
            $ts['PHP']->id,
            $ts['JavaScript']->id,
            $ts['CSS']->id,
        ]);
    }
}
