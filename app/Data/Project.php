<?php

namespace App\Data;

class Project
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'experience_id' => null,
                'title' => 'Encryptour',
                'description' => 'A web profile and student database for the 2024 batch of Computer Engineering at Diponegoro University. Features student profiles, biodata, and batch information.',
                'image' => 'encryptour.png',
                'github_url' => null,
                'live_url' => 'https://encryptour-web.vercel.app/',
                'is_featured' => true,
                'techstack_ids' => [1, 8, 2, 5, 6, 11],
            ],
            [
                'id' => 2,
                'experience_id' => 5, // PT. Berkah
                'title' => 'Berkah App',
                'description' => 'A full stack web management system covering raw material management, financial tracking, project & tender management, timeline, and versioning.',
                'image' => 'berkah-app.png',
                'github_url' => null,
                'live_url' => null,
                'is_featured' => true,
                'techstack_ids' => [2, 6, 5, 10],
            ],
            [
                'id' => 3,
                'experience_id' => 3, // PT. Aba Robotika
                'title' => 'SNC Mobile',
                'description' => 'A mobile application for monitoring automated excavator statistics in real-time. Consumes a provided API and displays operational reports recorded twice per second.',
                'image' => null,
                'github_url' => null,
                'live_url' => null,
                'is_featured' => false,
                'techstack_ids' => [3, 4],
            ],
            [
                'id' => 4,
                'experience_id' => null,
                'title' => 'Warnet.Ku',
                'description' => 'A web-based internet cafe management simulation with live data updates. Simulates billing, session tracking, and real-time data refresh.',
                'image' => null,
                'github_url' => 'https://github.com/KuroiiDev/TA_PRODGAS_MAITSAM-KADZIM_21120124140161_Warnet.Ku.git',
                'live_url' => null,
                'is_featured' => false,
                'techstack_ids' => [2, 6, 5, 9, 10],
            ],
            [
                'id' => 5,
                'experience_id' => null,
                'title' => 'Nazanin App',
                'description' => 'A raw material and batik motif management system developed for Nazanin Batik Factory. Handles inventory tracking and motif cataloging.',
                'image' => null,
                'github_url' => 'https://github.com/KuroiiDev/nazanin.git',
                'live_url' => null,
                'is_featured' => false,
                'techstack_ids' => [1, 9, 2, 5, 6],
            ],
            [
                'id' => 6,
                'experience_id' => null,
                'title' => 'Infernal Web',
                'description' => 'A static website for a motor club named Infernal. Built as a certificate assignment, showcasing front-end fundamentals.',
                'image' => 'infernal-web.png',
                'github_url' => 'https://github.com/KuroiiDev/InfernalWeb.git',
                'live_url' => null,
                'is_featured' => false,
                'techstack_ids' => [7, 6, 5],
            ],
            [
                'id' => 7,
                'experience_id' => null,
                'title' => 'Cepu-Doc',
                'description' => 'A mobile application for online doctor consultation and complaint reporting, developed as a vocational school project.',
                'image' => null,
                'github_url' => 'https://github.com/KuroiiDev/Cepu-Doc.git',
                'live_url' => null,
                'is_featured' => false,
                'techstack_ids' => [3, 4],
            ],
            [
                'id' => 8,
                'experience_id' => null,
                'title' => 'Geeks User',
                'description' => 'A mobile book borrowing system for users, developed as a vocational school final project. Allows users to browse, borrow, and return books online.',
                'image' => 'geeks-user.png',
                'github_url' => 'https://github.com/KuroiiDev/geeks_forUser.git',
                'live_url' => null,
                'is_featured' => true,
                'techstack_ids' => [3, 4],
            ],
            [
                'id' => 9,
                'experience_id' => null,
                'title' => 'Geeks Admin',
                'description' => 'A mobile book borrowing management system for administrators, developed as a vocational school final project. Handles book catalog, user management, and borrowing records.',
                'image' => 'geeks-admin.png',
                'github_url' => 'https://github.com/KuroiiDev/geeks_forAdmin.git',
                'live_url' => null,
                'is_featured' => false,
                'techstack_ids' => [3, 4],
            ],
            [
                'id' => 10,
                'experience_id' => null,
                'title' => 'Geeks API',
                'description' => 'A RESTful API backend for the Geeks online book borrowing system, developed as a vocational school final project. Powers both the user and admin mobile apps.',
                'image' => 'geeks-api.png',
                'github_url' => 'https://github.com/KuroiiDev/geeks_database.git',
                'live_url' => null,
                'is_featured' => false,
                'techstack_ids' => [1, 9, 2, 5, 6],
            ],
        ];
    }

    public static function withTechstacks(): array
    {
        return collect(self::all())
            ->map(fn($p) => [
                ...$p,
                'techstacks' => Techstack::findMany($p['techstack_ids']),
            ])
            ->toArray();
    }

    public static function featured(): array
    {
        return collect(self::withTechstacks())
            ->filter(fn($p) => $p['is_featured'])
            ->values()
            ->toArray();
    }

    public static function find(int $id): ?array
    {
        $project = collect(self::all())->firstWhere('id', $id);
        if (!$project)
            return null;

        return [
            ...$project,
            'techstacks' => Techstack::findMany($project['techstack_ids']),
        ];
    }

    public static function byExperience(int $experienceId): array
    {
        return collect(self::withTechstacks())
            ->filter(fn($p) => $p['experience_id'] === $experienceId)
            ->values()
            ->toArray();
    }
}