<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Education;
use App\Models\Experience;

class EducationExperienceSeeder extends Seeder
{
    public function run(): void
    {
        // ─── Education ───────────────────────────────────────
        Education::create([
            'school' => 'State Vocational High School 5 Surakarta',
            'major' => 'Software Engineering (RPL)',
            'degree' => 'Vocational',
            'start_year' => 2021,
            'end_year' => 2024,
            'description' => 'Studied foundational and advanced programming including basic programming logic, web development, API development, and mobile/Android application development.',
        ]);

        Education::create([
            'school' => 'Diponegoro University (UNDIP)',
            'major' => 'Computer Engineering (Tekkom)',
            'degree' => 'S1',
            'start_year' => 2024,
            'end_year' => null, // still ongoing
            'description' => 'Further developing technical skills with a focus on software engineering, sharpening full stack development expertise built since vocational school.',
        ]);

        // ─── Experience ──────────────────────────────────────

        // 1. Riffsys Periode 1 — 01 Mar 2023 - 30 Mei 2023
        Experience::create([
            'company' => 'PT. Riffsys Digital Media',
            'role' => 'Junior Programmer',
            'type' => 'Internship',
            'start_date' => '2023-03-01',
            'end_date' => '2023-05-30',
            'is_current' => false,
            'description' => 'First internship period. Worked on web programming, NAS server setup, and Linux server programming using Raspberry Pi. Gained hands-on experience in server management and backend development.',
        ]);

        // 2. Riffsys Periode 2 — 04 Jul 2023 - 29 Sep 2023
        Experience::create([
            'company' => 'PT. Riffsys Digital Media',
            'role' => 'Junior Programmer',
            'type' => 'Internship',
            'start_date' => '2023-07-04',
            'end_date' => '2023-09-29',
            'is_current' => false,
            'description' => 'Second internship period. Expanded skills in Python programming using MediaPipe, TensorFlow, and TKInter for AI/ML applications. Also worked on web development and Android application programming.',
        ]);

        // 3. PT. Aba Robotika — Aug 2024
        Experience::create([
            'company' => 'PT. Aba Robotika',
            'role' => 'Junior Programmer',
            'type' => 'Internship',
            'start_date' => '2024-08-01',
            'end_date' => '2024-08-31',
            'is_current' => false,
            'description' => 'Developed a Flutter-based monitoring application for an automated excavator system. The app consumed a provided API and displayed real-time operational reports recorded twice per second.',
        ]);

        // 4. UNDIP Robotic Development Center — Jan 2025
        Experience::create([
            'company' => 'UNDIP Robotic Development Center — Bandhayudha',
            'role' => 'Programmer',
            'type' => 'Internship',
            'start_date' => '2025-01-01',
            'end_date' => '2025-01-31',
            'is_current' => false,
            'description' => 'Handled the programming side of robot development and automated movement system creation within the university\'s internal robotics division.',
        ]);

        // 5. PT. Berkah — Sept 2025 - Dec 2025
        Experience::create([
            'company' => 'PT. Berkah',
            'role' => 'Assistant Full Stack Programmer',
            'type' => 'Internship',
            'start_date' => '2025-09-01',
            'end_date' => '2025-12-14',
            'is_current' => false,
            'description' => 'Developed a full stack web management system covering tender management, project tracking, raw material management, and project timeline features.',
        ]);

    }
}
